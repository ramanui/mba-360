/* ============================================
   Video Library — Embla Carousel + lazy video facade
   ============================================= */
import EmblaCarousel from "embla-carousel";

document.addEventListener('DOMContentLoaded', function () {

  var viewportNode = document.querySelector('.emblaViewport');
  if (!viewportNode || typeof EmblaCarousel === 'undefined') return;

  var prevButton = document.querySelector('.videoLibraryPrev');
  var nextButton = document.querySelector('.videoLibraryNext');
  var dotsWrap = document.querySelector('.videoLibraryDots');

  var embla = EmblaCarousel(viewportNode, {
    loop: false,
    align: 'start',
    skipSnaps: false,
    dragFree: false
  });

  /* ---------- Dots ---------- */

  function buildDots() {
    dotsWrap.innerHTML = '';
    var slideCount = embla.scrollSnapList().length;

    for (var i = 0; i < slideCount; i++) {
      var dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'videoLibraryDot';
      dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
      dot.addEventListener('click', (function (index) {
        return function () {
          embla.scrollTo(index);
        };
      })(i));
      dotsWrap.appendChild(dot);
    }
  }

  function updateDots() {
    var dots = dotsWrap.querySelectorAll('.videoLibraryDot');
    var selectedIndex = embla.selectedScrollSnap();

    dots.forEach(function (dot, index) {
      if (index === selectedIndex) {
        dot.classList.add('isSelected');
      } else {
        dot.classList.remove('isSelected');
      }
    });
  }

  /* ---------- Arrows ---------- */

  function updateArrows() {
    if (!prevButton || !nextButton) return;
    prevButton.disabled = !embla.canScrollPrev();
    nextButton.disabled = !embla.canScrollNext();
  }

  if (prevButton) {
    prevButton.addEventListener('click', function () {
      embla.scrollPrev();
    });
  }

  if (nextButton) {
    nextButton.addEventListener('click', function () {
      embla.scrollNext();
    });
  }

  /* ---------- Init ---------- */

  buildDots();
  updateDots();
  updateArrows();

  embla.on('select', function () {
    updateDots();
    updateArrows();
  });

  embla.on('reInit', function () {
    buildDots();
    updateDots();
    updateArrows();
  });

  /* ---------- Video facade: inject iframe only on click ----------
     Keeps initial page load free of YouTube's iframe/JS payload.
     No CLS: the iframe fills the same box the facade already reserved. */

  var facades = document.querySelectorAll('.videoCardFacade');
  var activeIframes = []; // every YouTube iframe created so far

  function pauseAllVideos() {
    activeIframes.forEach(function (iframe) {
      if (!iframe.contentWindow) return;
      iframe.contentWindow.postMessage(
        JSON.stringify({ event: 'command', func: 'pauseVideo', args: [] }),
        '*'
      );
    });
  }

  facades.forEach(function (facade) {
    facade.addEventListener('click', function () {
      var videoId = facade.getAttribute('data-video-id');
      if (!videoId) return;

      // Pause whatever is already playing before starting a new one
      pauseAllVideos();

      var iframe = document.createElement('iframe');
      // enablejsapi=1 is required so postMessage commands (pause) work
      iframe.src = 'https://www.youtube.com/embed/' + videoId +
        '?autoplay=1&enablejsapi=1&si=6xLLtDiLX8I-VGiE';
      iframe.title = 'YouTube video player';
      iframe.setAttribute('frameborder', '0');
      iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
      iframe.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
      iframe.setAttribute('allowfullscreen', '');

      facade.innerHTML = '';
      facade.appendChild(iframe);
      activeIframes.push(iframe);

      // Prevent re-click launching another iframe / losing focus semantics
      facade.disabled = true;
      facade.removeAttribute('aria-label');
    }, { once: true });
  });

});




(function () {
    const counters = document.querySelectorAll('.advert-stat__value');
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const parseValue = (text) => {
        const match = text.match(/^([^\d]*)([\d.]+)(.*)$/);
        if (!match) return null; // "PPL" jaisa non-numeric skip ho jayega
        return {
            prefix: match[1],
            target: parseFloat(match[2]),
            decimals: (match[2].split('.')[1] || '').length,
            suffix: match[3],
            el: null,
            startTime: null,
            done: false
        };
    };

    const DURATION = 2800; // slow speed

    let activeCounters = [];
    let rafId = null;

    const tick = (now) => {
        let stillRunning = false;

        activeCounters.forEach((data) => {
            if (!data.startTime) data.startTime = now;
            const progress = Math.min((now - data.startTime) / DURATION, 1);
            const eased = 1 - Math.pow(1 - progress, 2); // gradual easing
            const current = data.target * eased;

            data.el.textContent = data.prefix + current.toFixed(data.decimals) + data.suffix;

            if (progress < 1) {
                stillRunning = true;
            } else {
                data.el.textContent = data.prefix + data.target.toFixed(data.decimals) + data.suffix;
                data.done = true;
            }
        });

        activeCounters = activeCounters.filter((d) => !d.done);

        if (stillRunning) {
            rafId = requestAnimationFrame(tick);
        } else {
            rafId = null;
        }
    };

    const startCounter = (el) => {
        const originalText = el.textContent.trim();
        const data = parseValue(originalText);
        if (!data) return;

        if (reduceMotion) {
            el.textContent = data.prefix + data.target.toFixed(data.decimals) + data.suffix;
            return;
        }

        data.el = el;
        activeCounters.push(data);

        if (!rafId) {
            rafId = requestAnimationFrame(tick);
        }
    };

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5, rootMargin: '0px 0px -50px 0px' });

    counters.forEach((el) => observer.observe(el));
})();
