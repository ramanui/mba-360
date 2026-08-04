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
      "autoplay; encrypted-media; picture-in-picture"
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
      if (
        e.key === "Escape" &&
        modal.getAttribute("data-open") === "true"
      ) {
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

      if (w >= 2000) return 4;
      if (w >= 1600) return 3.2;
      if (w >= 1366) return 3.2;
      if (w >= 1199) return 1.5;
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
            slidesPerView: 1.5,
            spaceBetween: 20,
          },
          767: {
            slidesPerView: 2.5,
            spaceBetween: 20,
          },
          1199: {
            slidesPerView: 1.5,
            spaceBetween: 24,
          },
          1366: {
            slidesPerView: 3.2,
            spaceBetween: 24,
          },
          1600: {
            slidesPerView: 3.2,
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

  function wireToggle(trigger, container) {
    var toggleIcon = trigger.querySelector(".clg-accHeader__toggle");

    trigger.addEventListener("click", function () {
      var isOpen = container.getAttribute("data-open") === "true";

      container.setAttribute("data-open", String(!isOpen));
      trigger.setAttribute("aria-expanded", String(!isOpen));

      if (toggleIcon) {
        toggleIcon.textContent = !isOpen ? "–" : "+";
      }
    });
  }

  document.querySelectorAll("[data-toggle-target]").forEach(function (trigger) {

    var target = null;

    var accordion = trigger.closest(".clg-accordion");

    if (accordion) {
      target = accordion.querySelector(
        "#" + trigger.getAttribute("data-toggle-target")
      );
    } else {
      target = document.getElementById(
        trigger.getAttribute("data-toggle-target")
      );
    }

    if (target) {
      wireToggle(trigger, target);
    }

  });


  /* ---------- Tabs ---------- */

  document.querySelectorAll("[data-tablist]").forEach(function (list) {

    var buttons = Array.from(
      list.querySelectorAll("[role='tab']")
    );

    function activateTab(btn) {

      buttons.forEach(function (b) {

        b.setAttribute("aria-selected", "false");
        b.setAttribute("tabindex", "-1");

        var panel = document.getElementById(
          b.getAttribute("aria-controls")
        );

        if (panel) {
          panel.hidden = true;
        }

      });

      btn.setAttribute("aria-selected", "true");
      btn.setAttribute("tabindex", "0");

      var activePanel = document.getElementById(
        btn.getAttribute("aria-controls")
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


