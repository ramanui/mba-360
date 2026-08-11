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


/* ---------- Center active tab horizontally (native, reliable) ---------- */
function centerActiveFaqTab(tab){
    if(!tab) return;

    tab.scrollIntoView({
        behavior: "smooth",
        inline: "center",   // 👈 horizontal center
        block: "nearest"    // 👈 vertical scroll trigger nahi hoga
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

            centerActiveFaqTab(tab);   // 👈 sirf click pr center scroll

        });


    });


    /* Show only the default active tab's questions on load */
    var initialTab = faqTabs.querySelector(".examFaq__tab.is-active");
    if(initialTab){
        filterFaqByCategory(initialTab.getAttribute("data-category"));
        // load pe centerActiveFaqTab() call NAHI kiya — isliye jump nahi hoga
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
