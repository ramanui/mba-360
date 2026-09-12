import Swiper from "swiper";
import { Navigation } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";

(function () {
  /* ---------- Video popup ---------- */
  var modal = document.getElementById("videoModal");
  var frameHost = document.getElementById("videoFrame");
  var lastTrigger = null;

  function openVideo(videoId, trigger) {
    if (!modal || !frameHost) return;

    lastTrigger = trigger;

    var iframe = document.createElement("iframe");
    iframe.src =
      "https://www.youtube.com/embed/" +
      videoId +
      "?autoplay=1&enablejsapi=1&si=6xLLtDiLX8I-VGiE";

    iframe.title = "Alumni video story";
    iframe.setAttribute(
      "allow",
      "autoplay; encrypted-media; picture-in-picture",
    );
    iframe.setAttribute("allowfullscreen", "");
    iframe.setAttribute("loading", "lazy");

    frameHost.innerHTML = "";
    frameHost.appendChild(iframe);

    modal.setAttribute("data-open", "true");
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";

    var closeBtn = modal.querySelector(".videoModalClose");
    if (closeBtn) closeBtn.focus();
  }

  function closeVideo() {
    if (!modal || !frameHost) return;

    frameHost.innerHTML = "";
    modal.setAttribute("data-open", "false");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";

    if (lastTrigger) lastTrigger.focus();
  }

  if (modal && frameHost) {
    document.querySelectorAll(".alumniCardPlay").forEach(function (btn) {
      btn.addEventListener("click", function () {
        var card = btn.closest(".alumniCard");
        var videoId = card ? card.getAttribute("data-video-id") : null;

        if (videoId) {
          openVideo(videoId, btn);
        }
      });
    });

    modal.querySelectorAll("[data-close]").forEach(function (el) {
      el.addEventListener("click", closeVideo);
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && modal.getAttribute("data-open") === "true") {
        closeVideo();
      }
    });
  }

  /* ---------- Swiper ---------- */

  var alumniSwiperInstance = null;

  function initAlumniSwiper() {
    var swiperEl = document.querySelector(".alumniSwiper");
    if (!swiperEl || swiperEl.dataset.inited === "true") return;

    swiperEl.dataset.inited = "true";

    var wrapperEl = swiperEl.querySelector(".swiper-wrapper");
    if (!wrapperEl) return;

    function getSlidesPerView() {
      var w = window.innerWidth;

      if (w >= 2000) return 3.2;
      if (w >= 1600) return 2.8;
      if (w >= 1366) return 2.8;
      if (w >= 1199) return 2.5;
      if (w >= 767) return 2.5;
      if (w >= 480) return 1.5;

      return 1.15;
    }

    function buildSwiper() {
      if (alumniSwiperInstance) {
        alumniSwiperInstance.destroy(true, true);
        alumniSwiperInstance = null;
      }

      var totalSlides = wrapperEl.children.length;
      var slidesPerView = getSlidesPerView();

      alumniSwiperInstance = new Swiper(swiperEl, {
        modules: [Navigation],

        slidesPerView: 1.15,
        spaceBetween: 20,

        loop: totalSlides > Math.ceil(slidesPerView),
        rewind: false,

        navigation: {
          nextEl: document.getElementById("alumniNext"),
          prevEl: document.getElementById("alumniPrev"),
        },

        breakpoints: {
          480: {
            slidesPerView: 1.2,
            spaceBetween: 20,
          },
          767: {
            slidesPerView: 1.5,
            spaceBetween: 20,
          },
          1199: {
            slidesPerView: 2.5,
            spaceBetween: 24,
          },
          1366: {
            slidesPerView: 2.8,
            spaceBetween: 24,
          },
          1600: {
            slidesPerView: 2.8,
            spaceBetween: 24,
          },
        },
      });

      if (alumniSwiperInstance.navigation) {
        alumniSwiperInstance.navigation.init();
        alumniSwiperInstance.navigation.update();
      }
    }

    buildSwiper();

    var resizeTimer;

    window.addEventListener("resize", function () {
      clearTimeout(resizeTimer);

      resizeTimer = setTimeout(buildSwiper, 200);
    });
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initAlumniSwiper);
  } else {
    initAlumniSwiper();
  }
})();

