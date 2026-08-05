(function () {
  'use strict';

  /* ---- 1) Generic Tablist (role="tab") ---- */
  document.querySelectorAll('[data-tablist]').forEach(function (tablist) {
    var tabs = tablist.querySelectorAll('[role="tab"]');

    tablist.addEventListener('click', function (e) {
      var tab = e.target.closest('[role="tab"]');
      if (!tab || !tablist.contains(tab)) return;

      tabs.forEach(function (t) {
        var isActive = t === tab;
        t.setAttribute('aria-selected', isActive ? 'true' : 'false');
        var panel = document.getElementById(t.getAttribute('aria-controls'));
        if (panel) panel.classList.toggle('is-active', isActive);
      });
    });
  });

  /* ---- 2) Pill Tabs — drag to scroll ---- */
  document.querySelectorAll('.clg-pillTabs').forEach(function (bar) {
    var isDown = false, startX = 0, scrollLeftStart = 0;

    bar.addEventListener('mousedown', function (e) {
      isDown = true;
      bar.classList.add('is-dragging');
      startX = e.pageX - bar.offsetLeft;
      scrollLeftStart = bar.scrollLeft;
    });

    ['mouseleave', 'mouseup'].forEach(function (evt) {
      bar.addEventListener(evt, function () {
        isDown = false;
        bar.classList.remove('is-dragging');
      });
    });

    bar.addEventListener('mousemove', function (e) {
      if (!isDown) return;
      e.preventDefault();
      var x = e.pageX - bar.offsetLeft;
      bar.scrollLeft = scrollLeftStart - (x - startX);
    });
  });

  
})();
