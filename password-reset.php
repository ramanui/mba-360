<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <title>College LP</title>
        <meta name="description" content="DGTL">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="./favicon.svg"
            sizes="32x32">
        <link rel="apple-touch-icon" href="./favicon.svg" sizes="180x180">

        <link rel="preload" as="image"
            href="../src/assets/images/stay-updated-with-mba-news.webp"
            fetchpriority="high">

        <!-- Google Fonts (Ultra Optimized) -->

        <link rel="preload"
            href="./fonts/Inter-Regular.woff2"
            as="font"
            type="font/woff2"
            crossorigin>

        <link rel="preload"
            href="./fonts/Inter-Bold.woff2"
            as="font"
            type="font/woff2"
            crossorigin>

     
        <link rel="stylesheet" href="./src/css/swiper-bundle.min.css">
<link rel="stylesheet" href="./src/css/common.css">
    <link rel="stylesheet" href="./src/css/login.css">
  </head>
    <body>

        <!-- 

<!-- =========================================================
     HEADER
========================================================= -->


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

                        <h1 class="authPage__heading reset">Reset your
                            password</h1>
                        <p class="create">
                            Forgot your password? No worries<br>
                            We'll send you a 4 digit code.
                        </p>

                        <form id="registrationForm" class="authPage__formFields"
                            action="/demo/our-project/member-registration"
                            method="POST" novalidate>
                            <input type="hidden" name="_token"
                                value="DMohSvZBZqO15HHj3EWib4WIzo8ategHoo6sI5wu"
                                autocomplete="off">

                            <div class="formGroup">
                                <!-- <label for="loginEmail">Email Address <span
                                        class="formGroup__req">*</span></label> -->
                                <div class="formGroup__inputWrap">
                                    <input type="email" id="loginEmail"
                                        name="email"
                                        placeholder="Enter your email"
                                        autocomplete="email" required>
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
                                    id="emailError">Please enter your email
                                    address</div>
                            </div>

                            <button type="submit" class="authPage__submit"
                                id="submitBtn">
                                <span class="btn-text">GET A 4 DIGIT CODE
                                </span>
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
                                <a href="./member-login.php"
                                    class="authPage__link">
                                    <span class="back"> <svg viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            aria-hidden="true">
                                            <path
                                                d="M19 12H5M11 5l-7 7 7 7"></path>
                                        </svg> Back to Login </span>
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

    
    <script src="./src/js/swiper-bundle.min.js" defer></script>
    <script src="./src/js/login.js" defer></script>
  </body>
</html>