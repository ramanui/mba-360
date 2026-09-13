(function () {
  "use strict";

  /* ---------- shared refs ---------- */
  var MOBILE_QUERY = window.matchMedia("(max-width: 1199px)");
  function isMobile() {
    return MOBILE_QUERY.matches;
  }

  /* ---------- Filters ---------- */
  var filterToggleBtn = document.getElementById("examFiltersToggleBtn");
  var filterPanel = document.getElementById("examFiltersPanel");
  var filterOverlay = document.getElementById("examFiltersOverlay");
  var filterCloseBtn = document.getElementById("examFiltersCloseBtn");
  var filterApplyBtn = document.getElementById("examFiltersApplyBtn");
  var clearAllBtn = document.getElementById("examFiltersClearAll");

  // Optional elements
  var moreBtn = document.getElementById("examBodyMoreBtn") ||
                document.getElementById("examCityMoreBtn");
  var extraBody = document.getElementById("examBodyExtra") ||
                  document.getElementById("examCityExtra");

  var feeRange = document.getElementById("examFeeRange");
  var feeValue = document.getElementById("examFeeRangeValue");

  /* ---------- Sort ---------- */
  var sortToggleBtn = document.getElementById("examSortToggleBtn");
  var sortPanel = document.getElementById("examSortPanel");
  var sortOverlay = document.getElementById("examSortOverlay");
  var sortCloseBtn = document.getElementById("examSortCloseBtn");
  var sortOptions = document.getElementById("examSortOptions");
  var sortSelect = document.getElementById("examSortSelect");

  var filterOpen = false;
  var sortOpen = false;
  var filterLastFocused = null;
  var sortLastFocused = null;

  function onKeydown(e) {
    if (e.key === "Escape") {
      closeFilterPanel();
      closeSortPanel();
    }
  }

  /* ---------- Filter ---------- */

  function openFilterPanel() {
    if (!filterPanel || !filterOverlay || !filterToggleBtn || !filterCloseBtn) return;
    if (!isMobile() || filterOpen) return;

    closeSortPanel();

    filterOpen = true;
    filterLastFocused = document.activeElement;

    filterPanel.classList.add("isOpen");
    filterOverlay.classList.add("isOpen");

    filterPanel.setAttribute("aria-hidden", "false");
    filterToggleBtn.setAttribute("aria-expanded", "true");

    document.body.style.overflow = "hidden";

    filterCloseBtn.focus();

    document.addEventListener("keydown", onKeydown);
  }

  function closeFilterPanel() {
    if (!filterPanel || !filterOverlay || !filterToggleBtn) return;
    if (!filterOpen) return;

    filterOpen = false;

    filterPanel.classList.remove("isOpen");
    filterOverlay.classList.remove("isOpen");

    filterPanel.setAttribute("aria-hidden", "true");
    filterToggleBtn.setAttribute("aria-expanded", "false");

    if (!sortOpen) document.body.style.overflow = "";

    document.removeEventListener("keydown", onKeydown);

    if (filterLastFocused) filterLastFocused.focus();
  }

  /* ---------- Sort ---------- */

  function openSortPanel() {
    if (!sortPanel || !sortOverlay || !sortToggleBtn || !sortCloseBtn) return;
    if (!isMobile() || sortOpen) return;

    closeFilterPanel();

    sortOpen = true;
    sortLastFocused = document.activeElement;

    sortPanel.classList.add("isOpen");
    sortOverlay.classList.add("isOpen");

    sortPanel.setAttribute("aria-hidden", "false");
    sortToggleBtn.setAttribute("aria-expanded", "true");

    document.body.style.overflow = "hidden";

    sortCloseBtn.focus();

    document.addEventListener("keydown", onKeydown);
  }

  function closeSortPanel() {
    if (!sortPanel || !sortOverlay || !sortToggleBtn) return;
    if (!sortOpen) return;

    sortOpen = false;

    sortPanel.classList.remove("isOpen");
    sortOverlay.classList.remove("isOpen");

    sortPanel.setAttribute("aria-hidden", "true");
    sortToggleBtn.setAttribute("aria-expanded", "false");

    if (!filterOpen) document.body.style.overflow = "";

    document.removeEventListener("keydown", onKeydown);

    if (sortLastFocused) sortLastFocused.focus();
  }

  /* ---------- Safe Event Binding ---------- */

  if (filterToggleBtn)
    filterToggleBtn.addEventListener("click", openFilterPanel);

  if (filterOverlay)
    filterOverlay.addEventListener("click", closeFilterPanel);

  if (filterCloseBtn)
    filterCloseBtn.addEventListener("click", closeFilterPanel);

  if (filterApplyBtn)
    filterApplyBtn.addEventListener("click", closeFilterPanel);

  if (clearAllBtn && filterPanel) {
    clearAllBtn.addEventListener("click", function () {
      filterPanel
        .querySelectorAll('input[type="checkbox"]')
        .forEach(function (cb) {
          cb.checked = false;
        });
    });
  }

  if (moreBtn && extraBody) {
    moreBtn.addEventListener("click", function () {
      var show = extraBody.hidden;
      extraBody.hidden = !show;
      moreBtn.textContent = show ? "- Show less" : "+ Show more";
    });
  }

  if (feeRange && feeValue) {
    feeRange.addEventListener("input", function () {
      feeValue.textContent = "₹" + feeRange.value + " lakhs";
    });
  }

  if (filterPanel) {
    filterPanel
      .querySelectorAll('input[type="checkbox"]')
      .forEach(function (cb) {
        cb.addEventListener("change", function () {
          if (!isMobile()) {
            console.log("apply filters");
          }
        });
      });
  }

  if (sortToggleBtn)
    sortToggleBtn.addEventListener("click", openSortPanel);

  if (sortOverlay)
    sortOverlay.addEventListener("click", closeSortPanel);

  if (sortCloseBtn)
    sortCloseBtn.addEventListener("click", closeSortPanel);

  if (sortOptions) {
    sortOptions.addEventListener("click", function (e) {
      var btn = e.target.closest(".examSortOption");
      if (!btn) return;

      sortOptions
        .querySelectorAll(".examSortOption")
        .forEach(function (o) {
          o.setAttribute("aria-checked", o === btn ? "true" : "false");
        });

      if (sortSelect)
        sortSelect.value = btn.getAttribute("data-value");

      console.log(btn.getAttribute("data-value"));

      closeSortPanel();
    });
  }

  if (sortSelect) {
    sortSelect.addEventListener("change", function () {
      console.log(sortSelect.value);
    });
  }

  MOBILE_QUERY.addEventListener("change", function (e) {
    if (!e.matches) {
      closeFilterPanel();
      closeSortPanel();
    }
  });
})();