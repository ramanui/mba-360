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
      if (w >= 1600) return 4.5;
      if (w >= 1366) return 4.5;
      if (w >= 1024) return 3.5;
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
          1024: {
            slidesPerView: 3.5,
            spaceBetween: 24,
          },
          1366: {
            slidesPerView: 3.5,
            spaceBetween: 24,
          },
          1600: {
            slidesPerView: 4.5,
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