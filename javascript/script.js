let completeCalled = false;
let completeCalledCol1 = false;
let completeCalledCol2 = false;
let completeCalledCol3 = false;
let completeCalledSlide2 = false;
let completeCalledSlide3 = false;
let completeCalledSlide4 = false;

let $headerHight = $("#header").height();
let $col1 = $("#col1").height();
let $col2 = $("#col2").height();
let $col3 = $("#col3").height();

const slideImage = document.querySelectorAll(".slide-image");
const slidesContainer = document.querySelector(".slides-container");
const navigationDots = document.querySelector(".navigation-dots");

let numberOfImages = slideImage.length;
let slideWidth = slideImage[0].clientWidth;
let currentSlide = 0;

console.log(currentSlide)

// Set up the slider
function init() {

    slideImage.forEach((img, i) => {
        img.style.left = i * 100 + "%";
    });

    slideImage[0].classList.add("active");

    createNavigationDots();
}

init();

// Create navigation dots
function createNavigationDots() {
    for (let i = 0; i < numberOfImages; i++) {
        const dot = document.createElement("div");
        dot.classList.add("single-dot");
        navigationDots.appendChild(dot);

        dot.addEventListener("click", () => {
            goToSlide(i);
        });
    }

    navigationDots.children[0].classList.add("active");
}

$("#start").click(function () {
    setTimeout(function (){
        $("html, body").animate(
            { scrollTop: $headerHight },
            {
                complete : function(){
                    if(!completeCalled){
                        completeCalled = true;
                        column1();
                    }
                }
            }
        );
    }, 100);
});

function column1() {
    setTimeout(function (){
        $("html, body").animate(
            {scrollTop: $headerHight + $col1},
            {
                complete: function () {
                    if (!completeCalledCol1) {
                        completeCalledCol1 = true;
                        column2();
                    }
                }
            }
        );
    }, 2500);
}

function column2() {
    setTimeout(function (){
        $("html, body").animate(
            {scrollTop: $headerHight + $col1},
            {
                complete: function () {
                    if (!completeCalledCol2) {
                        completeCalledCol2 = true;
                        slide2();
                    }
                }
            }
        );
    }, 500);
}

function slide2() {
    setTimeout(function (){
        if (currentSlide >= numberOfImages - 1) {
            goToSlide(0);
            //return;
        }

        currentSlide++;
        goToSlide(1);

        $.when(slide2()).then(function () {
            if (!completeCalledSlide2) {
                completeCalledSlide2 = true;
                slide3();
            }
        })
    }, 2500);
}

function slide3() {
    setTimeout(function (){
        if (currentSlide >= numberOfImages - 1) {
            goToSlide(0);
            //return;
        }

        currentSlide++;
        goToSlide(2);

        $.when(slide3()).then(function () {
            if (!completeCalledSlide3) {
                completeCalledSlide3 = true;
                slide4();
            }
        })
    }, 2500);
}

function slide4() {
    setTimeout(function (){
        if (currentSlide >= numberOfImages - 1) {
            goToSlide(0);
            //return;
        }

        currentSlide++;
        goToSlide(3);

        $.when(slide4()).then(function () {
            if (!completeCalledSlide4) {
                completeCalledSlide4 = true;
                column3();
            }
        })
    }, 2500);
}

function column3() {
    setTimeout(function (){
    $("html, body").animate(
        {scrollTop: $headerHight + $col1 + $col2 + $col3},
        {
            complete: function () {
                if (!completeCalledCol3) {
                    completeCalledCol3 = true;
                }
            }
        });
    }, 1500);
}

// Go To Slide
function goToSlide(slideNumber) {
    slidesContainer.style.transform =
        "translateX(-" + slideWidth * slideNumber + "px)";

    currentSlide = slideNumber;

    setActiveClass();
}

// Set Active Class
function setActiveClass() {
    // Set active class for Slide Image

    let currentActive = document.querySelector(".slide-image.active");
    currentActive.classList.remove("active");
    slideImage[currentSlide].classList.add("active");

    // Set active class for navigation dots
    let currentDot = document.querySelector(".single-dot.active");
    currentDot.classList.remove("active");
    navigationDots.children[currentSlide].classList.add("active");
}

window.onresize = function (){
    slideWidth = slideImage[0].clientWidth;
    slidesContainer.style.transform = `translateX(-${slideWidth * currentSlide}px)`;
    console.log(slideWidth);
}