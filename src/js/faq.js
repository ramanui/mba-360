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
