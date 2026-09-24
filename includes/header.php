<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/helpers.php';
startSecureSession();

$__root = realpath(__DIR__ . '/..');
$__here = realpath(dirname($_SERVER['SCRIPT_FILENAME']));
$__base = './';
if ($__root !== false && $__here !== false && $__here !== $__root) {
  $__rel = ltrim(str_replace('\\', '/', substr($__here, strlen($__root))), '/');
  $__depth = ($__rel === '') ? 0 : substr_count($__rel, '/') + 1;
  $__base = str_repeat('../', $__depth);
}

$currentUser = currentAuthenticatedUser();
$isAuthenticated = $currentUser !== null;
$currentUserName = $isAuthenticated ? trim((string) $currentUser['name']) : '';
?>
<script>
  window.SITE_BASE = "<?php echo $__base; ?>";
</script>
<header class="site-header" id="siteHeader">

  <div class="container site-header__inner">

    <!-- LOGO -->
    <a
      class="site-header__logo-link"
      href="<?php echo $__base; ?>index.php"
      aria-label="Discover MBA Home">
      <img
        class="site-header__logo-img"
        src="<?php echo $__base; ?>discovermba.webp"
        alt="MBA 360"
        width="300"
        height="79"
        loading="eager"
        alt="Discover MBA">
    </a>

    <!-- MOBILE TOGGLE -->
    <button
      class="site-header__toggle"
      id="navToggle"
      type="button"
      aria-expanded="false"
      aria-controls="siteNav"
      aria-label="Open menu">

      <svg
        class="icon-menu"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        aria-hidden="true">
        <line x1="3" y1="6" x2="21" y2="6" />
        <line x1="3" y1="12" x2="21" y2="12" />
        <line x1="3" y1="18" x2="21" y2="18" />
      </svg>

      <svg
        class="icon-close"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        aria-hidden="true">
        <line x1="5" y1="5" x2="19" y2="19" />
        <line x1="19" y1="5" x2="5" y2="19" />
      </svg>

    </button>

    <!-- =====================================================
         NAVIGATION
    ====================================================== -->
    <nav
      class="site-nav"
      id="siteNav"
      aria-label="Primary navigation">

      <!-- MOBILE TOP -->
      <div class="site-nav__mobile-topbar">

        <a
          class="site-nav__mobile-logo-link"
          href="<?php echo $__base; ?>index.php"
          aria-label="Discover MBA Home">
          <img
            class="site-nav__mobile-logo"
            src="<?php echo $__base; ?>discovermba.webp"
            alt="Discover MBA"
            width="112"
            height="34"
            decoding="async">
        </a>

        <button
          class="site-nav__mobile-close"
          id="navCloseBtn"
          type="button"
          aria-label="Close menu">
          <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            aria-hidden="true">
            <line x1="5" y1="5"
              x2="19"
              y2="19" />
            <line x1="19" y1="5"
              x2="5"
              y2="19" />
          </svg>
        </button>

      </div>

      <ul class="site-nav__list">

        <!-- =================================================
             EXAMS
        ================================================== -->

        <li class="site-nav__item--mega">

          <button
            class="site-nav__link"
            type="button"
            data-menu-trigger
            aria-haspopup="true"
            aria-expanded="false"
            aria-controls="megaExams">
            Exams

            <svg
              class="site-nav__chevron"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2.4"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true">
              <polyline
                points="6 9 12 15 18 9" />
            </svg>

          </button>

          <div class="mega-menu container"
            id="megaExams">

            <div
              class="container mega-menu__inner">

              <!-- FEATURED -->
              <div
                class="mega-menu__col mega-menu__col--featured">

                <div
                  class="mega-menu__featured-top">
                  <p
                    class="mega-menu__title">MBA
                    Exams</p>
                </div>

                <ul
                  class="mega-menu__list">

                  <li>
                    <a
                      href="<?php echo $__base; ?>exam/index.php"
                      class="mega-menu__link mega-menu__link--active"
                      data-menu="cat">
                      CAT
                      Exam
                    </a>
                  </li>

                  <li>
                    <a
                      href="<?php echo $__base; ?>exam/index.php"
                      class="mega-menu__link"
                      data-menu="xat">
                      XAT
                      Exam
                    </a>
                  </li>

                  <li>
                    <a
                      href="<?php echo $__base; ?>exam/index.php"
                      class="mega-menu__link"
                      data-menu="gmat">
                      GMAT
                      Exam
                    </a>
                  </li>

                </ul>

              </div>

              <!-- COLUMN 2 -->
              <div
                class="mega-menu__col">

                <p
                  class="mega-menu__label"
                  data-target-label="popular">
                  Popular
                  Exams
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="popular"></ul>

              </div>

              <!-- COLUMN 3 -->
              <div
                class="mega-menu__col">

                <p
                  class="mega-menu__label"
                  data-target-label="category">
                  By
                  Category
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="category"></ul>

              </div>

              <!-- COLUMN 4 -->
              <div
                class="mega-menu__col mega-menu__col--type">

                <p
                  class="mega-menu__label"
                  data-target-label="level">
                  By
                  Level
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="level"></ul>

                <a
                  href="<?php echo $__base; ?>exam/index.php"
                  class="downloadBrochureBtn"
                  data-target-button>
                  View
                  all
                  Exams

                  <svg
                    width="14"
                    height="14"
                    viewBox="0 0 24 24"
                    fill="none"
                    aria-hidden="true">
                    <path
                      d="M7 17L17 7M17 7H8M17 7V16"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>

                </a>

              </div>

              <!-- PROMO -->
              <div
                class="mega-menu__promo">

                <p
                  class="mega-menu__promo-title"
                  data-target-promo-title>Recommended
                  for
                  CAT
                  Aspirants</p>

                <div
                  class="mega-menu__marquee">

                  <div
                    class="mega-menu__marquee-track"
                    data-target-track="promo"></div>

                </div>

              </div>
              <div
                class="mega-menu__trending">

                <span
                  class="mega-menu__trending-label">
                  Trending:
                </span>

                <div
                  class="mega-menu__trending-tags"
                  data-target-trending></div>

              </div>

            </div>

          </div>

        </li>

        <!-- =================================================
             COLLEGES
        ================================================== -->

        <li class="site-nav__item--mega">

          <button
            class="site-nav__link"
            type="button"
            data-menu-trigger
            aria-haspopup="true"
            aria-expanded="false"
            aria-controls="megaColleges">
            Colleges

            <svg
              class="site-nav__chevron"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2.4"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true">
              <polyline
                points="6 9 12 15 18 9" />
            </svg>

          </button>

          <div class="mega-menu container"
            id="megaColleges">

            <div
              class="container mega-menu__inner">

              <div
                class="mega-menu__col mega-menu__col--featured">

                <div
                  class="mega-menu__featured-top">
                  <p
                    class="mega-menu__title">MBA
                    Colleges</p>
                </div>

                <ul
                  class="mega-menu__list">

                  <li>
                    <a
                      href="<?php echo $__base; ?>college/index.php"
                      class="mega-menu__link mega-menu__link--active"
                      data-menu="mba">
                      MBA
                      Colleges
                    </a>
                  </li>

                  <li>
                    <a
                      href="<?php echo $__base; ?>college/index.php"
                      class="mega-menu__link"
                      data-menu="bba">
                      BBA
                      Colleges
                    </a>
                  </li>

                  <li>
                    <a
                      href="<?php echo $__base; ?>college/index.php"
                      class="mega-menu__link"
                      data-menu="integrated">
                      Integrated
                      MBA
                      Colleges
                    </a>
                  </li>

                </ul>

              </div>

              <div
                class="mega-menu__col">

                <p
                  class="mega-menu__label"
                  data-target-label="popular">
                  By
                  Location
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="popular"></ul>

              </div>

              <div
                class="mega-menu__col">

                <p
                  class="mega-menu__label"
                  data-target-label="category">
                  By
                  Programmes
                  offered
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="category"></ul>

              </div>

              <div
                class="mega-menu__col mega-menu__col--type">

                <p
                  class="mega-menu__label"
                  data-target-label="level">
                  By
                  Type
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="level"></ul>

                <a
                  href="<?php echo $__base; ?>college/index.php"
                  class="downloadBrochureBtn"
                  data-target-button>
                  View
                  all
                  Colleges

                  <svg
                    width="14"
                    height="14"
                    viewBox="0 0 24 24"
                    fill="none"
                    aria-hidden="true">
                    <path
                      d="M7 17L17 7M17 7H8M17 7V16"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>

                </a>

              </div>

              <!-- PROMO -->
              <div
                class="mega-menu__promo">

                <p
                  class="mega-menu__promo-title"
                  data-target-promo-title>Top
                  MBA
                  Colleges
                  to
                  Explore</p>

                <div
                  class="mega-menu__marquee">

                  <div
                    class="mega-menu__marquee-track"
                    data-target-track="promo"></div>

                </div>

              </div>

              <div
                class="mega-menu__trending">

                <span
                  class="mega-menu__trending-label">
                  Trending:
                </span>

                <div
                  class="mega-menu__trending-tags"
                  data-target-trending></div>

              </div>

            </div>

          </div>

        </li>
        <li class="site-nav__item--mega">

          <button
            class="site-nav__link"
            type="button"
            data-menu-trigger
            aria-haspopup="true"
            aria-expanded="false"
            aria-controls="megaBba">
            Courses

            <svg
              class="site-nav__chevron"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2.4"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true">
              <polyline
                points="6 9 12 15 18 9" />
            </svg>

          </button>

          <div class="mega-menu"
            id="megaBba">

            <div
              class="container mega-menu__inner">

              <div
                class="mega-menu__col mega-menu__col--featured">

                <div
                  class="mega-menu__featured-top">
                  <p
                    class="mega-menu__title">BBA
                    &amp;
                    IPM</p>
                </div>

                <ul
                  class="mega-menu__list">

                  <li>
                    <a
                      href="<?php echo $__base; ?>course/index.php"
                      class="mega-menu__link mega-menu__link--active"
                      data-menu="bba">
                      BBA
                      Colleges
                    </a>
                  </li>

                  <li>
                    <a
                      href="<?php echo $__base; ?>course/index.php"
                      class="mega-menu__link"
                      data-menu="ipm">
                      IPM
                      Colleges
                    </a>
                  </li>

                </ul>

              </div>

              <div
                class="mega-menu__col">

                <p
                  class="mega-menu__label"
                  data-target-label="popular">
                  Popular
                  Colleges
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="popular"></ul>

              </div>

              <div
                class="mega-menu__col">

                <p
                  class="mega-menu__label"
                  data-target-label="category">
                  By
                  Location
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="category"></ul>

              </div>

              <div
                class="mega-menu__col mega-menu__col--type">

                <p
                  class="mega-menu__label"
                  data-target-label="level">
                  By
                  Type
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="level"></ul>

                <a
                  href="/bba-ipm"
                  class="downloadBrochureBtn"
                  data-target-button>
                  View
                  all
                  BBA
                  /
                  IPM

                  <svg
                    width="14"
                    height="14"
                    viewBox="0 0 24 24"
                    fill="none"
                    aria-hidden="true">
                    <path
                      d="M7 17L17 7M17 7H8M17 7V16"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>

                </a>

              </div>

              <div
                class="mega-menu__promo">

                <p
                  class="mega-menu__promo-title"
                  data-target-promo-title>Top
                  BBA
                  Colleges
                  to
                  Explore</p>

                <div
                  class="mega-menu__marquee">

                  <div
                    class="mega-menu__marquee-track"
                    data-target-track="promo"></div>

                </div>

              </div>

              <div
                class="mega-menu__trending">

                <span
                  class="mega-menu__trending-label">
                  Trending:
                </span>

                <div
                  class="mega-menu__trending-tags"
                  data-target-trending></div>

              </div>

            </div>

          </div>

        </li>

        <!-- =================================================
             COMMUNITY
        ================================================== -->

        <li class="site-nav__item--mega">

          <button
            class="site-nav__link"
            type="button"
            data-menu-trigger
            aria-haspopup="true"
            aria-expanded="false"
            aria-controls="megaCommunity">
            Forum

            <svg
              class="site-nav__chevron"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2.4"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true">
              <polyline
                points="6 9 12 15 18 9" />
            </svg>

          </button>

          <div class="mega-menu"
            id="megaCommunity">

            <div
              class="container mega-menu__inner">

              <div
                class="mega-menu__col mega-menu__col--featured">

                <div
                  class="mega-menu__featured-top">
                  <p
                    class="mega-menu__title">Forum</p>
                </div>

                <ul
                  class="mega-menu__list">

                  <li>
                    <a
                      href="/community/discussions"
                      class="mega-menu__link mega-menu__link--active"
                      data-menu="discussion">
                      Discussions
                    </a>
                  </li>

                  <li>
                    <a
                      href="/community/college-reviews"
                      class="mega-menu__link"
                      data-menu="reviews">
                      College
                      Reviews
                    </a>
                  </li>

                </ul>

              </div>

              <div
                class="mega-menu__col">

                <p
                  class="mega-menu__label"
                  data-target-label="popular">
                  Popular
                  Topics
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="popular"></ul>

              </div>

              <div
                class="mega-menu__col">

                <p
                  class="mega-menu__label"
                  data-target-label="category">
                  Resources
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="category"></ul>

              </div>

              <div
                class="mega-menu__col mega-menu__col--type">

                <p
                  class="mega-menu__label"
                  data-target-label="level">
                  By
                  Interest
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="level"></ul>

                <a
                  href="/community"
                  class="downloadBrochureBtn"
                  data-target-button>
                  Join
                  Community

                  <svg
                    width="14"
                    height="14"
                    viewBox="0 0 24 24"
                    fill="none"
                    aria-hidden="true">
                    <path
                      d="M7 17L17 7M17 7H8M17 7V16"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>

                </a>

              </div>

              <div
                class="mega-menu__promo">

                <p
                  class="mega-menu__promo-title"
                  data-target-promo-title>Popular
                  Among
                  the
                  Community</p>

                <div
                  class="mega-menu__marquee">

                  <div
                    class="mega-menu__marquee-track"
                    data-target-track="promo"></div>

                </div>

              </div>

              <div
                class="mega-menu__trending">

                <span
                  class="mega-menu__trending-label">
                  Trending:
                </span>

                <div
                  class="mega-menu__trending-tags"
                  data-target-trending></div>

              </div>

            </div>

          </div>

        </li>

        <!-- =================================================
             ALUMNI
        ================================================== -->

        <li class="site-nav__item--mega">

          <button
            class="site-nav__link"
            type="button"
            data-menu-trigger
            aria-haspopup="true"
            aria-expanded="false"
            aria-controls="megaAlumni">
            Alumni

            <svg
              class="site-nav__chevron"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2.4"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true">
              <polyline
                points="6 9 12 15 18 9" />
            </svg>

          </button>

          <div class="mega-menu"
            id="megaAlumni">

            <div
              class="container mega-menu__inner">

              <div
                class="mega-menu__col mega-menu__col--featured">

                <div
                  class="mega-menu__featured-top">
                  <p
                    class="mega-menu__title">Alumni</p>
                </div>

                <ul
                  class="mega-menu__list">

                  <li>
                    <a
                      href="<?php echo $__base; ?>alumni/index.php"
                      class="mega-menu__link mega-menu__link--active"
                      data-menu="success">
                      Success
                      Stories
                    </a>
                  </li>

                  <li>
                    <a
                      href="<?php echo $__base; ?>alumni/index.php"
                      class="mega-menu__link"
                      data-menu="network">
                      Alumni
                      Network
                    </a>
                  </li>

                </ul>

              </div>

              <div
                class="mega-menu__col">

                <p
                  class="mega-menu__label"
                  data-target-label="popular">
                  Popular
                  Stories
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="popular"></ul>

              </div>

              <div
                class="mega-menu__col">

                <p
                  class="mega-menu__label"
                  data-target-label="category">
                  Engage
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="category"></ul>

              </div>

              <div
                class="mega-menu__col mega-menu__col--type">

                <p
                  class="mega-menu__label"
                  data-target-label="level">
                  By
                  Batch
                </p>

                <ul
                  class="mega-menu__list"
                  data-target-list="level"></ul>

                <a
                  href="<?php echo $__base; ?>alumni/index.php"
                  class="downloadBrochureBtn"
                  data-target-button>
                  View
                  all
                  Alumni

                  <svg
                    width="14"
                    height="14"
                    viewBox="0 0 24 24"
                    fill="none"
                    aria-hidden="true">
                    <path
                      d="M7 17L17 7M17 7H8M17 7V16"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>

                </a>

              </div>

              <div
                class="mega-menu__promo">

                <p
                  class="mega-menu__promo-title"
                  data-target-promo-title>Where
                  Our
                  Alumni
                  Studied</p>

                <div
                  class="mega-menu__marquee">

                  <div
                    class="mega-menu__marquee-track"
                    data-target-track="promo"></div>

                </div>

              </div>

              <div
                class="mega-menu__trending">

                <span
                  class="mega-menu__trending-label">
                  Trending:
                </span>

                <div
                  class="mega-menu__trending-tags"
                  data-target-trending></div>

              </div>

            </div>

          </div>

        </li>

        <li class="site-nav__item--mega">

          <a
            href="<?php echo $__base; ?>glossary.php"
            class="site-nav__link"
            type="button">
            Glossary

            <svg
              class="site-nav__chevron"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2.4"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true">
              <polyline
                points="6 9 12 15 18 9" />
            </svg>

          </a>

        </li>

        <li class="site-nav__item--mega">

          <a
            href="<?php echo $__base; ?>blog/index.php"
            class="site-nav__link"
            type="button">
            Blog

            <svg
              class="site-nav__chevron"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2.4"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true">
              <polyline
                points="6 9 12 15 18 9" />
            </svg>

          </a>

        </li>

      </ul>

      <!-- MOBILE ACTIONS -->

      <div
        class="site-header__actions site-header__actions--mobile">

        <?php if ($isAuthenticated): ?>
          <span class="site-header__user-name"><?php echo e($currentUserName !== '' ? $currentUserName : 'User'); ?></span>
          <a
            class="btn btn--outline"
            href="<?php echo $__base; ?>logout.php">
            Logout
          </a>
        <?php else: ?>
          <a
            class="btn btn--outline"
            href="<?php echo $__base; ?>member-login.php">
            Login
          </a>

          <a
            class="btn btn--solid"
            href="<?php echo $__base; ?>member-registration.php">
            Register
          </a>
        <?php endif; ?>

      </div>
      <!-- DESKTOP ACTIONS -->

      <div class="site-header__actions">

        <?php if ($isAuthenticated): ?>
          <span class="site-header__user-name"><?php echo e($currentUserName !== '' ? $currentUserName : 'User'); ?></span>
          <a
            class="btn btn--outline"
            href="<?php echo $__base; ?>logout.php">
            Logout
          </a>
        <?php else: ?>
          <a
            class="btn btn--outline"
            href="<?php echo $__base; ?>member-login.php">
            Login
          </a>

          <a
            class="btn btn--solid"
            href="<?php echo $__base; ?>member-registration.php">
            Register
          </a>
        <?php endif; ?>

      </div>

    </nav>

  </div>

</header>

<div
  class="site-header__backdrop"
  id="navBackdrop"
  hidden></div>