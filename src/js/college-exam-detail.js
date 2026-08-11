



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


  // click Expand

document.querySelectorAll("[data-toggle-target]").forEach(function (trigger) {

  var target = null;

  // Accordion ke andar hai
  var accordion = trigger.closest(".clg-accordion");

  if (accordion) {
    target = accordion.querySelector(
      "#" + trigger.getAttribute("data-toggle-target")
    );
  } else {
    // About card jaisa normal element
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

    var buttons = Array.from(list.querySelectorAll("[role='tab']"));

    buttons.forEach(function (btn) {

      btn.addEventListener("click", function () {

        buttons.forEach(function (b) {

          b.setAttribute("aria-selected", "false");

          var scope = list.parentElement;

          var panel = scope.querySelector(
            "#" + CSS.escape(b.getAttribute("aria-controls"))
          );

          if (panel) panel.hidden = true;
        });

        btn.setAttribute("aria-selected", "true");

        var scope = list.parentElement;

        var activePanel = scope.querySelector(
          "#" + CSS.escape(btn.getAttribute("aria-controls"))
        );

        if (activePanel) activePanel.hidden = false;

      });

    });

  });


  /* ---------- Scroll reveal ---------- */
  var revealTargets = document.querySelectorAll(".reveal, .revealleft, .revealright");

  if ("IntersectionObserver" in window && revealTargets.length) {

    var revealObserver = new IntersectionObserver(function (entries, obs) {

      entries.forEach(function (entry) {

        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          obs.unobserve(entry.target);
        }

      });

    }, {
      threshold: 0.15,
      rootMargin: "0px 0px -40px 0px"
    });

    revealTargets.forEach(function (el) {
      revealObserver.observe(el);
    });

  } else {

    revealTargets.forEach(function (el) {
      el.classList.add("visible");
    });

  }

  

  

/* ---------- Scroll Spy ---------- */

/* =========================================================
   Tab Navigation — Scroll Spy + Center-on-Click
   - Load: sirf active tab set hota hai (no auto-scroll)
   - Scroll: sirf active tab class update hoti hai (no auto-center)
   - Click: tab center mein smooth scroll hokar aata hai
   ========================================================= */

var OFFSET = 100;

var navLinks = [...document.querySelectorAll(".clg-tabnav__list a")];

var sections = navLinks
  .map(link => document.querySelector(link.getAttribute("href")))
  .filter(Boolean);

/* ---------- Set active tab (DOM class only) ---------- */
function setActiveLink(activeLink) {
  navLinks.forEach(link => link.removeAttribute("aria-current"));
  if (activeLink) activeLink.setAttribute("aria-current", "true");
}

/* ---------- Find the real horizontally-scrollable ancestor ---------- */
function getScrollParent(el) {
  var node = el;
  while (node) {
    var style = getComputedStyle(node);
    var overflowX = style.overflowX;
    var canScroll =
      (overflowX === "auto" || overflowX === "scroll") &&
      node.scrollWidth > node.clientWidth;

    if (canScroll) return node;
    node = node.parentElement;
  }
  return null;
}

/* ---------- Center a tab horizontally inside its scroll container ---------- */
/* Ye function sirf isliye call hoti hai jab USER khud click kare */
function centerActiveTab(link) {
  if (!link) return;

  var scrollContainer = getScrollParent(link);
  if (!scrollContainer) return;

  var containerRect = scrollContainer.getBoundingClientRect();
  var linkRect = link.getBoundingClientRect();

  var offset =
    (linkRect.left + linkRect.width / 2) -
    (containerRect.left + containerRect.width / 2);

  var maxScroll = scrollContainer.scrollWidth - scrollContainer.clientWidth;
  var newScrollLeft = scrollContainer.scrollLeft + offset;

  newScrollLeft = Math.max(0, Math.min(newScrollLeft, maxScroll));

  scrollContainer.scrollTo({
    left: newScrollLeft,
    behavior: "smooth"
  });
}

