// ==========================================================
// Collapse + Scroll Reveal + Exam Show-More (Optimized)
// ==========================================================

(() => {
  "use strict";

  document.addEventListener("DOMContentLoaded", () => {
    initAccordion();
    initScrollReveal();
    initExamShowMoreToggle();
  });

  /* ======================================================
     1) Generic Accordion (Event Delegation — 1 listener)
  ====================================================== */
  function initAccordion() {
    document.addEventListener("click", (e) => {
      const trigger = e.target.closest("[data-toggle-target]");
      if (!trigger) return;

      const targetId = trigger.dataset.toggleTarget;
      const accordion = trigger.closest(".clg-accordion");

      const container = accordion
        ? accordion.querySelector(`#${targetId}`)
        : document.getElementById(targetId);

      if (!container) return;

      const isOpen = container.dataset.open === "true";
      const newState = !isOpen;

      container.dataset.open = newState;
      trigger.setAttribute("aria-expanded", newState);

      const icon = trigger.querySelector(".clg-accHeader__toggle");
      if (icon) {
        icon.textContent = newState ? "–" : "+";
      }
    });
  }

  /* ======================================================
     2) Scroll Reveal (with no-IntersectionObserver fallback)
  ====================================================== */
  function initScrollReveal() {
    const revealTargets = document.querySelectorAll(
      ".reveal, .revealleft, .revealright"
    );

    if (!revealTargets.length) return;

    if ("IntersectionObserver" in window) {
      const observer = new IntersectionObserver(
        (entries, obs) => {
          entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add("visible");
            obs.unobserve(entry.target);
          });
        },
        {
          threshold: 0.15,
          rootMargin: "0px 0px -40px 0px",
        }
      );

      revealTargets.forEach((el) => observer.observe(el));
    } else {
      // Old browsers: just show everything, no animation
      revealTargets.forEach((el) => el.classList.add("visible"));
    }
  }

  /* ======================================================
     3) EXAM FILTER GROUP — "Show more / Show less" toggle
  ====================================================== */
  function initExamShowMoreToggle() {
    const moreBtns = document.querySelectorAll(".examFilterGroup__more");
    if (!moreBtns.length) return;

    moreBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const extra = this.previousElementSibling;
        if (!extra) return;
        const isHidden = extra.hasAttribute("hidden");

        if (isHidden) {
          extra.removeAttribute("hidden");
          this.textContent = this.textContent.replace("Show more", "Show less").replace("+", "-");
        } else {
          extra.setAttribute("hidden", "");
          this.textContent = this.textContent.replace("Show less", "Show more").replace("-", "+");
        }
      });
    });
  }


/* ---- table toggle View All (Simple text toggle) ---- */

var viewAllBtn = document.getElementById("examViewAllBtn");
var examExtraRows = document.querySelectorAll(".examTable__extraRow");

if (viewAllBtn) {

    var isExpanded = false;
    var btnTextSpan = viewAllBtn.querySelector("span") ? viewAllBtn.innerHTML.split("<span")[1] : "";
    var svgPart = viewAllBtn.querySelector("span") ? viewAllBtn.querySelector("span").outerHTML : "";

    viewAllBtn.addEventListener("click", function () {

        isExpanded = !isExpanded;

        examExtraRows.forEach(function (row) {
            row.style.display = isExpanded ? "" : "none";
        });

        viewAllBtn.innerHTML = (isExpanded ? "Show Less " : "View Full NIRF Top 100 List ") + svgPart;

    });

}

})();