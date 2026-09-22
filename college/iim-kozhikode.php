<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>MBA 360</title>
    <meta name="description"
      content="DGTL">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../favicon.svg"
      sizes="32x32">
    <link rel="apple-touch-icon" href="../favicon.svg" sizes="180x180">

    <!-- Preload LCP Hero Image (Mobile + Desktop) -->
    <!-- <link rel="preload" as="image"
            href="../src/assets/images/stay-updated-with-mba-news.webp"
            media="(max-width: 767px)" fetchpriority="high">
        <link rel="preload" as="image"
            href="../src/assets/images/stay-updated-with-mba-news.webp"
            media="(min-width: 768px)" fetchpriority="high"> -->

    <link rel="preload" as="image"
      href="../src/assets/images/stay-updated-with-mba-news.webp"
      fetchpriority="high">

    <!-- Google Fonts (Ultra Optimized) -->

    <link rel="preload"
      href="../fonts/Inter-Regular.woff2"
      as="font"
      type="font/woff2"
      crossorigin>

    <link rel="preload"
      href="../fonts/Inter-Bold.woff2"
      as="font"
      type="font/woff2"
      crossorigin>
    <!-- Critical CSS inline (BEST for FCP) -->

      <link rel="stylesheet" href="../src/css/swiper-bundle.min.css">
<link rel="stylesheet" href="../src/css/header.css">
    <link rel="stylesheet" href="../src/css/common.css">
    <link rel="stylesheet" href="../src/css/college-detail.css">
    <link rel="stylesheet" href="../src/css/alumni-speak.css">
    <link rel="stylesheet" href="../src/css/entrace-exam.css">
    <link rel="stylesheet" href="../src/css/lightbox.css">
    <link rel="stylesheet" href="../src/css/footer.css">
     <link rel="stylesheet" href="../src/css/college-pages.css">
  </head>
  <body>

    

<!-- =========================================================
     HEADER
========================================================= -->

