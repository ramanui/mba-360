(() => {
  "use strict";

  /*
   * =========================================================
   * MBA 360 - Alumni Page JavaScript
   * Performance optimized
   * =========================================================
   *
   * Features:
   * 1. Reveal animations
   * 2. Alumni video modal
   * 3. Alumni filters
   * 4. Alumni pagination
   * 5. Active filter tags
   * 6. Clear filters
   * 7. College show more/less
   * 8. Exam filter show more/less
   *
   * Performance:
   * - Single DOMContentLoaded listener
   * - Cached DOM references
   * - Event delegation where useful
   * - No unnecessary repeated querySelector calls
   * - IntersectionObserver for reveal animations
   * =========================================================
   */

  /* =========================================================
     INITIALISE
     ========================================================= */

  function init() {
    initRevealAnimations();
    initVideoModal();
    initAlumniFilters();
    initCollegeShowMore();
    initExamShowMore();
  }

  /* =========================================================
     1. REVEAL ANIMATIONS
     ========================================================= */

  function initRevealAnimations() {
    const elements = document.querySelectorAll(
      ".reveal, .revealleft, .revealright",
    );

    if (!elements.length) return;

    /*
     * IntersectionObserver is much better for performance
     * than scroll event based animations.
     */

    if (!("IntersectionObserver" in window)) {
      elements.forEach((element) => {
        element.classList.add("visible");
      });

      return;
    }

    const observer = new IntersectionObserver(
      (entries, observerInstance) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;

          entry.target.classList.add("visible");
          observerInstance.unobserve(entry.target);
        });
      },
      {
        threshold: 0.25,
      },
    );

    elements.forEach((element) => {
      observer.observe(element);
    });
  }

  /* =========================================================
     2. VIDEO MODAL
     ========================================================= */

  function initVideoModal() {
    const modal = document.getElementById("videoModal");
    const frame = document.getElementById("videoFrame");

    if (!modal || !frame) return;

    const playButtons = document.querySelectorAll(".alumniCardPlay");
    const closeButton = document.querySelector(".videoModal__close");
    const overlay = document.querySelector(".videoModal__overlay");

    if (!playButtons.length) return;

    /* ---------- Open Video ---------- */

    playButtons.forEach((button) => {
      button.addEventListener(
        "click",
        () => {
          const videoUrl = button.dataset.video;

          if (!videoUrl) return;

          frame.src = videoUrl;
          modal.classList.add("active");
        },
        {
          passive: true,
        },
      );
    });

    /* ---------- Close Video ---------- */

    const closeVideo = () => {
      modal.classList.remove("active");

      /*
       * Remove iframe source so YouTube/video stops playing
       * and does not continue consuming resources.
       */
      frame.src = "";
    };

    if (closeButton) {
      closeButton.addEventListener("click", closeVideo);
    }

    if (overlay) {
      overlay.addEventListener("click", closeVideo);
    }

    /* ---------- ESC Key ---------- */

    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape" && modal.classList.contains("active")) {
        closeVideo();
      }
    });
  }

  /* =========================================================
     3. ALUMNI FILTERS + PAGINATION
     ========================================================= */

  function initAlumniFilters() {
    const filterPanel = document.getElementById("examFiltersPanel");

    const mobileFilterButton = document.getElementById(
      "examMobileFilterToggle",
    );

    const activeFiltersBar = document.getElementById("alumniActiveFilters");

    const clearAllLink = document.getElementById("alumniClearAll");

    const noResultsElement = document.getElementById("alumniNoResults");

    const resultCountElement = document.getElementById("alumniResultCount");

    const clearAllButton = document.getElementById("alumniFiltersClearAll");

    const paginationElement = document.getElementById("alumniPagination");

    const cards = Array.from(
      document.querySelectorAll(".alumniMain > .alumniCard"),
    );

    const filterInputs = filterPanel
      ? Array.from(filterPanel.querySelectorAll("input[type='checkbox']"))
      : [];

    /*
     * If this page does not contain alumni filters,
     * simply stop here.
     */

    if (!cards.length && !filterInputs.length) {
      return;
    }

    const CARDS_PER_PAGE = 6;

    let currentPage = 1;

    let matchedCards = cards.slice();

    /* =======================================================
       MOBILE FILTER TOGGLE
       ======================================================= */

    if (mobileFilterButton && filterPanel) {
      mobileFilterButton.addEventListener("click", () => {
        const isOpen = filterPanel.classList.toggle("is-open");

        mobileFilterButton.classList.toggle("is-open", isOpen);

        mobileFilterButton.setAttribute("aria-expanded", String(isOpen));
      });
    }

    /* =======================================================
       FILTER COUNTS
       ======================================================= */

    function computeFilterCounts() {
      const counts = Object.create(null);

      cards.forEach((card) => {
        const values = [
          card.dataset.programme,
          card.dataset.college,
          card.dataset.year,
        ];

        values.forEach((value) => {
          if (!value) return;

          counts[value] = (counts[value] || 0) + 1;
        });
      });

      filterInputs.forEach((input) => {
        const count = counts[input.value] || 0;

        const label = input.closest("label");

        if (!label) return;

        const countElement = label.querySelector("em");

        if (countElement) {
          countElement.textContent = count;
        }

        /*
         * Hide filter option if there are no matching cards.
         */
        label.hidden = count === 0;
      });
    }

    /* =======================================================
       GET SELECTED FILTERS
       ======================================================= */

    function getSelectedFilters() {
      const selected = [];

      filterInputs.forEach((input) => {
        if (input.checked) {
          selected.push(input.value);
        }
      });

      return selected;
    }

    /* =======================================================
       FILTER CARDS
       ======================================================= */

    function filterCards() {
      const selectedFilters = getSelectedFilters();

      matchedCards = [];

      cards.forEach((card) => {
        const cardValues = [
          card.dataset.programme,
          card.dataset.college,
          card.dataset.year,
        ];

        const matched =
          selectedFilters.length === 0 ||
          selectedFilters.every((filter) => cardValues.includes(filter));

        if (matched) {
          matchedCards.push(card);
        }

        /*
         * Don't manipulate display here.
         * renderPage() handles visibility once.
         */
      });

      currentPage = 1;

      renderPage();

      updateActiveFilterTags();
    }

    /* =======================================================
       RENDER PAGE
       ======================================================= */

    function renderPage() {
      /*
       * Hide all cards first.
       */
      cards.forEach((card) => {
        card.hidden = true;
      });

      const totalPages = Math.max(
        1,
        Math.ceil(matchedCards.length / CARDS_PER_PAGE),
      );

      if (currentPage > totalPages) {
        currentPage = totalPages;
      }

      const startIndex = (currentPage - 1) * CARDS_PER_PAGE;

      const endIndex = startIndex + CARDS_PER_PAGE;

      const pageCards = matchedCards.slice(startIndex, endIndex);

      const alumniMain = document.querySelector(".alumniMain");

      if (!alumniMain) return;

      pageCards.forEach((card) => {
        card.hidden = false;

        /*
         * Keep pagination after cards.
         */
        if (paginationElement) {
          alumniMain.insertBefore(card, paginationElement);
        } else {
          alumniMain.appendChild(card);
        }
      });

      /*
       * Result count
       */
      if (resultCountElement) {
        resultCountElement.textContent = matchedCards.length;
      }

      /*
       * No results
       */
      if (noResultsElement) {
        noResultsElement.hidden = matchedCards.length !== 0;
      }

      renderPagination(totalPages);
    }

    /* =======================================================
       PAGINATION
       ======================================================= */

    function renderPagination(totalPages) {
      if (!paginationElement) return;

      paginationElement.replaceChildren();

      if (!matchedCards.length) {
        return;
      }

      /* ---------- Previous ---------- */

      const previousButton = document.createElement("button");

      previousButton.type = "button";

      previousButton.innerHTML =
        '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">' +
        '<path d="M19 12H5M5 12L12 19M5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>' +
        "</svg> Prev";

      previousButton.disabled = currentPage === 1;

      previousButton.addEventListener("click", () => {
        if (currentPage <= 1) return;

        currentPage--;

        renderPage();

        scrollToAlumni();
      });

      paginationElement.appendChild(previousButton);

      /* ---------- Page Buttons ---------- */

      const fragment = document.createDocumentFragment();

      for (let page = 1; page <= totalPages; page++) {
        const pageButton = document.createElement("button");

        pageButton.type = "button";

        pageButton.textContent = page;

        if (page === currentPage) {
          pageButton.classList.add("is-active");
          pageButton.setAttribute("aria-current", "page");
        }

        pageButton.addEventListener("click", () => {
          currentPage = page;

          renderPage();

          scrollToAlumni();
        });

        fragment.appendChild(pageButton);
      }

      paginationElement.appendChild(fragment);

      /* ---------- Next ---------- */

      const nextButton = document.createElement("button");

      nextButton.type = "button";

      nextButton.innerHTML =
        'Next <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">' +
        '<path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>' +
        "</svg>";

      nextButton.disabled = currentPage === totalPages;

      nextButton.addEventListener("click", () => {
        if (currentPage >= totalPages) return;

        currentPage++;

        renderPage();

        scrollToAlumni();
      });

      paginationElement.appendChild(nextButton);
    }

    /* =======================================================
       SCROLL TO ALUMNI
       ======================================================= */

    function scrollToAlumni() {
      const alumniMain = document.querySelector(".alumniMain");

      if (!alumniMain) return;

      alumniMain.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }

    /* =======================================================
       ACTIVE FILTER TAGS
       ======================================================= */

    function updateActiveFilterTags() {
      if (!activeFiltersBar) return;

      /*
       * Remove previous tags.
       */
      activeFiltersBar.querySelectorAll(".examTag").forEach((tag) => {
        tag.remove();
      });

      let hasFilters = false;

      filterInputs.forEach((input) => {
        if (!input.checked) return;

        hasFilters = true;

        const tag = document.createElement("span");

        tag.className = "examTag";

        /*
         * textContent is used for the label to avoid
         * injecting HTML from filter values.
         */
        const text = document.createTextNode(input.value + " ");

        const removeButton = document.createElement("button");

        removeButton.type = "button";

        removeButton.className = "examTagRemove";

        removeButton.setAttribute("aria-label", "Remove filter");

        removeButton.innerHTML =
          '<svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">' +
          '<line x1="1" y1="1" x2="9" y2="9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>' +
          '<line x1="9" y1="1" x2="1" y2="9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>' +
          "</svg>";

        removeButton.addEventListener("click", () => {
          input.checked = false;

          filterCards();
        });

        tag.appendChild(text);
        tag.appendChild(removeButton);

        if (clearAllLink) {
          activeFiltersBar.insertBefore(tag, clearAllLink);
        } else {
          activeFiltersBar.appendChild(tag);
        }
      });

      activeFiltersBar.style.display = hasFilters ? "flex" : "none";
    }

    /* =======================================================
       FILTER EVENTS
       ======================================================= */

    filterInputs.forEach((input) => {
      input.addEventListener("change", filterCards);
    });

    /* =======================================================
       CLEAR ALL
       ======================================================= */

    function clearAllFilters() {
      filterInputs.forEach((checkbox) => {
        checkbox.checked = false;
      });

      filterCards();
    }

    if (clearAllLink) {
      clearAllLink.addEventListener("click", (event) => {
        event.preventDefault();

        clearAllFilters();
      });
    }

    if (clearAllButton) {
      clearAllButton.addEventListener("click", clearAllFilters);
    }

    /* =======================================================
       INITIALISE ALUMNI
       ======================================================= */

    if (cards.length) {
      computeFilterCounts();
      filterCards();
    }
  }

  /* =========================================================
     4. ALUMNI COLLEGE SHOW MORE
     ========================================================= */

  function initCollegeShowMore() {
    const extra = document.getElementById("alumniCollegeExtra");

    const button = document.getElementById("alumniCollegeMoreBtn");

    if (!extra || !button) return;

    button.addEventListener("click", () => {
      const isHidden = extra.hasAttribute("hidden");

      if (isHidden) {
        extra.removeAttribute("hidden");

        button.textContent = "− Show less";

        return;
      }

      /*
       * When closing, reset selected checkboxes.
       */
      extra.querySelectorAll("input[type='checkbox']").forEach((checkbox) => {
        if (checkbox.checked) {
          checkbox.checked = false;

          checkbox.dispatchEvent(
            new Event("change", {
              bubbles: true,
            }),
          );
        }
      });

      extra.setAttribute("hidden", "");

      button.textContent = "+ Show more";
    });
  }

  /* =========================================================
     5. EXAM FILTER SHOW MORE / LESS
     ========================================================= */

  function initExamShowMore() {
    const buttons = document.querySelectorAll(".examFilterGroup__more");

    if (!buttons.length) return;

    // Event delegation: only one click listener
    document.addEventListener("click", (event) => {
      const button = event.target.closest(".examFilterGroup__more");

      if (!button) return;

      event.preventDefault();

      const extra = button.previousElementSibling;

      if (!extra) return;

      const isHidden = extra.hasAttribute("hidden");

      if (isHidden) {
        extra.removeAttribute("hidden");

        button.textContent = button.textContent
          .replace("Show more", "Show less")
          .replace("+", "-");

        return;
      }

      extra.setAttribute("hidden", "");

      button.textContent = button.textContent
        .replace("Show less", "Show more")
        .replace("-", "+");
    });
  }

  // Initialize after HTML is loaded
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initExamShowMore);
  } else {
    initExamShowMore();
  }

  /* =========================================================
     START
     ========================================================= */

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init, {
      once: true,
    });
  } else {
    init();
  }
})();
