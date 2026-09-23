<?php
declare(strict_types=1);

session_start();

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/database.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/mailer.php';

$pageTitle = 'Create Account | Discover MBA';
$metaDescription = 'Create your Discover MBA account.';

$pageCss = [
    'swiper-bundle.min.css',
    'common.css',
    'login.css',
    'registration-validation.css',
];

$pageJs = [
    'swiper-bundle.min.js',
    'registration.js',
];

$authenicationRequired = false;

if (isPostRequest()) {
    $name = trim((string)($_POST['name'] ?? ''));
    $email = mb_strtolower(trim((string)($_POST['email'] ?? '')));
    $phone = trim((string)($_POST['phone'] ?? ''));
    $educationLevel = trim((string)($_POST['education_level'] ?? ''));
    $password = (string)($_POST['password'] ?? '');
    $confirmPassword = (string)($_POST['password_confirmation'] ?? '');
    $terms = isset($_POST['terms']) && $_POST['terms'] === '1';
    $csrf = $_POST['csrf_token'] ?? null;

    if (!verifyCsrfToken(is_string($csrf) ? $csrf : null)) {
        jsonResponse([
            'success' => false,
            'message' => 'Your session has expired. Please refresh the page and try again.',
        ], 419);
    }

    $fieldErrors = [];

    if ($name === '') {
        $fieldErrors['name'] = 'Please enter your full name.';
    } elseif (mb_strlen($name) < 2) {
        $fieldErrors['name'] = 'Name must contain at least 2 characters.';
    } elseif (mb_strlen($name) > 100) {
        $fieldErrors['name'] = 'Name cannot exceed 100 characters.';
    } elseif (!preg_match("/^[A-Za-zÀ-ÿ]+(?:[\s'-][A-Za-zÀ-ÿ]+)*$/u", $name)) {
        $fieldErrors['name'] = 'Please enter a valid name.';
    }

    if ($email === '') {
        $fieldErrors['email'] = 'Please enter your email address.';
    } elseif (mb_strlen($email) > 150) {
        $fieldErrors['email'] = 'Email address cannot exceed 150 characters.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $fieldErrors['email'] = 'Please enter a valid email address.';
    } elseif (isDisposableEmail($email)) {
        $fieldErrors['email'] = 'Disposable email addresses are not allowed.';
    }

    if ($phone !== '' && !preg_match('/^[0-9]{10}$/', $phone)) {
        $fieldErrors['phone'] = 'Please enter a valid 10-digit mobile number.';
    } elseif ($phone !== '' && !preg_match('/^[6-9]/', $phone)) {
        $fieldErrors['phone'] = 'Number not valid.';
    }

    $allowedEducationLevels = [
        'school',
        'undergraduate',
        'postgraduate',
        'working_professional',
        'other',
    ];

    if ($educationLevel === '') {
        $fieldErrors['education_level'] = 'Please select your education level.';
    } elseif (!in_array($educationLevel, $allowedEducationLevels, true)) {
        $fieldErrors['education_level'] = 'Please select a valid education level.';
    }

    if ($password === '') {
        $fieldErrors['password'] = 'Please enter a password.';
    } elseif (strlen($password) < 8) {
        $fieldErrors['password'] = 'Password must contain at least 8 characters.';
    } elseif (strlen($password) > 128) {
        $fieldErrors['password'] = 'Password cannot exceed 128 characters.';
    } elseif (preg_match('/\s/', $password)) {
        $fieldErrors['password'] = 'Password cannot contain spaces.';
    } elseif (!preg_match('/[A-Z]/', $password)) {
        $fieldErrors['password'] = 'Password must contain at least one uppercase letter.';
    } elseif (!preg_match('/[a-z]/', $password)) {
        $fieldErrors['password'] = 'Password must contain at least one lowercase letter.';
    } elseif (!preg_match('/[0-9]/', $password)) {
        $fieldErrors['password'] = 'Password must contain at least one number.';
    }

    if ($confirmPassword === '') {
        $fieldErrors['confirm_password'] = 'Please confirm your password.';
    } elseif ($password !== $confirmPassword) {
        $fieldErrors['confirm_password'] = 'Passwords do not match.';
    }

    if (!$terms) {
        $fieldErrors['terms'] = 'Please accept the communication consent.';
    }

    if ($fieldErrors) {
        jsonResponse([
            'success' => false,
            'fieldErrors' => $fieldErrors,
            'message' => 'Please correct the highlighted fields.',
        ], 422);
    }

    if (IS_PRODUCTION) {
        $clientIp = (string)($_SERVER['REMOTE_ADDR'] ?? 'unknown');

        try {
            $ipLimitExceeded = registrationRateLimitExceeded(
                $pdo,
                registrationRateLimitKey('ip', $clientIp)
            );
            $emailLimitExceeded = registrationRateLimitExceeded(
                $pdo,
                registrationRateLimitKey('email', $email)
            );
        } catch (PDOException $e) {
            error_log('Registration rate-limit check failed: ' . $e->getMessage());
            jsonResponse([
                'success' => false,
                'message' => 'Registration is temporarily unavailable. Please try again later.',
            ], 503);
        }

        if ($ipLimitExceeded || $emailLimitExceeded) {
            jsonResponse([
                'success' => false,
                'message' => 'Too many registration attempts. Please try again in 5 minutes.',
            ], 429);
        }
    }

    $stmt = $pdo->prepare(
        'SELECT id
         FROM users
         WHERE email = ?
         LIMIT 1'
    );
    $stmt->execute([$email]);
    $existingUser = $stmt->fetch();

    if ($existingUser) {
        jsonResponse([
            'success' => false,
            'fieldErrors' => [
                'email' => 'This email address is already registered. Please log in.',
            ],
            'message' => 'Email already registered.',
        ], 409);
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $verificationToken = bin2hex(random_bytes(32));
    $verificationExpires = date('Y-m-d H:i:s', time() + VERIFICATION_TOKEN_TTL);

    $stmt = $pdo->prepare(
        'INSERT INTO users
            (
                name,
                email,
                phone,
                education_level,
                password,
                communication_consent,
                email_verification_token,
                email_verification_expires
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
    );

    try {
        $stmt->execute([
            $name,
            $email,
            $phone !== '' ? $phone : null,
            $educationLevel,
            $passwordHash,
            $terms ? 1 : 0,
            $verificationToken,
            $verificationExpires,
        ]);
    } catch (PDOException $e) {
        if ($e->getCode() === '23000') {
            jsonResponse([
                'success' => false,
                'fieldErrors' => [
                    'email' => 'This email address is already registered. Please log in.',
                ],
                'message' => 'Email already registered.',
            ], 409);
        }

        throw $e;
    }

    $verifyUrl = APP_BASE_URL .
        '/verify-email.php?token=' .
        urlencode($verificationToken);

    if (!sendVerificationEmail($email, $name, $verifyUrl)) {
        error_log("Verification email failed for {$email}");

        jsonResponse([
            'success' => false,
            'completed' => true,
            'message' => 'Your account was created, but we could not send the verification email. Please contact support.',
        ], 500);
    }

    $_SESSION['registration_email'] = $email;

    jsonResponse([
        'success' => true,
        'message' => 'Registration successful. Please check your email to verify your account.',
        'redirect' => APP_BASE_PATH . '/registration-success.php',
    ]);
}

$csrfToken = csrfToken();

require __DIR__ . '/includes/head.php';

?>
        <main>
            <section class="authPage">

                <!-- ===================== LEFT: SIGN IN FORM ===================== -->
                <div class="authPage__form">
                    <div class="authPage__formInner">
                        <div class="admin-logo">
                            <a class="site-header__logo-link"
                                href="./index.php"
                                aria-label="MBA 360 Home">
                                <img class="site-header__logo"
                                    src="./discovermba.webp"
                                    alt="MBA 360" width="300" height="79"
                                    loading="eager">
                            </a>
                        </div>

                        <h1 class="authPage__heading">Create your account</h1>
                        <p class="authPage__subtext">Already have an account? <a
                                href="./member-login.php"
                                class="authPage__link">Log in</a></p>

                        <div id="registrationResponse"
                            class="registrationResponse"
                            role="status"
                            aria-live="polite"
                            hidden></div>

                        <form id="registrationForm" class="authPage__formFields"
                            action=""
                            method="POST" novalidate>
                            <input type="hidden" name="csrf_token"
                                value="<?= e($csrfToken) ?>" autocomplete="off">

                            <div class="formGroup">
                                <!-- <label for="name">Full Name <span
                                        class="formGroup__req">*</span></label> -->
                                <div class="formGroup__inputWrap">
                                    <input type="text" id="name" name="name"
                                        placeholder="Enter your full name"
                                         maxlength="100"
                                         aria-describedby="nameError"
                                       >
                                    <span class="formGroup__requiredStar"
                                        >*</span>
                                    <svg class="formGroup__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true">

                                        <circle cx="12" cy="7" r="4"></circle>
                                        <path
                                            d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"></path>

                                    </svg>
                                </div>
                                <div class="formGroup__error"
                                    id="nameError"></div>
                            </div>

                            <div class="formGroup">
                                <!-- <label for="loginEmail">Email Address <span
                                        class="formGroup__req">*</span></label> -->
                                <div class="formGroup__inputWrap">
                                    <input type="email" id="loginEmail"
                                        name="email"
                                        placeholder="Enter your email"
                                        autocomplete="email">
                                    <span class="formGroup__requiredStar"
                                        >*</span>
                                    <svg class="formGroup__icon"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true">
                                        <rect x="2" y="4" width="20" height="16"
                                            rx="2" /><path d="m22 6-10 7L2 6" />
                                    </svg>
                                </div>
                                <div class="formGroup__error"
                                    id="emailError"></div>
                            </div>

                            <div class="formGroup">
                                <!-- <label for="phone">Phone Number <span
                                        class="formGroup__optional">(Optional)</span></label> -->
                                <div class="formGroup__inputWrap">
                                    <input type="tel" id="phone" name="phone"
                                        placeholder="Enter your phone number (optional)"
                                         maxlength="10"
                                         inputmode="numeric"
                                         aria-describedby="phoneError">
                                    <svg class="formGroup__icon"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true">
                                        <path
                                            d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.6A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.5 2.1L8 9.7a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.7 2Z" />
                                    </svg>
                                </div>
                                <div class="formGroup__error"
                                    id="phoneError"></div>
                            </div>

                            <!-- Studying In — custom select (react-select style hooks) -->
                            <div class="formGroup mt-1">
                                <div
                                    class="careers_register_select_card studyin_modal white_bg"
                                    id="studyingInSelect">
                                    <div class="css-b62m3t-container">
                                        <span id="react-select-2-live-region"
                                            class="css-7pg0cj-a11yText"></span>

                                        <div class="css-8rmoi2-control"
                                            id="studyingInControl"
                                            role="combobox" tabindex="0"
                                            aria-haspopup="listbox"
                                            aria-expanded="false"
                                            aria-controls="studyingInMenu"
                                            aria-labelledby="studyingInFloatLabel">
                                            <div class="css-lagbch">
                                                <div
                                                    class="css-1jqq78o-placeholder"
                                                    id="studyingInPlaceholder">Select
                                                    an option</div>
                                            </div>
                                            <div class="css-1wy0on6">
                                                <!-- <span
                                                    class="css-1uei4ir-indicatorSeparator"></span> -->
                                                <div
                                                    class="css-4vyd02-indicatorContainer"
                                                    aria-hidden="true">
                                                    <svg stroke="currentColor"
                                                        fill="currentColor"
                                                        stroke-width="0"
                                                        viewBox="0 0 24 24"
                                                        height="1em" width="1em"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="none"
                                                            d></path><path
                                                            d="M7 10l5 5 5-5H7z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="css-select-menu"
                                            id="studyingInMenu" role="listbox"
                                            aria-labelledby="studyingInFloatLabel"
                                            hidden>
                                            <li role="option" tabindex="-1"
                                                data-value="school">School</li>
                                            <li role="option" tabindex="-1"
                                                data-value="undergraduate">Undergraduate</li>
                                            <li role="option" tabindex="-1"
                                                data-value="postgraduate">Postgraduate</li>
                                            <li role="option" tabindex="-1"
                                                data-value="working_professional">Working
                                                Professional</li>
                                            <li role="option" tabindex="-1"
                                                data-value="other">Other</li>
                                        </ul>

                                        <input name="education_level"
                                            id="educationLevelInput"
                                            type="hidden" value>
                                    </div>
                                    <span class="floating_label"
                                        id="studyingInFloatLabel">Studying
                                        In</span>
                                </div>
                                <div class="formGroup__error"
                                    id="studyingInError"></div>
                            </div>

                            <div class="formGroup">
                                <!-- <label for="loginPassword">Password <span
                                        class="formGroup__req">*</span></label> -->
                                <div class="formGroup__inputWrap">
                                    <input type="password" id="loginPassword"
                                        name="password"
                                        placeholder="Enter your password"
                                        autocomplete="new-password">
                                    <span class="formGroup__requiredStar"
                                        >*</span>
                                    <button type="button"
                                        class="formGroup__toggle"
                                        data-toggle="loginPassword"
                                        aria-label="Show password"
                                        aria-pressed="false">
                                        <svg class="iconEye" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            aria-hidden="true">
                                            <path
                                                d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7Z" /><circle
                                                cx="12" cy="12" r="3" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- <div class="formGroup__strength"
                                    id="passwordStrength"></div> -->
                                <div class="formGroup__error"
                                    id="passwordError"></div>
                            </div>

                            <div class="formGroup">
                                <!-- <label for="password_confirmation">Confirm
                                    Password <span
                                        class="formGroup__req">*</span></label> -->
                                <div class="formGroup__inputWrap">
                                    <input type="password"
                                        id="password_confirmation"
                                        name="password_confirmation"
                                        placeholder="Confirm your password"
                                        autocomplete="new-password">
                                    <span class="formGroup__requiredStar"
                                        >*</span>
                                    <button type="button"
                                        class="formGroup__toggle"
                                        data-toggle="password_confirmation"
                                        aria-label="Show password"
                                        aria-pressed="false">
                                        <svg class="iconEye" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            aria-hidden="true">
                                            <path
                                                d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7Z" /><circle
                                                cx="12" cy="12" r="3" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="formGroup__error"
                                    id="confirmPasswordError"></div>
                            </div>

                            <div class="formGroup formGroup--terms">
                                <div class="formGroup__check">
                                    <input type="checkbox" id="terms"
                                        name="terms" value="1"
                                        class="formGroup__checkInput">
                                    <label for="terms"
                                        class="formGroup__checkLabel">
                                        <span class="formGroup__checkBox"
                                            aria-hidden="true">
                                            <svg viewBox="0 0 16 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.5 6.2 5.4 10 14.5 1.4"
                                                    stroke="#ffffff"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="formGroup__checkText">I
                                            agree to receive updates, insights,
                                            resources, and other community
                                            communications from The Fundraisers
                                            Network.</span>
                                    </label>
                                </div>
                                <div class="formGroup__error"
                                    id="termsError"></div>
                            </div>

                            <button type="submit"
                                class="authPage__submit authPage__submit--shine"
                                id="submitBtn">
                                <span class="btn-text">Register Now</span>
                                <span class="btn-spinner"
                                    style="display:none;"><i
                                        class="fas fa-spinner fa-spin"></i>
                                    Registering...</span>
                                <svg
                                    width="14" height="14"
                                    viewBox="0 0 24 24" fill="none"
                                    aria-hidden="true"><path
                                        d="M7 17L17 7M17 7H8M17 7V16"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- ===================== RIGHT: VISUAL PANEL ===================== -->
                <div class="authPage__visual">
                    <div class="authPage__shapes" aria-hidden="true">
                        <span class="shape shape--circle"></span>
                        <span class="shape shape--square"></span>
                        <span class="shape shape--triangle"></span>
                    </div>

                    <div class="authPage__visualInner">

                        <div class="authPage__media">
                            <div class="swiper joinNetworkSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img
                                            src="./src/assets/images/college-student.webp"
                                            alt="Fundraising professionals networking at a TFN community event"
                                            width="1104" height="614"
                                            fetchpriority="high"
                                            decoding="async">
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                            src="./src/assets/images/college-student.webp"
                                            alt="TFN members collaborating during a fundraising workshop"
                                            width="1104" height="614"
                                            loading="lazy" decoding="async">
                                    </div>
                                    <div class="swiper-slide">
                                        <img
                                            src="./src/assets/images/college-student.webp"
                                            alt="TFN community celebrating a successful campaign"
                                            width="1104" height="614"
                                            loading="lazy" decoding="async">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>

                        <div class="authPage__content ">
                            <h2 class="authPage__visualHeading">Join The
                                Discover MBA </h2>
                            <p class="authPage__visualText">
                                Explore leading MBA brands and discover the
                                programmes, institutions, and opportunities
                                shaping the future of business education.
                                Compare what each brand offers, understand their
                                unique strengths, and find the right fit for
                                your career and professional goals.
                            </p>
                        </div>

                    </div>
                </div>

            </section>
        </main>
  </body>
    </html>
