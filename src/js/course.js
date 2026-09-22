/* =========================================================
   MAIN.JS — Combined page script (single file, defer-ready)
   Sections: 1) Scroll Reveal  2) Exam "Show more" toggle
             3) Exam Filters/Sort/Pagination + Admission Form
             4) Accordion toggle (event delegation)
   Perf notes:
   - Load this file with the "defer" attribute on <script>,
     e.g. <script src="main.js" defer></script>
   - Single DOMContentLoaded wrapper (no duplicate listeners)
   - One IntersectionObserver instance, elements unobserved
     after reveal (frees memory, avoids layout thrash)
   - Accordion uses event delegation (1 listener, not N)
   ========================================================= */

   
(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", init);

  function init() {
    initRevealAnimations();
    initExamShowMoreToggle();
    initExamFiltersModule();
    initAccordionToggle();
  }

  /* ---------------------------------------------------------
     1) SCROLL REVEAL (.reveal, .revealleft, .revealright)
  --------------------------------------------------------- */
  function initRevealAnimations() {
    var elements = document.querySelectorAll(".reveal, .revealleft, .revealright");
    if (!elements.length) return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.25 });

    elements.forEach(function (el) { observer.observe(el); });
  }

  /* ---------------------------------------------------------
     2) EXAM FILTER GROUP — "Show more / Show less" toggle
  --------------------------------------------------------- */