/* ---------- Click: page scroll + active set + tab center ---------- */
navLinks.forEach(function (link) {

  link.addEventListener("click", function (e) {

    e.preventDefault();

    var target = document.querySelector(this.getAttribute("href"));
    if (!target) return;

    var y = target.getBoundingClientRect().top + window.pageYOffset - OFFSET;

    window.scrollTo({
      top: y,
      behavior: "smooth"
    });

    setActiveLink(this);
    centerActiveTab(this);   

  });

});

/* ---------- Scroll Spy: sirf active class update, NO centering ---------- */
function updateActive() {

  let current = sections[0];

  sections.forEach(function (section) {
    if (window.pageYOffset + OFFSET >= section.offsetTop) {
      current = section;
    }
  });

  const active = navLinks.find(link => link.getAttribute("href") === "#" + current.id);

  setActiveLink(active);   

}

window.addEventListener("scroll", updateActive, { passive: true });


window.addEventListener("load", function () {
  updateActive();   
});

window.addEventListener("resize", updateActive);








/* ---- 3) Entrance Exams Slider — lazy-loaded Swiper (CWV safe) ---- */
  var entranceSlider = document.querySelector('.entranceExams__slider');

  if (entranceSlider) {
    var swiperLoaded = false;

    var initEntranceSlider = function () {
      if (swiperLoaded) return;
      swiperLoaded = true;

      Promise.all([
        import('swiper'),
        import('swiper/modules'),
        import('swiper/css'),
        import('swiper/css/navigation')
      ]).then(function (mods) {
        var Swiper = mods[0].default;
        var Navigation = mods[1].Navigation;

        new Swiper(entranceSlider, {
          modules: [Navigation],

          slidesPerView: 1.15,
          spaceBetween: 16,

          loop: true,
          speed: 700,

          navigation: {
            nextEl: '#entranceNext',
            prevEl: '#entrancePrev',
          },

          keyboard: {
            enabled: true,
          },

          breakpoints: {
            600: { slidesPerView: 1.2, spaceBetween: 20 },
            992: { slidesPerView: 2.2, spaceBetween: 24 },
            1500: { slidesPerView: 2.5, spaceBetween: 24 },
            1800: { slidesPerView: 3.2, spaceBetween: 24 },
          },
        });
      });
    };

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            initEntranceSlider();
            observer.unobserve(entranceSlider);
          }
        });
      }, { rootMargin: '200px 0px' });

      observer.observe(entranceSlider);
    } else {
      // fallback for old browsers
      initEntranceSlider();
    }
  }



//   const modal = document.getElementById("videoModal");
// const frame = document.getElementById("videoFrame");

// document.querySelectorAll(".alumniCardPlay").forEach(btn => {
//     btn.addEventListener("click", () => {
//         frame.src = btn.dataset.video;
//         modal.classList.add("active");
//     });
// });

// function closeVideo(){
//     modal.classList.remove("active");
//     frame.src = "";
// }

// document.querySelector(".videoModal__close").addEventListener("click", closeVideo);
// document.querySelector(".videoModal__overlay").addEventListener("click", closeVideo);

const header = document.querySelector(".clg-header"); if (!header) return; const modal = header.querySelector("#videoModal-second"); const frame = header.querySelector("#videoFrame-second"); if (!modal || !frame) return; /* ---------- Open Video ---------- */ header.querySelectorAll(".alumniCardPlay").forEach(btn => { btn.addEventListener("click", () => { frame.src = btn.dataset.video; modal.classList.add("active"); }); }); /* ---------- Close Video ---------- */ function closeVideo() { modal.classList.remove("active"); frame.src = ""; } /* ---------- Close Button ---------- */ const closeBtn = modal.querySelector(".videoModal__close"); if (closeBtn) { closeBtn.addEventListener("click", closeVideo); } /* ---------- Overlay ---------- */ const overlay = modal.querySelector(".videoModal__overlay"); if (overlay) { overlay.addEventListener("click", closeVideo); }




})();






