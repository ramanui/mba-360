(function () {
  var selectors = ".reveal, .revealleft, .revealright";
  var elements = document.querySelectorAll(selectors);

  if (!elements.length) return;

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.25 },
  );

  elements.forEach(function (el) {
    observer.observe(el);
  });
})();
