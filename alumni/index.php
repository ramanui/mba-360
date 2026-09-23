<?php

$pageTitle = 'MBA 360 - Alumni';

$metaDescription = 'Find MBA colleges, courses, entrance exams and admission information.';

$pageCss = [
  'filter.css',
  'exam-college-bba-lp.css'
];

$authenicationRequired = true;

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';

?>




<main>

  <!-- ============ HERO / HEADER ============ -->
  <section class="clg-header alumni_main">
    <div class="clg-header__bgfx" aria-hidden="true">
      <span class="clg-header__shape clg-header__shape--1"></span>
      <span class="clg-header__shape clg-header__shape--2"></span>
      <span class="clg-header__shape clg-header__shape--3"></span>
      <span class="clg-header__shape clg-header__shape--4"></span>
    </div>

    <div class="container">
      <nav class="clg-breadcrumb" aria-label="Breadcrumb">
        <a href="#">Home</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Alumni</span>
      </nav>

      <div class="clg-heroTop">
        <div class="clg-heroMain">

          <div class="clg-titleBlock">
            <h1 class="hero__title">Alumni Speak</h1>
            <p class="clg-metaRow"><span>Unscripted video testimonials from
                graduates of India s leading B-schools every speaker s
                identity and enrolment year confirmed directly with their
                college before publishing.</span></p>
            <a href="#enquire" class="btn btn--solid">Share Your Story</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="alumniListing alumni_examListing">
    <div class="container">

      <div class="examActiveFilters" id="alumniActiveFilters"
        style="display:none;">
        <span class="examActiveFilters__label">Active Filters:</span>
        <a href="#" class="examActiveFilters__clear"
          id="alumniClearAll">Clear All ✕</a>
      </div>

      <div class="examFiltersToggleWrap"
        id="examFiltersToggleWrap">

      </div> <!--add this-->
      <div class="examFiltersOverlay"
        id="examFiltersOverlay"></div>
      <div class="examSortOverlay" id="examSortOverlay"></div>

      <div class="examLayout layout alumniLayout">

        <div class="examActionsBar">
          <button type="button"
            class="examActionsBar__sortBtn"
            id="examSortToggleBtn"
            aria-haspopup="dialog"
            aria-expanded="false"
            aria-controls="examSortPanel">
            <svg viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M3 6h13M3 12h9M3 18h5"></path>
            </svg>
            Sort by
          </button>
          <button type="button"
            class="examActionsBar__filterBtn"
            id="examFiltersToggleBtn"
            aria-haspopup="dialog"
            aria-expanded="false"
            aria-controls="examFiltersPanel">
            <svg viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2"
              stroke-linecap="round">
              <line x1="4" y1="6" x2="20" y2="6"></line>
              <line x1="4" y1="12" x2="20" y2="12"></line>
              <line x1="4" y1="18" x2="20" y2="18"></line>
              <circle cx="9" cy="6" r="1.6"
                fill="currentColor"
                stroke="none"></circle>
              <circle cx="15" cy="12" r="1.6"
                fill="currentColor"
                stroke="none"></circle>
              <circle cx="9" cy="18" r="1.6"
                fill="currentColor"
                stroke="none"></circle>
            </svg>
            Filters
          </button>
        </div>

        <!-- Dont remove we will use futute Sort bottom-sheet (mobile only) -->

        <!-- <div class="examSortPanel" id="examSortPanel"
              role="dialog" aria-modal="true"
              aria-labelledby="examSortPanelTitle"
              aria-hidden="true">
              <div class="examSortPanel__head">
                <h4 id="examSortPanelTitle">Sort by</h4>
                <button type="button"
                  class="examSortPanel__closeBtn"
                  id="examSortCloseBtn" aria-label="Close">
                  <svg viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2"
                    stroke-linecap="round">
                    <line x1="6" y1="6" x2="18"
                      y2="18"></line>
                    <line x1="18" y1="6" x2="6"
                      y2="18"></line>
                  </svg>
                </button>
              </div>
              <ul class="examSortOptions" id="examSortOptions"
                role="radiogroup"
                aria-labelledby="examSortPanelTitle">
                <li><button type="button" class="examSortOption"
                    role="radio" aria-checked="true"
                    data-value="Exam Date: Nearest First"><span>Exam
                      Date: Nearest First</span><span
                      class="examSortOption__dot"></span></button></li>
                <li><button type="button" class="examSortOption"
                    role="radio" aria-checked="false"
                    data-value="Application Fee: Low to High"><span>Application
                      Fee: Low to High</span><span
                      class="examSortOption__dot"></span></button></li>
                <li><button type="button" class="examSortOption"
                    role="radio" aria-checked="false"
                    data-value="Accepting Colleges: High to Low"><span>Accepting
                      Colleges: High to Low</span><span
                      class="examSortOption__dot"></span></button></li>
                <li><button type="button" class="examSortOption"
                    role="radio" aria-checked="false"
                    data-value="Alphabetical"><span>Alphabetical</span><span
                      class="examSortOption__dot"></span></button></li>
              </ul>
            </div> -->

        <!-- Sidebar Filters -->
        <aside class="examFilters" id="examFiltersPanel"
          role="dialog" aria-modal="true"
          aria-labelledby="examFiltersTitle"
          aria-hidden="true">
          <div class="examFilters__head">
            <h4>Exam Filter</h4>
            <button class="examFilters__clearAll"
              id="alumniFiltersClearAll">Clear all</button>
          </div>

          <!-- <div class="examFilterGroup">
                <p class="examFilterGroup__title">Sort by</p>
                <label class="examCheck"><input type="checkbox"
                    name="alumniSort" value="Newest"
                    data-filter-group="sort"><span>Newest</span></label>
                <label class="examCheck"><input type="checkbox"
                    name="alumniSort" value="Oldest"
                    data-filter-group="sort"><span>Oldest</span></label>
              </div> -->

          <div class="examFilterGroup">
            <p class="examFilterGroup__title">Programme Type</p>
            <label class="examCheck"><input type="checkbox"
                value="Full-Time MBA"
                data-filter-group="programme"><span>Full-Time
                MBA</span><em></em></label>
            <label class="examCheck"><input type="checkbox"
                value="Part-Time MBA"
                data-filter-group="programme"><span>Part-Time
                MBA</span><em></em></label>
            <label class="examCheck"><input type="checkbox"
                value="Executive MBA (EMBA)"
                data-filter-group="programme"><span>Executive MBA
                (EMBA)</span><em></em></label>
            <label class="examCheck"><input type="checkbox"
                value="Online MBA"
                data-filter-group="programme"><span>Online
                MBA</span><em></em></label>
            <label class="examCheck"><input type="checkbox"
                value="Distance Learning MBA"
                data-filter-group="programme"><span>Distance Learning
                MBA</span><em></em></label>
            <label class="examCheck"><input type="checkbox"
                value="Integrated MBA"
                data-filter-group="programme"><span>Integrated
                MBA</span><em></em></label>
            <label class="examCheck"><input type="checkbox"
                value="Global MBA"
                data-filter-group="programme"><span>Global
                MBA</span><em></em></label>
          </div>

          <div class="examFilterGroup">
            <p class="examFilterGroup__title">College</p>
            <label class="examCheck"><input type="checkbox"
                value="IIM Ahmedabad" data-filter-group="college"><span>IIM
                Ahmedabad</span><em>1</em></label>
            <label class="examCheck"><input type="checkbox"
                value="IIM Bangalore" data-filter-group="college"><span>IIM
                Bangalore</span><em>1</em></label>
            <label class="examCheck"><input type="checkbox"
                value="IIM Calcutta" data-filter-group="college"><span>IIM
                Calcutta</span><em>1</em></label>
            <label class="examCheck"><input type="checkbox"
                value="ISB Hyderabad" data-filter-group="college"><span>ISB
                Hyderabad</span><em>1</em></label>
            <label class="examCheck"><input type="checkbox"
                value="XLRI Jamshedpur"
                data-filter-group="college"><span>XLRI
                Jamshedpur</span><em>1</em></label>
            <label class="examCheck"><input type="checkbox"
                value="FMS Delhi" data-filter-group="college"><span>FMS
                Delhi</span><em>1</em></label>
            <label class="examCheck" style="display: none;"><input
                type="checkbox" value="MDI Gurgaon"
                data-filter-group="college"><span>MDI
                Gurgaon</span><em>0</em></label>
            <label class="examCheck"><input type="checkbox"
                value="SPJIMR Mumbai"
                data-filter-group="college"><span>SPJIMR
                Mumbai</span><em>1</em></label>
            <div class="examFilterGroup__extra" id="alumniCollegeExtra"
              hidden>
              <label class="examCheck"><input type="checkbox"
                  value="IIFT Delhi" data-filter-group="college"><span>IIFT
                  Delhi</span><em>1</em></label>
              <label class="examCheck" style="display: none;"><input
                  type="checkbox" value="NMIMS Mumbai"
                  data-filter-group="college"><span>NMIMS
                  Mumbai</span><em>0</em></label>
              <label class="examCheck"><input type="checkbox"
                  value="IIM Lucknow" data-filter-group="college"><span>IIM
                  Lucknow</span><em>3</em></label>
            </div>
            <button class="examFilterGroup__more"
              id="alumniCollegeMoreBtn">+ Show more</button>
          </div>

          <div class="examFilterGroup">
            <p class="examFilterGroup__title">Batch Year</p>
            <label class="examCheck"><input type="checkbox" value="2020"
                data-filter-group="year"><span>2026</span><em></em></label>
            <label class="examCheck"><input type="checkbox" value="2025"
                data-filter-group="year"><span>2025</span><em></em></label>
            <label class="examCheck"><input type="checkbox" value="2024"
                data-filter-group="year"><span>2024</span><em></em></label>
            <label class="examCheck"><input type="checkbox" value="2023"
                data-filter-group="year"><span>2023</span><em></em></label>
          </div>

          <div class="examFilters__actions"> <!-- add this -->
            <button type="button"
              class="examFilters__closeBtn"
              id="examFiltersCloseBtn">Close</button>
            <button type="button"
              class="examFilters__applyBtn"
              id="examFiltersApplyBtn">Apply</button>
          </div>
        </aside>

        <!-- Main content -->
        <div class="examMain alumniMain">

          <div class="examMain__toolbar">
            <p class="examMain__count">Showing <strong
                id="alumniResultCount">25</strong> Alumni Speak</p>
          </div>

          <p id="alumniNoResults"
            style="display:none; text-align:center; padding:40px 0; color:#8a92a6; font-size:15px;">No
            alumni stories match the selected filters. Try clearing some
            filters.</p>

          <!-- Alumni Card 1 -->
          <div class="alumniCard alumniCard--featured"
            data-programme="Full-Time MBA" data-college="IIM Ahmedabad"
            data-year="2026">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-1.webp" width="238" height="222"
                alt="Rohan Deshpande video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ZiliZI9lDnY?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>

            <div class="videoModal" id="videoModal">
              <div class="videoModal__overlay"></div>
              <div class="videoModal__content">
                <button class="videoModal__close">&times;</button>
                <iframe id="videoFrame" src
                  allow="autoplay; encrypted-media"
                  allowfullscreen></iframe>
              </div>
            </div>
            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Rohan Deshpande</h3>
                  <p class="alumniCard__meta">Full-time MBA · Batch of
                    2026</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified"><svg
                    width="13" height="13" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true"
                    style="color: #ff4701;">
                    <path fill-rule="evenodd"
                      d="M10 1.5l2.4 1.2 2.7-.3 1.2 2.4 2.4 1.2-.3 2.7 1.2 2.4-1.2 2.4.3 2.7-2.4 1.2-1.2 2.4-2.7-.3L10 20.5l-2.4-1.2-2.7.3-1.2-2.4-2.4-1.2.3-2.7L.4 10l1.2-2.4-.3-2.7 2.4-1.2 1.2-2.4 2.7.3L10 1.5zm-1.2 12.1l5.1-5.1-1.2-1.2-3.9 3.9-1.9-1.9-1.2 1.2 3.1 3.1z"></path>
                  </svg>
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"
                aria-label="Share"><svg xmlns="http://www.w3.org/2000/svg"
                  width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <circle cx="18" cy="5"
                    r="3"></circle>
                  <circle cx="6" cy="12"
                    r="3"></circle>
                  <circle cx="18" cy="19"
                    r="3"></circle>
                  <path
                    d="M8.59 13.51L15.42 17.49"></path>
                  <path
                    d="M15.41 6.51L8.59 10.49"></path>
                </svg><span>Share</span></button>
            </div>
          </div>

          <!-- Alumni Card 2 -->
          <div class="alumniCard" data-programme="Part-Time MBA"
            data-college="IIM Bangalore" data-year="2026">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-2.webp" width="238" height="222"
                alt="Rohan Deshpande video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ms1Ek6xFjr4?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>
            <div class="videoModal" id="videoModal1">
              <div class="videoModal__overlay"></div>
              <div class="videoModal__content">
                <button class="videoModal__close">&times;</button>
                <iframe id="videoFrame" src
                  allow="autoplay; encrypted-media"
                  allowfullscreen></iframe>
              </div>
            </div>
            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Rohan Deshpande</h3>
                  <p class="alumniCard__meta">Full-time MBA · Batch of
                    2026</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified">✓
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"
                aria-label="Share"><svg xmlns="http://www.w3.org/2000/svg"
                  width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <circle cx="18" cy="5"
                    r="3"></circle>
                  <circle cx="6" cy="12"
                    r="3"></circle>
                  <circle cx="18" cy="19"
                    r="3"></circle>
                  <path
                    d="M8.59 13.51L15.42 17.49"></path>
                  <path
                    d="M15.41 6.51L8.59 10.49"></path>
                </svg><span>Share</span></button>
            </div>
          </div>

          <!-- Alumni Card 3 -->
          <div class="alumniCard" data-programme="Executive MBA (EMBA)"
            data-college="XLRI Jamshedpur" data-year="2025">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-3.webp" width="238" height="222"
                alt="Rohan Deshpande video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/c5f0LoYIpWw??autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>

            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Rohan Deshpande</h3>
                  <p class="alumniCard__meta">Full-time MBA · Batch of
                    2026</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified">✓
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"
                aria-label="Share"><svg xmlns="http://www.w3.org/2000/svg"
                  width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <circle cx="18" cy="5"
                    r="3"></circle>
                  <circle cx="6" cy="12"
                    r="3"></circle>
                  <circle cx="18" cy="19"
                    r="3"></circle>
                  <path
                    d="M8.59 13.51L15.42 17.49"></path>
                  <path
                    d="M15.41 6.51L8.59 10.49"></path>
                </svg><span>Share</span></button>
            </div>
          </div>

          <!-- Alumni Card 4 -->
          <div class="alumniCard" data-programme="Part-Time MBA"
            data-college="FMS Delhi" data-year="2025">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-4.webp" width="238" height="222"
                alt="Rohan Deshpande video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ms1Ek6xFjr4?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>
            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Rohan Deshpande</h3>
                  <p class="alumniCard__meta">Full-time MBA · Batch of
                    2026</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified">✓
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"
                aria-label="Share"><svg xmlns="http://www.w3.org/2000/svg"
                  width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <circle cx="18" cy="5"
                    r="3"></circle>
                  <circle cx="6" cy="12"
                    r="3"></circle>
                  <circle cx="18" cy="19"
                    r="3"></circle>
                  <path
                    d="M8.59 13.51L15.42 17.49"></path>
                  <path
                    d="M15.41 6.51L8.59 10.49"></path>
                </svg><span>Share</span></button>
            </div>
          </div>

          <!-- Alumni Card 6 -->
          <div class="alumniCard" data-programme="Online MBA"
            data-college="ISB Hyderabad" data-year="2024">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-2.webp" width="238" height="222"
                alt="Priya Nair video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ms1Ek6xFjr4?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>
            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Priya Nair</h3>
                  <p class="alumniCard__meta">Online MBA · Batch of 2024</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified">✓
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"
                aria-label="Share"><svg xmlns="http://www.w3.org/2000/svg"
                  width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <circle cx="18" cy="5"
                    r="3"></circle>
                  <circle cx="6" cy="12"
                    r="3"></circle>
                  <circle cx="18" cy="19"
                    r="3"></circle>
                  <path
                    d="M8.59 13.51L15.42 17.49"></path>
                  <path
                    d="M15.41 6.51L8.59 10.49"></path>
                </svg><span>Share</span></button>
            </div>
          </div>

          <!-- Alumni Card 7 -->
          <div class="alumniCard" data-programme="Distance Learning MBA"
            data-college="SPJIMR Mumbai" data-year="2024">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-3.webp" width="238" height="222"
                alt="Arjun Mehta video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ms1Ek6xFjr4?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>
            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Arjun Mehta</h3>
                  <p class="alumniCard__meta">Distance Learning MBA · Batch
                    of 2024</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified">✓
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"
                aria-label="Share"><svg xmlns="http://www.w3.org/2000/svg"
                  width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <circle cx="18" cy="5"
                    r="3"></circle>
                  <circle cx="6" cy="12"
                    r="3"></circle>
                  <circle cx="18" cy="19"
                    r="3"></circle>
                  <path
                    d="M8.59 13.51L15.42 17.49"></path>
                  <path
                    d="M15.41 6.51L8.59 10.49"></path>
                </svg><span>Share</span></button>
            </div>
          </div>

          <!-- Alumni Card 8 -->
          <div class="alumniCard" data-programme="Integrated MBA"
            data-college="IIM Calcutta" data-year="2023">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-4.webp" width="238" height="222"
                alt="Sneha Kapoor video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ms1Ek6xFjr4?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>
            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Sneha Kapoor</h3>
                  <p class="alumniCard__meta">Integrated MBA · Batch of
                    2023</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified">✓
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"
                aria-label="Share"><svg xmlns="http://www.w3.org/2000/svg"
                  width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <circle cx="18" cy="5"
                    r="3"></circle>
                  <circle cx="6" cy="12"
                    r="3"></circle>
                  <circle cx="18" cy="19"
                    r="3"></circle>
                  <path
                    d="M8.59 13.51L15.42 17.49"></path>
                  <path
                    d="M15.41 6.51L8.59 10.49"></path>
                </svg><span>Share</span></button>
            </div>
          </div>

          <!-- Alumni Card 9 -->
          <div class="alumniCard" data-programme="Global MBA"
            data-college="IIFT Delhi" data-year="2023">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-1.webp" width="238" height="222"
                alt="Karan Malhotra video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ms1Ek6xFjr4?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>
            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Karan Malhotra</h3>
                  <p class="alumniCard__meta">Global MBA · Batch of 2023</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified">✓
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"
                aria-label="Share"><svg xmlns="http://www.w3.org/2000/svg"
                  width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <circle cx="18" cy="5"
                    r="3"></circle>
                  <circle cx="6" cy="12"
                    r="3"></circle>
                  <circle cx="18" cy="19"
                    r="3"></circle>
                  <path
                    d="M8.59 13.51L15.42 17.49"></path>
                  <path
                    d="M15.41 6.51L8.59 10.49"></path>
                </svg><span>Share</span></button>
            </div>
          </div>

          <!-- Alumni Card 10 -->
          <div class="alumniCard" data-programme="Executive MBA (EMBA)"
            data-college="IIM Lucknow" data-year="2023">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-2.webp" width="238" height="222"
                alt="Ananya Rao video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ms1Ek6xFjr4?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>
            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Ananya Rao</h3>
                  <p class="alumniCard__meta">Executive MBA · Batch of
                    2023</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified">✓
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"
                aria-label="Share"><svg xmlns="http://www.w3.org/2000/svg"
                  width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <circle cx="18" cy="5"
                    r="3"></circle>
                  <circle cx="6" cy="12"
                    r="3"></circle>
                  <circle cx="18" cy="19"
                    r="3"></circle>
                  <path
                    d="M8.59 13.51L15.42 17.49"></path>
                  <path
                    d="M15.41 6.51L8.59 10.49"></path>
                </svg><span>Share</span></button>
            </div>
          </div>

          <!-- Alumni Card 10 -->
          <div class="alumniCard" data-programme="Executive MBA (EMBA)"
            data-college="IIM Lucknow" data-year="2023">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-3.webp" width="238" height="222"
                alt="Ananya Rao video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ms1Ek6xFjr4?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>
            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Ananya Rao</h3>
                  <p class="alumniCard__meta">Executive MBA · Batch of
                    2023</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified">✓
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"><svg
                  width="15" height="15" viewBox="0 0 24 24" fill="none"
                  aria-hidden="true">
                  <path
                    d="M4 12v7a2 2 0 002 2h12a2 2 0 002-2v-7M16 6l-4-4-4 4M12 2v14"
                    stroke="currentColor" stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"></path>
                </svg>Share</button>
            </div>
          </div>

          <!-- Alumni Card 10 -->
          <div class="alumniCard" data-programme="Executive MBA (EMBA)"
            data-college="IIM Lucknow" data-year="2023">
            <div class="alumniCard__media">
              <img src="../src/assets/images/alumni-4.webp" width="238" height="222"
                alt="Ananya Rao video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ms1Ek6xFjr4?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true">
                  <path
                    d="M8 5v14l11-7L8 5z"></path>
                </svg>
              </button>
            </div>
            <div class="alumniCard__body">
              <div class="alumniCard__head">
                <div>
                  <h3 class="alumniCard__name">Ananya Rao</h3>
                  <p class="alumniCard__meta">Executive MBA · Batch of
                    2023</p>
                  <p class="alumniCard__college"><img
                      src="../src/assets/images/iim-a-logo.webp" alt
                      width="18"
                      height="18"></p>
                </div>
                <span class="alumniBadge alumniBadge--verified">✓
                  Verified</span>
              </div>
              <p
                class="alumniCard__quote">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
              <button type="button" class="alumniCard__share"
                aria-label="Share"><svg xmlns="http://www.w3.org/2000/svg"
                  width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"
                  aria-hidden="true">
                  <circle cx="18" cy="5"
                    r="3"></circle>
                  <circle cx="6" cy="12"
                    r="3"></circle>
                  <circle cx="18" cy="19"
                    r="3"></circle>
                  <path
                    d="M8.59 13.51L15.42 17.49"></path>
                  <path
                    d="M15.41 6.51L8.59 10.49"></path>
                </svg><span>Share</span></button>
            </div>
          </div>

          <div class="examPagination" id="alumniPagination"></div>

        </div>

        <!-- Right sidebar -->
        <aside class="examAside alumniAside">

          <div class="collegeCard" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/CollegeOrUniversity">
            <div class="collegeCardLogo">
              <img src="../src/assets/images/iima-DED8g9td.webp"
                alt="IIM Ahmedabad logo" width="160" height="64"
                loading="lazy" decoding="async" itemprop="logo">
            </div>
            <div class="collegeCardBody">
              <h3 class="collegeCardName" itemprop="name">IIMA</h3>
              <p class="collegeCardLocation" itemprop="address">Ahmedabad,
                Gujarat</p>

              <div class="collegeStats">
                <div class="collegeStat">
                  <span class="collegeStatValue">₹19.5 Lakh</span>
                  <span class="collegeStatLabel">Total Fees</span>
                </div>
                <div class="collegeStat">
                  <span class="collegeStatValue">₹19 Lakh</span>
                  <span class="collegeStatLabel">Avg Package</span>
                </div>
                <div class="collegeStat">
                  <span class="collegeStatValue">95%ile</span>
                  <span class="collegeStatLabel">Cutoff</span>
                </div>
              </div>

              <p class="collegeAccepting">Accepting</p>
              <ul class="collegeTags">
                <li class="collegeTag">CAT</li>
                <li class="collegeTag">XAT</li>
                <li class="collegeTag">GMAT</li>
              </ul>

              <div class="collegeCardFooter">
                <a href="#" class="viewCoursesLink">
                  View Courses
                  <svg width="14" height="14" viewBox="0 0 24 24"
                    fill="none" aria-hidden="true">
                    <path
                      d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor"
                      stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </svg>
                </a>
                <a href="#" class="downloadBrochureBtn"
                  aria-label="Download IIMA brochure">
                  Download Brochure
                  <svg width="14" height="14" viewBox="0 0 24 24"
                    fill="none" aria-hidden="true">
                    <path
                      d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor"
                      stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <div class="collegeCard" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/CollegeOrUniversity">
            <div class="collegeCardLogo">
              <img src="../src/assets/images/iim-banglore.webp"
                alt="IIM Bangalore logo" width="160" height="64"
                loading="lazy" decoding="async" itemprop="logo">
            </div>
            <div class="collegeCardBody">
              <h3 class="collegeCardName" itemprop="name">IIM Bangalore</h3>
              <p class="collegeCardLocation" itemprop="address">Bangalore,
                Karnataka</p>

              <div class="collegeStats">
                <div class="collegeStat">
                  <span class="collegeStatValue">₹21.5 Lakh</span>
                  <span class="collegeStatLabel">Total Fees</span>
                </div>
                <div class="collegeStat">
                  <span class="collegeStatValue">₹21.5 Lakh</span>
                  <span class="collegeStatLabel">Avg Package</span>
                </div>
                <div class="collegeStat">
                  <span class="collegeStatValue">94%ile</span>
                  <span class="collegeStatLabel">Cutoff</span>
                </div>
              </div>

              <p class="collegeAccepting">Accepting</p>
              <ul class="collegeTags">
                <li class="collegeTag">CAT</li>
                <li class="collegeTag">XAT</li>
                <li class="collegeTag">GMAT</li>
              </ul>

              <div class="collegeCardFooter">
                <a href="#" class="viewCoursesLink">
                  View Courses
                  <svg width="14" height="14" viewBox="0 0 24 24"
                    fill="none" aria-hidden="true">
                    <path
                      d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor"
                      stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </svg>
                </a>
                <a href="#" class="downloadBrochureBtn"
                  aria-label="Download IIM Bangalore brochure">
                  Download Brochure
                  <svg width="14" height="14" viewBox="0 0 24 24"
                    fill="none" aria-hidden="true">
                    <path
                      d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor"
                      stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <div class="examWidget examQuickLinks">
            <h5>Quick Links</h5>
            <ul>
              <li><a href="#">Top MBA Colleges by Salary</a></li>
              <li><a href="#">MBA vs PGDM — Key Differences</a></li>
              <li><a href="#">IIM Fees 2025-26 Complete List</a></li>
              <li><a href="#">CAT 2025 Preparation Guide</a></li>
              <li><a href="#">MBA Scholarships in India</a></li>
              <li><a href="#">1-Year MBA Programs India</a></li>
              <li><a href="#">Executive MBA (EMBA) Colleges</a></li>
              <li><a href="#">Online MBA Colleges 2025</a></li>
            </ul>
          </div>

          <div class="alumniAdvertiseWidget">
            <h5>Advertise your programme</h5>
            <p>Reach 5,000+ working professionals actively comparing
              Executive MBA programs on MBA 360.</p>
            <div class="alumniAdvertiseWidget__stats">
              <div><strong>5K+</strong><span>Monthly visitors</span></div>
              <div><strong>₹40L+</strong><span>Avg CTC</span></div>
              <div><strong>PPL</strong><span>Pay-per-lead</span></div>
              <div><strong>3.8×</strong><span>Lead quality</span></div>
            </div>
            <a href="#" class="alumniAdvertiseWidget__cta">Advertise here
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                aria-hidden="true">
                <path d="M7 17L17 7M17 7H8M17 7V16"
                  stroke="currentColor" stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"></path>
              </svg></a>
          </div>
        </aside>

      </div>

    </div>
  </section>

  <section class="admissionJourney"
    aria-labelledby="admissionJourneyHeading">
    <div class="container">
      <div class="admissionJourneyInner ">
        <h2 class="marketing__heading" id="admissionJourneyHeading">Master
          your admission
          journey</h2>
        <p class="admissionJourneyText">Weekly briefing on exam
          updates, admission deadlines, placement reports, and
          editorial analysis. No spam. Unsubscribe
          anytime.</p>

        <form class="admissionJourneyForm" id="admissionJourneyForm"
          novalidate>
          <label for="admissionJourneyEmail"
            class="admissionJourneyLabel">Email
            address</label>
          <div class="admissionJourneyField">
            <input type="email" id="admissionJourneyEmail" name="email"
              class="admissionJourneyInput" placeholder="Your email address"
              autocomplete="email" required
              aria-describedby="admissionJourneyError">
            <button type="submit" class="admissionJourneySubmit">
              Subscribe
              <svg viewBox="0 0 26 26" width="22" height="22" fill="none"
                aria-hidden="true">
                <path d="M7 17L17 7M17 7H9M17 7V15" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
          <p class="admissionJourneyError" id="admissionJourneyError"
            role="alert" aria-live="polite"></p>
        </form>
      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/../includes/footer.php'; ?>
<script src="../src/js/menu.js" defer></script>
<script src="../src/js/alumni-home.js" defer></script>
<script src="../src/js/filter.js" defer></script>
</body>

</html>