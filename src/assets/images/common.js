// collapse open and close script
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

  /* ---- FAQ Tabs ---- */


var faqTabs = document.getElementById("examFaqTabs");
var faqItemsForTabs = document.querySelectorAll("#examFaqList .examFaq__item");


function filterFaqByCategory(category){

    faqItemsForTabs.forEach(function(item){

        var show = item.getAttribute("data-category") === category;
        item.style.display = show ? "" : "none";

        if(!show){
            item.classList.remove("is-open");
            var ans = item.querySelector(".examFaq__answer");
            if(ans) ans.style.maxHeight = null;
        }

    });

}


if(faqTabs){


    faqTabs.querySelectorAll(".examFaq__tab")
    .forEach(function(tab){


        tab.addEventListener("click",function(){


            faqTabs.querySelectorAll(".examFaq__tab")
            .forEach(function(t){

                t.classList.remove("is-active");

            });


            tab.classList.add("is-active");

            filterFaqByCategory(tab.getAttribute("data-category"));


        });


    });


    /* Show only the default active tab's questions on load */
    var initialTab = faqTabs.querySelector(".examFaq__tab.is-active");
    if(initialTab){
        filterFaqByCategory(initialTab.getAttribute("data-category"));
    }


}





/* ---- FAQ Accordion ---- */


var faqList = document.getElementById("examFaqList");


if(faqList){


faqList.querySelectorAll(".examFaq__question")
.forEach(function(q){


q.addEventListener("click",function(){


    var item = q.closest(".examFaq__item");

    var answer = item.querySelector(".examFaq__answer");


    var isOpen = item.classList.contains("is-open");



    faqList.querySelectorAll(".examFaq__item.is-open")
    .forEach(function(openItem){


        openItem.classList.remove("is-open");

        openItem.querySelector(".examFaq__answer")
        .style.maxHeight = null;


    });



    if(!isOpen){


        item.classList.add("is-open");

        answer.style.maxHeight =
        answer.scrollHeight + "px";


    }



});


});


}


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
  var navLinks = Array.from(document.querySelectorAll(".clg-tabnav__list a"));

function setActiveLink(activeLink) {
  navLinks.forEach(function (link) {
    link.removeAttribute("aria-current");
  });

  activeLink.setAttribute("aria-current", "true");
}

// Click
navLinks.forEach(function (link) {
  link.addEventListener("click", function () {
    setActiveLink(link);
  });
});

var sections = navLinks
  .map(function (link) {
    return document.querySelector(link.getAttribute("href"));
  })
  .filter(Boolean);

if ("IntersectionObserver" in window && sections.length) {

  var navMap = {};

  navLinks.forEach(function (link) {
    navMap[link.getAttribute("href").slice(1)] = link;
  });

  var spyObserver = new IntersectionObserver(function (entries) {

    entries.forEach(function (entry) {

      if (!entry.isIntersecting) return;

      var link = navMap[entry.target.id];
      if (link) setActiveLink(link);

    });

  }, {
    rootMargin: "-45% 0px -50% 0px",
    threshold: 0
  });

  sections.forEach(function (sec) {
    spyObserver.observe(sec);
  });

}

})();


/* ---- Countdown ---- */


var daysEl = document.getElementById("examDays");
var hrsEl = document.getElementById("examHrs");
var minEl = document.getElementById("examMin");



if(daysEl && hrsEl && minEl){


var examTargetDate = new Date(
    "2026-11-29T09:00:00"
);



function updateExamCountdown(){


    var now = new Date();

    var diff = examTargetDate - now;


    if(diff < 0){
        diff = 0;
    }



    var d = Math.floor(
        diff / (1000*60*60*24)
    );


    var h = Math.floor(
        (diff/(1000*60*60)) % 24
    );


    var m = Math.floor(
        (diff/(1000*60)) % 60
    );



    daysEl.textContent =
    String(d).padStart(2,"0");


    hrsEl.textContent =
    String(h).padStart(2,"0");


    minEl.textContent =
    String(m).padStart(2,"0");


}



updateExamCountdown();

setInterval(updateExamCountdown,60000);


}

// grab scrollbar script
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('examFaqTabs');

    if (!slider) return;

    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('dragging');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('dragging');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('dragging');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;

        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2;
        slider.scrollLeft = scrollLeft - walk;
    });
});
