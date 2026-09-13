(function () {
  "use strict";

  var openBtn   = document.getElementById("clgPhotosBtn");
  var galleryEl = document.getElementById("clgGallery");
  var dialog    = document.getElementById("clgLightbox");
  var imgEl     = document.getElementById("clgLightboxImg");
  var captionEl = document.getElementById("clgLightboxCaption");
  var counterEl = document.getElementById("clgLightboxCounter");

  if (!openBtn || !dialog) return;

  // Build the photo list once from the real <a> markup (single source of truth).
  var photos = Array.prototype.map.call(galleryEl.querySelectorAll("a"), function (a) {
    var img = a.querySelector("img");
    return {
      full: a.getAttribute("href"),
      alt: img ? img.getAttribute("alt") : "",
      caption: a.getAttribute("data-caption") || ""
    };
  });

  var currentIndex = 0;
  var lastFocused = null;

  function preload(index) {
    if (index < 0 || index >= photos.length) return;
    var i = new Image();
    i.src = photos[index].full;
  }

  function render(index) {
    var photo = photos[index];
    if (!photo) return;
    imgEl.src = photo.full;
    imgEl.alt = photo.alt;
    captionEl.textContent = photo.caption;
    counterEl.textContent = (index + 1) + " / " + photos.length;
    currentIndex = index;
    // Preload neighbours only — keeps initial JS/network work minimal.
    preload(index + 1);
    preload(index - 1);
  }

  function openAt(index) {
    if (!photos.length) return;
    lastFocused = document.activeElement;
    render(index);
    if (typeof dialog.showModal === "function") {
      dialog.showModal(); // native focus trap + Escape-to-close
    } else {
      dialog.setAttribute("open", "");
    }
  }

  function close() {
    if (typeof dialog.close === "function" && dialog.open) {
      dialog.close();
    } else {
      dialog.removeAttribute("open");
    }
    if (lastFocused) lastFocused.focus();
  }

  function next() { openAt((currentIndex + 1) % photos.length); }
  function prev() { openAt((currentIndex - 1 + photos.length) % photos.length); }

  // Main trigger button opens the first photo.
  openBtn.addEventListener("click", function () { openAt(0); });

  // Intercept clicks on individual thumbnails too (progressive enhancement).
  galleryEl.addEventListener("click", function (e) {
    var link = e.target.closest("a");
    if (!link) return;
    e.preventDefault();
    var index = Array.prototype.indexOf.call(galleryEl.querySelectorAll("a"), link);
    openAt(index);
  });

  dialog.addEventListener("click", function (e) {
    var action = e.target.closest("[data-action]");
    if (action) {
      var act = action.getAttribute("data-action");
      if (act === "close") close();
      if (act === "next") next();
      if (act === "prev") prev();
      return;
    }
    // Click on the backdrop area (outside the inner panel) closes too.
    if (e.target === dialog) close();
  });

  dialog.addEventListener("keydown", function (e) {
    if (e.key === "ArrowRight") next();
    if (e.key === "ArrowLeft") prev();
    // Escape is handled natively by <dialog>.
  });

  // Basic swipe support for touch devices.
  var touchStartX = null;
  dialog.addEventListener("touchstart", function (e) {
    touchStartX = e.changedTouches[0].clientX;
  }, { passive: true });
  dialog.addEventListener("touchend", function (e) {
    if (touchStartX === null) return;
    var dx = e.changedTouches[0].clientX - touchStartX;
    if (Math.abs(dx) > 40) { dx < 0 ? next() : prev(); }
    touchStartX = null;
  }, { passive: true });

  dialog.addEventListener("close", function () {
    if (lastFocused) lastFocused.focus();
  });
})();