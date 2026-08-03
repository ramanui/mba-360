

import Swiper from "swiper";
import { Navigation} from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";

document.addEventListener("DOMContentLoaded", () => {
  const swiperEl = document.querySelector(".collegeSwiper");
  if (!swiperEl) return;

  const wrapperEl = swiperEl.querySelector(".swiper-wrapper");
  const filterBtns = document.querySelectorAll(".collegeFilterBtn");

  if (!wrapperEl) return;

  // Store original slides
  const allSlides = [...wrapperEl.children];

  let collegeSwiper = null;

  function getSlidesPerView() {
    const w = window.innerWidth;

    if (w >= 2000) return 4;
    if (w >= 1600) return 4.5;
    if (w >= 1366) return 4.5;
    if (w >= 1199) return 1.5;
    if (w >= 767) return 1.2;
    if (w >= 480) return 1.2;

    return 1.15;
  }

  function buildSwiper() {
    if (collegeSwiper) {
      collegeSwiper.destroy(true, true);
      collegeSwiper = null;
    }

    const totalSlides = wrapperEl.children.length;
    const slidesPerView = getSlidesPerView();

    collegeSwiper = new Swiper(swiperEl, {
      modules: [Navigation],

      slidesPerView: 1.15,
      spaceBetween: 20,

     loop: totalSlides > Math.ceil(slidesPerView),
rewind: false,

      navigation: {
        nextEl: document.querySelector("#collegeNext"),
        prevEl: document.querySelector("#collegePrev"),
      },

      breakpoints: {
        480: {
          slidesPerView: 1.2,
          spaceBetween: 10,
        },
        767: {
          slidesPerView: 1.2,
          spaceBetween: 15,
        },
        1199: {
          slidesPerView: 1.5,
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

    // Re-init Navigation
    collegeSwiper.navigation.init();
    collegeSwiper.navigation.update();
  }

  buildSwiper();

  filterBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      filterBtns.forEach((b) => b.setAttribute("aria-pressed", "false"));
      btn.setAttribute("aria-pressed", "true");

      const filter = btn.dataset.filter;

      const slides =
        filter === "all"
          ? allSlides
          : allSlides.filter(
              (slide) => slide.dataset.category === filter
            );

      wrapperEl.innerHTML = "";

      slides.forEach((slide) => wrapperEl.appendChild(slide));

      buildSwiper();
    });
  });

  let resizeTimer;

  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);

    resizeTimer = setTimeout(() => {
      buildSwiper();
    }, 200);
  });



 // Entrance Slider
const entranceSlider = document.querySelector(".entranceExams__slider");

if (entranceSlider) {
  new Swiper(entranceSlider, {
    modules: [Navigation],

    slidesPerView: 1.15,
    spaceBetween: 16,

    loop: true,
    speed: 700,

    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    //   pauseOnMouseEnter: true,
    // },

    navigation: {
      nextEl: "#entranceNext",
      prevEl: "#entrancePrev",
    },

    keyboard: {
      enabled: true,
    },

    breakpoints: {
      600: {
        slidesPerView: 2.2,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 3.2,
        spaceBetween: 24,
      },
      1500: {
        slidesPerView: 3.5,
        spaceBetween: 24,
      },
      1800: {
        slidesPerView: 4.5,
        spaceBetween: 24,
      },
    },
  });
}



});




