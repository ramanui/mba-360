/* ============================================
   Video Library — Embla Carousel + lazy video facade
   ============================================= */


		
document.addEventListener('DOMContentLoaded', function () {

  var swiperEl = document.querySelector('.videoLibraryCarousel .swiper');
  if (!swiperEl || typeof Swiper === 'undefined') return;

  new Swiper(swiperEl, {
    slidesPerView: 1,
    spaceBetween: 16,
    loop: false,
    navigation: {
      nextEl: '.videoLibraryNext',
      prevEl: '.videoLibraryPrev'
    },
    pagination: {
      el: '.videoLibraryDots',
      clickable: true,
      bulletClass: 'videoLibraryDot',
      bulletActiveClass: 'isSelected'
    },
    breakpoints: {
      768: { slidesPerView: 2, spaceBetween: 16 },
      1100: { slidesPerView: 3, spaceBetween: 16 }
    }
  });

  /* ---------- Video modal ---------- */

  var modal = document.getElementById('videoLibraryModal');
  var frame = document.getElementById('videoLibraryFrame');

  if (!modal || !frame) return;

  var closeButton = modal.querySelector('.videoModal__close');
  var overlay = modal.querySelector('.videoModal__overlay');
  var playButtons = document.querySelectorAll('.videoCardFacade');

  function openVideo(videoId) {
    if (!videoId) return;
    frame.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&enablejsapi=1';
    modal.classList.add('active');
  }

  function closeVideo() {
    modal.classList.remove('active');
    frame.src = ''; // stop playback
  }

  playButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      openVideo(button.getAttribute('data-video-id'));
    });
  });

  if (closeButton) closeButton.addEventListener('click', closeVideo);
  if (overlay) overlay.addEventListener('click', closeVideo);

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && modal.classList.contains('active')) {
      closeVideo();
    }
  });

});
	


//
//
//(function () {
//    const counters = document.querySelectorAll('.advert-stat__value');
//    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
//
//    const parseValue = (text) => {
//        const match = text.match(/^([^\d]*)([\d.]+)(.*)$/);
//        if (!match) return null; // "PPL" jaisa non-numeric skip ho jayega
//        return {
//            prefix: match[1],
//            target: parseFloat(match[2]),
//            decimals: (match[2].split('.')[1] || '').length,
//            suffix: match[3],
//            el: null,
//            startTime: null,
//            done: false
//        };
//    };
//
//    const DURATION = 2800; // slow speed
//
//    let activeCounters = [];
//    let rafId = null;
//
//    const tick = (now) => {
//        let stillRunning = false;
//
//        activeCounters.forEach((data) => {
//            if (!data.startTime) data.startTime = now;
//            const progress = Math.min((now - data.startTime) / DURATION, 1);
//            const eased = 1 - Math.pow(1 - progress, 2); // gradual easing
//            const current = data.target * eased;
//
//            data.el.textContent = data.prefix + current.toFixed(data.decimals) + data.suffix;
//
//            if (progress < 1) {
//                stillRunning = true;
//            } else {
//                data.el.textContent = data.prefix + data.target.toFixed(data.decimals) + data.suffix;
//                data.done = true;
//            }
//        });
//
//        activeCounters = activeCounters.filter((d) => !d.done);
//
//        if (stillRunning) {
//            rafId = requestAnimationFrame(tick);
//        } else {
//            rafId = null;
//        }
//    };
//
//    const startCounter = (el) => {
//        const originalText = el.textContent.trim();
//        const data = parseValue(originalText);
//        if (!data) return;
//
//        if (reduceMotion) {
//            el.textContent = data.prefix + data.target.toFixed(data.decimals) + data.suffix;
//            return;
//        }
//
//        data.el = el;
//        activeCounters.push(data);
//
//        if (!rafId) {
//            rafId = requestAnimationFrame(tick);
//        }
//    };
//
//    const observer = new IntersectionObserver((entries, obs) => {
//        entries.forEach((entry) => {
//            if (entry.isIntersecting) {
//                startCounter(entry.target);
//                obs.unobserve(entry.target);
//            }
//        });
//    }, { threshold: 0.5, rootMargin: '0px 0px -50px 0px' });
//
//    counters.forEach((el) => observer.observe(el));
//})();
