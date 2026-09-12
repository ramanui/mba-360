(function () {
  "use strict";

  /* ---- Reveal on scroll ---- */
  var revealEls = document.querySelectorAll(
    ".reveal, .revealleft, .revealright",
  );
  if (revealEls.length) {
    if (!("IntersectionObserver" in window)) {
      revealEls.forEach(function (el) {
        el.classList.add("visible");
      });
    } else {
      var revealObserver = new IntersectionObserver(
        function (entries, obs) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add("visible");
              obs.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.15, rootMargin: "0px 0px -40px 0px" },
      );
      revealEls.forEach(function (el) {
        revealObserver.observe(el);
      });
    }
  }

  /* ---- FAQ accordion (single open at a time) ---- */
  var faqList = document.querySelector(".faq-list");
  if (faqList) {
    var faqItems = faqList.querySelectorAll(".faq-item");

    function closeItem(item) {
      item.setAttribute("data-open", "false");
      item
        .querySelector(".faq-question")
        .setAttribute("aria-expanded", "false");
    }
    function openItem(item) {
      item.setAttribute("data-open", "true");
      item.querySelector(".faq-question").setAttribute("aria-expanded", "true");
    }

    faqList.addEventListener("click", function (e) {
      var btn = e.target.closest(".faq-question");
      if (!btn) return;
      var item = btn.closest(".faq-item");
      var isOpen = item.getAttribute("data-open") === "true";

      faqItems.forEach(function (other) {
        if (other !== item) closeItem(other);
      });

      if (isOpen) {
        closeItem(item);
      } else {
        openItem(item);
      }
    });
  }
})();