function initExamShowMoreToggle() {
  if (document.body.dataset.examShowMoreInit === "true") {
    return;
  }

  document.body.dataset.examShowMoreInit = "true";

  document.addEventListener("click", function (e) {
    var btn = e.target.closest(".examFilterGroup__more");

    if (!btn) return;

    e.preventDefault();
    e.stopPropagation();

    var extra = btn.previousElementSibling;

    if (!extra) return;

    if (!extra.classList.contains("examFilterGroup__extra")) {
      return;
    }

    var opened = extra.dataset.showMoreOpen === "true";

    if (opened) {
      extra.setAttribute("hidden", "");
      extra.dataset.showMoreOpen = "false";
      btn.textContent = "+ Show more";
    } else {
      extra.removeAttribute("hidden");
      extra.dataset.showMoreOpen = "true";
      btn.textContent = "- Show less";
    }
  });
}
  /* ---------------------------------------------------------
     3) EXAM FILTERS + SORT + PAGINATION + ADMISSION FORM
  --------------------------------------------------------- */
  function initExamFiltersModule() {
    var examCards = document.querySelectorAll(".examMain > .examCard");
    if (!examCards.length) {
      // still run admission form validation even if no exam cards on this page
      initAdmissionForm();
      return;
    }

    /* ---- Mobile Filter Toggle ---- */
    var mobileFilterToggleBtn = document.getElementById("examMobileFilterToggle");
    var mobileFiltersPanel = document.getElementById("examFiltersPanel");

    if (mobileFilterToggleBtn && mobileFiltersPanel) {
      mobileFilterToggleBtn.addEventListener("click", function () {
        var isOpen = mobileFiltersPanel.classList.toggle("is-open");
        mobileFilterToggleBtn.classList.toggle("is-open", isOpen);
        mobileFilterToggleBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");
      });
    }

    var activeFiltersBar = document.getElementById("examActiveFilters");
    var clearAllLink = document.getElementById("examClearAll");
    var noResultsEl = document.getElementById("examNoResults");
    var resultCountEl = document.getElementById("examResultCount");
    var totalCountEl = document.getElementById("examTotalCount");

    var filterInputs = document.querySelectorAll(".examFilters input[type='checkbox']");

    if (totalCountEl) totalCountEl.textContent = examCards.length;

    /* ---- Compute real filter counts from actual exam card data ---- */
    function updateFilterCounts() {
      filterInputs.forEach(function (input) {
        var countEl = input.parentElement.querySelector("em");
        if (!countEl) return;

        var group = input.getAttribute("data-filter-group");
        var value = input.value;

        var count = 0;
        examCards.forEach(function (card) {
          if (card.dataset[group] === value) count++;
        });

        countEl.textContent = count;
      });
    }
    updateFilterCounts();

    var feeRange = document.getElementById("examFeeRange");
    var feeRangeValueEl = document.getElementById("examFeeRangeValue");
    var feeRangeActive = false;

    var examPaginationEl = document.getElementById("examPagination");
    var CARDS_PER_PAGE = 8;
    var currentPage = 1;

    /* ---- Sort by ---- */
    var sortSelect = document.getElementById("examSortSelect");
    var examMainEl = document.querySelector(".examMain");

    function getCardFee(card) {
      return parseFloat(card.dataset.fee) || 0;
    }

    function getCardAvgPackage(card) {
      var strong = card.querySelector(".examCard__stats .examCard__stat:nth-child(3) strong");
      if (!strong) return 0;
      var match = strong.textContent.match(/[\d.]+/);
      return match ? parseFloat(match[0]) : 0;
    }

    function getCardName(card) {
      var h3 = card.querySelector("h3");
      return h3 ? h3.textContent.trim().toLowerCase() : "";
    }

    function sortExamCards(matchedCards) {
      if (!sortSelect) return matchedCards;

      var sortBy = sortSelect.value;
      var sorted = matchedCards.slice();

      if (sortBy === "Total Fees: Low to High") {
        sorted.sort(function (a, b) { return getCardFee(a) - getCardFee(b); });
      } else if (sortBy === "Avg Package: High to Low") {
        sorted.sort(function (a, b) { return getCardAvgPackage(b) - getCardAvgPackage(a); });
      } else if (sortBy === "Alphabetical") {
        sorted.sort(function (a, b) { return getCardName(a).localeCompare(getCardName(b)); });
      }

      /* Reorder the actual DOM nodes so pagination/rendering stays correct */
      if (examMainEl) {
        sorted.forEach(function (card) {
          examMainEl.insertBefore(card, examPaginationEl);
        });
      }

      return sorted;
    }

    if (sortSelect) {
      sortSelect.addEventListener("change", applyExamFilters);
    }

    function applyExamFilters() {
      /* Group selected filter values by their filter group so that
         checkboxes within the SAME group (e.g. "Government" +
         "Private" under College Type) are OR'd together, while
         different groups are AND'd together. */
      var groupedFilters = {};

      filterInputs.forEach(function (input) {
        if (input.checked) {
          var group = input.getAttribute("data-filter-group");
          if (!groupedFilters[group]) groupedFilters[group] = [];
          groupedFilters[group].push(input.value);
        }
      });

      var groupKeys = Object.keys(groupedFilters);
      var matchedCards = [];

      examCards.forEach(function (card) {
        var matched = groupKeys.every(function (group) {
          return groupedFilters[group].indexOf(card.dataset[group]) !== -1;
        });

        /* Total Fees range slider: card's fee must be within the
           selected max-fee cap whenever the slider has been moved
           away from its default (max) value. */
        if (matched && feeRangeActive && feeRange) {
          var cardFee = parseFloat(card.dataset.fee) || 0;
          if (cardFee > parseFloat(feeRange.value)) matched = false;
        }

        if (groupKeys.length === 0 && !feeRangeActive) {
          matchedCards.push(card);
        } else if (matched) {
          matchedCards.push(card);
        } else {
          card.style.display = "none";
        }
      });

      matchedCards = sortExamCards(matchedCards);

      if (resultCountEl) resultCountEl.textContent = matchedCards.length;
      if (noResultsEl) noResultsEl.style.display = matchedCards.length === 0 ? "block" : "none";

      currentPage = 1;
      renderExamPage(matchedCards);

      updateActiveFilterTags();
    }

    function renderExamPage(matchedCards) {
      var totalPages = Math.max(1, Math.ceil(matchedCards.length / CARDS_PER_PAGE));
      if (currentPage > totalPages) currentPage = totalPages;

      var startIndex = (currentPage - 1) * CARDS_PER_PAGE;
      var endIndex = startIndex + CARDS_PER_PAGE;

      matchedCards.forEach(function (card, i) {
        card.style.display = (i >= startIndex && i < endIndex) ? "" : "none";
      });

      renderPaginationControls(totalPages, matchedCards);
    }

    function renderPaginationControls(totalPages, matchedCards) {
      if (!examPaginationEl) return;

      examPaginationEl.innerHTML = "";

      if (matchedCards.length === 0) return;

      var prevBtn = document.createElement("button");
      prevBtn.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 12H5M5 12L12 19M5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> Prev';
      prevBtn.disabled = currentPage === 1;
      prevBtn.addEventListener("click", function () {
        if (currentPage > 1) {
          currentPage--;
          renderExamPage(matchedCards);
          scrollToExamMain();
        }
      });
      examPaginationEl.appendChild(prevBtn);

      for (var p = 1; p <= totalPages; p++) {
        (function (pageNum) {
          var pageBtn = document.createElement("button");
          pageBtn.textContent = pageNum;
          if (pageNum === currentPage) pageBtn.classList.add("is-active");
          pageBtn.addEventListener("click", function () {
            currentPage = pageNum;
            renderExamPage(matchedCards);
            scrollToExamMain();
          });
          examPaginationEl.appendChild(pageBtn);
        })(p);
      }

      var nextBtn = document.createElement("button");
      nextBtn.innerHTML = 'Next <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>';
      nextBtn.disabled = currentPage === totalPages;
      nextBtn.addEventListener("click", function () {
        if (currentPage < totalPages) {
          currentPage++;
          renderExamPage(matchedCards);
          scrollToExamMain();
        }
      });
      examPaginationEl.appendChild(nextBtn);
    }

    function scrollToExamMain() {
      var mainCol = document.querySelector(".examMain");
      if (mainCol) mainCol.scrollIntoView({ behavior: "smooth", block: "start" });
    }

    function updateActiveFilterTags() {
      if (!activeFiltersBar) return;

      activeFiltersBar.querySelectorAll(".examTag").forEach(function (tag) {
        tag.remove();
      });

      var hasAny = false;

      filterInputs.forEach(function (input) {
        if (input.checked) {
          hasAny = true;

          var tag = document.createElement("span");
          tag.className = "examTag";
          tag.innerHTML =
            input.value +
            ' <button aria-label="Remove filter" class="examTagRemove">' +
            '<svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">' +
            '<line x1="1" y1="1" x2="9" y2="9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>' +
            '<line x1="9" y1="1" x2="1" y2="9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>' +
            "</svg>" +
            "</button>";

          tag.querySelector("button").addEventListener("click", function () {
            input.checked = false;
            applyExamFilters();
          });

          activeFiltersBar.insertBefore(tag, clearAllLink);
        }
      });

      if (feeRangeActive) {
        hasAny = true;
        var feeTag = document.createElement("span");
        feeTag.className = "examTag";
        feeTag.innerHTML = "Max Fee: \u20B9" + feeRange.value + " Lakh " + '<button aria-label="Remove filter">\u00D7</button>';
        feeTag.querySelector("button").addEventListener("click", function () {
          feeRange.value = feeRange.max;
          feeRangeActive = false;
          if (feeRangeValueEl) feeRangeValueEl.textContent = "\u20B9" + feeRange.max + " lakhs";
          applyExamFilters();
        });
        activeFiltersBar.insertBefore(feeTag, clearAllLink);
      }

      activeFiltersBar.style.display = hasAny ? "flex" : "none";
    }

    filterInputs.forEach(function (input) {
      input.addEventListener("change", applyExamFilters);
    });

    if (feeRange) {
      feeRange.addEventListener("input", function () {
        if (feeRangeValueEl) feeRangeValueEl.textContent = "\u20B9" + feeRange.value + " lakhs";
        feeRangeActive = parseInt(feeRange.value, 10) < parseInt(feeRange.max, 10);
        applyExamFilters();
      });
    }

    /* ---- Clear All Filters ---- */
    var filtersClearAllBtn = document.getElementById("examFiltersClearAll");

    function clearAllExamFilters() {
      filterInputs.forEach(function (cb) {
        cb.checked = false;
      });

      if (feeRange) {
        feeRange.value = feeRange.max;
        feeRangeActive = false;
        if (feeRangeValueEl) feeRangeValueEl.textContent = "\u20B9" + feeRange.max + " lakhs";
      }

      applyExamFilters();
    }

    if (clearAllLink) {
      clearAllLink.addEventListener("click", function (e) {
        e.preventDefault();
        clearAllExamFilters();
      });
    }

    if (filtersClearAllBtn) {
      filtersClearAllBtn.addEventListener("click", clearAllExamFilters);
    }

    /* Run once on load so the bar starts hidden and the count is correct */
    applyExamFilters();

    /* ---- Calendar View All (Simple text toggle) ---- */
    var viewAllBtn = document.getElementById("examViewAllBtn");
    var examExtraRows = document.querySelectorAll(".examTable__extraRow");

    if (viewAllBtn) {
      var isExpanded = false;
      var svgPart = viewAllBtn.querySelector("span") ? viewAllBtn.querySelector("span").outerHTML : "";

      viewAllBtn.addEventListener("click", function () {
        isExpanded = !isExpanded;

        examExtraRows.forEach(function (row) {
          row.style.display = isExpanded ? "" : "none";
        });

        viewAllBtn.innerHTML = (isExpanded ? "Show Less " : "View All 25+ MBA Exams ") + svgPart;
      });
    }

    initAdmissionForm();
  }

  /* ---- Admission Form Validation (shared helper) ---- */
  function initAdmissionForm() {
    var admissionForm = document.getElementById("admissionJourneyForm");
    if (!admissionForm) return;

    admissionForm.addEventListener("submit", function (e) {
      e.preventDefault();

      var input = document.getElementById("admissionJourneyMobile");
      var error = document.getElementById("admissionJourneyError");

      var val = input.value.trim();

      if (!/^\d{10}$/.test(val)) {
        input.classList.add("isInvalid");
        error.textContent = "Please enter a valid 10-digit mobile number.";
      } else {
        input.classList.remove("isInvalid");
        error.textContent = "";
        admissionForm.reset();
      }
    });
  }

  /* ---------------------------------------------------------
     4) ACCORDION TOGGLE (event delegation — 1 listener total)
  --------------------------------------------------------- */
  function initAccordionToggle() {
    document.addEventListener("click", function (e) {
      var trigger = e.target.closest("[data-toggle-target]");
      if (!trigger) return;

      var targetId = trigger.dataset.toggleTarget;

      var accordion = trigger.closest(".clg-accordion");
      var container = accordion
        ? accordion.querySelector("#" + targetId)
        : document.getElementById(targetId);

      if (!container) return;

      var isOpen = container.dataset.open === "true";
      var newState = !isOpen;

      container.dataset.open = String(newState);
      trigger.setAttribute("aria-expanded", newState);

      var toggleIcon = trigger.querySelector(".clg-accHeader__toggle");
      if (toggleIcon) {
        toggleIcon.textContent = newState ? "\u2013" : "+";
      }
    });
  }
})();