(function () {
  "use strict";

  /* ---------- Generic accordion ---------- */

  // function wireToggle(trigger, container) {
  //   var toggleIcon = trigger.querySelector(".clg-accHeader__toggle");

  //   trigger.addEventListener("click", function () {
  //     var isOpen = container.getAttribute("data-open") === "true";

  //     container.setAttribute("data-open", String(!isOpen));
  //     trigger.setAttribute("aria-expanded", String(!isOpen));

  //     if (toggleIcon) {
  //       toggleIcon.textContent = !isOpen ? "–" : "+";
  //     }
  //   });
  // }

  // document.querySelectorAll("[data-toggle-target]").forEach(function (trigger) {

  //   var target = null;

  //   var accordion = trigger.closest(".clg-accordion");

  //   if (accordion) {
  //     target = accordion.querySelector(
  //       "#" + trigger.getAttribute("data-toggle-target")
  //     );
  //   } else {
  //     target = document.getElementById(
  //       trigger.getAttribute("data-toggle-target")
  //     );
  //   }

  //   if (target) {
  //     wireToggle(trigger, target);
  //   }

  // });

  /* ---------- Tabs ---------- */

  document.querySelectorAll("[data-tablist]").forEach(function (list) {
    var buttons = Array.from(list.querySelectorAll("[role='tab']"));

    function activateTab(btn) {
      buttons.forEach(function (b) {
        b.setAttribute("aria-selected", "false");
        b.setAttribute("tabindex", "-1");

        var panel = document.getElementById(b.getAttribute("aria-controls"));

        if (panel) {
          panel.hidden = true;
        }
      });

      btn.setAttribute("aria-selected", "true");
      btn.setAttribute("tabindex", "0");

      var activePanel = document.getElementById(
        btn.getAttribute("aria-controls"),
      );

      if (activePanel) {
        activePanel.hidden = false;
      }
    }

    buttons.forEach(function (btn) {
      btn.addEventListener("click", function () {
        activateTab(btn);
      });
    });

    // Initial active tab
    var active =
      buttons.find(function (btn) {
        return btn.getAttribute("aria-selected") === "true";
      }) || buttons[0];

    if (active) {
      activateTab(active);
    }
  });
})();

("use strict");

/* =========================================================
   College Tab Navigation — Scroll Spy
   ========================================================= */

(function initScrollSpy() {
  const OFFSET = 100;
  const navLinks = [...document.querySelectorAll(".clg-tabnav__list a")];

  if (!navLinks.length) return;

  let sections = [];
  let ticking = false;
  let isClickScrolling = false;

  /* ---------------- Cache Sections ---------------- */

  function cacheSections() {
    sections = navLinks
      .map((link) => {
        const target = document.querySelector(link.getAttribute("href"));

        return target
          ? {
              id: target.id,
              element: target,
              top: 0,
            }
          : null;
      })
      .filter(Boolean);

    updateSectionPositions();
  }

  function updateSectionPositions() {
    const scrollY = window.scrollY;

    sections.forEach((section) => {
      section.top = section.element.getBoundingClientRect().top + scrollY;
    });
  }

  /* ---------------- Active Link ---------------- */

  function setActiveLink(activeLink) {
    navLinks.forEach((link) => {
      link.removeAttribute("aria-current");
    });

    if (activeLink) {
      activeLink.setAttribute("aria-current", "true");
    }
  }

  /* ---------------- Scroll Spy ---------------- */

  function updateActiveSection() {
    ticking = false;

    if (isClickScrolling || !sections.length) return;

    const scrollY = window.scrollY + OFFSET + 5;
    let currentSection = sections[0];

    for (const section of sections) {
      if (scrollY >= section.top) {
        currentSection = section;
      } else {
        break;
      }
    }

    const activeLink = navLinks.find(
      (link) => link.getAttribute("href") === `#${currentSection.id}`,
    );

    setActiveLink(activeLink);
  }

  function requestUpdate() {
    if (ticking) return;

    ticking = true;
    requestAnimationFrame(updateActiveSection);
  }

  /* ---------------- Click Navigation ---------------- */

  navLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();

      const target = document.querySelector(link.getAttribute("href"));

      if (!target) return;

      isClickScrolling = true;

      setActiveLink(link);

      const targetPosition =
        target.getBoundingClientRect().top + window.scrollY - OFFSET;

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });

      /*
       * Smooth scroll normally finishes quickly.
       * Recalculate positions after scrolling.
       */
      setTimeout(() => {
        cacheSections();
        isClickScrolling = false;
        updateActiveSection();
      }, 600);
    });
  });

  /* ---------------- Init ---------------- */

  cacheSections();
  updateActiveSection();

  window.addEventListener("scroll", requestUpdate, {
    passive: true,
  });

  window.addEventListener(
    "resize",
    () => {
      cacheSections();
      requestUpdate();
    },
    { passive: true },
  );

  window.addEventListener("load", () => {
    cacheSections();
    updateActiveSection();
  });
})();

