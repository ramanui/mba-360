(function () {
  "use strict";
  var megaMenuData = {
    /* =====================================================
       EXAMS
    ===================================================== */

    cat: {
      popular: {
        label: "Popular Exams",
        items: [
          ["CMAT", "/demo/our-project/exam/exam-detail.html"],
          ["MAT", "/demo/our-project/exam/exam-detail.html"],
          ["NMAT", "/demo/our-project/exam/exam-detail.html"],
          ["SNAP", "/demo/our-project/exam/exam-detail.html"],
        ],
      },

      category: {
        label: "By Category",
        items: [
          ["National Level Exams", "/demo/our-project/exam/exam-detail.html"],
          ["State Level Exams", "/demo/our-project/exam/exam-detail.html"],
          ["University Level Exams", "/demo/our-project/exam/exam-detail.html"],
          ["Exam Results & Cutoffs", "/demo/our-project/exam/exam-detail.html"],
        ],
      },

      level: {
        label: "By Level",
        items: [
          ["Undergraduate", "/demo/our-project/exam/exam-detail.html"],
          ["Postgraduate", "/demo/our-project/exam/exam-detail.html"],
        ],
      },

      promo: {
        title: "Recommended for CAT Aspirants",
        items: [
          [
            "IIM Ahmedabad",
            "/demo/our-project/exam/exam-detail.html",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Bangalore",
            "/demo/our-project/exam/exam-detail.html",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "MDI Gurgaon",
            "/demo/our-project/exam/exam-detail.html",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Calcutta",
            "/demo/our-project/exam/exam-detail.html",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["CAT 2026 Registration", "/demo/our-project/exam/exam-detail.html"],
        ["XAT vs CAT", "/demo/our-project/exam/exam-detail.html"],
        ["GMAT Score for ISB", "/demo/our-project/exam/exam-detail.html"],
        ["Exam Dates 2026", "/demo/our-project/exam/exam-detail.html"],
        ["Free Mock Tests", "/demo/our-project/exam/exam-detail.html"],
      ],

      button: {
        text: "View all Exams",
        url: "/demo/our-project/exam/",
      },
    },

    xat: {
      popular: {
        label: "Popular XAT Topics",
        items: [
          ["XAT Registration", "/xat/registration"],
          ["XAT Syllabus", "/xat/syllabus"],
          ["XAT Cutoff", "/xat/cutoff"],
          ["XAT Colleges", "/xat/colleges"],
        ],
      },

      category: {
        label: "XAT Resources",
        items: [
          ["XAT Preparation", "/xat/preparation"],
          ["XAT Mock Tests", "/xat/mock-tests"],
          ["XAT Previous Papers", "/xat/previous-papers"],
          ["XAT Results", "/xat/results"],
        ],
      },

      level: {
        label: "By Level",
        items: [
          ["MBA", "/xat/mba"],
          ["Postgraduate", "/xat/postgraduate"],
        ],
      },

      promo: {
        title: "Popular XAT Accepting Colleges",
        items: [
          [
            "XLRI Jamshedpur",
            "/college/xlri-jamshedpur",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "XIMB Bhubaneswar",
            "/college/ximb-bhubaneswar",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "TAPMI Manipal",
            "/college/tapmi-manipal",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "GIM Goa",
            "/college/gim-goa",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["XAT Registration Deadline", "/xat/registration-deadline"],
        ["XAT vs CAT", "/xat-vs-cat"],
        ["XAT Cutoff 2026", "/xat/cutoff-2026"],
        ["XAT Percentile Calculator", "/xat/percentile-calculator"],
        ["Best XAT Colleges", "/xat/best-colleges"],
      ],

      button: {
        text: "View all XAT",
        url: "/xat",
      },
    },

    gmat: {
      popular: {
        label: "Popular GMAT Topics",
        items: [
          ["GMAT Registration", "/gmat/registration"],
          ["GMAT Syllabus", "/gmat/syllabus"],
          ["GMAT Scores", "/gmat/scores"],
          ["GMAT Preparation", "/gmat/preparation"],
        ],
      },

      category: {
        label: "GMAT Resources",
        items: [
          ["GMAT Mock Tests", "/gmat/mock-tests"],
          ["GMAT Study Material", "/gmat/study-material"],
          ["GMBA Colleges", "/gmat/colleges"],
          ["GMAT Results", "/gmat/results"],
        ],
      },

      level: {
        label: "By Level",
        items: [
          ["Postgraduate", "/gmat/postgraduate"],
          ["Executive", "/gmat/executive"],
        ],
      },

      promo: {
        title: "Top GMAT Accepting Colleges",
        items: [
          [
            "ISB Hyderabad",
            "/college/isb-hyderabad",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "SPJIMR Mumbai",
            "/college/spjimr",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "Great Lakes Chennai",
            "/college/great-lakes-chennai",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Udaipur",
            "/college/iim-udaipur",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["GMAT Score for ISB", "/gmat-score-for-isb"],
        ["GMAT vs CAT", "/gmat-vs-cat"],
        ["GMAT Focus Edition", "/gmat/focus-edition"],
        ["GMAT 700+ Strategy", "/gmat/700-strategy"],
        ["Best GMAT Colleges", "/gmat/best-colleges"],
      ],

      button: {
        text: "View all GMAT",
        url: "/gmat",
      },
    },

    /* =====================================================
       COLLEGES
    ===================================================== */

    mba: {
      popular: {
        label: "By Location",
        items: [
          [
            "Best MBA Colleges in Delhi NCR",
            "/demo/our-project/college/college-detail.html",
          ],
          [
            "Best MBA Colleges in Bangalore",
            "/demo/our-project/college/college-detail.html",
          ],
          [
            "Best MBA Colleges in Chennai",
            "/demo/our-project/college/college-detail.html",
          ],
          [
            "Best MBA Colleges in Mumbai",
            "/demo/our-project/college/college-detail.html",
          ],
          [
            "Best MBA Colleges in Kolkata",
            "/demo/our-project/college/college-detail.html",
          ],
          [
            "Best MBA Colleges in Hyderabad",
            "/demo/our-project/college/college-detail.html",
          ],
        ],
      },

      category: {
        label: "By Programmes offered",
        items: [
          [
            "Full Time Programmes",
            "/demo/our-project/college/college-detail.html",
          ],
          [
            "Part Time Programmes",
            "/demo/our-project/college/college-detail.html",
          ],
          [
            "Online Programmes",
            "/demo/our-project/college/college-detail.html",
          ],
          [
            "Hybrid Programmes",
            "/demo/our-project/college/college-detail.html",
          ],
        ],
      },

      level: {
        label: "By Type",
        items: [
          ["IIMs", "/demo/our-project/college/"],
          [
            "Government MBA Colleges",
            "/demo/our-project/college/college-detail.html",
          ],
          [
            "Private MBA Colleges",
            "/demo/our-project/college/college-detail.html",
          ],
          [
            "Deemed University",
            "/demo/our-project/college/college-detail.html",
          ],
        ],
      },

      promo: {
        title: "Top MBA Colleges to Explore",
        items: [
          [
            "MDI Gurgaon",
            "/demo/our-project/college/",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Bangalore",
            "/demo/our-project/college/",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Ahmedabad",
            "/demo/our-project/college/",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Calcutta",
            "/demo/our-project/college/",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["MBA vs PGDM", "/demo/our-project/course/"],
        ["IIM fees 2026", "/demo/our-project/course/"],
        ["FMS Delhi admission", "/demo/our-project/course/"],
        ["MBA without CAT", "/demo/our-project/course/"],
        ["Highest salary MBA", "/demo/our-project/course/"],
      ],

      button: {
        text: "View all MBA Colleges",
        url: "/demo/our-project/course/",
      },
    },

    bba: {
      popular: {
        label: "Popular BBA Colleges",
        items: [
          ["Christ University", "/demo/course/"],
          ["NMIMS", "/demo/our-project/course/"],
          ["Symbiosis", "/demo/our-project/course/"],
          ["IIM Indore IPM", "/demo/our-project/course/"],
        ],
      },

      category: {
        label: "By Location",
        items: [
          ["BBA Colleges in Delhi NCR", "/course/"],
          ["BBA Colleges in Mumbai", "/course"],
          ["BBA Colleges in Bangalore", "/course"],
          ["BBA Colleges in Pune", "/course"],
        ],
      },

      level: {
        label: "By Type",
        items: [
          ["Government Colleges", "/colleges/"],
          ["Private Colleges", "/colleges/bba/private"],
          ["Deemed Universities", "/colleges/bba/deemed"],
        ],
      },

      promo: {
        title: "Top BBA Colleges to Explore",
        items: [
          [
            "Christ University",
            "/college/christ-university",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "NMIMS",
            "/college/nmims",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "Symbiosis",
            "/college/symbiosis",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "Shaheed Sukhdev College",
            "/college/ssc-bs",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["BBA vs IPM", "/bba-vs-ipm"],
        ["Best BBA Colleges 2026", "/best-bba-colleges-2026"],
        ["BBA Fees Comparison", "/bba-fees-comparison"],
        ["BBA after 12th", "/bba/after-12th"],
        ["Top BBA Recruiters", "/bba/top-recruiters"],
      ],

      button: {
        text: "View all BBA Colleges",
        url: "/course/",
      },
    },

    integrated: {
      popular: {
        label: "Popular Integrated MBA",
        items: [
          ["IIM Indore IPM", "/colleges/integrated/iim-indore"],
          ["IIM Rohtak IPM", "/colleges/integrated/iim-rohtak"],
          ["IIM Jammu IPM", "/colleges/integrated/iim-jammu"],
          ["IIM Bodh Gaya IPM", "/colleges/integrated/iim-bodh-gaya"],
        ],
      },

      category: {
        label: "By Programme",
        items: [
          ["5 Year Integrated MBA", "/integrated-mba/5-year"],
          ["IPM Programmes", "/integrated-mba/ipm"],
          ["Integrated BBA MBA", "/integrated-mba/bba-mba"],
        ],
      },

      level: {
        label: "By Type",
        items: [
          ["IIMs", "/integrated-mba/iims"],
          ["Private Universities", "/integrated-mba/private"],
        ],
      },

      promo: {
        title: "Top Integrated MBA Colleges",
        items: [
          [
            "IIM Indore IPM",
            "/college/iim-indore-ipm",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Rohtak IPM",
            "/college/iim-rohtak-ipm",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Jammu IPM",
            "/college/iim-jammu-ipm",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Bodh Gaya IPM",
            "/college/iim-bodh-gaya-ipm",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["IPM Indore Cutoff", "/ipm-indore-cutoff"],
        ["IPMAT Preparation Tips", "/ipmat-preparation"],
        ["5 Year Integrated MBA ROI", "/integrated-mba/roi"],
        ["IPM vs Regular MBA", "/integrated-mba/vs-regular-mba"],
        ["Integrated MBA Eligibility", "/integrated-mba/eligibility"],
      ],

      button: {
        text: "View all Integrated MBA",
        url: "/colleges/integrated-mba",
      },
    },

    /* =====================================================
       EXECUTIVE MBA
    ===================================================== */

    top: {
      popular: {
        label: "Popular Programmes",
        items: [
          ["IIM Executive MBA", "/executive-mba/iim"],
          ["ISB Executive MBA", "/executive-mba/isb"],
          ["XLRI Executive MBA", "/executive-mba/xlri"],
        ],
      },

      category: {
        label: "By Format",
        items: [
          ["Weekend Programmes", "/executive-mba/weekend"],
          ["Online Programmes", "/executive-mba/online"],
          ["Campus Immersion Programmes", "/executive-mba/campus"],
        ],
      },

      level: {
        label: "By Duration",
        items: [
          ["1 Year Programmes", "/executive-mba/1-year"],
          ["2 Year Programmes", "/executive-mba/2-year"],
        ],
      },

      promo: {
        title: "Top Executive MBA Programmes",
        items: [
          [
            "IIM Executive MBA",
            "/college/iim-executive-mba",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "ISB PGP Pro",
            "/college/isb-pgp-pro",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "XLRI GMP",
            "/college/xlri-gmp",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "SPJIMR PGPM",
            "/college/spjimr-pgpm",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["Executive MBA vs Regular MBA", "/executive-mba-vs-regular"],
        ["Executive MBA without Work-ex", "/executive-mba-work-ex"],
        ["ISB PGP Fees 2026", "/isb-pgp-fees"],
        ["Executive MBA ROI", "/executive-mba-roi"],
        ["IIM Executive MBA Eligibility", "/iim-executive-mba-eligibility"],
      ],

      button: {
        text: "View all Executive MBA",
        url: "/executive-mba",
      },
    },

    online: {
      popular: {
        label: "Popular Online Executive MBA",
        items: [
          ["IIM Online MBA", "/executive-mba/online/iim"],
          ["ISB Online Programme", "/executive-mba/online/isb"],
          ["XLRI Online Programme", "/executive-mba/online/xlri"],
        ],
      },

      category: {
        label: "By Format",
        items: [
          ["Fully Online", "/executive-mba/online/fully-online"],
          ["Live Classes", "/executive-mba/online/live"],
          ["Hybrid Learning", "/executive-mba/online/hybrid"],
        ],
      },

      level: {
        label: "By Duration",
        items: [
          ["1 Year", "/executive-mba/online/1-year"],
          ["2 Year", "/executive-mba/online/2-year"],
        ],
      },

      promo: {
        title: "Popular Online Executive MBA",
        items: [
          [
            "IIM Online MBA",
            "/college/iim-online-mba",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "ISB Online",
            "/college/isb-online",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "XLRI Online",
            "/college/xlri-online",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "NMIMS Online",
            "/college/nmims-online",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["Online Executive MBA Fees", "/executive-mba/online/fees"],
        ["Best Online Executive MBA", "/executive-mba/online/best"],
        ["Online vs Campus Executive MBA", "/executive-mba/online/vs-campus"],
        ["Executive MBA Online Placement", "/executive-mba/online/placement"],
        ["UGC Approved Online MBA", "/executive-mba/online/ugc-approved"],
      ],

      button: {
        text: "View all Online Executive MBA",
        url: "/executive-mba/online",
      },
    },

    /* =====================================================
       BBA / IPM
    ===================================================== */

    ipm: {
      popular: {
        label: "Popular IPM Colleges",
        items: [
          ["IIM Indore IPM", "/demo/our-project/course/"],
          ["IIM Rohtak IPM", "/demo/our-project/course/"],
          ["IIM Jammu IPM", "/demo/our-project/course/"],
          ["IIM Bodh Gaya IPM", "/demo/our-project/course/"],
        ],
      },

      category: {
        label: "By Location",
        items: [
          ["IPM Colleges in Delhi", "/demo/our-project/course/"],
          ["IPM Colleges in Mumbai", "/demo/our-project/course/"],
          ["IPM Colleges in Bangalore", "/demo/our-project/course/"],
          ["IPM Colleges in Indore", "/demo/our-project/course/"],
        ],
      },

      level: {
        label: "By Type",
        items: [
          ["IIM IPM", "/demo/our-project/course/"],
          ["Private IPM", "/demo/our-project/course/"],
          ["Integrated Management", "/demo/our-project/course/"],
        ],
      },

      promo: {
        title: "Top IPM Colleges",
        items: [
          [
            "IIM Indore IPM",
            "/college/iim-indore-ipm",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Rohtak IPM",
            "/college/iim-rohtak-ipm",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Jammu IPM",
            "/college/iim-jammu-ipm",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Bodh Gaya IPM",
            "/college/iim-bodh-gaya-ipm",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["BBA vs IPM", "/demo/our-project/course/"],
        ["IPM Indore Cutoff", "/demo/our-project/course/"],
        ["IPMAT Preparation Tips", "/demo/our-project/course/"],
        ["Best BBA Colleges 2026", "/demo/our-project/course/"],
        ["BBA Fees Comparison", "/demo/our-project/course/"],
      ],

      button: {
        text: "View all IPM",
        url: "/demo/our-project/course/",
      },
    },

    /* =====================================================
       COMMUNITY
    ===================================================== */

    discussion: {
      popular: {
        label: "Popular Topics",
        items: [
          ["CAT Preparation", "/community/cat-preparation"],
          ["Placement Discussions", "/community/placements"],
          ["GD-PI Experiences", "/community/gd-pi"],
          ["MBA Admissions", "/community/admissions"],
        ],
      },

      category: {
        label: "Resources",
        items: [
          ["Exam Prep Groups", "/community/exam-prep"],
          ["Talk to Mentors", "/community/mentors"],
          ["Alumni AMAs", "/community/alumni-amas"],
        ],
      },

      level: {
        label: "By Interest",
        items: [
          ["MBA Aspirants", "/community/mba-aspirants"],
          ["Working Professionals", "/community/working-professionals"],
          ["Current Students", "/community/current-students"],
        ],
      },

      promo: {
        title: "Popular Among the Community",
        items: [
          [
            "MDI Gurgaon",
            "/college/mdi-gurgaon",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Bangalore",
            "/college/iim-bangalore",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Ahmedabad",
            "/college/iim-ahmedabad",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Calcutta",
            "/college/iim-calcutta",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["CAT 2026 Strategy Threads", "/cat-strategy"],
        ["GD-PI Experience Sharing", "/gd-pi-experience"],
        ["Placement Season Updates", "/placement-updates"],
        ["Scholarship Tips", "/scholarship-tips"],
        ["Campus Life AMAs", "/campus-life"],
      ],

      button: {
        text: "Join Community",
        url: "/community",
      },
    },

    reviews: {
      popular: {
        label: "Popular Reviews",
        items: [
          ["IIM Reviews", "/community/reviews/iim"],
          ["MBA College Reviews", "/community/reviews/mba"],
          ["BBA College Reviews", "/community/reviews/bba"],
          ["Student Experiences", "/community/reviews/students"],
        ],
      },

      category: {
        label: "Resources",
        items: [
          ["Verified Reviews", "/community/reviews/verified"],
          ["Campus Experiences", "/community/reviews/campus"],
          ["Placement Reviews", "/community/reviews/placements"],
        ],
      },

      level: {
        label: "By Interest",
        items: [
          ["MBA Students", "/community/reviews/mba-students"],
          ["BBA Students", "/community/reviews/bba-students"],
          ["Working Professionals", "/community/reviews/professionals"],
        ],
      },

      promo: {
        title: "Most Reviewed Colleges",
        items: [
          [
            "IIM Bangalore",
            "/college/iim-bangalore",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Ahmedabad",
            "/college/iim-ahmedabad",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "MDI Gurgaon",
            "/college/mdi-gurgaon",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Calcutta",
            "/college/iim-calcutta",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["Verified College Reviews", "/community/reviews/verified-2026"],
        ["Placement Review Threads", "/community/reviews/placement-threads"],
        ["Hostel & Campus Reviews", "/community/reviews/hostel-campus"],
        ["Faculty Review Discussions", "/community/reviews/faculty"],
        ["Fee Structure Reviews", "/community/reviews/fee-structure"],
      ],

      button: {
        text: "View all Reviews",
        url: "/community/college-reviews",
      },
    },

    /* =====================================================
       ALUMNI
    ===================================================== */

    success: {
      popular: {
        label: "Popular Stories",
        items: [
          ["IIM Alumni Journeys", "/alumni/"],
          ["Career Switch Stories", "/alumni/"],
          ["Entrepreneur Alumni", "/alumni/"],
          ["Leadership Stories", "/alumni/"],
        ],
      },

      category: {
        label: "Engage",
        items: [
          ["Mentorship Programme", "/alumni/"],
          ["Alumni Meetups", "/alumni/"],
          ["Referral Network", "/alumni/"],
        ],
      },

      level: {
        label: "By Batch",
        items: [
          ["Batch of 2024", "/alumni/"],
          ["Batch of 2023", "/alumni/"],
          ["Batch of 2022", "/alumni/"],
        ],
      },

      promo: {
        title: "Where Our Alumni Studied",
        items: [
          [
            "IIM Ahmedabad",
            "/college/iim-ahmedabad",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "MDI Gurgaon",
            "/college/mdi-gurgaon",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Bangalore",
            "/college/iim-bangalore",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Calcutta",
            "/college/iim-calcutta",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["Top Alumni Achievers 2026", "/top-alumni-achievers"],
        ["Alumni Referral Success", "/alumni-referral-success"],
        ["Career Transition Stories", "/career-transition-stories"],
        ["Alumni Meetup Highlights", "/alumni-meetup"],
        ["Give Back Programme", "/give-back"],
      ],

      button: {
        text: "View all Alumni",
        url: "/alumni",
      },
    },

    network: {
      popular: {
        label: "Popular Alumni Networks",
        items: [
          ["IIM Alumni Network", "/alumni/network/iim"],
          ["MBA Alumni Network", "/alumni/network/mba"],
          ["BBA Alumni Network", "/alumni/network/bba"],
        ],
      },

      category: {
        label: "Engage",
        items: [
          ["Mentorship Programme", "/alumni/mentorship"],
          ["Alumni Meetups", "/alumni/meetups"],
          ["Referral Network", "/alumni/referrals"],
        ],
      },

      level: {
        label: "By Batch",
        items: [
          ["Batch of 2024", "/alumni/batch-2024"],
          ["Batch of 2023", "/alumni/batch-2023"],
          ["Batch of 2022", "/alumni/batch-2022"],
        ],
      },

      promo: {
        title: "Strongest Alumni Networks",
        items: [
          [
            "IIM Alumni Network",
            "/college/iim-alumni-network",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "MDI Alumni Network",
            "/college/mdi-alumni-network",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Calcutta Network",
            "/college/iim-calcutta-network",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
          [
            "IIM Bangalore Network",
            "/college/iim-bangalore-network",
            "https://designawebsite.co.in/demo/our-project/assets/mdi-gurgaon-D084MA1p.webp",
          ],
        ],
      },

      trending: [
        ["Alumni Referral Success", "/alumni-referral-success"],
        ["Regional Alumni Chapters", "/alumni/network/regional-chapters"],
        ["Industry Alumni Groups", "/alumni/network/industry-groups"],
        ["Alumni Mentorship Signup", "/alumni/network/mentorship-signup"],
        ["Annual Alumni Meet 2026", "/alumni/network/annual-meet-2026"],
      ],

      button: {
        text: "Explore Alumni Network",
        url: "/alumni/network",
      },
    },
  };

  /* =======================================================
     ELEMENTS
  ======================================================= */

  var header = document.getElementById("siteHeader");
  var toggle = document.getElementById("navToggle");
  var nav = document.getElementById("siteNav");
  var backdrop = document.getElementById("navBackdrop");
  var mobileCloseBtn = document.getElementById("navCloseBtn");

  var mq = window.matchMedia("(min-width:992px)");

  var timers = new WeakMap();

  /* =======================================================
     UPDATE MEGA MENU CONTENT
  ======================================================= */

  function updateMegaMenu(panel, key) {
    var data = megaMenuData[key];

    if (!data) {
      return;
    }

    var popularList = panel.querySelector('[data-target-list="popular"]');
    var categoryList = panel.querySelector('[data-target-list="category"]');
    var levelList = panel.querySelector('[data-target-list="level"]');

    var popularLabel = panel.querySelector('[data-target-label="popular"]');
    var categoryLabel = panel.querySelector('[data-target-label="category"]');
    var levelLabel = panel.querySelector('[data-target-label="level"]');

    var button = panel.querySelector("[data-target-button]");

    var promoTrack = panel.querySelector('[data-target-track="promo"]');
    var promoTitle = panel.querySelector("[data-target-promo-title]");

    var trendingContainer = panel.querySelector("[data-target-trending]");

    /* -----------------------------------------------
       Helper
    ------------------------------------------------ */

    function renderList(list, label, data) {
      if (!list || !data) {
        return;
      }

      if (label) {
        label.textContent = data.label;
      }

      var html = "";

      for (var i = 0; i < data.items.length; i++) {
        var item = data.items[i];

        html +=
          "<li>" +
          '<a class="mega-menu__link" href="' +
          item[1] +
          '">' +
          item[0] +
          "</a>" +
          "</li>";
      }

      list.innerHTML = html;
    }

    /* -----------------------------------------------
       Promo cards (colleges/logos) - hover se update
    ------------------------------------------------ */

    function renderPromo(track, title, data) {
      if (!track || !data) {
        return;
      }

      if (title) {
        title.textContent = data.title;
      }

      var html = "";

      for (var rep = 0; rep < 2; rep++) {
        for (var i = 0; i < data.items.length; i++) {
          var item = data.items[i];

          html +=
            '<a class="mega-menu__promo-item" href="' +
            item[1] +
            '"' +
            (rep === 0
              ? ' aria-label="' + item[0] + '"'
              : ' tabindex="-1" aria-hidden="true"') +
            ">" +
            '<img class="mega-menu__promo-img" src="' +
            item[2] +
            '" alt="' +
            (rep === 0 ? item[0] : "") +
            '" width="180" height="92" loading="lazy" decoding="async">' +
            '<span class="mega-menu__promo-name">' +
            item[0] +
            "</span>" +
            "</a>";
        }
      }

      track.innerHTML = html;
    }

    /* -----------------------------------------------
       Trending tags - hover se update
    ------------------------------------------------ */

    function renderTrending(container, items) {
      if (!container || !items) {
        return;
      }

      var html = "";

      for (var i = 0; i < items.length; i++) {
        var item = items[i];

        html +=
          '<a class="mega-menu__trending-tag" href="' +
          item[1] +
          '">' +
          '<svg class="mega-menu__trending-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' +
          '<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>' +
          '<polyline points="17 6 23 6 23 12"/>' +
          "</svg>" +
          "<span>" +
          item[0] +
          "</span>" +
          "</a>";
      }

      container.innerHTML = html;
    }

    renderList(popularList, popularLabel, data.popular);

    renderList(categoryList, categoryLabel, data.category);

    renderList(levelList, levelLabel, data.level);

    renderPromo(promoTrack, promoTitle, data.promo);

    renderTrending(trendingContainer, data.trending);

    /* -----------------------------------------------
       BUTTON TEXT + URL
    ------------------------------------------------ */

    if (button && data.button) {
      button.href = data.button.url;

      /*
       SVG ko preserve karne ke liye
       sirf text node update kar rahe hain.
      */

      var textNode = null;

      for (var n = 0; n < button.childNodes.length; n++) {
        if (button.childNodes[n].nodeType === 3) {
          textNode = button.childNodes[n];
          break;
        }
      }

      if (textNode) {
        textNode.nodeValue =
          "\n                  " + data.button.text + "\n\n                  ";
      }
    }
  }

  /* =======================================================
     SET ACTIVE FEATURED ITEM
  ======================================================= */

  function setFeatured(panel, link) {
    var links = panel.querySelectorAll(
      ".mega-menu__col--featured .mega-menu__link",
    );

    links.forEach(function (item) {
      item.classList.remove("mega-menu__link--active");

      item.removeAttribute("aria-current");
    });

    link.classList.add("mega-menu__link--active");

    link.setAttribute("aria-current", "page");

    var key = link.getAttribute("data-menu");

    if (key) {
      updateMegaMenu(panel, key);
    }
  }

  /* =======================================================
     INITIALIZE EACH MEGA MENU
  ======================================================= */

  document.querySelectorAll(".mega-menu").forEach(function (panel) {
    var firstLink = panel.querySelector(
      ".mega-menu__col--featured .mega-menu__link",
    );

    if (firstLink) {
      var key = firstLink.getAttribute("data-menu");

      if (key) {
        updateMegaMenu(panel, key);
      }
    }

    /*
     ======================================================
     DESKTOP:
     FEATURED LINK HOVER = CONTENT CHANGE

     CLICK nahi hai content switching ke liye.
     ======================================================
    */

    panel
      .querySelectorAll(".mega-menu__col--featured .mega-menu__link")
      .forEach(function (link) {
        link.addEventListener("mouseenter", function () {
          if (mq.matches) {
            setFeatured(panel, link);
          }
        });

        /*
         Keyboard accessibility:
         Tab/focus karne par bhi same behaviour.
        */

        link.addEventListener("focus", function () {
          if (mq.matches) {
            setFeatured(panel, link);
          }
        });
      });
  });

  /* =======================================================
     OPEN MOBILE NAV
  ======================================================= */

  function openNav() {
    nav.classList.add("is-open");

    toggle.setAttribute("aria-expanded", "true");

    toggle.setAttribute("aria-label", "Close menu");

    backdrop.hidden = false;

    document.body.classList.add("menu-open");
  }

  /* =======================================================
     CLOSE MOBILE NAV
  ======================================================= */

  function closeNav() {
    nav.classList.remove("is-open");

    toggle.setAttribute("aria-expanded", "false");

    toggle.setAttribute("aria-label", "Open menu");

    backdrop.hidden = true;

    document.body.classList.remove("menu-open");

    closeAllMenus();
  }

  /* =======================================================
     CLOSE ALL MEGA MENUS
  ======================================================= */

  function closeAllMenus(except) {
    document.querySelectorAll(".mega-menu.is-open").forEach(function (panel) {
      if (panel === except) {
        return;
      }

      panel.classList.remove("is-open");

      var trigger = document.querySelector(
        '[aria-controls="' + panel.id + '"]',
      );

      if (trigger) {
        trigger.setAttribute("aria-expanded", "false");
      }
    });
  }

  /* =======================================================
     TOGGLE MOBILE
  ======================================================= */

  toggle.addEventListener("click", function () {
    if (nav.classList.contains("is-open")) {
      closeNav();
    } else {
      openNav();
    }
  });

  if (mobileCloseBtn) {
    mobileCloseBtn.addEventListener("click", closeNav);
  }

  backdrop.addEventListener("click", closeNav);

  /* =======================================================
     MENU TRIGGERS
  ======================================================= */

  document.querySelectorAll("[data-menu-trigger]").forEach(function (trigger) {
    var item = trigger.closest(".site-nav__item--mega");

    var panel = document.getElementById(trigger.getAttribute("aria-controls"));

    function open() {
      closeAllMenus(panel);

      panel.classList.add("is-open");

      trigger.setAttribute("aria-expanded", "true");
    }

    function close() {
      panel.classList.remove("is-open");

      trigger.setAttribute("aria-expanded", "false");
    }

    /* CLICK */

    trigger.addEventListener("click", function (e) {
      e.preventDefault();

      if (panel.classList.contains("is-open")) {
        close();
      } else {
        open();
      }
    });

    /* DESKTOP HOVER */

    item.addEventListener("mouseenter", function () {
      if (mq.matches) {
        clearTimeout(timers.get(item));

        open();
      }
    });

    item.addEventListener("mouseleave", function () {
      if (mq.matches) {
        timers.set(item, setTimeout(close, 120));
      }
    });
  });

  /* =======================================================
     OUTSIDE CLICK
  ======================================================= */

  document.addEventListener("click", function (e) {
    if (!e.target.closest(".site-nav__item--mega")) {
      closeAllMenus();
    }
  });

  /* =======================================================
     ESCAPE
  ======================================================= */

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      closeAllMenus();

      if (!mq.matches) {
        closeNav();
      }
    }
  });

  /* =======================================================
     RESIZE
  ======================================================= */

  mq.addEventListener("change", function () {
    closeNav();
    closeAllMenus();
  });

  /* =======================================================
     SCROLL SHADOW

     Scroll listener ke bajaye IntersectionObserver
     use kiya gaya hai.
  ======================================================= */

  var sentinel = document.createElement("div");

  sentinel.style.cssText =
    "position:absolute;top:0;left:0;width:1px;height:1px;pointer-events:none;";

  document.body.prepend(sentinel);

  if ("IntersectionObserver" in window) {
    new IntersectionObserver(function (entries) {
      header.classList.toggle("is-scrolled", !entries[0].isIntersecting);
    }).observe(sentinel);
  }
})();