<?php require __DIR__ . '/../includes/header.php'; ?>
<div
        class="site-header__backdrop"
        id="navBackdrop"
        hidden></div>


    <main>

      <!-- ============ HERO / HEADER ============ -->
      <section class="clg-header">
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
            <span aria-current="page">Indian Institute of Management Kozhikode </span>
          </nav>
          <div class="clg-heroTop-wrap">
            <div class="clg-heroTop">
              <div class="clg-heroMain">
                <div class="fg-div">
                  <div class="clg-logoCard">
                    <img
                      src="../src/assets/images/indian-institute-of-management-kozhikode.jpg"
                      width="64" height="64"
                      alt="Indian Institute of Management Kozhikode logo"
                      loading="eager"
                      fetchpriority="high"
                      decoding="async" />
                  </div>
                  <button type="button" class="clg-photosBtn" id="clgPhotosBtn"
                    aria-haspopup="dialog">
                    <img
                      src="../src/assets/images/view-img.webp"
                      width="64" height="64"
                      alt="SPJIMR logo"
                      loading="eager"
                      fetchpriority="high"
                      decoding="async" />
                    View Photos
                  </button>

                </div>
                <!-- Lightboxhtml -->

                <ul class="clg-gallery" id="clgGallery" hidden>
                  <li><a href="../src/assets/images/college-student.webp"
                      data-caption="Students at the SPJIMR campus library">
                      <img src="../src/assets/images/college-student.webp"
                        width="400" height="300"
                        alt="Students studying together at the SPJIMR campus library"
                        loading="lazy" decoding="async">
                    </a></li>
                  <li><a href="../src/assets/images/college-student.webp"
                      data-caption="Graduation ceremony, main auditorium">
                      <img src="../src/assets/images/college-student.webp"
                        width="400" height="300"
                        alt="Graduation ceremony in the main auditorium"
                        loading="lazy" decoding="async">
                    </a></li>
                  <li><a href="../src/assets/images/college-student.webp"
                      data-caption="Classroom discussion session">
                      <img src="../src/assets/images/college-student.webp"
                        width="400" height="300"
                        alt="Faculty leading a classroom discussion"
                        loading="lazy" decoding="async">
                    </a></li>
                </ul>

                <dialog class="clg-lightbox" id="clgLightbox"
                  aria-label="Photo gallery">
                  <div class="clg-lightbox__inner">
                    <button type="button" class="clg-lightbox__close"
                      data-action="close"
                      aria-label="Close gallery">&times;</button>
                    <button type="button"
                      class="clg-lightbox__nav clg-lightbox__nav--prev"
                      data-action="prev"
                      aria-label="Previous photo">&#8249;</button>
                    <figure class="clg-lightbox__figure">
                      <img class="clg-lightbox__img" id="clgLightboxImg" src alt
                        decoding="async">
                    </figure>
                    <button type="button"
                      class="clg-lightbox__nav clg-lightbox__nav--next"
                      data-action="next"
                      aria-label="Next photo">&#8250;</button>
                    <figcaption class="clg-lightbox__caption"
                      id="clgLightboxCaption"></figcaption>
                    <p class="clg-lightbox__counter" id="clgLightboxCounter"
                      aria-live="polite"></p>
                  </div>
                </dialog>

                <!-- Lightbox-html-end -->
                <div class="clg-titleBlock">
                  <h1 class="clg-title">Indian Institute of Management Kozhikode</h1>
                  <p class="clg-metaRow">
                    <span>Kozhikode, Kerala</span>
                    <!-- <span class="clg-divider" aria-hidden="true">|</span>
            <a href="#reviews">214 Q &amp; A</a> -->
                  </p>
                  <!-- <ul class="clg-tags">
            <li class="clg-tag">Private</li>
            <li class="clg-tag">NIRF Rank 20th</li>
          </ul> -->

                  <div class="clg-heroActions">
                    <a href="#enquire" class="btn btn--solid">Enquire Now</a>
                    <a href="#brochure" class="btn btn--outline">Download
                      Brochure</a>
                  </div>
                </div>
              </div>

            </div>

            <div class="alumniCard__media">
              <img src="../src/assets/images/slide-1.webp"
                alt="Rohan Deshpande video testimonial" loading="lazy">
              <button type="button" class="alumniCardPlay"
                aria-label="Play video testimonial"
                data-video="https://www.youtube.com/embed/ZiliZI9lDnY?autoplay=1">
                <svg width="22" height="22" viewBox="0 0 24 24"
                  fill="currentColor" aria-hidden="true"><path
                    d="M8 5v14l11-7L8 5z"></path></svg>
              </button>
            </div>

          </div>
          <div class="videoModal" id="videoModal-second">
            <div class="videoModal__overlay"></div>
            <div class="videoModal__content">
              <button class="videoModal__close">&times;</button>
              <iframe id="videoFrame-second" src
                allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
            </div>
          </div>

        </div>
      </section>

      <!-- ============ SECTION NAV ============ -->
      <nav class="clg-tabnav" aria-label="Page sections">
        <div class="container">
          <ul class="clg-tabnav__list">
            <li><a href="#overview" aria-current="true">Overview</a></li>
            <li><a href="#ranking">Ranking &amp; Accreditations</a></li>
            <li><a href="#programmes">Programmes </a></li>
            <li><a href="#dates"> Deadlines</a></li>
            <li><a href="#placements">Placement &amp; Reports</a></li>
            <li><a href="#alumni">Alumni Speak</a></li>
            <li><a href="#reviews">Student Reviews</a></li>
            <li><a href="#similar"> Colleges</a></li>
          </ul>
        </div>

      </nav>

      <section id="main-content">
        <div class="container clg-main">
          <div class="clg-layout">

            <!-- ============ MAIN CONTENT ============ -->
            <div class="clg-content">

              <!-- Overview / About -->
              <section id="overview" class="clg-section"
                aria-labelledby="overview-heading">

                <div class="clg-card clg-about" data-open="false"
                  id="about-card">
                  <h2 id="overview-heading"
                    class="clg-section__title pl-0 ">About IIM Kozhikode </h2>
                  <div class="clg-about__body">

                    <div class="clg-about__intro">
                        <p><strong>IIM Kozhikode</strong>, officially the Indian Institute of Management Kozhikode, was established in <strong>1996 as a public management institute in Kozhikode, Kerala</strong>. The institute began with its flagship two-year Post Graduate Programme and has since developed a diverse portfolio covering postgraduate management, undergraduate education, doctoral research and executive education. Its programmes include the <strong>MBA, MBA in Finance, MBA in Liberal Studies &amp; Management, MBA in Business Leadership, Bachelor of Management Studies (BMS), doctoral programmes and management programmes for working professionals</strong>.</p>

                        <p>Located in Kerala, IIM Kozhikode operates from a <strong>112.5-acre residential campus</strong> and combines classroom learning with research, case-based learning, industry interaction, peer learning and experiential opportunities. The institute also has an entrepreneurship ecosystem through <strong>IIMK LIVE</strong>, while its academic and research activities span multiple areas of management. For students researching <strong>IIM Kozhikode MBA admission</strong>, the institute's programme structure, curriculum, faculty, learning environment and career opportunities are important factors to consider alongside entrance requirements and fees.</p>

                        <p>IIM Kozhikode has built an alumni network across consulting, finance, technology, manufacturing, healthcare, entrepreneurship and other sectors. Its academic portfolio also includes programmes designed for <strong>working professionals</strong>, making the institute relevant to candidates at different career stages. Applicants comparing <strong>IIM Kozhikode with other IIMs and MBA colleges</strong> should evaluate programme fit, eligibility, entrance exams, work experience requirements, programme duration, total cost, career interests and placement information before making an application decision.</p>
                    </div>

                  </div>
                  <div class="clg-about__more" id="about-more">
                    <div>
                      <div class="clg-about__body"><br>
                        <p>IIM Kozhikode's academic ecosystem extends beyond its flagship MBA to specialised management programmes, <strong>executive MBA and management programmes for working professionals</strong>, undergraduate management education and doctoral research. This wider portfolio allows candidates to explore different pathways depending on their academic background, professional experience and career objectives. The institute's executive and doctoral programmes follow different admission and learning structures from its full-time MBA programmes.</p>

                        <p>For MBA aspirants, understanding the difference between <strong>IIM Kozhikode MBA programmes</strong>, specialised programmes such as <strong>PGP Finance and PGP Liberal Studies &amp; Management</strong>, and experienced-professional programmes such as <strong>PGP Business Leadership</strong> can help in evaluating programme fit. Candidates can also compare <strong>IIM Kozhikode fees, admission process, CAT requirements, eligibility, placements and career outcomes</strong> with comparable management institutes before applying.</p>

                        <p>The institute's location, residential campus, entrepreneurship initiatives, research environment and alumni network form part of the wider student experience. However, applicants should assess these factors alongside programme-specific information rather than relying only on overall rankings or general perceptions of the institute.</p>
                      </div>
                    </div>
                  </div>
                  <div class="clg-expandRow">
                    <button
                      type="button"
                      class="clg-expandBtn"
                      id="about-expand-btn"
                      data-toggle-target="about-card"
                      aria-expanded="false"
                      aria-controls="about-more"
                      aria-label="Show more about SPJIMR">
                      <svg width="18" height="18" viewBox="0 0 24 24"
                        fill="none" aria-hidden="true"><path d="M6 9l6 6 6-6"
                          stroke="currentColor" stroke-width="2.2"
                          stroke-linecap="round"
                          stroke-linejoin="round" /></svg>
                    </button>
                  </div>
                </div>
              </section>

              <!-- Ranking & Accreditations -->
        <section id="ranking" class="clg-section ranking reveal" aria-labelledby="ranking-heading">
          <h2 id="ranking-heading" class="clg-section__title">
            Rankings &amp; Accreditations
          </h2>
          <hr>
          <div class="clg-card">
            <h3 class="clg-subheading">
              Rankings
            </h3>
            <div class="clg-rankGrid">
              <div class="clg-rankItem">
                <p class="clg-rankItem__num">
                  #3
                </p>
                <span class="clg-rankItem__label">
                  in India
                </span>
                <p class="clg-rankItem__source">
                  Financial Times Masters in Management 2025
                </p>
              </div>
              <div class="clg-rankItem">
                <p class="clg-rankItem__num">
                  #35
                </p>
                <span class="clg-rankItem__label">
                  Globally
                </span>
                <p class="clg-rankItem__source">
                  Financial Times Masters in Management 2025
                </p>
              </div>
              <div class="clg-rankItem">
                <p class="clg-rankItem__num">
                  #1
                </p>
                <span class="clg-rankItem__label">
                  Private B-School in India
                </span>
                <p class="clg-rankItem__source">
                  Business Today–MDRA Best B-Schools Survey 2025
                </p>
              </div>
              <div class="clg-rankItem">
                <p class="clg-rankItem__num">
                  #1
                </p>
                <span class="clg-rankItem__label">
                  Private B-School in India
                </span>
                <p class="clg-rankItem__source">
                  India Today–MDRA Best Business Schools Survey 2025
                </p>
              </div>
            </div>
            <h3 class="clg-subheading">
            </h3>
            <ul class="clg-accredRow">
              
              <li class="clg-accredLogo">
               <img src="../src/assets/images/equis-logo.jpg" width="90" height="30" alt="equis accredited" loading="lazy" decoding="async">
              </li>
              <li class="clg-accredLogo">
                <img src="../src/assets/images/amba-logo.png" width="90" height="30" alt="AMBA accredited" loading="lazy" decoding="async">
              </li>
              <li class="clg-accredLogo">
                <img src="../src/assets/images/aacsb-logo.png" width="90" height="30" alt="AACSB accredited" loading="lazy" decoding="async">
              </li>
              
            </ul>
          </div>
        </section>

              <!-- Programmes Offered -->
              <section id="programmes" class="clg-section reveal"
                aria-labelledby="programmes-heading">
                <h2 id="programmes-heading"
                  class="clg-section__title">Programmes Offered</h2>
                <hr>
                <div class="clg-card">

                  <div class="clg-pillTabs" role="tablist" data-tablist="" aria-label="Programme categories">
                      <button role="tab" id="pill-pg" aria-controls="pill-pg-panel" aria-selected="true" type="button">
                        Post Graduate
                      </button>
                      <button role="tab" id="pill-doc" aria-controls="pill-doc-panel" aria-selected="false" type="button">
                        Executive
                      </button>
                      <button role="tab" id="pill-online" aria-controls="pill-online-panel" aria-selected="false" type="button">
                        Undergraduate 
                      </button>
                      <button role="tab" id="pill-fb" aria-controls="pill-fb-panel" aria-selected="false" type="button">
                        Doctoral 
                      </button>
                
                      <button role="tab" id="pill-exec" aria-controls="pill-exec-panel" aria-selected="false" type="button">
                        Executive Education
                      </button>
                  </div>

                  <div id="pill-pg-panel" role="tabpanel"
                    aria-labelledby="pill-pg" class="is-active">
                    <div class="clg-accordion">

                     <!-- PGDM — open by default -->
                <div class="clg-accItem" data-open="true" id="acc-pgdma">
                  <h3 style="margin:0;">
                    <button class="clg-accHeader" type="button" data-toggle-target="acc-pgdma" aria-expanded="true" aria-controls="acc-pgdma">
                      <span class="clg-accHeader__icon" aria-hidden="true">
                        <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                      </span>
                      <span class="clg-accHeader__title">
                        MBA / Post Graduate Programme (PGP)
                      </span>
                      <span class="clg-accHeader__toggle" aria-hidden="true">
                        –
                      </span>
                    </button>
                  </h3>
                  <div class="clg-accPanel">
                    <div class="clg-accPanel__inner">
                      <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                        <button role="tab" id="pt-overview" aria-controls="pt-overview-panel" aria-selected="true" type="button">
                          Overview
                        </button>
                        <button role="tab" id="pt-eligibility" aria-controls="pt-eligibility-panel" aria-selected="false" type="button">
                          Eligibility &amp; Admission
                        </button>
                        <button role="tab" id="pt-fees" aria-controls="pt-fees-panel" aria-selected="false" type="button">
                          Fees &amp; Scholarships
                        </button>
                        <button role="tab" id="pt-timeline" aria-controls="pt-timeline-panel" aria-selected="false" type="button">
                          Admission Timeline
                        </button>
                        <button role="tab" id="pt-faqs" aria-controls="pt-faqs-panel" aria-selected="false" type="button">
                          FAQs
                        </button>
                      </div>
                      <div id="pt-overview-panel" role="tabpanel" aria-labelledby="pt-overview">
                        <dl class="clg-factGrid">
                          <div class="clg-factBox">
                            <dt>
                              Duration
                            </dt>
                            <dd>
                              2 years | Full-time | Residential 
                            </dd>
                          </div>
                          <div class="clg-factBox">
                            <dt>
                              Programme Starts
                            </dt>
                            <dd>
                              June, as per the academic calendar for the relevant batch 
                            </dd>
                          </div>
                          <div class="clg-factBox">
                            <dt>
                              Fees
                            </dt>
                            <dd>
                              ₹23.50 lakh for the 2026-28 batch 
                            </dd>
                          </div>
                        </dl>
                                <p>The <strong>MBA at IIM Kozhikode</strong>, formally known as the Post Graduate Programme in Management (PGP), is the institute's flagship two-year, full-time residential management programme. It is designed for graduates who want to build a broad foundation in business and management before pursuing specific career paths. </p>

                                <p>The programme provides exposure to core areas of management and business, allowing students to develop an understanding of subjects such as finance, marketing, operations, strategy, economics and organisational behaviour. The residential format also provides opportunities for peer learning, academic interaction and participation in the wider campus ecosystem. </p>

                                <p>For candidates researching <strong>IIM Kozhikode MBA</strong> admission, fees, eligibility and placements, the programme should be assessed beyond CAT percentile alone. Curriculum, total cost, career interests, campus experience, placement information and the opportunity cost of a two-year residential programme are relevant factors when comparing MBA options. </p>
                          <!--<span class="imp-note">
                          *Based on the official SPJIMR PGDM 2024–26 admission brochure. Programme fees and commencement timelines are revised for each admission cycle. Applicants should verify the latest information before applying.
                           </span>-->
                      </div>
                      <div id="pt-eligibility-panel" role="tabpanel" aria-labelledby="pt-eligibility" hidden="">
                        <div class="info-heading eligibility">
                          
                          <p class="intro-text">
                               Admission to the flagship MBA is through CAT, followed by IIM Kozhikode's selection process. </p>

                             <p>   Candidates must satisfy the academic and other eligibility requirements specified for the relevant admission cycle. Shortlisting is conducted using the institute's prescribed selection framework, after which shortlisted candidates may be required to participate in the Written Ability Test and Personal Interview. </p>

                              <p>  The final selection is based on the components and weightages specified in the applicable admission policy. </p>

                              <p>  A CAT percentile should therefore not be interpreted as a guaranteed admission threshold. Candidates should evaluate the complete admission process and their overall profile. </p>
                         
                          
                        </div>
                        
                      </div>
                      <div id="pt-fees-panel" role="tabpanel" aria-labelledby="pt-fees" hidden="">
                        <p>The published programme fee for the <strong>2026-28</strong> batch is <strong>₹23.50 lakh.</strong> </p>

                        <p>The actual cost of studying at IIM Kozhikode can be higher than the programme fee because of mess, personal expenses, deposits and other applicable costs. </p>

                        <p>IIM Kozhikode provides scholarships and financial assistance under applicable institutional and government schemes. The eligibility criteria, amount and conditions vary by scholarship. </p>

                        <p>Candidates should verify the latest scholarship notification before including financial assistance in their education budget. </p>
                      </div>
                      <div id="pt-timeline-panel" role="tabpanel" aria-labelledby="pt-timeline" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Admission Stage
                                  </th>
                                  <th>
                                    Tentative Timeline*
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications Open
                                  </td>
                                  <td>
                                    As per CAT 2026 schedule
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Application Deadline
                                  </td>
                                  <td>
                                    As per CAT 2026 schedule 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Entrance exam / Selection stage 
                                  </td>
                                  <td>
                                    CAT 2026, followed by IIM Kozhikode selection process 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview 
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Final selection / Offers 
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                   Programme commencement 
                                  </td>
                                  <td>
                                    June 2027 
                                  </td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                          <span class="imp-note">
                            *Tentative timeline based on previous admission cycles. Applicants should verify the latest schedule before applying.
                          </span>
                      </div>
                      <div id="pt-faqs-panel" role="tabpanel" aria-labelledby="pt-faqs" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What CAT percentile is required for IIM Kozhikode MBA admission?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      IIM Kozhikode does not have a single published CAT percentile that guarantees admission. CAT performance is considered as part of the institute's broader shortlisting and final selection framework. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What is the total fee for IIM Kozhikode MBA?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The published programme fee for the 2026-28 batch is ₹23.50 lakh. Additional deposits, mess-related charges and personal expenses should be considered separately. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Is IIM Kozhikode MBA suitable for fresh graduates?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The two-year PGP is a postgraduate management programme for eligible graduates. Candidates should check the academic eligibility and admission policy applicable to their batch. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Should I choose IIM Kozhikode PGP over a specialised MBA?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The PGP provides broad management education. Candidates with a specific interest in areas such as finance or liberal studies can compare the specialised programmes before deciding. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What should I compare before choosing IIM Kozhikode MBA?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Compare curriculum, admission requirements, total cost, learning environment, career interests, placement information and opportunity cost with comparable MBA programmes. 
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>

                    <!-- Collapsed programme rows -->
                  <div class="clg-accItem" data-open="false" id="acc-pgdmbmb">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-pgdmbmb" aria-expanded="false" aria-controls="acc-pgdmbmb">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          MBA in Finance / PGP-Finance
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          +
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="pt-overview-acc2" aria-controls="pt-overview-panel-acc2" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="pt-eligibility-acc2" aria-controls="pt-eligibility-panel-acc2" aria-selected="false" type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="pt-feesacc-acc2" aria-controls="pt-fees-panel-acc2" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="pt-timeline-acc2" aria-controls="pt-timeline-panel-acc2" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="pt-faqs-acc2" aria-controls="pt-faqs-panel-acc2" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="pt-overview-panel-acc2" role="tabpanel" aria-labelledby="pt-overview-acc2">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                2 years | Full-time | Residential 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                June, as per the academic calendar for the relevant batch 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                                ₹23.50 lakh for the 2026-28 batch 
                              </dd>
                            </div>
                          </dl>
                                <p>The MBA in Finance at IIM Kozhikode, formally known as the Post Graduate Programme in Finance (PGP-Finance), is a two-year, full-time residential management programme with a specialised focus on finance. </p>

                                <p>The programme is relevant for graduates who want to develop management knowledge alongside deeper exposure to finance-related concepts and applications. It can be considered by candidates exploring career paths across financial services, corporate finance, investment-related roles and other finance-oriented functions. </p>

                                <p>Unlike a general management MBA, PGP-Finance has a more focused academic orientation. Candidates should therefore compare its curriculum and career relevance with the flagship PGP based on their own career interests. </p>

                                <p>For students searching for IIM Kozhikode PGP Finance fees, eligibility, admission process and entrance exams, the programme's separate admission policy is an important reference. </p>
                          <!--<span class="imp-note">
                            *Based on the official SPJIMR PGDM (Business Management) 2024–26 admission brochure. Programme fees and commencement dates are revised for each admission cycle. Applicants should verify the latest information before applying.
                          </span>-->
                        </div>
                        <div id="pt-eligibility-panel-acc2" role="tabpanel" aria-labelledby="pt-eligibility-acc2" hidden="">
                          <div class="info-heading eligibility">
                            
                            <p class="intro-text">
                                PGP-Finance accepts CAT, GMAT and GRE, subject to the conditions specified in the applicable admission policy. </p>

                                <p>For the 2026-28 batch, the admission policy specifies a minimum academic requirement in graduation, along with separate eligibility provisions for candidates holding professional qualifications such as CA, CMA and CS. 

                                <p>The selection process includes registration, shortlisting based on the prescribed Aggregate Index Score and subsequent Written Ability Test and Personal Interview for shortlisted candidates.</p>
                            
                          </div>
                          
                        </div>
                        <div id="pt-fees-panel-acc2" role="tabpanel" aria-labelledby="pt-fees-acc2" hidden="">
                               <p>  The published programme fee is ₹23.50 lakh for the 2026-28 batch. </p>

                                <p>Candidates should budget separately for applicable deposits, mess and students' activities charges, personal expenses and international immersion-related expenses. </p>

                                <p>Scholarships and financial assistance are subject to applicable IIM Kozhikode and government provisions. </p>
                        </div>
                        <div id="pt-timeline-panel-acc2" role="tabpanel" aria-labelledby="pt-timeline-acc2" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Applications  Stage
                                  </th>
                                  <th>
                                    Tentative Timeline*
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Application  Open
                                  </td>
                                  <td>
                                    As per applicable CAT / GMAT / GRE admission cycle 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Application Deadline
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Entrance exam / Selection stage 
                                  </td>
                                  <td>
                                    CAT / GMAT / GRE, as applicable 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview 
                                  </td>
                                  <td>
                                    WAT and PI, as notified 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Final selection / Offers 
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                
                                <tr>
                                  <td>
                                    Programme commencement 
                                  </td>
                                  <td>
                                    June 
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                        <div id="pt-faqs-panel-acc2" role="tabpanel" aria-labelledby="pt-faqs-acc2" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Who should consider IIM Kozhikode PGP-Finance?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                     Candidates with a clear interest in finance and related management careers can consider PGP-Finance and compare its specialised curriculum with the broader PGP. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Is PGP-Finance different from the regular IIM Kozhikode MBA?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Yes. Both are two-year residential postgraduate management programmes, but PGP-Finance has a specialised finance orientation while the flagship PGP offers broader management education. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Which entrance exams are accepted for IIM Kozhikode PGP-Finance?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                     CAT, GMAT and GRE are accepted, subject to the requirements and score conditions specified in the applicable admission policy. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What is the IIM Kozhikode PGP-Finance fee?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                     The published programme fee for the 2026-28 batch is ₹23.50 lakh, excluding applicable additional charges. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                     Does PGP-Finance guarantee a finance job?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      No management programme can guarantee an individual career outcome. Candidates should evaluate curriculum, relevant skills, recruitment opportunities and their own profile. 
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgpmc">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-pgpmc" aria-expanded="false" aria-controls="acc-pgpmc">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          MBA in Liberal Studies & Management / PGP-LSM 
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          +
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="pt-overview-acc3" aria-controls="pt-overview-panel-acc3" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="pt-eligibility-acc3" aria-controls="pt-eligibility-panel-acc3" aria-selected="false" type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="pt-fees-acc3" aria-controls="pt-fees-panel-acc3" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="pt-timeline-acc3" aria-controls="pt-timeline-panel-acc3" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="pt-faqs-acc3" aria-controls="pt-faqs-panel-acc3" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="pt-overview-panel-acc3" role="tabpanel" aria-labelledby="pt-overview-acc3">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                2 years | Full-time | Residential 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                June, as per the academic calendar for the relevant batch 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                                ₹23.50 lakh for the 2026-28 batch 
                              </dd>
                            </div>
                          </dl>
                                <p>The MBA in Liberal Studies & Management at IIM Kozhikode, formally known as the Post Graduate Programme in Liberal Studies & Management (PGP-LSM), is a two-year, full-time residential programme combining management education with liberal studies and interdisciplinary learning. </p>

                               <p> The programme is relevant for candidates who want to understand management in a wider social, economic, cultural and institutional context. Its interdisciplinary orientation distinguishes it from a conventional general management programme. </p>

                               <p> For candidates researching IIM Kozhikode PGP-LSM admission, fees, eligibility and curriculum, programme fit is an important consideration. Applicants should understand the academic orientation of the programme and assess how it connects with their intended career direction. </p>
                          
                        </div>
                        <div id="pt-eligibility-panel-acc3" role="tabpanel" aria-labelledby="pt-eligibility-acc3" hidden="">
                          <div class="info-heading eligibility">
                                <p>Candidates can apply through CAT, GMAT or GRE, subject to the requirements specified in the applicable admission policy. </p>

                                <p>For the 2026-28 batch, the published policy specifies a minimum academic requirement in graduation or post-graduation, with separate provisions for candidates holding professional qualifications. </p>

                                <p>The selection process includes registration, shortlisting through the prescribed selection framework and Written Ability Test and Personal Interview for shortlisted candidates. </p>
                          </div>
                          
                        </div>
                        <div id="pt-fees-panel-acc3" role="tabpanel" aria-labelledby="pt-fees-acc3" hidden="">
                                <p>The published programme fee is ₹23.50 lakh for the 2026-28 batch. </p>

                                <p>Candidates should also consider applicable deposits, mess-related expenses, personal costs and other programme-related expenses. </p>

                                <p>Scholarships and financial assistance are subject to the applicable institutional and government schemes. </p>
                        </div>
                        <div id="pt-timeline-panel-acc3" role="tabpanel" aria-labelledby="pt-timeline-acc3" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Admission Stage
                                  </th>
                                  <th>
                                    Tentative Timeline*
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications open 
                                  </td>
                                  <td>
                                    As per applicable CAT / GMAT / GRE admission cycle 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Application Deadline
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Entrance exam / Selection stage 
                                  </td>
                                  <td>
                                    CAT / GMAT / GRE, as applicable 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview 
                                  </td>
                                  <td>
                                    WAT and PI, as notified 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Final selection / Offers 
                                  </td>
                                  <td>
                                   As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                
                                <tr>
                                  <td>
                                    Programme Commencement
                                  </td>
                                  <td>
                                    June 
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                        <div id="pt-faqs-panel-acc3" role="tabpanel" aria-labelledby="pt-faqs-acc3" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Who should consider IIM Kozhikode PGP-LSM?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      PGP-LSM can be considered by candidates who want management education combined with liberal studies and interdisciplinary learning. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Is PGP-LSM the same as the flagship IIM Kozhikode MBA?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Both are two-year residential postgraduate programmes, but their academic orientation differs. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Which entrance exams are accepted for PGP-LSM?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      CAT, GMAT and GRE are accepted subject to the applicable admission policy. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What is the PGP-LSM fee?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The published programme fee for the 2026-28 batch is ₹23.50 lakh, excluding applicable additional charges.
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      How should I decide between PGP-LSM and the flagship PGP?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Compare the curriculum, learning orientation and career objectives. The flagship PGP provides broader management education, while PGP-LSM has a stronger interdisciplinary liberal studies component. 
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clg-accItem" data-open="false" id="acc-gmpd">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-gmpd" aria-expanded="false" aria-controls="acc-gmpd">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          MBA in Business Leadership / PGP-BL
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          +
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="pt-overview-acc4" aria-controls="pt-overview-panel-acc4" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="pt-eligibility-acc4" aria-controls="pt-eligibility-panel-acc4" aria-selected="false" type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="pt-fees-acc4" aria-controls="pt-fees-panel-acc4" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="pt-timeline-acc4" aria-controls="pt-timeline-panel-acc4" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="pt-faqs-acc4" aria-controls="pt-faqs-panel-acc4" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="pt-overview-panel-acc4" role="tabpanel" aria-labelledby="pt-overview-acc4">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                1 year | Full-time | Residential 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                First week of April 2027 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                                ₹22.50 lakh for PGP-BL 08 
                              </dd>
                            </div>
                          </dl>
                                <p>The IIM Kozhikode Post Graduate Programme in Business Leadership (PGP-BL) is a one-year, full-time residential MBA designed for graduates with substantial professional experience. </p>

                                <p>The programme combines management education with leadership-focused learning and is structured for experienced professionals seeking an intensive full-time management programme. </p>

                                <p>Its one-year format creates a different decision equation from a conventional two-year MBA. Candidates should consider the shorter duration alongside the work experience requirement, total programme cost, opportunity cost of leaving employment and intended post-MBA career direction. </p>

                                <p>For professionals researching IIM Kozhikode PGP-BL eligibility, fees, admission and placements, the programme's separate admission process should be reviewed carefully. </p>
                          
                        </div>
                        <div id="pt-eligibility-panel-acc4" role="tabpanel" aria-labelledby="pt-eligibility-acc4" hidden="">
                          <div class="info-heading eligibility">
                               <p> Candidates require a minimum of <strong>four years of full-time remunerative work experience after graduation. </strong></p>

                               <p> PGP-BL accepts <strong>CAT, GMAT and GRE,</strong> subject to the applicable programme requirements. </p>

                               <p> The admission process includes the online application, Statement of Goals and Alternative Essay, followed by Personal Interaction. </p>

                               <p> For the 2027-28 cycle, IIM Kozhikode has published three application phases. </p>
                          </div>
                          
                        </div>
                        <div id="pt-fees-panel-acc4" role="tabpanel" aria-labelledby="pt-fees-acc4" hidden="">
                                <p>The published programme fee for <strong>PGP-BL 08</strong> is <strong>₹22.50 lakh</strong>. </p>

                                <p>The application fee is <strong>₹3,000.</strong> </p>

                                <p>Candidates should separately account for mess and canteen expenses, personal expenses and international immersion-related travel and stay. </p>
                        </div>
                        <div id="pt-timeline-panel-acc4" role="tabpanel" aria-labelledby="pt-timeline-acc4" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Admission Stage
                                  </th>
                                  <th>
                                    Tentative Timeline*
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications  Open
                                  </td>
                                  <td>
                                    12 June 2026 for Phase 1; 25 July 2026 for Phase 2; 1 September 2026 for Phase 3 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Application deadline 
                                  </td>
                                  <td>
                                    15 July 2026 for Phase 1; 31 August 2026 for Phase 2; 20 November 2026 for Phase 3 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Entrance exam / Selection stage 
                                  </td>
                                  <td>
                                    CAT / GMAT / GRE, as applicable 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview 
                                  </td>
                                  <td>
                                    8-9 August 2026; 10-11 October 2026; 12-13 December 2026 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                     Final selection / Offers  
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Programme commencement 
                                  </td>
                                  <td>
                                    First week of April 2027 
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                        <div id="pt-faqs-panel-acc4" role="tabpanel" aria-labelledby="pt-faqs-acc4" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Who should consider IIM Kozhikode PGP-BL?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                     PGP-BL is designed for graduates with substantial professional experience who want an intensive one-year residential MBA.
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      How much work experience is required for PGP-BL?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The published requirement is at least four years of full-time remunerative work experience after graduation.
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What is the IIM Kozhikode PGP-BL fee?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                     The published programme fee for PGP-BL 08 is ₹22.50 lakh, excluding specified additional expenses. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                     Can I apply to PGP-BL through CAT?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                     Yes. CAT, GMAT and GRE are accepted subject to the applicable programme requirements. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Is PGP-BL suitable for a career switch?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      It can be considered by experienced professionals planning a career transition. Candidates should compare target roles, existing experience, recruitment opportunities and the opportunity cost of a full-time programme. 
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>

                     

                    </div>
                  </div>

                  <div id="pill-doc-panel" role="tabpanel" aria-labelledby="pill-doc" class="is-active">
                  <div class="clg-accordion">
                  <!-- PGDM — open by default -->
                  <div class="clg-accItem" data-open="true" id="acc-pgdm">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-pgdm" aria-expanded="true" aria-controls="acc-pgdm">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          Executive Post Graduate Programme / EPGP-IL
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          –
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="doc-overview" aria-controls="doc-overview-panel" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="doc-eligibility" aria-controls="doc-eligibility-panel" aria-selected="false"  type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="doc-fees" aria-controls="doc-fees-panel" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="doc-timeline" aria-controls="doc-timeline-panel" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="doc-faqs" aria-controls="doc-faqs-panel" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="doc-overview-panel" role="tabpanel" aria-labelledby="doc-overview">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                2 years | Interactive Learning 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                December 2026 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                                ₹16.75 lakh 
                              </dd>
                            </div>
                          </dl>
                                <p>The Executive Post Graduate Programme in Management through Interactive Learning (EPGP-IL) is a two-year MBA programme designed for working professionals who want to continue their careers while pursuing formal management education. </p>

                                <p>The programme uses an Interactive Learning format and combines structured management education with opportunities for campus-based learning and immersion. </p>

                                <p>This format makes EPGP-IL different from IIM Kozhikode's full-time residential MBA programmes. Professionals comparing an IIM Kozhikode executive MBA with a full-time MBA should consider work continuity, learning format, campus exposure, total cost and career objectives. </p>

                               <p> An important distinction is that EPGP-IL does not provide formal placement assistance. This should be considered by candidates looking at the programme as part of a career-switch strategy.</p> 
                          
                        </div>
                        <div id="doc-eligibility-panel" role="tabpanel" aria-labelledby="doc-eligibility" hidden="">
                          <div class="info-heading eligibility">
                          
                                <p>Candidates require a bachelor's degree or equivalent qualification with the prescribed academic requirement, or applicable professional qualifications such as CA, ICWA or CS. </p>

                                <p>The published eligibility requirement includes at least three years of managerial, entrepreneurial or professional experience after graduation. </p>

                                <p>The programme accepts EMAT, CAT, GRE and GMAT, subject to applicable conditions. </p>

                                <p>Selection includes the relevant test or qualifying route followed by Personal Interview. </p>           

                          </div>  
                        </div>
                        <div id="doc-fees-panel" role="tabpanel" aria-labelledby="doc-fees" hidden="">
                          <p>The published programme fee is ₹16.75 lakh. </p>

                          <p>Candidates should also account for the application fee, student welfare fund, alumni fee and campus immersion-related expenses. </p>
                          
                          
                        </div>
                        <div id="doc-timeline-panel" role="tabpanel" aria-labelledby="doc-timeline" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Admission Stage
                                  </th>
                                  <th>
                                    Timeline
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications Open
                                  </td>
                                  <td>
                                    16 March 2026 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Application Deadline
                                  </td>
                                  <td>
                                    30 September 2026 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Entrance exam / Selection stage 
                                  </td>
                                  <td>
                                    EMAT / CAT / GMAT / GRE, as applicable 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview 
                                  </td>
                                  <td>
                                    As per applicable application phase 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                   Final selection / Offers 
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Programme Commencement
                                  </td>
                                  <td>
                                    December 2026 
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                        <div id="doc-faqs-panel" role="tabpanel" aria-labelledby="doc-faqs" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                       Can I continue working while pursuing IIM Kozhikode EPGP-IL?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Yes. The programme is designed for working professionals through its Interactive Learning format. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      How much work experience is required for EPGP-IL?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The published requirement is at least three years of managerial, entrepreneurial or professional experience after graduation. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What is the IIM Kozhikode EPGP fee?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The published programme fee is ₹16.75 lakh, with specified additional charges. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                     Can EPGP-IL be used for a career switch?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Candidates can use management education for professional development, but they should note that the programme does not provide formal placement assistance. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      How is EPGP-IL different from the two-year PGP?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      EPGP-IL is designed for working professionals and allows them to continue their careers, while the PGP is a full-time residential MBA.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>




                </div>
              </div>

              <div id="pill-online-panel" role="tabpanel" aria-labelledby="pill-online" class="is-active">
                <div class="clg-accordion">
                  <!-- PGDM — open by default -->
                  <div class="clg-accItem" data-open="true" id="acc-pgdm">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-pgdm" aria-expanded="true" aria-controls="acc-pgdm">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          MBA for Working Executives, Kochi Campus 
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          –
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="online-overview" aria-controls="online-overview-panel" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="online-eligibility" aria-controls="online-eligibility-panel" aria-selected="false"  type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="online-fees" aria-controls="online-fees-panel" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="online-timeline" aria-controls="online-timeline-panel" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="online-faqs" aria-controls="online-faqs-panel" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="online-overview-panel" role="tabpanel" aria-labelledby="online-overview">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                24  Months
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                September*
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                                ₹8.00 Lakh*
                              </dd>
                            </div>
                          </dl>
                          <p>
                            SPJIMR's
                            <strong>
                              Blended Post Graduate Diploma in Management (Blended PGDM)
                            </strong>
                            is a
                            <strong>
                              24-month AICTE-approved management programme
                            </strong>
                            delivered in collaboration with TimesPro. Designed for early-career professionals and ambitious working executives, the programme combines live online learning with campus immersions, allowing participants to pursue postgraduate management education without relocating or taking a career break.
                          </p>
                          <p>
                            The curriculum covers core management disciplines during the first year, followed by elective micro-specialisations that allow participants to tailor their learning to individual career goals. Live faculty sessions, case-based learning, industry projects, Personal Growth Lab, leadership development and an Industry Integrated Learning Project (IILP) form key components of the learning experience.
                          </p>
                          <p>
                            Participants also benefit from two on-campus immersions at SPJIMR's Mumbai campus and an international immersion in Denmark organised through the programme partner. The flexible structure enables professionals to continue working while applying classroom concepts directly within their organisations.
                          </p>
                          <span class="imp-note">
                            *Based on the official SPJIMR Blended PGDM Batch 06 brochure. Programme fees, commencement dates and admission schedules may change for future intakes. Applicants should verify the latest information before applying.
                          </span>
                        </div>
                        <div id="online-eligibility-panel" role="tabpanel" aria-labelledby="online-eligibility" hidden="">
                          <div class="info-heading eligibility">
                            <p>
                              <strong>
                                Eligibility
                              </strong>
                            </p>
                            <p class="intro-text">
                              Applicants must:
                            </p>
                            <ul class="eligibility-list">
                              Hold a recognised bachelor's degree with at least 50% marks or an equivalent CGPA.
                              Have a degree recognised by the Association of Indian Universities (AIU).
                              Be a fresh graduate or an early to mid-career professional.
                              Relevant work experience and additional qualifications may strengthen the application.
                            </ul>
                          </div>
                          <div class="info-heading eligibility selection-process">
                            <p>
                              <strong>
                                Selection Process
                              </strong>
                            </p>
                            <p class="intro-text">
                              Admission generally includes:
                            </p>
                            <ul class="eligibility-list">
                              Online application through the programme partner.
                              Submission of a valid CAT, XAT, CMAT, GMAT score or the SPJIMR Blended Admission Test (SBAT).
                              Profile-based evaluation considering academics, work experience and entrance test performance.
                              Final admission decision based on the overall applicant profile.
                            </ul>
                          </div>
                        </div>
                        <div id="online-fees-panel" role="tabpanel" aria-labelledby="online-fees" hidden="">
                          <p>
                            <strong>
                              Programme Fees
                            </strong>
                          </p>
                          <p>
                            The current programme fee is
                            <strong>
                              ₹8,00,000.
                            </strong>
                          </p>
                          <p>
                            The programme fee is payable in
                            <strong>
                              five instalments
                            </strong>
                            .
                          </p>
                          <p>
                            The application fee is
                            <strong>
                              ₹1,500
                            </strong>
                            .
                          </p>
                          <p>
                            Foreign nationals, NRIs and PIO applicants pay the equivalent programme fee in INR.
                          </p>
                          <p>
                            <strong>
                              Instalment Schedule
                            </strong>
                          </p>
                          <div class="table-wrapper">
                            <table class="info-table">
                              <thead>
                                <tr>
                                  <th>
                                    Instalment
                                  </th>
                                  <th>
                                    Amount
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Admission Fee
                                  </td>
                                  <td>
                                    <strong>
                                      ₹25,000
                                    </strong>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    First Instalment
                                  </td>
                                  <td>
                                    <strong>
                                      ₹1,56,250
                                    </strong>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Second Instalment
                                  </td>
                                  <td>
                                    <strong>
                                      ₹1,56,250
                                    </strong>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Third Instalment
                                  </td>
                                  <td>
                                    <strong>
                                      ₹1,50,000
                                    </strong>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Fourth Instalment
                                  </td>
                                  <td>
                                    <strong>
                                      ₹1,56,250
                                    </strong>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Fifth Instalment
                                  </td>
                                  <td>
                                    <strong>
                                      ₹1,56,250
                                    </strong>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                         
                          <p>
                            <strong>
                              Scholarships
                            </strong>
                          </p>
                          <p>
                            The official brochure does not mention programme-specific scholarships for the Blended PGDM. Applicants should verify any financial assistance available for their admission cycle.
                          </p>
                        </div>
                        <div id="online-timeline-panel" role="tabpanel" aria-labelledby="online-timeline" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Admission Stage
                                  </th>
                                  <th>
                                    Timeline
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications Open
                                  </td>
                                  <td>
                                    As Announced
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Application Submission
                                  </td>
                                  <td>
                                    Rolling
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Profile Evaluation
                                  </td>
                                  <td>
                                    Rolling
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Admission Offers
                                  </td>
                                  <td>
                                    Rolling
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Programme Commencement
                                  </td>
                                  <td>
                                    September
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <span class="imp-note">
                            *Applicants should verify the latest admission schedule before applying.
                          </span>
                        </div>
                        <div id="online-faqs-panel" role="tabpanel" aria-labelledby="online-faqs" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Who is the Blended PGDM designed for?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The programme is intended for fresh graduates, early-career professionals and working executives who want to pursue a postgraduate management qualification without leaving their jobs or relocating.
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Can I continue working while pursuing the programme?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Yes. The programme combines live online learning with scheduled campus immersions, allowing participants to continue full-time employment while studying.
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Does the programme include campus immersion?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Yes. Participants attend
                                      <strong>
                                        two four-day campus immersions
                                      </strong>
                                      at SPJIMR's Mumbai campus during the programme.
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Is there an international learning component?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Yes. The programme includes an international immersion in Denmark, facilitated through the programme partner as part of the learning experience.
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Which entrance exams are accepted?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Applicants may submit valid
                                      <strong>
                                        CAT, XAT, CMAT or GMAT scores
                                      </strong>
                                      , or appear for the
                                      <strong>
                                        SPJIMR Blended Admission Test (SBAT)
                                      </strong>
                                      if eligible.
                                    </p>
                                  </div>
                                  <!-- FAQ 6 -->
                                  <div class="faq-item">
                                    <button class="faq-question">
                                      <span>
                                        What should applicants consider before choosing the Blended PGDM?
                                      </span>
                                      <span class="faq-icon">
                                        +
                                      </span>
                                    </button>
                                    <div class="faq-answer">
                                      <p>
                                        Applicants should compare the programme's flexible delivery model, curriculum, online learning experience, campus immersions, international exposure, total programme investment and career objectives with similar blended or online management programmes before making a decision.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="pill-fb-panel" role="tabpanel" aria-labelledby="pill-fb" class="is-active">
                <div class="clg-accordion">
                  <!-- PGDM — open by default -->
                  <div class="clg-accItem" data-open="true" id="acc-pgdm">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-pgdm" aria-expanded="true" aria-controls="acc-pgdm">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          Doctoral Programme in Management / DPM
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          –
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="fb-overview" aria-controls="fb-overview-panel" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="fb-eligibility" aria-controls="fb-eligibility-panel" aria-selected="false"  type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="fb-fees" aria-controls="fb-fees-panel" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="fb-timeline" aria-controls="fb-timeline-panel" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="fb-faqs" aria-controls="fb-faqs-panel" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="fb-overview-panel" role="tabpanel" aria-labelledby="fb-overview">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                Typically 5 years | Full-time 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                June, as per the annual doctoral academic calendar 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                                As per the applicable doctoral fee structure 
                              </dd>
                            </div>
                          </dl>
                                <p>The Doctoral Programme in Management (DPM) at IIM Kozhikode is a research-oriented doctoral programme for candidates interested in advanced management research and academic careers. 

                                <p>The programme covers eight broad research areas: 

                                <ul>
                                <li>Decision Sciences and Operations Management </li>

                                <li>Economics </li>

                                <li>Finance, Accounting and Control </li>

                                <li>Humanities and Liberal Arts in Management </li>

                                <li>Information Systems </li>

                                <li>Marketing Management </li>

                                <li>Organisational Behaviour and Human Resource Management </li>

                                <li>Strategic Management </li>

                                <p>Unlike an MBA, DPM is centred on research training, academic development and original doctoral research. It is therefore relevant for candidates considering careers in management research and teaching. </p>
                        </div>
                        <div id="fb-eligibility-panel" role="tabpanel" aria-labelledby="fb-eligibility" hidden="">
                          <div class="info-heading eligibility">
                            <p>Eligibility and qualifying examination requirements vary by research area and the applicable doctoral admission policy. </p>

                                <p>Candidates should check the annual admission notification for academic qualifications, accepted tests, research area requirements and selection stages. </p>
                           </div>
                        </div>
                        <div id="fb-fees-panel" role="tabpanel" aria-labelledby="fb-fees" hidden="">
                                <p>Doctoral fee and fellowship provisions are governed by the applicable IIM Kozhikode doctoral policy. </p>

                                <p>Candidates should verify the current fee and fellowship terms for the relevant admission cycle. </p>
                        </div>
                        <div id="fb-timeline-panel" role="tabpanel" aria-labelledby="fb-timeline" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Admission Stage
                                  </th>
                                  <th>
                                    Tentative Timeline*
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications Open
                                  </td>
                                  <td>
                                    24 November 2025 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Application Deadline 
                                  </td>
                                  <td>
                                    23 January 2026 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Entrance exam / Selection stage 
                                  </td>
                                  <td>
                                    As Scheduled*
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview 
                                  </td>
                                  <td>
                                    February to March 2026 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Final selection / Offers 
                                  </td>
                                  <td>
                                    First week of April 2026 
                                  </td>
                                </tr>
                                
                                <tr>
                                  <td>
                                    Programme Commencement
                                  </td>
                                  <td>
                                    Second week of June 2026 
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                        <div id="fb-faqs-panel" role="tabpanel" aria-labelledby="fb-faqs" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Is IIM Kozhikode DPM an MBA or a PhD?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      DPM is a doctoral programme focused on advanced management research. It is not an MBA.
                                    </p>
                                  </div>
                                </div>
                                
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Who should consider the IIM Kozhikode DPM?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Candidates interested in management research, teaching and academic careers can explore the programme. 
                                    </p>
                                  </div>
                                </div>
                                
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What research areas are available under DPM?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The programme covers eight areas spanning operations, economics, finance, humanities, information systems, marketing, organisational behaviour and strategy. 
                                    </p>
                                  </div>
                                </div>
                                
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      How long does the IIM Kozhikode doctoral programme take?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The typical duration is five years. 
                                    </p>
                                  </div>
                                </div>

                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Should an MBA aspirant choose DPM instead of an MBA?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The two programmes serve different purposes. DPM is research-oriented, while an MBA is designed primarily for management education and professional careers. 
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Collapsed programme rows -->
                  <div class="clg-accItem" data-open="false" id="acc-pgdmbmbbb">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-pgdmbmbbb" aria-expanded="false" aria-controls="acc-pgdmbmbbb">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          Doctoral Programme in Management, Teaching Track 
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          +
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="fb-overview-acc2" aria-controls="fb-overview-panel-acc2" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="fb-eligibility-acc2" aria-controls="fb-eligibility-panel-acc2" aria-selected="false" type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="fb-fees-acc2" aria-controls="fb-fees-panel-acc2" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="fb-timeline-acc2" aria-controls="fb-timeline-panel-acc2" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="fb-faqs-acc2" aria-controls="fb-faqs-panel-acc2" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="fb-overview-panel-acc2" role="tabpanel" aria-labelledby="fb-overview-acc2">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                Typically 5 years 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                June, as per the annual doctoral academic calendar 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                                As per the applicable doctoral fee structure 
                              </dd>
                            </div>
                          </dl>
                                <p>The <strong>Doctoral Programme in Management</strong>, Teaching Track is intended for candidates interested in advanced management research and teaching-oriented academic careers. </p>

                                <p>The track provides a doctoral pathway for candidates who want to develop research capabilities and build a long-term career in management education. </p>

                                <p>It should therefore be evaluated differently from professional management programmes such as an MBA or executive MBA. Candidates should consider their research interests, preferred academic area, faculty expertise and long-term academic goals. </p>
                        </div>
                        <div id="fb-eligibility-panel-acc2" role="tabpanel" aria-labelledby="fb-eligibility-acc2" hidden="">
                          
                          <div class="info-heading eligibility selection-process">
                            
                            <p class="intro-text">
                                Eligibility, research area requirements and selection criteria are governed by the annual doctoral admission policy. </p>

                                <p>Candidates should verify the latest admission notification for the relevant cycle. </p>
                            
                            
                          </div>
                        </div>
                        <div id="fb-fees-panel-acc2" role="tabpanel" aria-labelledby="fb-fees-acc2" hidden="">
                          <p>
                            Fee and fellowship provisions are subject to the applicable doctoral programme policy. 
                          </p>
                          
                        </div>
                        <div id="fb-timeline-panel-acc2" role="tabpanel" aria-labelledby="fb-timeline-acc2" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Admission Stage
                                  </th>
                                  <th>
                                    Tentative Timeline*
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications open 
                                  </td>
                                  <td>
                                    As per annual doctoral admission cycle 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Application Deadline 
                                  </td>
                                  <td>
                                    As per annual doctoral admission cycle 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Entrance exam / Selection stage 
                                  </td>
                                  <td>
                                    As per applicable doctoral selection process 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview 
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                   Final selection / Offers  
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Programme commencement 
                                  </td>
                                  <td>
                                    June, as per academic calendar 
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                        <div id="fb-faqs-panel-acc2" role="tabpanel" aria-labelledby="fb-faqs-acc2" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Who should consider the IIM Kozhikode Teaching Track?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Candidates interested in management research and academic teaching can consider this doctoral pathway. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                     Is the Teaching Track designed for conventional corporate careers?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Its primary orientation is doctoral research and academic development rather than conventional MBA-led corporate recruitment. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                     How is the Teaching Track different from the Practice Track?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The Teaching Track has a stronger academic and teaching orientation, while the Practice Track connects doctoral research more closely with professional practice. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What research areas can I pursue?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Research areas depend on the doctoral areas available in the applicable admission cycle. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Should I pursue a doctoral programme after an MBA?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      An MBA can provide relevant management knowledge, but a doctoral programme should primarily be considered by candidates with a genuine interest in research and academic work. 
                                    </p>
                                  </div>
                                </div>
                               
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Collapsed programme rows -->
                  <div class="clg-accItem" data-open="false" id="acc-pgdmbmbbbb">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-pgdmbmbbbb" aria-expanded="false" aria-controls="acc-pgdmbmbbbb">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Doctoral Programme in Management, Teaching Track" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          Doctoral Programme in Management, Practice Track
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          +
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="fb-overview-acc3" aria-controls="fb-overview-panel-acc3" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="fb-eligibility-acc3" aria-controls="fb-eligibility-panel-acc3" aria-selected="false" type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="fb-fees-acc3" aria-controls="fb-fees-panel-acc3" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="fb-timeline-acc2" aria-controls="fb-timeline-panel-acc3" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="fb-faqs-acc2" aria-controls="fb-faqs-panel-acc3" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="fb-overview-panel-acc3" role="tabpanel" aria-labelledby="fb-overview-acc3">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                Typically 5 years 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                June, as per the annual doctoral academic calendar 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                                As per the applicable doctoral fee structure 
                              </dd>
                            </div>
                          </dl>
                                <p>The Doctoral Programme in Management, Practice Track is designed for experienced professionals who want to undertake doctoral-level management research while maintaining a strong connection with professional practice. </p>

                                <p>The track provides an opportunity to examine organisational and management problems through structured doctoral research. This makes it different from both conventional full-time doctoral study and executive management qualifications. </p>

                                <p>For professionals researching a practice-oriented PhD in management, important decision factors include research interests, professional experience, academic requirements, time commitment and the ability to connect professional challenges with rigorous research. </p>
                        </div>
                        <div id="fb-eligibility-panel-acc2" role="tabpanel" aria-labelledby="fb-eligibility-acc2" hidden="">
                          <div class="info-heading eligibility">
                            
                            <p class="intro-text">
                                Eligibility and selection requirements are programme-specific and governed by the applicable doctoral admission notification. </p>

                               <p> Candidates should verify the latest policy for academic qualifications, professional experience, research area and selection process. 
                            </p>
                            
                          </div>
                          
                        </div>
                        <div id="fb-fees-panel-acc2" role="tabpanel" aria-labelledby="fb-fees-acc2" hidden="">
                          <p>
                            Fee and financial support provisions depend on the applicable doctoral policy. 
                          </p>
                          
                        </div>
                        <div id="fb-timeline-panel-acc2" role="tabpanel" aria-labelledby="fb-timeline-acc2" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Admission Stage
                                  </th>
                                  <th>
                                    Tentative Timeline*
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications
                                  </td>
                                  <td>
                                    As per annual doctoral admission cycle 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Selection Process
                                  </td>
                                  <td>
                                    As per annual doctoral admission cycle 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Entrance exam / Selection stage 
                                  </td>
                                  <td>
                                    As per applicable doctoral selection process 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview  
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Final selection / Offers 
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Programme commencement 
                                  </td>
                                  <td>
                                    June, as per academic calendar 
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                        <div id="fb-faqs-panel-acc2" role="tabpanel" aria-labelledby="fb-faqs-acc2" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What is the IIM Kozhikode Practice Track?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The programme is intended for women from business families who wish to become more actively involved in their family enterprises or explore entrepreneurship.
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Is the Practice Track suitable for working professionals?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      It is intended for experienced professionals who want to integrate professional experience with doctoral-level research.
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      How is the Practice Track different from a conventional PhD?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The Practice Track places stronger emphasis on connecting research with professional management practice. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Is the Practice Track an alternative to an executive MBA?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      No. An executive MBA is a management qualification, while the Practice Track is a doctoral research pathway. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Who should consider the Practice Track?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Experienced professionals with a genuine interest in management research and the ability to commit to doctoral-level study can explore this option. 
                                    </p>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>






                </div>
              </div>

              


              <div id="pill-exec-panel" role="tabpanel" aria-labelledby="pill-exec" class="is-active">
                <div class="clg-accordion">
                  <!-- PGDM — open by default -->
                  <div class="clg-accItem" data-open="true" id="acc-pgdm">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-pgdm" aria-expanded="true" aria-controls="acc-pgdm">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          Diploma in Management 
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          –
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="exec-overview" aria-controls="exec-overview-panel" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="exec-eligibility" aria-controls="exec-eligibility-panel" aria-selected="false"  type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="exec-fees" aria-controls="exec-fees-panel" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="exec-timeline" aria-controls="exec-timeline-panel" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="exec-faqs" aria-controls="exec-faqs-panel" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="exec-overview-panel" role="tabpanel" aria-labelledby="exec-overview">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                1 year 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                As per the applicable programme cycle 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                                ₹7.60 lakh for the published 2025 cycle 
                              </dd>
                            </div>
                          </dl>
                                <p>The <strong>Diploma in Management at IIM Kozhikode</strong> is an executive education programme designed for professionals seeking structured management learning without pursuing a conventional two-year MBA. </p>

                                <p>The programme uses a blended learning format and is relevant for professionals, entrepreneurs and other eligible candidates who want to strengthen their management knowledge while remaining connected to their professional careers. </p>

                                <p>The diploma should be evaluated separately from an MBA. Candidates considering it for career development should understand the differences in duration, qualification, learning objectives and recruitment outcomes. </p>
                      </div>
                      <div id="exec-eligibility-panel" role="tabpanel" aria-labelledby="exec-eligibility" hidden="">
                        <div class="info-heading eligibility">
                                <p>The published eligibility for the 2025 cycle included graduation with 50% or a diploma with 60%. </p>

                                <p>The programme also specified professional experience preferences. </p>

                                <p>Admission includes the <strong>Diploma Aptitude Test and Interview</strong>. </p>
                          </div>
                      </div>
                      <div id="exec-fees-panel" role="tabpanel" aria-labelledby="exec-fees" hidden="">
                          
                                <p>The published fee structure included specified campus visits, boarding, lodging and study materials. </p>

                                <p>Optional international immersion involves additional participant costs. </p>

                                <p>Candidates should verify the latest fee and inclusion structure for the relevant cycle. </p>
                      </div>
                      <div id="exec-timeline-panel" role="tabpanel" aria-labelledby="exec-timeline" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Stage
                                  </th>
                                  <th>
                                    Tentative Timeline*
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications Open
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    SApplication Deadline
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    AEntrance exam / Selection stage 
                                  </td>
                                  <td>
                                    Diploma Aptitude Test 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview 
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Final selection / Offers 
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Programme Commencement 
                                  </td>
                                  <td>
                                    As notified by IIM Kozhikode 
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                          
                      </div>
                      <div id="exec-faqs-panel" role="tabpanel" aria-labelledby="exec-faqs" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Is the IIM Kozhikode Diploma in Management equivalent to an MBA?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                       No. It is a Diploma in Management and should be evaluated separately from IIM Kozhikode's MBA programmes. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Who should consider the Diploma in Management?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Professionals seeking structured management education without committing to a conventional two-year MBA can explore the programme. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What is the IIM Kozhikode Diploma in Management fee?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The published fee for the 2025 cycle was ₹7.60 lakh. Candidates should verify the current cohort fee. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                     Is the Diploma suitable for a career switch?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Candidates should not assume that an executive education programme provides the same recruitment pathway as a full-time MBA. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What is the admission process?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      The published process includes the Diploma Aptitude Test and Interview. 
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                      </div>
                      </div>
                    </div>
                  </div>
                  <!-- Collapsed programme rows -->
                  <div class="clg-accItem" data-open="false" id="acc-pgdmbmb">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-pgdmbmb" aria-expanded="false" aria-controls="acc-pgdmbmb">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          Management Development Programmes / MDPs 
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          +
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="exec-overview-acc2" aria-controls="exec-overview-panel-acc2" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="exec-eligibility-acc2" aria-controls="exec-eligibility-panel-acc2" aria-selected="false" type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="exec-fees-acc2" aria-controls="exec-fees-panel-acc2" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="exec-timeline-acc2" aria-controls="exec-timeline-panel-acc2" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="exec-faqs-acc2" aria-controls="exec-faqs-panel-acc2" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="exec-overview-panel-acc2" role="tabpanel" aria-labelledby="exec-overview-acc2">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                Programme-specific 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                Programme-specific 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                               Programme-specific 
                              </dd>
                            </div>
                          </dl>
                                <p>IIM Kozhikode's Management Development Programmes (MDPs) provide focused learning around specific management, business, functional and leadership topics. </p>

                                <p>Unlike a degree programme, an MDP is generally designed around a defined learning objective or business capability. The institute offers programmes with different durations, delivery formats, target audiences and fees. </p>

                                <p>For working professionals, an MDP can be relevant when the learning requirement is specific and the candidate does not need a full management qualification. </p>
                        </div>
                        <div id="exec-eligibility-panel-acc2" role="tabpanel" aria-labelledby="exec-eligibility-acc2" hidden="">
                          <div class="info-heading eligibility">
                                <p> Eligibility varies by individual MDP.</p> 

                                <p>Some programmes may be designed for specific managerial levels, professional roles, functions or experience profiles. </p>

                                <p>Candidates should review the individual programme notification before applying. </p>
                                                          </div>
                          
                        </div>
                        <div id="exec-fees-panel-acc2" role="tabpanel" aria-labelledby="exec-fees-acc2" hidden="">
                                <p>Fees, inclusions and payment schedules vary by programme. </p>

                                <p>Any scholarship, sponsorship or institutional support is programme-specific. </p>
                          
                          
                          
                         
                        </div>
                        <div id="exec-timeline-panel-acc2" role="tabpanel" aria-labelledby="exec-timeline-acc2 hidden=">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Stage
                                  </th>
                                  <th>
                                    Timeline*
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications Open 
                                  </td>
                                  <td>
                                    Programme-specific 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                   Application Deadline 
                                  </td>
                                  <td>
                                    Programme-specific 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Entrance exam / Selection stage 
                                  </td>
                                  <td>
                                    Programme-specific 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview 
                                  </td>
                                  <td>
                                    Programme-specific
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Final selection / Offers 
                                  </td>
                                  <td>
                                    Programme-specific
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Programme Commencement 
                                  </td>
                                  <td>
                                    Programme-specific
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                        <div id="exec-faqs-panel-acc2" role="tabpanel" aria-labelledby="exec-faqs-acc2" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Should I choose an MDP instead of an MBA?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      An MDP is generally more focused and shorter, while an MBA provides broader management education and a formal management qualification. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Who can apply for IIM Kozhikode MDPs?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Eligibility depends on the individual programme and its intended participant profile. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      How long does an MDP take?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      There is no single duration. IIM Kozhikode offers MDPs with different formats and learning objectives. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Can an MDP support a career switch?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      It can support targeted skill development, but candidates should not assume that an MDP provides the same recruitment pathway as a full-time MBA. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      How should I choose an IIM Kozhikode MDP?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Compare the programme's learning objectives, target audience, faculty, duration, delivery format, fee and relevance to your current career needs. 
                                    </p>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Collapsed programme rows -->
                  <div class="clg-accItem" data-open="false" id="acc-pgdmbmbb">
                    <h3 style="margin:0;">
                      <button class="clg-accHeader" type="button" data-toggle-target="acc-pgdmbmbb" aria-expanded="false" aria-controls="acc-pgdmbmbb">
                        <span class="clg-accHeader__icon" aria-hidden="true">
                          <img src="../src/assets/images/book.webp" width="30" height="30" alt="Post Graduate Diploma in Management" loading="lazy" decoding="async">
                        </span>
                        <span class="clg-accHeader__title">
                          Faculty Development Programmes / FDPs 
                        </span>
                        <span class="clg-accHeader__toggle" aria-hidden="true">
                          +
                        </span>
                      </button>
                    </h3>
                    <div class="clg-accPanel">
                      <div class="clg-accPanel__inner">
                        <div class="clg-progTabs" role="tablist" data-tablist="" aria-label="PGDM details">
                          <button role="tab" id="exec-overview-acc3" aria-controls="exec-overview-panel-acc3" aria-selected="true" type="button">
                            Overview
                          </button>
                          <button role="tab" id="exec-eligibility-acc3" aria-controls="exec-eligibility-panel-acc3" aria-selected="false" type="button">
                            Eligibility &amp; Admission
                          </button>
                          <button role="tab" id="exec-fees-acc3" aria-controls="exec-fees-panel-acc3" aria-selected="false" type="button">
                            Fees &amp; Scholarships
                          </button>
                          <button role="tab" id="exec-timeline-acc3" aria-controls="exec-timeline-panel-acc3" aria-selected="false" type="button">
                            Admission Timeline
                          </button>
                          <button role="tab" id="exec-faqs-acc3" aria-controls="exec-faqs-panel-acc3" aria-selected="false" type="button">
                            FAQs
                          </button>
                        </div>
                        <div id="exec-overview-panel-acc3" role="tabpanel" aria-labelledby="exec-overview-acc3">
                          <dl class="clg-factGrid">
                            <div class="clg-factBox">
                              <dt>
                                Duration
                              </dt>
                              <dd>
                                Programme-specific 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Programme Starts
                              </dt>
                              <dd>
                                Programme-specific 
                              </dd>
                            </div>
                            <div class="clg-factBox">
                              <dt>
                                Fees
                              </dt>
                              <dd>
                                Programme-specific 
                              </dd>
                            </div>
                          </dl>
                                <p> IIM Kozhikode's <strong>Faculty Development Programmes (FDPs)</strong> are designed for faculty members, researchers and academic professionals seeking focused development in management education. </p>

                                <p>Depending on the programme, FDPs may cover contemporary management subjects, research methodologies, teaching approaches and specific academic disciplines. </p>

                                <p>For faculty members comparing management education development programmes, relevant factors include academic focus, faculty expertise, research orientation, teaching relevance, programme duration, delivery format and total cost. </p>
                        </div>
                        <div id="exec-eligibility-panel-acc3" role="tabpanel" aria-labelledby="exec-eligibility-acc3" hidden="">
                          <div class="info-heading eligibility">
                                <p>Eligibility varies by individual FDP and may depend on academic qualifications, teaching experience or institutional affiliation. </p>

                                <p>Candidates should refer to the specific programme notification for the applicable criteria. </p>
                          </div>
                          
                        </div>
                        <div id="exec-fees-panel-acc3" role="tabpanel" aria-labelledby="exec-fees-acc3" hidden="">
                                <p>Fees and any financial support are programme-specific. </p>

                                <p>Candidates should check the individual FDP page for the latest fee and payment information. </p>
                        </div>
                        <div id="exec-timeline-panel-acc3" role="tabpanel" aria-labelledby="exec-timeline-acc3" hidden="">
                          <div class="admission-table-wrapper">
                            <table class="admission-table">
                              <thead>
                                <tr>
                                  <th>
                                    Stage
                                  </th>
                                  <th>
                                    Timeline*
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Applications Open 
                                  </td>
                                  <td>
                                    Programme-specific 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                   Application Deadline 
                                  </td>
                                  <td>
                                    Programme-specific 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Entrance exam / Selection stage 
                                  </td>
                                  <td>
                                    Programme-specific 
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Shortlist / Interview 
                                  </td>
                                  <td>
                                    Programme-specific
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Final selection / Offers 
                                  </td>
                                  <td>
                                    Programme-specific
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Programme Commencement 
                                  </td>
                                  <td>
                                    Programme-specific
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                        <div id="exec-faqs-panel-acc3" role="tabpanel" aria-labelledby="exec-faqs-acc3" hidden="">
                          <section class="faq-section">
                            <div class="faq-container">
                              <div class="faq-header">
                                <h2>
                                  Frequently Asked Questions
                                </h2>
                              </div>
                              <div class="faq-list">
                                <!-- FAQ 1 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                       Who should consider an IIM Kozhikode FDP?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Faculty members, researchers and academic professionals interested in management education can explore relevant FDPs. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Is an FDP equivalent to a PhD?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      No. An FDP is a faculty development programme and is not a doctoral qualification. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Do all IIM Kozhikode FDPs have the same duration?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      No. Duration depends on the specific programme. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      Are IIM Kozhikode FDPs open to all faculty members?       
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Eligibility varies by programme, so candidates should check the specific FDP notification. 
                                    </p>
                                  </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div class="faq-item">
                                  <button class="faq-question">
                                    <span>
                                      What should faculty compare before choosing an FDP?
                                    </span>
                                    <span class="faq-icon">
                                      +
                                    </span>
                                  </button>
                                  <div class="faq-answer">
                                    <p>
                                      Compare academic focus, research relevance, faculty expertise, format, duration, eligibility and total cost. 
                                    </p>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
              
              </div>
            </div>
          </section>
              <!-- Important Dates -->
              <section id="dates" class="clg-section reveal"
                aria-labelledby="dates-heading">
                <h2 id="dates-heading" class="clg-section__title">Important
                  Dates &amp; Deadlines</h2>
                <hr>
                <div class=" clg-card clg-tableWrap">
                  <table class="clg-table">
                    <caption class="clg-visually-hidden"
                      style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);">SPJIMR
                      programme application deadlines</caption>
                    <thead>
                      <tr>
                        <th scope="col">Programme</th>
                        <th scope="col">Date / Deadline</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Post Graduate</th>
                        <td><span class="clg-dateCell"><img
                              src="../src/assets/images/calendar-icon.webp"
                              width="26" height="26"
                              alt="Post Graduate Diploma in Management"
                              loading="lazy" decoding="async" /> Nov 30,
                            2025</span></td>
                      </tr>
                      <tr>
                        <th scope="row">Executive</th>
                        <td><span class="clg-dateCell"><img
                              src="../src/assets/images/calendar-icon.webp"
                              width="26" height="26"
                              alt="Post Graduate Diploma in Management Business Management PGDM"
                              loading="lazy" decoding="async" /> Jan 4,
                            2026</span></td>
                      </tr>
                      <tr>
                        <th scope="row">Undergraduate</th>
                        <td><span class="clg-dateCell"><img
                              src="../src/assets/images/calendar-icon.webp"
                              width="26" height="26"
                              alt="Post Graduate Programme in Management"
                              loading="lazy" decoding="async" /> Nov 30,
                            2025</span></td>
                      </tr>
                      <tr>
                        <th scope="row">Doctoral</th>
                        <td><span class="clg-dateCell"><img
                              src="../src/assets/images/calendar-icon.webp"
                              width="26" height="26"
                              alt="Global Management Programme" loading="lazy"
                              decoding="async" /> Nov 30, 2025</span></td>
                      </tr>
                      <tr>
                        <th scope="row">Executive Education</th>
                        <td><span class="clg-dateCell"><img
                              src="../src/assets/images/calendar-icon.webp"
                              width="26" height="26"
                              alt="Global Management Programme" loading="lazy"
                              decoding="async" /> Nov 30, 2025</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </section>

              <!-- Programmes Offered -->
              <section id="placements" class="clg-section reveal"
                aria-labelledby="programmes-heading">
                <h2 id="programmes-heading" class="clg-section__title">Placement
                  & Reports</h2>
                <hr>
                <div class="clg-card">

                  <div class="clg-pillTabs" role="tablist" data-tablist
                    aria-label="Programme categories">
                    <button role="tab" id="pill-pg-placement"
                      aria-controls="pill-pg-panel-placement"
                      aria-selected="true" type="button">Post Graduate</button>
                    <button role="tab" id="pill-doc-placement"
                      aria-controls="pill-doc-panel-placement"
                      aria-selected="false" type="button">Doctoral</button>
                    <button role="tab" id="pill-online-placement"
                      aria-controls="pill-online-panel-placement"
                      aria-selected="false" type="button">Online
                      Education</button>
                    <button role="tab" id="pill-fb-placement"
                      aria-controls="pill-fb-panel-placement"
                      aria-selected="false" type="button">Family
                      Business</button>
                    <button role="tab" id="pill-ent-placement"
                      aria-controls="pill-ent-panel-placement"
                      aria-selected="false"
                      type="button">Entrepreneurship</button>
                    <button role="tab" id="pill-exec-placement"
                      aria-controls="pill-exec-panel-placement"
                      aria-selected="false" type="button">Executive
                      Education</button>
                  </div>

                  <div id="pill-pg-panel-placement" role="tabpanel"
                    aria-labelledby="pill-pg-placement">
                    <div class="clg-accordion">

                      <!-- PGDM — open by default -->
                      <div class="clg-accItem" data-open="true" id="acc-pgdm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdm" aria-expanded="true"
                            aria-controls="acc-pgdm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management (PGDM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">–</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel">

                          <div class="reports-grid">

                            <a class="report-card"
                              href="/reports/placement-2024-26.pdf" download
                              aria-label="Download Placement Reports 2024 to 2026">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2024–26)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2023-25.pdf" download
                              aria-label="Download Placement Reports 2023 to 2025">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2023–25)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2022-24.pdf" download
                              aria-label="Download Placement Reports 2022 to 2024">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2022–24)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2021-23.pdf" download
                              aria-label="Download Placement Reports 2021 to 2023">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2021–23)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2020-22.pdf" download
                              aria-label="Download Placement Reports 2020 to 2022">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2020–22)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2019-21.pdf" download
                              aria-label="Download Placement Reports 2019 to 2021">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2019–21)</span></span>
                            </a>

                          </div>

                        </div>
                      </div>

                      <!-- Collapsed programme rows -->
                      <div class="clg-accItem" data-open="false"
                        id="acc-pgdmbm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdmbm"
                            aria-expanded="false" aria-controls="acc-pgdmbm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management Business Management PGDM
                              (BM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A one-year full-time programme for candidates
                              with prior work experience, focused on
                              accelerating mid-career growth into general
                              management roles.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgpm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgpm" aria-expanded="false"
                            aria-controls="acc-pgpm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Programme in Management (PGPM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>Designed for working professionals, delivered
                              over weekends and short residencies to build
                              strategic and leadership capability without a
                              career break.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-gmp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-gmp" aria-expanded="false"
                            aria-controls="acc-gmp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Global Management
                              Programme (GMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>An internationally-oriented track combining
                              SPJIMR coursework with partner-university modules
                              abroad for a global business perspective.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgemp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgemp" aria-expanded="false"
                            aria-controls="acc-pgemp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Executive Management Programme (PGEMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A senior-level executive programme aimed at
                              professionals with significant experience,
                              preparing them for CXO-track leadership roles.</p>
                          </div></div>
                      </div>

                    </div>
                  </div>

                  <div id="pill-doc-panel-placement" role="tabpanel"
                    aria-labelledby="pill-doc-placement">
                    <div class="clg-accordion">

                      <!-- PGDM — open by default -->
                      <div class="clg-accItem" data-open="true" id="acc-pgdm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdm" aria-expanded="true"
                            aria-controls="acc-pgdm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management (PGDM) Doctrol</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">–</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel">

                          <div class="reports-grid">

                            <a class="report-card"
                              href="/reports/placement-2024-26.pdf" download
                              aria-label="Download Placement Reports 2024 to 2026">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2024–26)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2023-25.pdf" download
                              aria-label="Download Placement Reports 2023 to 2025">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2023–25)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2022-24.pdf" download
                              aria-label="Download Placement Reports 2022 to 2024">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2022–24)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2021-23.pdf" download
                              aria-label="Download Placement Reports 2021 to 2023">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2021–23)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2020-22.pdf" download
                              aria-label="Download Placement Reports 2020 to 2022">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2020–22)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2019-21.pdf" download
                              aria-label="Download Placement Reports 2019 to 2021">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2019–21)</span></span>
                            </a>

                          </div>

                        </div>
                      </div>

                      <!-- Collapsed programme rows -->
                      <div class="clg-accItem" data-open="false"
                        id="acc-pgdmbm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdmbm"
                            aria-expanded="false" aria-controls="acc-pgdmbm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management Business Management PGDM
                              (BM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A one-year full-time programme for candidates
                              with prior work experience, focused on
                              accelerating mid-career growth into general
                              management roles.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgpm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgpm" aria-expanded="false"
                            aria-controls="acc-pgpm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Programme in Management (PGPM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>Designed for working professionals, delivered
                              over weekends and short residencies to build
                              strategic and leadership capability without a
                              career break.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-gmp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-gmp" aria-expanded="false"
                            aria-controls="acc-gmp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Global Management
                              Programme (GMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>An internationally-oriented track combining
                              SPJIMR coursework with partner-university modules
                              abroad for a global business perspective.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgemp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgemp" aria-expanded="false"
                            aria-controls="acc-pgemp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Executive Management Programme (PGEMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A senior-level executive programme aimed at
                              professionals with significant experience,
                              preparing them for CXO-track leadership roles.</p>
                          </div></div>
                      </div>

                    </div>
                  </div>

                  <div id="pill-online-panel-placement" role="tabpanel"
                    aria-labelledby="pill-online-placement">
                    <div class="clg-accordion">

                      <!-- PGDM — open by default -->
                      <div class="clg-accItem" data-open="true" id="acc-pgdm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdm" aria-expanded="true"
                            aria-controls="acc-pgdm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management (PGDM) Doctrol
                              pill-online-placement</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">–</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel">

                          <div class="reports-grid">

                            <a class="report-card"
                              href="/reports/placement-2024-26.pdf" download
                              aria-label="Download Placement Reports 2024 to 2026">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2024–26)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2023-25.pdf" download
                              aria-label="Download Placement Reports 2023 to 2025">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2023–25)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2022-24.pdf" download
                              aria-label="Download Placement Reports 2022 to 2024">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2022–24)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2021-23.pdf" download
                              aria-label="Download Placement Reports 2021 to 2023">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2021–23)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2020-22.pdf" download
                              aria-label="Download Placement Reports 2020 to 2022">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2020–22)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2019-21.pdf" download
                              aria-label="Download Placement Reports 2019 to 2021">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2019–21)</span></span>
                            </a>

                          </div>

                        </div>
                      </div>

                      <!-- Collapsed programme rows -->
                      <div class="clg-accItem" data-open="false"
                        id="acc-pgdmbm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdmbm"
                            aria-expanded="false" aria-controls="acc-pgdmbm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management Business Management PGDM
                              (BM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A one-year full-time programme for candidates
                              with prior work experience, focused on
                              accelerating mid-career growth into general
                              management roles.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgpm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgpm" aria-expanded="false"
                            aria-controls="acc-pgpm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Programme in Management (PGPM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>Designed for working professionals, delivered
                              over weekends and short residencies to build
                              strategic and leadership capability without a
                              career break.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-gmp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-gmp" aria-expanded="false"
                            aria-controls="acc-gmp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Global Management
                              Programme (GMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>An internationally-oriented track combining
                              SPJIMR coursework with partner-university modules
                              abroad for a global business perspective.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgemp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgemp" aria-expanded="false"
                            aria-controls="acc-pgemp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Executive Management Programme (PGEMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A senior-level executive programme aimed at
                              professionals with significant experience,
                              preparing them for CXO-track leadership roles.</p>
                          </div></div>
                      </div>

                    </div>
                  </div>

                  <div id="pill-fb-panel-placement" role="tabpanel"
                    aria-labelledby="pill-fb-placement">
                    <div class="clg-accordion">

                      <!-- PGDM — open by default -->
                      <div class="clg-accItem" data-open="true" id="acc-pgdm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdm" aria-expanded="true"
                            aria-controls="acc-pgdm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management (PGDM) Doctrol
                              pill-online-placement pill-fb-placement</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">–</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel">

                          <div class="reports-grid">

                            <a class="report-card"
                              href="/reports/placement-2024-26.pdf" download
                              aria-label="Download Placement Reports 2024 to 2026">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2024–26)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2023-25.pdf" download
                              aria-label="Download Placement Reports 2023 to 2025">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2023–25)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2022-24.pdf" download
                              aria-label="Download Placement Reports 2022 to 2024">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2022–24)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2021-23.pdf" download
                              aria-label="Download Placement Reports 2021 to 2023">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2021–23)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2020-22.pdf" download
                              aria-label="Download Placement Reports 2020 to 2022">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2020–22)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2019-21.pdf" download
                              aria-label="Download Placement Reports 2019 to 2021">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2019–21)</span></span>
                            </a>

                          </div>

                        </div>
                      </div>

                      <!-- Collapsed programme rows -->
                      <div class="clg-accItem" data-open="false"
                        id="acc-pgdmbm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdmbm"
                            aria-expanded="false" aria-controls="acc-pgdmbm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management Business Management PGDM
                              (BM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A one-year full-time programme for candidates
                              with prior work experience, focused on
                              accelerating mid-career growth into general
                              management roles.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgpm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgpm" aria-expanded="false"
                            aria-controls="acc-pgpm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Programme in Management (PGPM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>Designed for working professionals, delivered
                              over weekends and short residencies to build
                              strategic and leadership capability without a
                              career break.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-gmp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-gmp" aria-expanded="false"
                            aria-controls="acc-gmp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Global Management
                              Programme (GMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>An internationally-oriented track combining
                              SPJIMR coursework with partner-university modules
                              abroad for a global business perspective.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgemp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgemp" aria-expanded="false"
                            aria-controls="acc-pgemp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Executive Management Programme (PGEMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A senior-level executive programme aimed at
                              professionals with significant experience,
                              preparing them for CXO-track leadership roles.</p>
                          </div></div>
                      </div>

                    </div>
                  </div>

                  <div id="pill-ent-panel-placement" role="tabpanel"
                    aria-labelledby="pill-ent-placement">
                    <div class="clg-accordion">

                      <!-- PGDM — open by default -->
                      <div class="clg-accItem" data-open="true" id="acc-pgdm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdm" aria-expanded="true"
                            aria-controls="acc-pgdm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management (PGDM) Doctrol
                              pill-online-placement pill-ent-placement</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">–</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel">

                          <div class="reports-grid">

                            <a class="report-card"
                              href="/reports/placement-2024-26.pdf" download
                              aria-label="Download Placement Reports 2024 to 2026">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2024–26)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2023-25.pdf" download
                              aria-label="Download Placement Reports 2023 to 2025">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2023–25)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2022-24.pdf" download
                              aria-label="Download Placement Reports 2022 to 2024">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2022–24)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2021-23.pdf" download
                              aria-label="Download Placement Reports 2021 to 2023">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2021–23)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2020-22.pdf" download
                              aria-label="Download Placement Reports 2020 to 2022">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2020–22)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2019-21.pdf" download
                              aria-label="Download Placement Reports 2019 to 2021">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2019–21)</span></span>
                            </a>

                          </div>

                        </div>
                      </div>

                      <!-- Collapsed programme rows -->
                      <div class="clg-accItem" data-open="false"
                        id="acc-pgdmbm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdmbm"
                            aria-expanded="false" aria-controls="acc-pgdmbm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management Business Management PGDM
                              (BM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A one-year full-time programme for candidates
                              with prior work experience, focused on
                              accelerating mid-career growth into general
                              management roles.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgpm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgpm" aria-expanded="false"
                            aria-controls="acc-pgpm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Programme in Management (PGPM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>Designed for working professionals, delivered
                              over weekends and short residencies to build
                              strategic and leadership capability without a
                              career break.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-gmp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-gmp" aria-expanded="false"
                            aria-controls="acc-gmp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Global Management
                              Programme (GMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>An internationally-oriented track combining
                              SPJIMR coursework with partner-university modules
                              abroad for a global business perspective.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgemp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgemp" aria-expanded="false"
                            aria-controls="acc-pgemp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Executive Management Programme (PGEMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A senior-level executive programme aimed at
                              professionals with significant experience,
                              preparing them for CXO-track leadership roles.</p>
                          </div></div>
                      </div>

                    </div>
                  </div>

                  <div id="pill-exec-panel-placement" role="tabpanel"
                    aria-labelledby="pill-exec-placement">
                    <div class="clg-accordion">

                      <!-- PGDM — open by default -->
                      <div class="clg-accItem" data-open="true" id="acc-pgdm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdm" aria-expanded="true"
                            aria-controls="acc-pgdm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management (PGDM) Doctrol
                              pill-exec-panel-placement</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">–</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel">

                          <div class="reports-grid">

                            <a class="report-card"
                              href="/reports/placement-2024-26.pdf" download
                              aria-label="Download Placement Reports 2024 to 2026">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2024–26)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2023-25.pdf" download
                              aria-label="Download Placement Reports 2023 to 2025">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2023–25)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2022-24.pdf" download
                              aria-label="Download Placement Reports 2022 to 2024">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2022–24)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2021-23.pdf" download
                              aria-label="Download Placement Reports 2021 to 2023">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2021–23)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2020-22.pdf" download
                              aria-label="Download Placement Reports 2020 to 2022">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2020–22)</span></span>
                            </a>

                            <a class="report-card"
                              href="/reports/placement-2019-21.pdf" download
                              aria-label="Download Placement Reports 2019 to 2021">
                              <svg class="pdf-icon" viewBox="0 0 40 40"
                                aria-hidden="true" focusable="false">
                                <path
                                  d="M9 4h15l7 7v25a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                  fill="#fff3ec" stroke="#ff6a00"
                                  stroke-width="1.6" />
                                <path d="M24 4v7h7" fill="none" stroke="#ff6a00"
                                  stroke-width="1.6" stroke-linejoin="round" />
                                <text x="20" y="27" text-anchor="middle"
                                  font-size="8" font-weight="700" fill="#ff6a00"
                                  font-family="Arial, sans-serif">PDF</text>
                              </svg>
                              <span class="report-text">Download Placement
                                Reports<span
                                  class="years">(2019–21)</span></span>
                            </a>

                          </div>

                        </div>
                      </div>

                      <!-- Collapsed programme rows -->
                      <div class="clg-accItem" data-open="false"
                        id="acc-pgdmbm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgdmbm"
                            aria-expanded="false" aria-controls="acc-pgdmbm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Diploma in Management Business Management PGDM
                              (BM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A one-year full-time programme for candidates
                              with prior work experience, focused on
                              accelerating mid-career growth into general
                              management roles.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgpm">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgpm" aria-expanded="false"
                            aria-controls="acc-pgpm">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Programme in Management (PGPM)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>Designed for working professionals, delivered
                              over weekends and short residencies to build
                              strategic and leadership capability without a
                              career break.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-gmp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-gmp" aria-expanded="false"
                            aria-controls="acc-gmp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Global Management
                              Programme (GMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>An internationally-oriented track combining
                              SPJIMR coursework with partner-university modules
                              abroad for a global business perspective.</p>
                          </div></div>
                      </div>

                      <div class="clg-accItem" data-open="false" id="acc-pgemp">
                        <h3 style="margin:0;">
                          <button class="clg-accHeader" type="button"
                            data-toggle-target="acc-pgemp" aria-expanded="false"
                            aria-controls="acc-pgemp">
                            <span class="clg-accHeader__icon"
                              aria-hidden="true"><img
                                src="../src/assets/images/book.webp" width="30"
                                height="30"
                                alt="Post Graduate Diploma in Management"
                                loading="lazy" decoding="async" /></span>
                            <span class="clg-accHeader__title">Post Graduate
                              Executive Management Programme (PGEMP)</span>
                            <span class="clg-accHeader__toggle"
                              aria-hidden="true">+</span>
                          </button>
                        </h3>
                        <div class="clg-accPanel"><div
                            class="clg-accPanel__inner">
                            <p>A senior-level executive programme aimed at
                              professionals with significant experience,
                              preparing them for CXO-track leadership roles.</p>
                          </div></div>
                      </div>

                    </div>
                  </div>

                </div>
              </section>

              <section class="college-alumni-page"
                aria-labelledby="entranceExamsHeading">
                <div class="topExamsWrap">

                  <div class="as-head">
                    <div>

                      <h2 id="alumni"
                        class="clg-section__title pl-0 pt-0 reveal visible">Alumni
                        speak</h2>

                      <!-- <p class="topColleges-sub">Verified video testimonials from real
              alumni.</p> -->
                    </div>

                  </div>
                  <div class="alumni-slider">

                    <div class="swiper alumniSwiper">
                      <div class="swiper-wrapper">

                        <!-- SLIDE 1 -->
                        <div class="swiper-slide">
                          <article class="alumniCard" itemprop="itemListElement"
                            itemscope itemtype="https://schema.org/Person"
                            data-video-id="gLyns5_dCDY">
                            <button type="button" class="alumniCardPlay"
                              aria-label="Play video story of Rajat Prakash"
                              aria-haspopup="dialog">
                              <svg viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true"><path
                                  d="M8 5v14l11-7z" /></svg>
                            </button>
                            <div class="alumniCardHeader">
                              <img class="alumniCardAvatar"
                                src="https://i.pravatar.cc/120?img=44"
                                width="52"
                                height="52" loading="lazy" decoding="async"
                                alt="Rajat Prakash">
                              <div>
                                <h3 class="alumniCardName">Rajat Prakash</h3>
                              </div>
                            </div>
                            <ol class="tl">
                              <li class="tlStep">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/dgtl-360.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="DGTL"></span>
                                <!-- <p class="tlLabel">Before SOIL</p> -->
                                <p class="tlTitle">Client Servicing
                                  Associate</p>
                                <p class="tlSub">Financial services</p>
                              </li>
                              <li class="tlStep tlStep--current">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/spjimr.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="SPJMIR"></span>
                                <!-- <p class="tlLabel">At SOIL</p> -->
                                <p class="tlTitle">PGDM · Finance</p>
                                <p class="tlSub">2-Year, Manesar</p>
                              </li>
                              <li class="tlStep tlStep--now">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/microsoft.webp"
                                    width="26"
                                    height="26" loading="lazy" decoding="async"
                                    alt="Microsoft"></span>
                                <!-- <p class="tlLabel">Now</p> -->
                                <p class="tlTitle" itemprop="jobTitle">Business
                                  Manager —
                                  Wealth &amp; Premier Banking</p>
                                <p class="tlSub">BFSI</p>
                              </li>
                            </ol>
                          </article>
                        </div>

                        <!-- SLIDE 2 -->
                        <div class="swiper-slide">
                          <article class="alumniCard" itemprop="itemListElement"
                            itemscope itemtype="https://schema.org/Person"
                            data-video-id="33QeHqVdM5I">
                            <button type="button" class="alumniCardPlay"
                              aria-label="Play video story of Keshvi Gautam"
                              aria-haspopup="dialog">
                              <svg viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true"><path
                                  d="M8 5v14l11-7z" /></svg>
                            </button>
                            <div class="alumniCardHeader">
                              <img class="alumniCardAvatar"
                                src="https://i.pravatar.cc/120?img=45"
                                width="52"
                                height="52" loading="lazy" decoding="async"
                                alt="Keshvi Gautam">
                              <div>
                                <h3 class="alumniCardName">Keshvi Gautam</h3>

                              </div>
                            </div>
                            <ol class="tl">
                              <li class="tlStep">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/dgtl-360.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="DGTL"></span>
                                <!-- <p class="tlLabel">Before SOIL</p> -->
                                <p class="tlTitle">System Engineer</p>
                                <p class="tlSub">IT Services</p>
                              </li>
                              <li class="tlStep tlStep--current">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/spjimr.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="SPJMIR"></span>
                                <!-- <p class="tlLabel">At SOIL</p> -->
                                <p class="tlTitle">PGDM · Analytics</p>
                                <p class="tlSub">Domain-shift track</p>
                              </li>
                              <li class="tlStep tlStep--now">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/microsoft.webp"
                                    width="26"
                                    height="26" loading="lazy" decoding="async"
                                    alt="Microsoft"></span>
                                <!-- <p class="tlLabel">Now</p> -->
                                <p class="tlTitle" itemprop="jobTitle">Business
                                  Architecture Senior Analyst</p>
                                <p class="tlSub">Global consulting</p>
                              </li>
                            </ol>
                          </article>
                        </div>

                        <!-- SLIDE 3 -->
                        <div class="swiper-slide">
                          <article class="alumniCard" itemprop="itemListElement"
                            itemscope itemtype="https://schema.org/Person"
                            data-video-id="1XUi1nA2lyQ">
                            <button type="button" class="alumniCardPlay"
                              aria-label="Play video story of Nikhil Arora"
                              aria-haspopup="dialog">
                              <svg viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true"><path
                                  d="M8 5v14l11-7z" /></svg>
                            </button>
                            <div class="alumniCardHeader">
                              <img class="alumniCardAvatar"
                                src="https://i.pravatar.cc/120?img=46"
                                width="52"
                                height="52" loading="lazy" decoding="async"
                                alt="Nikhil Arora">
                              <div>
                                <h3 class="alumniCardName">Nikhil Arora</h3>

                              </div>
                            </div>
                            <ol class="tl">
                              <li class="tlStep">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/dgtl-360.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="DGTL"></span>
                                <!-- <p class="tlLabel">Before SOIL</p> -->
                                <p class="tlTitle">Fresh Graduate</p>
                                <p class="tlSub">B.Tech, no work experience</p>
                              </li>
                              <li class="tlStep tlStep--current">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/spjimr.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="SPJMIR"></span>
                                <!-- <p class="tlLabel">At SOIL</p> -->
                                <p class="tlTitle">PGDM · Marketing</p>
                                <p class="tlSub">Design Thinking track</p>
                              </li>
                              <li class="tlStep tlStep--now">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/microsoft.webp"
                                    width="26"
                                    height="26" loading="lazy" decoding="async"
                                    alt="Microsoft"></span>
                                <!-- <p class="tlLabel">Now</p> -->
                                <p class="tlTitle" itemprop="jobTitle">Assistant
                                  Brand
                                  Manager</p>
                                <p class="tlSub">Consumer goods</p>
                              </li>
                            </ol>
                          </article>
                        </div>

                        <!-- SLIDE 4 -->
                        <div class="swiper-slide">
                          <article class="alumniCard" itemprop="itemListElement"
                            itemscope itemtype="https://schema.org/Person"
                            data-video-id="nqmrrkUvhRw">
                            <button type="button" class="alumniCardPlay"
                              aria-label="Play video story of Shreya Kapoor"
                              aria-haspopup="dialog">
                              <svg viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true"><path
                                  d="M8 5v14l11-7z" /></svg>
                            </button>
                            <div class="alumniCardHeader">
                              <img class="alumniCardAvatar"
                                src="https://i.pravatar.cc/120?img=47"
                                width="52"
                                height="52" loading="lazy" decoding="async"
                                alt="Shreya Kapoor">
                              <div>
                                <h3 class="alumniCardName">Shreya Kapoor</h3>

                              </div>
                            </div>
                            <ol class="tl">
                              <li class="tlStep">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/dgtl-360.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="DGTL"></span>
                                <!-- <p class="tlLabel">Before SOIL</p> -->
                                <p class="tlTitle">Junior Associate</p>
                                <p class="tlSub">EdTech operations</p>
                              </li>
                              <li class="tlStep tlStep--current">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/spjimr.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="SPJMIR"></span>
                                <!-- <p class="tlLabel">At SOIL</p> -->
                                <p class="tlTitle">PGDM · Analytics</p>
                                <p class="tlSub">Live capstone projects</p>
                              </li>
                              <li class="tlStep tlStep--now">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/microsoft.webp"
                                    width="26"
                                    height="26" loading="lazy" decoding="async"
                                    alt="Microsoft"></span>
                                <!-- <p class="tlLabel">Now</p> -->
                                <p class="tlTitle" itemprop="jobTitle">Senior
                                  Data
                                  Analyst</p>
                                <p class="tlSub">Technology</p>
                              </li>
                            </ol>
                          </article>
                        </div>

                        <!-- SLIDE 5 -->
                        <div class="swiper-slide">
                          <article class="alumniCard" itemprop="itemListElement"
                            itemscope itemtype="https://schema.org/Person"
                            data-video-id="wubJqRtFFvE">
                            <button type="button" class="alumniCardPlay"
                              aria-label="Play video story of Aman Verma"
                              aria-haspopup="dialog">
                              <svg viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true"><path
                                  d="M8 5v14l11-7z" /></svg>
                            </button>
                            <div class="alumniCardHeader">
                              <img class="alumniCardAvatar"
                                src="https://i.pravatar.cc/120?img=48"
                                width="52"
                                height="52" loading="lazy" decoding="async"
                                alt="Aman Verma">
                              <div>
                                <h3 class="alumniCardName">Aman Verma</h3>

                              </div>
                            </div>
                            <ol class="tl">
                              <li class="tlStep">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/dgtl-360.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="DGTL"></span>
                                <!-- <p class="tlLabel">Before SOIL</p> -->
                                <p class="tlTitle">Graduate Engineer</p>
                                <p class="tlSub">Automotive manufacturing</p>
                              </li>
                              <li class="tlStep tlStep--current">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/spjimr.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="SPJMIR"></span>
                                <!-- <p class="tlLabel">At SOIL</p> -->
                                <p class="tlTitle">PGDM · Operations</p>
                                <p class="tlSub">Summer internship, L&amp;T</p>
                              </li>
                              <li class="tlStep tlStep--now">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/microsoft.webp"
                                    width="26"
                                    height="26" loading="lazy" decoding="async"
                                    alt="Microsoft"></span>
                                <!-- <p class="tlLabel">Now</p> -->
                                <p class="tlTitle" itemprop="jobTitle">Manager —
                                  Supply
                                  Chain Planning</p>
                                <p class="tlSub">Industrials</p>
                              </li>
                            </ol>
                          </article>
                        </div>

                        <!-- SLIDE 6 -->
                        <div class="swiper-slide">
                          <article class="alumniCard" itemprop="itemListElement"
                            itemscope itemtype="https://schema.org/Person"
                            data-video-id="CYO-_DE3nW">
                            <button type="button" class="alumniCardPlay"
                              aria-label="Play video story of Priya Nair"
                              aria-haspopup="dialog">
                              <svg viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true"><path
                                  d="M8 5v14l11-7z" /></svg>
                            </button>
                            <div class="alumniCardHeader">
                              <img class="alumniCardAvatar"
                                src="https://i.pravatar.cc/120?img=49"
                                width="52"
                                height="52" loading="lazy" decoding="async"
                                alt="Priya Nair">
                              <div>
                                <h3 class="alumniCardName">Priya Nair</h3>

                              </div>
                            </div>
                            <ol class="tl">
                              <li class="tlStep">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/cat-logo.webp"
                                    width="26"
                                    height="26" loading="lazy" decoding="async"
                                    alt></span>
                                <!-- <p class="tlLabel">Before SOIL</p> -->
                                <p class="tlTitle">Fresh Graduate</p>
                                <p class="tlSub">B.Com honours</p>
                              </li>
                              <li class="tlStep tlStep--current">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/spjimr.webp"
                                    width="54"
                                    height="21" loading="lazy" decoding="async"
                                    alt="SPJMIR"></span>
                                <!-- <p class="tlLabel">At SOIL</p> -->
                                <p class="tlTitle">PGDM · Finance</p>
                                <p class="tlSub">CFA-aligned electives</p>
                              </li>
                              <li class="tlStep tlStep--now">
                                <span class="tlMarker" aria-hidden="true"><img
                                    src="../src/assets/images/microsoft.webp"
                                    width="26"
                                    height="26" loading="lazy" decoding="async"
                                    alt="Microsoft"></span>
                                <!-- <p class="tlLabel">Now</p> -->
                                <p class="tlTitle" itemprop="jobTitle">Equity
                                  Research
                                  Analyst</p>
                                <p class="tlSub">Global markets</p>
                              </li>
                            </ol>
                          </article>
                        </div>

                      </div>

                    </div>
                    <button type="button" class="alumniNavBtnPrev as-nav-btn"
                      id="alumniPrev" aria-label="Previous alumni story">
                      <svg width="18" height="18" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M15 18l-6-6 6-6" stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </button>
                    <button type="button" class="alumniNavBtnNext as-nav-btn"
                      id="alumniNext" aria-label="Next alumni story">
                      <svg width="18" height="18" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M9 18l6-6-6-6" stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </button>
                  </div>

                </div>
              </section>

              <!-- Video popup (iframe built only on click; destroyed on close) -->
              <div class="videoModal" id="videoModal" role="dialog"
                aria-modal="true"
                aria-hidden="true" aria-label="Alumni video story">
                <div class="videoModalBackdrop" data-close></div>
                <div class="videoModalBox">
                  <div class="videoModalFrame" id="videoFrame"></div>
                  <button type="button" class="videoModalClose" data-close
                    aria-label="Close video">&times;</button>
                </div>
              </div>

              <!-- SVG sprite: sirf ek baar define, sab jagah <use> se reuse -> extra HTTP request / duplicate markup nahi -->
              <svg width="0" height="0" style="position: absolute"
                aria-hidden="true">
                <symbol id="icon-star-filled" viewBox="0 0 20 20">
                  <path
                    class="starFilled"
                    d="M10 1.5l2.6 5.27 5.82.85-4.21 4.1 1 5.8L10 14.9l-5.21 2.62 1-5.8-4.21-4.1 5.82-.85L10 1.5z" />
                </symbol>
                <symbol id="icon-star-empty" viewBox="0 0 20 20">
                  <path
                    class="starEmpty"
                    d="M10 1.5l2.6 5.27 5.82.85-4.21 4.1 1 5.8L10 14.9l-5.21 2.62 1-5.8-4.21-4.1 5.82-.85L10 1.5z" />
                </symbol>
                <symbol id="icon-arrow" viewBox="0 0 16 16">
                  <path
                    d="M4 12L12 4M12 4H5M12 4V11"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </symbol>
              </svg>

              <section class="studentReviews"
                aria-labelledby="studentReviewsHeading">
                <!-- Summary card -->
                <div class="reviewsSummaryCard reveal">
                  <div class="reviewsSummaryHeader">

                    <h2 id="reviews" class="clg-section__title pl-0 reveal ">
                      Student Reviews</h2>
                    <a href="#write-review" class="inlineLink">
                      Write a review
                      <svg aria-hidden="true"><use
                          href="#icon-arrow"></use></svg>
                    </a>
                  </div>

                  <div class="reviewsSummaryBody">
                    <!-- Overall score -->
                    <div class="overallRating">
                      <span class="overallRatingScore">4.4</span>
                      <span
                        class="starRow"
                        role="img"
                        aria-label="4.4 out of 5 stars">
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-empty"></use></svg>
                      </span>
                      <span class="reviewsCount">312 reviews</span>
                    </div>

                    <!-- Rating bars -->
                    <ul class="ratingBars">
                      <li class="ratingBarRow">
                        <span class="ratingLabel"
                          id="rb-placements">Placements</span>
                        <span
                          class="ratingBarTrack"
                          role="progressbar"
                          aria-labelledby="rb-placements"
                          aria-valuemin="0"
                          aria-valuemax="5"
                          aria-valuenow="4.5">
                          <span class="ratingBarFill" style="width: 90%"></span>
                        </span>
                        <span class="ratingValue" aria-hidden="true">4.5</span>
                      </li>
                      <li class="ratingBarRow">
                        <span class="ratingLabel" id="rb-faculty">Faculty</span>
                        <span
                          class="ratingBarTrack"
                          role="progressbar"
                          aria-labelledby="rb-faculty"
                          aria-valuemin="0"
                          aria-valuemax="5"
                          aria-valuenow="4.4">
                          <span class="ratingBarFill" style="width: 88%"></span>
                        </span>
                        <span class="ratingValue" aria-hidden="true">4.4</span>
                      </li>
                      <li class="ratingBarRow">
                        <span class="ratingLabel" id="rb-roi">ROI</span>
                        <span
                          class="ratingBarTrack"
                          role="progressbar"
                          aria-labelledby="rb-roi"
                          aria-valuemin="0"
                          aria-valuemax="5"
                          aria-valuenow="4.1">
                          <span class="ratingBarFill" style="width: 82%"></span>
                        </span>
                        <span class="ratingValue" aria-hidden="true">4.1</span>
                      </li>
                      <li class="ratingBarRow">
                        <span class="ratingLabel" id="rb-campus">Campus
                          Life</span>
                        <span
                          class="ratingBarTrack"
                          role="progressbar"
                          aria-labelledby="rb-campus"
                          aria-valuemin="0"
                          aria-valuemax="5"
                          aria-valuenow="4.3">
                          <span class="ratingBarFill" style="width: 86%"></span>
                        </span>
                        <span class="ratingValue" aria-hidden="true">4.3</span>
                      </li>
                      <li class="ratingBarRow">
                        <span class="ratingLabel" id="rb-peer">Peer
                          Quality</span>
                        <span
                          class="ratingBarTrack"
                          role="progressbar"
                          aria-labelledby="rb-peer"
                          aria-valuemin="0"
                          aria-valuemax="5"
                          aria-valuenow="4.6">
                          <span class="ratingBarFill" style="width: 92%"></span>
                        </span>
                        <span class="ratingValue" aria-hidden="true">4.6</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- Review cards -->
                <ul class="reviewsList">
                  <li class="reviewCard reveal">
                    <div class="reviewCardHeader">
                      <img
                        class="reviewAvatar"
                        src="../src/assets/images/rahul-kumar.webp"
                        alt
                        width="48"
                        height="48"
                        loading="lazy"
                        decoding="async" />
                      <div class="reviewMeta">
                        <h3 class="reviewerName">Rahul Kumar</h3>
                        <p class="reviewerProgram">PGDM 2022–24 · Now at BCG</p>
                      </div>
                      <span class="starRow" role="img"
                        aria-label="5 out of 5 stars">
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                      </span>
                    </div>
                    <p class="reviewText">
                      The DCC programme was genuinely transformative — not a CSR
                      box-tick. Peer quality is exceptional and the Mumbai
                      location
                      gives unmatched access to finance and consulting roles.
                      Placement support is outstanding.
                    </p>
                  </li>

                  <li class="reviewCard reveal">
                    <div class="reviewCardHeader">
                      <img
                        class="reviewAvatar"
                        src="../src/assets/images/priya.webp"
                        alt
                        width="48"
                        height="48"
                        loading="lazy"
                        decoding="async" />
                      <div class="reviewMeta">
                        <h3 class="reviewerName">Priya Sharma</h3>
                        <p class="reviewerProgram">
                          PGDM 2021–23 · Now at Hindustan Unilever
                        </p>
                      </div>
                      <span class="starRow" role="img"
                        aria-label="5 out of 5 stars">
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                        <svg aria-hidden="true"><use
                            href="#icon-star-filled"></use></svg>
                      </span>
                    </div>
                    <p class="reviewText">
                      Exceptional faculty, especially marketing and strategy.
                      Live
                      projects across all trimesters give you a practical edge.
                      Campus is compact for Mumbai, but the location compensates
                      for it entirely.
                    </p>
                  </li>
                </ul>

                <div class="seeAllWrap">
                  <a href="#all-reviews" class="inlineLink">
                    See all 312 reviews
                    <svg aria-hidden="true"><use href="#icon-arrow"></use></svg>
                  </a>
                </div>
              </section>

              <section class="similarColleges"
                aria-labelledby="similarCollegesTitle" itemscope
                itemtype="https://schema.org/ItemList">

                <div class="similarCollegesWrap">
                  <h2 id="similar"
                    class="clg-section__title pl-0 reveal visible">Similar
                    Colleges</h2>
                  <ul class="collegeGrid" role="list">

                    <!-- <li class="collegeCard reveal" itemprop="itemListElement" itemscope itemtype="https://schema.org/CollegeOrUniversity">
        <div class="collegeCardLogo">
          <img
              src="../src/assets/images/iima.webp"
            alt="IIM Ahmedabad logo"
            width="160" height="64"
            loading="lazy" decoding="async"
            itemprop="logo" />
        </div>
        <div class="collegeCardBody">
          <h3 class="collegeCardName" itemprop="name">IIMA</h3>
          <p class="collegeCardLocation" itemprop="address">Ahmedabad, Gujarat</p>

          <div class="collegeStats">
            <div class="collegeStat">
              <span class="collegeStatValue">₹19.5 L</span>
              <span class="collegeStatLabel">Total Fees</span>
            </div>
            <div class="collegeStat">
              <span class="collegeStatValue">₹19 L</span>
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
              View College
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <a href="#" class="downloadBrochureBtn" aria-label="Download IIMA brochure">
              Download Brochure
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </div>
      </li>

      <li class="collegeCard revealright delay-1" itemprop="itemListElement" itemscope itemtype="https://schema.org/CollegeOrUniversity">
        <div class="collegeCardLogo">
          <img
              src="../src/assets/images/iima.webp"
            alt="IIM Bangalore logo"
            width="160" height="64"
            loading="lazy" decoding="async"
            itemprop="logo" />
        </div>
        <div class="collegeCardBody">
          <h3 class="collegeCardName" itemprop="name">IIM Bangalore</h3>
          <p class="collegeCardLocation" itemprop="address">Bangalore, Karnataka</p>

          <div class="collegeStats">
            <div class="collegeStat">
              <span class="collegeStatValue">₹21.5 L</span>
              <span class="collegeStatLabel">Total Fees</span>
            </div>
            <div class="collegeStat">
              <span class="collegeStatValue">₹21.5 L</span>
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
              View College
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <a href="#" class="downloadBrochureBtn" aria-label="Download IIM Bangalore brochure">
              Download Brochure
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </div>
      </li> -->

                    <li class="collegeCard revealright delay-2"
                      itemprop="itemListElement" itemscope
                      itemtype="https://schema.org/CollegeOrUniversity">
                      <div class="collegeCardLogo">
                        <img
                          src="../src/assets/images/iima.webp"
                          alt="IIM Calcutta logo"
                          width="160" height="64"
                          loading="lazy" decoding="async"
                          itemprop="logo" />
                      </div>
                      <div class="collegeCardBody">
                        <h3 class="collegeCardName" itemprop="name">IIM
                          Calcutta</h3>
                        <p class="collegeCardLocation"
                          itemprop="address">Kolkata, West Bengal</p>

                        <div class="collegeStats">
                          <div class="collegeStat">
                            <span class="collegeStatValue">₹17.5 L</span>
                            <span class="collegeStatLabel">Total Fees</span>
                          </div>
                          <div class="collegeStat">
                            <span class="collegeStatValue">₹23.5 L</span>
                            <span class="collegeStatLabel">Avg Package</span>
                          </div>
                          <div class="collegeStat">
                            <span class="collegeStatValue">98%ile</span>
                            <span class="collegeStatLabel">Cutoff</span>
                          </div>
                        </div>

                        <p class="collegeAccepting">Accepting</p>
                        <ul class="collegeTags">
                          <li class="collegeTag">CAT</li>
                        </ul>

                        <div class="collegeCardFooter">
                          <a href="#" class="viewCoursesLink">
                            View College
                            <svg width="14" height="14" viewBox="0 0 24 24"
                              fill="none" aria-hidden="true"><path
                                d="M7 17L17 7M17 7H8M17 7V16"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                          </a>
                          <a href="#" class="downloadBrochureBtn"
                            aria-label="Download IIM Calcutta brochure">
                            Download Brochure
                            <svg width="14" height="14" viewBox="0 0 24 24"
                              fill="none" aria-hidden="true"><path
                                d="M7 17L17 7M17 7H8M17 7V16"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                          </a>
                        </div>
                      </div>
                    </li>

                    <li class="collegeCard revealleft"
                      itemprop="itemListElement" itemscope
                      itemtype="https://schema.org/CollegeOrUniversity">
                      <div class="collegeCardLogo">
                        <img
                          src="../src/assets/images/iima.webp"
                          alt="IIM Ahmedabad logo"
                          width="160" height="64"
                          loading="lazy" decoding="async"
                          itemprop="logo" />
                      </div>
                      <div class="collegeCardBody">
                        <h3 class="collegeCardName" itemprop="name">IIMA</h3>
                        <p class="collegeCardLocation"
                          itemprop="address">Ahmedabad, Gujarat</p>

                        <div class="collegeStats">
                          <div class="collegeStat">
                            <span class="collegeStatValue">₹19.5 L</span>
                            <span class="collegeStatLabel">Total Fees</span>
                          </div>
                          <div class="collegeStat">
                            <span class="collegeStatValue">₹19 L</span>
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
                            View College
                            <svg width="14" height="14" viewBox="0 0 24 24"
                              fill="none" aria-hidden="true"><path
                                d="M7 17L17 7M17 7H8M17 7V16"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                          </a>
                          <a href="#" class="downloadBrochureBtn"
                            aria-label="Download IIMA brochure">
                            Download Brochure
                            <svg width="14" height="14" viewBox="0 0 24 24"
                              fill="none" aria-hidden="true"><path
                                d="M7 17L17 7M17 7H8M17 7V16"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                          </a>
                        </div>
                      </div>
                    </li>

                    <li class="collegeCard reveal delay-1"
                      itemprop="itemListElement" itemscope
                      itemtype="https://schema.org/CollegeOrUniversity">
                      <div class="collegeCardLogo">
                        <img
                          src="../src/assets/images/iima.webp"
                          alt="IIM Bangalore logo"
                          width="160" height="64"
                          loading="lazy" decoding="async"
                          itemprop="logo" />
                      </div>
                      <div class="collegeCardBody">
                        <h3 class="collegeCardName" itemprop="name">IIM
                          Bangalore</h3>
                        <p class="collegeCardLocation"
                          itemprop="address">Bangalore, Karnataka</p>

                        <div class="collegeStats">
                          <div class="collegeStat">
                            <span class="collegeStatValue">₹21.5 L</span>
                            <span class="collegeStatLabel">Total Fees</span>
                          </div>
                          <div class="collegeStat">
                            <span class="collegeStatValue">₹21.5 L</span>
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
                            View College
                            <svg width="14" height="14" viewBox="0 0 24 24"
                              fill="none" aria-hidden="true"><path
                                d="M7 17L17 7M17 7H8M17 7V16"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                          </a>
                          <a href="#" class="downloadBrochureBtn"
                            aria-label="Download IIM Bangalore brochure">
                            Download Brochure
                            <svg width="14" height="14" viewBox="0 0 24 24"
                              fill="none" aria-hidden="true"><path
                                d="M7 17L17 7M17 7H8M17 7V16"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                          </a>
                        </div>
                      </div>
                    </li>

                    <li class="collegeCard revealright delay-2"
                      itemprop="itemListElement" itemscope
                      itemtype="https://schema.org/CollegeOrUniversity">
                      <div class="collegeCardLogo">
                        <img
                          src="../src/assets/images/iima.webp"
                          alt="IIM Calcutta logo"
                          width="160" height="64"
                          loading="lazy" decoding="async"
                          itemprop="logo" />
                      </div>
                      <div class="collegeCardBody">
                        <h3 class="collegeCardName" itemprop="name">IIM
                          Calcutta</h3>
                        <p class="collegeCardLocation"
                          itemprop="address">Kolkata, West Bengal</p>

                        <div class="collegeStats">
                          <div class="collegeStat">
                            <span class="collegeStatValue">₹17.5 L</span>
                            <span class="collegeStatLabel">Total Fees</span>
                          </div>
                          <div class="collegeStat">
                            <span class="collegeStatValue">₹23.5 L</span>
                            <span class="collegeStatLabel">Avg Package</span>
                          </div>
                          <div class="collegeStat">
                            <span class="collegeStatValue">98%ile</span>
                            <span class="collegeStatLabel">Cutoff</span>
                          </div>
                        </div>

                        <p class="collegeAccepting">Accepting</p>
                        <ul class="collegeTags">
                          <li class="collegeTag">CAT</li>
                        </ul>

                        <div class="collegeCardFooter">
                          <a href="#" class="viewCoursesLink">
                            View College
                            <svg width="14" height="14" viewBox="0 0 24 24"
                              fill="none" aria-hidden="true"><path
                                d="M7 17L17 7M17 7H8M17 7V16"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                          </a>
                          <a href="#" class="downloadBrochureBtn"
                            aria-label="Download IIM Calcutta brochure">
                            Download Brochure
                            <svg width="14" height="14" viewBox="0 0 24 24"
                              fill="none" aria-hidden="true"><path
                                d="M7 17L17 7M17 7H8M17 7V16"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                          </a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </section>

              <!-- 

<section class="topExams" aria-labelledby="topExamsTitle" itemscope itemtype="https://schema.org/ItemList">
    <div class="topExamsWrap">
      <h2 id="reviews-heading" class="clg-section__title reveal">Top Exams Accepted by SPJIMR Mumbai</h2>
      <ul class="examGrid" role="list">

        <li class="examCard reveal" itemprop="itemListElement" itemscope itemtype="https://schema.org/Event">
          <div class="examCardTop">
            <span class="examBadge" itemprop="name">CAT</span>
            <div class="examDateBlock">
              <span class="examDateLabel">Exam date</span>
              <time class="examDateValue" itemprop="startDate" datetime="2026-11-29">Nov 29, 2026</time>
            </div>
          </div>

          <h3 class="examCardTitle">Common Admission Test</h3>

          <div class="examMeta">
            <span class="examMetaLabel">Accepted By</span>
            <span class="examMetaValue">21 IIMs + 1,600+ Colleges</span>
          </div>

          <div class="examMeta">
            <span class="examMetaLabel">Exam Mode</span>
            <span class="examMetaValue">Computer Based Test</span>
          </div>

          <div class="examCardFooter">
            <a href="#" class="exploreExamBtn" aria-label="Explore CAT exam details">
              Explore CAT
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </li>

        <li class="examCard revealright delay-1" itemprop="itemListElement" itemscope itemtype="https://schema.org/Event">
          <div class="examCardTop">
            <span class="examBadge" itemprop="name">CAT</span>
            <div class="examDateBlock">
              <span class="examDateLabel">Exam date</span>
              <time class="examDateValue" itemprop="startDate" datetime="2026-11-29">Nov 29, 2026</time>
            </div>
          </div>

          <h3 class="examCardTitle">Common Admission Test</h3>

          <div class="examMeta">
            <span class="examMetaLabel">Accepted By</span>
            <span class="examMetaValue">21 IIMs + 1,600+ Colleges</span>
          </div>

          <div class="examMeta">
            <span class="examMetaLabel">Exam Mode</span>
            <span class="examMetaValue">Computer Based Test</span>
          </div>

          <div class="examCardFooter">
            <a href="#" class="exploreExamBtn" aria-label="Explore CAT exam details">
              Explore CAT
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </li>

        <li class="examCard revealright delay-2" itemprop="itemListElement" itemscope itemtype="https://schema.org/Event">
          <div class="examCardTop">
            <span class="examBadge" itemprop="name">CAT</span>
            <div class="examDateBlock">
              <span class="examDateLabel">Exam date</span>
              <time class="examDateValue" itemprop="startDate" datetime="2026-11-29">Nov 29, 2026</time>
            </div>
          </div>

          <h3 class="examCardTitle">Common Admission Test</h3>

          <div class="examMeta">
            <span class="examMetaLabel">Accepted By</span>
            <span class="examMetaValue">21 IIMs + 1,600+ Colleges</span>
          </div>

          <div class="examMeta">
            <span class="examMetaLabel">Exam Mode</span>
            <span class="examMetaValue">Computer Based Test</span>
          </div>

          <div class="examCardFooter">
            <a href="#" class="exploreExamBtn" aria-label="Explore CAT exam details">
              Explore CAT
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 17L17 7M17 7H8M17 7V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </li>

      </ul>
    </div>
</section> -->

              <section class="entranceExams-page"
                aria-labelledby="entranceExamsHeading">
                <div class="topExamsWrap">
                  <h2 id="reviews-heading"
                    class="clg-section__title pl-0 pt-0 reveal visible">Top
                    Exams Accepted by SPJIMR Mumbai</h2>
                  <!-- <p class="topColleges-sub">
          Complete guides for all management entrance exams.
        </p> -->
                  <div class="entranceE">
                    <div class="swiper entranceExams__slider ">
                      <ul class="swiper-wrapper entranceExams__list">
                        <li class="swiper-slide entranceExams__item">
                          <article class="examCard">
                            <div class="examCard__top">
                              <img src="../src/assets/images/xat-logo.webp"
                                alt="xat" loading="lazy" decoding="async"
                                width="80"
                                height="34">

                              <h3 class="examCard__title">Common Admission
                                Test</h3>

                            </div>

                            <dl class="examCard__specs">

                              <div class="examCard__spec">
                                <dt>Exam date:</dt>
                                <dd>Nov 29, 2026</dd>
                              </div>
                              <div class="examCard__spec">
                                <dt>Exam Mode</dt>
                                <dd>Computer Based Test</dd>
                              </div>
                            </dl>

                            <button href="../exam/index.php"
                              class="downloadBrochureBtn"
                              aria-label="Download IIMA brochure">Explore CAT
                              <svg width="14" height="14" viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true"><path
                                  d="M7 17L17 7M17 7H8M17 7V16"
                                  stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path></svg>
                            </button>
                          </article>
                        </li>

                        <li class="swiper-slide entranceExams__item">
                          <article class="examCard">
                            <div class="examCard__top">
                              <img src="../src/assets/images/gmat-logo.webp"
                                alt="xat" loading="lazy" decoding="async"
                                width="80"
                                height="34">

                              <h3 class="examCard__title">Xavier Aptitude
                                Test</h3>

                            </div>

                            <dl class="examCard__specs">

                              <div class="examCard__spec">
                                <dt>Exam date:</dt>
                                <dd>Nov 29, 2026</dd>
                              </div>
                              <div class="examCard__spec">
                                <dt>Exam Mode</dt>
                                <dd>Computer Based Test</dd>
                              </div>
                            </dl>

                            <button href="../exam/index.php"
                              class="downloadBrochureBtn"
                              aria-label="Download IIMA brochure">Explore GMAT
                              <svg width="14" height="14" viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true"><path
                                  d="M7 17L17 7M17 7H8M17 7V16"
                                  stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path></svg>
                            </button>
                          </article>
                        </li>

                        <li class="swiper-slide entranceExams__item">
                          <article class="examCard">
                            <div class="examCard__top">
                              <img src="../src/assets/images/gmat-logo.webp"
                                alt="xat" loading="lazy" decoding="async"
                                width="80"
                                height="34">

                              <h3 class="examCard__title">Graduate Management
                                Admission
                                Test</h3>

                            </div>

                            <dl class="examCard__specs">

                              <div class="examCard__spec">
                                <dt>Exam date:</dt>
                                <dd>Nov 29, 2026</dd>
                              </div>
                              <div class="examCard__spec">
                                <dt>Exam Mode</dt>
                                <dd>Computer Based Test</dd>
                              </div>
                            </dl>

                            <button href="../exam/index.php"
                              class="downloadBrochureBtn"
                              aria-label="Download IIMA brochure">Explore GMAT
                              <svg width="14" height="14" viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true"><path
                                  d="M7 17L17 7M17 7H8M17 7V16"
                                  stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path></svg>
                            </button>
                          </article>
                        </li>

                        <li class="swiper-slide entranceExams__item">
                          <article class="examCard">
                            <div class="examCard__top">
                              <img src="../src/assets/images/nmat-logo.webp"
                                alt="xat" loading="lazy" decoding="async"
                                width="80"
                                height="34">

                              <h3 class="examCard__title">NMAT by GMAC</h3>

                            </div>

                            <dl class="examCard__specs">

                              <div class="examCard__spec">
                                <dt>Exam date:</dt>
                                <dd>Nov 29, 2026</dd>
                              </div>
                              <div class="examCard__spec">
                                <dt>Exam Mode</dt>
                                <dd>Computer Based Test</dd>
                              </div>
                            </dl>

                            <button href="../exam/index.php"
                              class="downloadBrochureBtn"
                              aria-label="Download IIMA brochure">Explore NMAT
                              <svg width="14" height="14" viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true"><path
                                  d="M7 17L17 7M17 7H8M17 7V16"
                                  stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path></svg>
                            </button>
                          </article>
                        </li>

                        <!-- SNAP: cut off in screenshot, placeholder copy — confirm exact values -->
                        <li class="swiper-slide entranceExams__item">
                          <article class="examCard">
                            <div class="examCard__top">
                              <img src="../src/assets/images/gmat-logo.webp"
                                alt="xat" loading="lazy" decoding="async"
                                width="80"
                                height="34">

                              <h3 class="examCard__title">Symbiosis National
                                Aptitude
                                Test</h3>

                            </div>

                            <dl class="examCard__specs">

                              <div class="examCard__spec">
                                <dt>Exam date:</dt>
                                <dd>Nov 29, 2026</dd>
                              </div>
                              <div class="examCard__spec">
                                <dt>Exam Mode</dt>
                                <dd>Computer Based Test</dd>
                              </div>
                            </dl>

                            <button href="../exam/index.php"
                              class="downloadBrochureBtn"
                              aria-label="Download IIMA brochure">Explore GMAT
                              <svg width="14" height="14" viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true"><path
                                  d="M7 17L17 7M17 7H8M17 7V16"
                                  stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path></svg>
                            </button>
                          </article>
                        </li>

                        <li class="swiper-slide entranceExams__item">
                          <article class="examCard">
                            <div class="examCard__top">
                              <img src="../src/assets/images/gmat-logo.webp"
                                alt="xat" loading="lazy" decoding="async"
                                width="80"
                                height="34">

                              <h3 class="examCard__title">Symbiosis National
                                Aptitude
                                Test</h3>

                            </div>

                            <dl class="examCard__specs">

                              <div class="examCard__spec">
                                <dt>Exam date:</dt>
                                <dd>Nov 29, 2026</dd>
                              </div>
                              <div class="examCard__spec">
                                <dt>Exam Mode</dt>
                                <dd>Computer Based Test</dd>
                              </div>
                            </dl>

                            <button href="../exam/index.php"
                              class="downloadBrochureBtn"
                              aria-label="Download IIMA brochure">Explore GMAT
                              <svg width="14" height="14" viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true"><path
                                  d="M7 17L17 7M17 7H8M17 7V16"
                                  stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path></svg>
                            </button>
                          </article>
                        </li>

                        <li class="swiper-slide entranceExams__item">
                          <article class="examCard">
                            <div class="examCard__top">
                              <img src="../src/assets/images/cat-logo.webp"
                                alt="xat" loading="lazy" decoding="async"
                                width="80"
                                height="34">

                              <h3 class="examCard__title">Common Admission
                                Test</h3>

                            </div>

                            <dl class="examCard__specs">

                              <div class="examCard__spec">
                                <dt>Exam date:</dt>
                                <dd>Nov 29, 2026</dd>
                              </div>
                              <div class="examCard__spec">
                                <dt>Exam Mode</dt>
                                <dd>Computer Based Test</dd>
                              </div>
                            </dl>

                            <button href="../exam/index.php"
                              class="downloadBrochureBtn"
                              aria-label="Download IIMA brochure">Explore CAT
                              <svg width="14" height="14" viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true"><path
                                  d="M7 17L17 7M17 7H8M17 7V16"
                                  stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path></svg>
                            </button>
                          </article>
                        </li>

                        <li class="swiper-slide entranceExams__item">
                          <article class="examCard">
                            <div class="examCard__top">
                              <img src="../src/assets/images/gmat-logo.webp"
                                alt="xat" loading="lazy" decoding="async"
                                width="80"
                                height="34">

                              <h3 class="examCard__title">Common Admission
                                Test</h3>
                              <!-- <div class="examCard__meta">
                    <span class="examCard__metaLabel">Exam date:</span>
                    <span class="examCard__metaValue">Nov 29, 2026</span>
                  </div> -->
                            </div>

                            <dl class="examCard__specs">

                              <div class="examCard__spec">
                                <dt>Exam date:</dt>
                                <dd>Nov 29, 2026</dd>
                              </div>
                              <div class="examCard__spec">
                                <dt>Exam Mode</dt>
                                <dd>Computer Based Test</dd>
                              </div>
                            </dl>

                            <button href="../exam/index.php"
                              class="downloadBrochureBtn"
                              aria-label="Download IIMA brochure">Explore GMAT
                              <svg width="14" height="14" viewBox="0 0 24 24"
                                fill="none"
                                aria-hidden="true"><path
                                  d="M7 17L17 7M17 7H8M17 7V16"
                                  stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"></path></svg>
                            </button>
                          </article>
                        </li>
                      </ul>

                    </div>
                    <button type="button" class="entranceSlidePrev"
                      id="entrancePrev"
                      aria-label="Previous">
                      <svg width="18" height="18" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M15 18l-6-6 6-6" stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>

                    <button type="button" class="entranceSlideNext"
                      id="entranceNext"
                      aria-label="Next">
                      <svg width="18" height="18" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M9 18l6-6-6-6" stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
                  </div>

                </div>
              </section>

            </div>

            <!-- ============ SIDEBAR ============ -->
            <aside class="clg-aside" aria-label="Quick facts and links">

              <div class="clg-ctaCard reveal" id="enquire">
                <h2>Ready to Apply to Indian Institute of Management Kozhikode</h2>
                <p>Get personalised guidance from SPJIMR alumni counsellors.
                  Free 30-minute session.</p>
                <a href="#" class="btn btn--solid btn--block">Enquire Now</a>
                <a href="#brochure" class="btn btn--outline btn--block">Download
                  Brochure</a>
              </div>

              <div class="clg-card clg-sideCard">
                <h2>Quick Facts</h2>
                <dl class="clg-factsList">
                  <div><dt>Institute</dt>
                          <dd>Indian Institute of Management Kozhikode</dd></div>

                           <div><dt>Short name</dt>
                          <dd>IIM Kozhikode / IIMK</dd></div>

                           <div><dt>Established</dt>
                          <dd>1996</dd></div>

                           <div><dt>Location</dt>
                          <dd>Kozhikode, Kerala</dd></div>

                           <div><dt>Institution type</dt>
                          <dd>Public</dd></div>

                           <div><dt>Flagship programme</dt>
                          <dd>MBA / PGP</dd></div>

                           <div><dt>Undergraduate programme</dt>
                          <dd>Bachelor of Management Studies</dd></div>

                           <div><dt>Specialised MBA programmes</dt>
                          <dd>MBA in Finance, MBA in Liberal Studies &amp; Management</dd></div>

                           <div><dt>One-year MBA</dt>
                          <dd>MBA in Business Leadership</dd></div>

                           <div><dt>Accreditations</dt>
                          <dd>AMBA, EQUIS</dd></div>

                           <div><dt>NIRF Management 2025</dt>
                          <dd>#3</dd></div>
                                <div><dt>Official Website</dt><dd><a
                                        href="https://www.iimk.ac.in"
                                rel="noopener">iimk.ac.in</a></dd></div>
                </dl>
              </div>

              <div class="clg-card clg-sideCard">
                <h2>Upcoming Deadlines</h2>
                <table class="clg-miniTable">
                  <thead><tr><th scope="col">Programme</th><th
                        scope="col">Date</th></tr></thead>
                  <tbody>
                    <tr>
                      <td><span class="clg-progName">PGDM</span><span
                          class="clg-progSub">Interview Process</span></td>
                      <td class="clg-dateStrong">Feb–Mar 25</td>
                    </tr>
                    <tr>
                      <td><span class="clg-progName">PGDM/BM</span><span
                          class="clg-progSub">Last Date Apply</span></td>
                      <td class="clg-dateStrong">Jan 31</td>
                    </tr>
                    <tr>
                      <td><span class="clg-progName">PGPMBM</span><span
                          class="clg-progSub">Applications Close</span></td>
                      <td class="clg-dateStrong">Feb 28</td>
                    </tr>
                    <tr>
                      <td><span class="clg-progName">PGPM</span><span
                          class="clg-progSub">Final Admit List</span></td>
                      <td class="clg-dateStrong">Apr 30</td>
                    </tr>
                    <tr>
                      <td><span class="clg-progName">PGPMBM</span><span
                          class="clg-progSub">PGP Orientation</span></td>
                      <td class="clg-dateStrong">Jun 9</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="clg-card clg-sideCard">
                <h2>Quick Links</h2>
                <ul class="clg-linkList">
                  <li><a href="#"><svg width="14" height="14"
                        viewBox="0 0 24 24" fill="none" aria-hidden="true"><path
                          d="M7 17 17 7M9 7h8v8" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" /></svg>Top MBA Colleges by
                      Salary</a></li>
                  <li><a href="#"><svg width="14" height="14"
                        viewBox="0 0 24 24" fill="none" aria-hidden="true"><path
                          d="M7 17 17 7M9 7h8v8" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" /></svg>MBA vs PGDM — Key
                      Differences</a></li>
                  <li><a href="#"><svg width="14" height="14"
                        viewBox="0 0 24 24" fill="none" aria-hidden="true"><path
                          d="M7 17 17 7M9 7h8v8" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" /></svg>IIM Fees 2025-26
                      Complete List</a></li>
                  <li><a href="#"><svg width="14" height="14"
                        viewBox="0 0 24 24" fill="none" aria-hidden="true"><path
                          d="M7 17 17 7M9 7h8v8" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" /></svg>CAT 2025 Preparation
                      Guide</a></li>
                  <li><a href="#"><svg width="14" height="14"
                        viewBox="0 0 24 24" fill="none" aria-hidden="true"><path
                          d="M7 17 17 7M9 7h8v8" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" /></svg>MBA Scholarships in
                      India</a></li>
                  <li><a href="#"><svg width="14" height="14"
                        viewBox="0 0 24 24" fill="none" aria-hidden="true"><path
                          d="M7 17 17 7M9 7h8v8" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" /></svg>1-Year MBA Programs
                      India</a></li>
                  <li><a href="#"><svg width="14" height="14"
                        viewBox="0 0 24 24" fill="none" aria-hidden="true"><path
                          d="M7 17 17 7M9 7h8v8" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" /></svg>Executive MBA (EMBA)
                      Colleges</a></li>
                  <li><a href="#"><svg width="14" height="14"
                        viewBox="0 0 24 24" fill="none" aria-hidden="true"><path
                          d="M7 17 17 7M9 7h8v8" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" /></svg>Online MBA Colleges
                      2025</a></li>
                </ul>
              </div>

            </aside>
          </div>
        </div>
      </section>

      <!-- ===== Master Your Admission Journey (Subscribe) Section ===== -->
      <section class="admissionJourney"
        aria-labelledby="admissionJourneyHeading">
        <div class="container">
          <div class="admissionJourneyInner">
            <h2 class="marketing__heading"
              id="admissionJourneyHeading">Master your admission
              journey</h2>
            <p class="admissionJourneyText">Weekly briefing on exam
              updates, admission deadlines, placement reports, and
              editorial analysis. No spam. Unsubscribe
              anytime.</p>

            <form class="admissionJourneyForm"
              id="admissionJourneyForm"
              novalidate>
              <label for="admissionJourneyEmail"
                class="admissionJourneyLabel">Email
                address</label>
              <div class="admissionJourneyField">
                <input
                  type="email"
                  id="admissionJourneyEmail"
                  name="email"
                  class="admissionJourneyInput"
                  placeholder="Your email address"
                  autocomplete="email"
                  required
                  aria-describedby="admissionJourneyError">
                <button type="submit"
                  class="admissionJourneySubmit">
                  Subscribe
                  <svg viewBox="0 0 26 26" width="28"
                    height="28"
                    fill="none" aria-hidden="true">
                    <path d="M7 17L17 7M17 7H9M17 7V15"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </button>
              </div>
              <p class="admissionJourneyError"
                id="admissionJourneyError" role="alert"
                aria-live="polite"></p>
            </form>
          </div>
        </div>
      </section>

    </main>

    <!-- ============================================================
       FOOTER 
  ============================================================ -->
     <?php require __DIR__ . '/../includes/footer.php'; ?>
    <script src="../src/js/lightbox.js" defer></script>
    <script src="../src/js/swiper-bundle.min.js" defer></script>
    <script src="../src/js/college-detail-fix.js" defer></script>
    <script src="../src/js/college-exam-detail.js" defer></script>
    <script src="../src/js/faq.js" defer></script>
    <script src="../src/js/menu.js" defer></script>
    <script src="../src/js/faq-acc.js" defer></script>
    


   
  </body>
</html>