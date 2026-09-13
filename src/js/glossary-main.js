document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("glossarySearch");
  const groups = document.querySelectorAll(".glossary-group");
  const navLinks = document.querySelectorAll(".glossary-alpha-nav a");

  // =========================================
  // Live search filter
  // =========================================
  if (searchInput) {
    searchInput.addEventListener("input", () => {
      const query = searchInput.value.trim().toLowerCase();

      groups.forEach((group) => {
        const terms = group.querySelectorAll(".glossary-term");
        let hasVisibleTerm = false;

        terms.forEach((term) => {
          const isMatch = term.textContent.toLowerCase().includes(query);

          term.classList.toggle("is-hidden", !isMatch);

          if (isMatch) {
            hasVisibleTerm = true;
          }
        });

        group.classList.toggle("is-hidden", !hasVisibleTerm);
      });
    });
  }

  // =========================================
  // Highlight nav letter on scroll
  // =========================================
  if (groups.length && navLinks.length && "IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;

          const letter = entry.target.dataset.groupLetter;

          navLinks.forEach((link) => {
            link.classList.remove("is-active");
          });

          const activeLink = document.querySelector(
            `.glossary-alpha-nav a[data-letter="${letter}"]`,
          );

          if (activeLink) {
            activeLink.classList.add("is-active");
          }
        });
      },
      {
        rootMargin: "-20% 0px -70% 0px",
      },
    );

    groups.forEach((group) => {
      observer.observe(group);
    });
  }
});
