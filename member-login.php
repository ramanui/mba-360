<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/database.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/auth.php';

startSecureSession();

$pageTitle = 'Log In | Discover MBA';
$metaDescription = 'Log in to your Discover MBA account.';
$pageCss = ['swiper-bundle.min.css', 'common.css', 'login.css', 'registration-validation.css'];
$pageJs = ['swiper-bundle.min.js', 'member-login.js'];
$authenicationRequired = false;

$redirectTarget = resolveRedirectTarget($_GET['redirect'] ?? null, '/index.php');

if (isPostRequest()) {
    $email = mb_strtolower(trim((string)($_POST['email'] ?? '')));
    $password = (string)($_POST['password'] ?? '');
    $csrf = $_POST['csrf_token'] ?? null;
    $fieldErrors = [];

    if (!verifyCsrfToken(is_string($csrf) ? $csrf : null)) {
        jsonResponse(['success' => false, 'message' => 'Your session has expired. Please refresh the page and try again.'], 419);
    }

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $fieldErrors['email'] = 'Please enter a valid email address.';
    }

    if ($password === '') {
        $fieldErrors['password'] = 'Please enter your password.';
    }

    if ($fieldErrors) {
        jsonResponse(['success' => false, 'fieldErrors' => $fieldErrors], 422);
    }

    $stmt = $pdo->prepare(
        'SELECT id, name, email, password, email_verified, status
         FROM users
         WHERE email = ?
         LIMIT 1'
    );
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (!$user || !password_verify($password, (string)$user['password'])) {
        jsonResponse([
            'success' => false,
            'fieldErrors' => ['email' => 'Invalid email address or password.'],
        ], 401);
    }

    if (empty($user['email_verified'])) {
        jsonResponse([
            'success' => false,
            'fieldErrors' => ['email' => 'Please verify your email address before logging in.'],
        ], 403);
    }

    if (empty($user['status'])) {
        jsonResponse(['success' => false, 'message' => 'Your account is unavailable. Please contact support.'], 403);
    }

    logInUser($user);
    trackAuthenticatedActivity($pdo, 'login');

    $postLoginRedirect = resolveRedirectTarget($_POST['redirect'] ?? null, '/index.php');

    jsonResponse([
        'success' => true,
        'redirect' => $postLoginRedirect,
    ]);
}

if (currentAuthenticatedUser()) {
    header('Location: ' . $redirectTarget);
    exit;
}

$csrfToken = csrfToken();
require __DIR__ . '/includes/head.php';
?>

    

<!-- =========================================================
     HEADER
========================================================= -->

<?php /*?> <?php require __DIR__ . '/includes/header.php'; ?>
<div
        class="site-header__backdrop"
        id="navBackdrop"
        hidden></div>
<?php */?>

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
                        <h1 class="authPage__heading sign">Sign in to your
                            account</h1>
                        <p class="authPage__subtext">
                            Don't have an account? <a
                                href="./member-registration.php"
                                class="authPage__link">Create an account
                            </a></p>

                        <div id="loginResponse" class="registrationResponse"
                            role="status" aria-live="polite" hidden></div>

                        <form id="loginForm" class="authPage__formFields"
                            action=""
                            method="POST" novalidate>
                            <input type="hidden" name="csrf_token"
                                value="<?= e($csrfToken) ?>"
                                autocomplete="off">
                            <?php if (!empty($_GET['redirect'])) : ?>
                                <input type="hidden" name="redirect"
                                    value="<?= e((string)$_GET['redirect']) ?>">
                            <?php endif; ?>

                            <div class="formGroup">
                                <!-- <label for="loginEmail">Email Address <span
                                        class="formGroup__req">*</span></label> -->
                                <div class="formGroup__inputWrap">
                                    <input type="email" id="loginEmail"
                                        name="email"
                                        placeholder="Enter your email"
                                        autocomplete="email">
                                    <span class="formGroup__requiredStar"
                                        id="nameStar">*</span>
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
                                <!-- <label for="loginPassword">Password <span
                                        class="formGroup__req">*</span></label> -->
                                <div class="formGroup__inputWrap">
                                    <input type="password" id="loginPassword"
                                        name="password"
                                        placeholder="Enter your password"
                                        autocomplete="current-password">
                                    <span class="formGroup__requiredStar"
                                        id="nameStar">*</span>
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

                            <button type="submit" class="authPage__submit"
                                id="submitBtn">
                                <span class="btn-text">Login</span>
                                <span class="btn-spinner"
                                    style="display:none;"><i
                                        class="fas fa-spinner fa-spin"></i>
                                    Logging in...</span>
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

                            <p class="forgot">
                                <span class="forgot-password-txt">Forgot
                                    password? </span>
                                <a href="./password-reset.php">
                                    <span class="authPage__link">click here to
                                        reset </span>
                                </a>
                            </p>
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

                        <div class="authPage__media ">
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

                            <!-- <ul class="authPage__icons" role="list">
                                <li class="authPage__iconBox">
                                    <svg viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true">
                                        <path
                                            d="M12 3 2 8l10 5 10-5-10-5Z" /><path
                                            d="M6 10.5V16c0 1.7 2.7 3 6 3s6-1.3 6-3v-5.5" />
                                    </svg>
                                </li>
                                <li class="authPage__iconBox">
                                    <svg viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true">
                                        <circle cx="12" cy="8" r="4" /><path
                                            d="M4 21c0-4 3.5-7 8-7s8 3 8 7" />
                                    </svg>
                                </li>
                                <li class="authPage__iconBox">
                                    <svg viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true">
                                        <circle cx="7" cy="7" r="3" /><circle
                                            cx="17" cy="7" r="3" /><path
                                            d="M2 21c0-3.3 2.2-5.5 5-5.5s5 2.2 5 5.5M12 21c0-3.3 2.2-5.5 5-5.5s5 2.2 5 5.5" />
                                    </svg>
                                </li>
                                <li class="authPage__iconBox">
                                    <svg viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        aria-hidden="true">
                                        <path
                                            d="M4 5.5A2.5 2.5 0 0 1 6.5 3H20v15H6.5A2.5 2.5 0 0 0 4 20.5v-15Z" /><path
                                            d="M4 20.5A2.5 2.5 0 0 1 6.5 18H20" />
                                    </svg>
                                </li>
                            </ul> -->
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

      
<!-- ============================================================
       SCROLL REVEAL SCRIPT
  ============================================================ -->

  </body>
</html>