/* =========================================================
   Reveal Animation
   ========================================================= */

(function initRevealAnimation() {
  const elements = document.querySelectorAll(
    ".reveal, .revealleft, .revealright",
  );

  if (!elements.length || !("IntersectionObserver" in window)) {
    return;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      });
    },
    {
      threshold: 0.25,
    },
  );

  elements.forEach((element) => {
    observer.observe(element);
  });
})();

/* =========================================================
   Tabs
   ========================================================= */

(function initTabs() {
  const tabLists = document.querySelectorAll("[data-tablist]");

  if (!tabLists.length) return;

  tabLists.forEach((tabList) => {
    const buttons = [...tabList.querySelectorAll("[role='tab']")];

    if (!buttons.length) return;

    /* ---------------- Get Tab Panels ---------------- */

    const panels = buttons
      .map((button) => {
        const panelId = button.getAttribute("aria-controls");

        return panelId ? document.getElementById(panelId) : null;
      })
      .filter(Boolean);

    /* ---------------- Find Scroll Container ---------------- */

    function getScrollParent(element) {
      let parent = element.parentElement;

      while (parent) {
        const style = getComputedStyle(parent);
        const canScroll =
          (style.overflowX === "auto" || style.overflowX === "scroll") &&
          parent.scrollWidth > parent.clientWidth;

        if (canScroll) {
          return parent;
        }

        parent = parent.parentElement;
      }

      return null;
    }

    /* ---------------- Center Active Tab ---------------- */

    function centerActiveTab(button) {
      const scrollContainer = getScrollParent(button);

      if (!scrollContainer) return;

      const containerRect = scrollContainer.getBoundingClientRect();

      const buttonRect = button.getBoundingClientRect();

      const offset =
        buttonRect.left +
        buttonRect.width / 2 -
        (containerRect.left + containerRect.width / 2);

      const maxScroll =
        scrollContainer.scrollWidth - scrollContainer.clientWidth;

      const newScrollLeft = Math.max(
        0,
        Math.min(scrollContainer.scrollLeft + offset, maxScroll),
      );

      scrollContainer.scrollTo({
        left: newScrollLeft,
        behavior: "smooth",
      });
    }

    /* ---------------- Activate Tab ---------------- */

    function activateTab(button, shouldCenter = false) {
      buttons.forEach((tab) => {
        const isActive = tab === button;

        tab.setAttribute("aria-selected", String(isActive));

        tab.setAttribute("tabindex", isActive ? "0" : "-1");
      });

      panels.forEach((panel) => {
        const isActive = panel.id === button.getAttribute("aria-controls");

        panel.hidden = !isActive;

        /*
         * Keep display property in sync with hidden state
         * for existing CSS/layout compatibility.
         */
        panel.style.display = isActive ? "block" : "none";
      });

      if (shouldCenter) {
        centerActiveTab(button);
      }
    }

    /* ---------------- Click Events ---------------- */

    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        activateTab(button, true);
      });
    });

    /* ---------------- Initial Tab ---------------- */

    const activeTab =
      buttons.find(
        (button) => button.getAttribute("aria-selected") === "true",
      ) || buttons[0];

    if (activeTab) {
      /*
       * Do not center on initial page load.
       * This prevents unwanted horizontal page movement.
       */
      activateTab(activeTab);
    }
  });
})();
