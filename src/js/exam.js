/* =========================================================
   EXAM-PAGE.JS — Combined page script (single file, defer-ready)
   ---------------------------------------------------------
   SECTIONS:
     1) Exam Filters / Sort / Pagination
     2) Admission Form Validation (shared helper)

   WHY COMBINED INTO ONE FILE:
     - 1 script tag = 1 network request = better PageSpeed
       (fewer render-blocking / parser-blocking requests).
     - Single DOMContentLoaded listener = no duplicate binding,
       no risk of one script running before DOM is ready.

   HOW TO LOAD (for 100 Lighthouse / PSI score):
     <script src="exam-page.js" defer></script>
     - Use `defer` (not async) so it runs after HTML parsing
       but still in document order — keeps TBT/INP low.
     - Do NOT also load the separate inline <script> blocks
       (doc 2) on the same page — they duplicate this file's
       logic 1:1 and would double up event listeners.
     - If this page also has .reveal / .revealleft / .revealright
       or .clg-accordion elements, use the shared main.js for
       those (or extend this file) — don't load two scripts
       that both bind global click/DOMContentLoaded listeners.
   ========================================================= */
(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", init);

  function init() {
    initExamFiltersModule();
  }

  /* ---------------------------------------------------------
     1) EXAM FILTERS + SORT + PAGINATION + ADMISSION FORM
  --------------------------------------------------------- */
  function initExamFiltersModule() {
    var examCards = document.querySelectorAll(".examMain > .examCard");
    if (!examCards.length) {
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

    var EXAM_MONTH_ORDER = {
      "September 2025": 1,
      "October 2025": 2,
      "November 2025": 3,
      "December 2025": 4
    };

    function getCardFee(card) {
      var strong = card.querySelector(".examCard__stats .examCard__stat:nth-child(1) strong");
      return strong ? (parseInt(strong.textContent.replace(/[^\d]/g, ""), 10) || 0) : 0;
    }

    function getCardColleges(card) {
      var strong = card.querySelector(".examCard__stats .examCard__stat:nth-child(3) strong");
      return strong ? (parseInt(strong.textContent.replace(/[^\d]/g, ""), 10) || 0) : 0;
    }

    function getCardName(card) {
      var h3 = card.querySelector("h3");
      return h3 ? h3.textContent.trim().toLowerCase() : "";
    }

    function getCardDateRank(card) {
      return EXAM_MONTH_ORDER[card.dataset.month] || 999;
    }

    function sortExamCards(matchedCards) {
      if (!sortSelect) return matchedCards;

      var sortBy = sortSelect.value;
      var sorted = matchedCards.slice();

      if (sortBy === "Exam Date: Nearest First") {
        sorted.sort(function (a, b) { return getCardDateRank(a) - getCardDateRank(b); });
      } else if (sortBy === "Application Fee: Low to High") {
        sorted.sort(function (a, b) { return getCardFee(a) - getCardFee(b); });
      } else if (sortBy === "Accepting Colleges: High to Low") {
        sorted.sort(function (a, b) { return getCardColleges(b) - getCardColleges(a); });
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
         checkboxes within the SAME group (e.g. "National Level" +
         "State Level" under Exam Level) are OR'd together, while
         different groups (Level, Status, Body, Mode, Month) are
         still AND'd together. */
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

        if (groupKeys.length === 0 || matched) {
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

  /* ---------------------------------------------------------
     2) ADMISSION FORM VALIDATION (shared helper)
  --------------------------------------------------------- */
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
})();