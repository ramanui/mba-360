



(function () {
  "use strict";


  /* ---------- Generic accordion ---------- */
  function wireToggle(trigger, container) {
    var toggleIcon = trigger.querySelector(".clg-accHeader__toggle");

    trigger.addEventListener("click", function () {
      var isOpen = container.getAttribute("data-open") === "true";

      container.setAttribute("data-open", String(!isOpen));
      trigger.setAttribute("aria-expanded", String(!isOpen));

      if (toggleIcon) {
        toggleIcon.textContent = !isOpen ? "–" : "+";
      }
    });
  }


  // click Expand

document.querySelectorAll("[data-toggle-target]").forEach(function (trigger) {

  var target = null;

  // Accordion ke andar hai
  var accordion = trigger.closest(".clg-accordion");

  if (accordion) {
    target = accordion.querySelector(
      "#" + trigger.getAttribute("data-toggle-target")
    );
  } else {
    // About card jaisa normal element
    target = document.getElementById(
      trigger.getAttribute("data-toggle-target")
    );
  }

  if (target) {
    wireToggle(trigger, target);
  }

});


  /* ---------- Tabs ---------- */
  document.querySelectorAll("[data-tablist]").forEach(function (list) {

    var buttons = Array.from(list.querySelectorAll("[role='tab']"));

    buttons.forEach(function (btn) {

      btn.addEventListener("click", function () {

        buttons.forEach(function (b) {

          b.setAttribute("aria-selected", "false");

          var scope = list.parentElement;

          var panel = scope.querySelector(
            "#" + CSS.escape(b.getAttribute("aria-controls"))
          );

          if (panel) panel.hidden = true;
        });

        btn.setAttribute("aria-selected", "true");

        var scope = list.parentElement;

        var activePanel = scope.querySelector(
          "#" + CSS.escape(btn.getAttribute("aria-controls"))
        );

        if (activePanel) activePanel.hidden = false;

      });

    });

  });


  /* ---------- Scroll reveal ---------- */
  var revealTargets = document.querySelectorAll(".reveal, .revealleft, .revealright");

  if ("IntersectionObserver" in window && revealTargets.length) {

    var revealObserver = new IntersectionObserver(function (entries, obs) {

      entries.forEach(function (entry) {

        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          obs.unobserve(entry.target);
        }

      });

    }, {
      threshold: 0.15,
      rootMargin: "0px 0px -40px 0px"
    });

    revealTargets.forEach(function (el) {
      revealObserver.observe(el);
    });

  } else {

    revealTargets.forEach(function (el) {
      el.classList.add("visible");
    });

  }

  

/* ---------- Scroll Spy ---------- */

var OFFSET = 100;

var navLinks = [...document.querySelectorAll(".clg-tabnav__list a")];

var sections = navLinks
  .map(link => document.querySelector(link.getAttribute("href")))
  .filter(Boolean);

function setActiveLink(activeLink) {
  navLinks.forEach(link => link.removeAttribute("aria-current"));
  if (activeLink) activeLink.setAttribute("aria-current", "true");
}

// Click
navLinks.forEach(function (link) {

  link.addEventListener("click", function (e) {

    e.preventDefault();

    var target = document.querySelector(this.getAttribute("href"));

    if (!target) return;

    var y = target.getBoundingClientRect().top + window.pageYOffset - OFFSET;

    window.scrollTo({
      top: y,
      behavior: "smooth"
    });

    setActiveLink(this);

  });

});

// Scroll Spy
function updateActive() {

  let current = sections[0];

  sections.forEach(function (section) {

    if (window.pageYOffset + OFFSET >= section.offsetTop) {
      current = section;
    }

  });

  const active = navLinks.find(link => link.getAttribute("href") === "#" + current.id);

  setActiveLink(active);

}

window.addEventListener("scroll", updateActive, { passive: true });

window.addEventListener("load", updateActive);

window.addEventListener("resize", updateActive);

})();






