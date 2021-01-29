let completeCalled = false;
let completeCalledCol1 = false;
let completeCalledCol2 = false;
let completeCalledCol3 = false;
let completeCalledCol4 = false;
let completeCalledSlide2 = false;
let completeCalledSlide3 = false;
let completeCalledSlide4 = false;

let $headerHight = $("#header").height();
let $col1 = $("#col1").height();
let $col2 = $("#col2").height();
let $col3 = $("#col3").height();
let $col4 = $("#col4").height();
let vid1 = document.querySelector("#video1");
let vid2 = document.querySelector("#video2");
let vid3 = document.querySelector("#video3");
let vid4 = document.querySelector("#video4");
let vid5 = document.querySelector("#video5");

const slideImage = document.querySelectorAll(".slide-image");
const slidesContainer = document.querySelector(".slides-container");
const navigationDots = document.querySelector(".navigation-dots");

let numberOfImages = slideImage.length;
let slideWidth = slideImage[0].clientWidth;
let currentSlide = 0;

console.log(currentSlide);

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

let playW1 = $("#play-w1");
let play1 = $("#play1");
let playW2 = $("#play-w2");
let play2 = $("#play2");
let playW3 = $("#play-w3");
let play3 = $("#play3");
let playW4 = $("#play-w4");
let play4 = $("#play4");
let playW5 = $("#play-w5");
let play5 = $("#play5");

playW1.click(function () {
    if (playW1.hasClass('playing')) {
        playW1.toggleClass('playing');
        play1.html('<i class="uil uil-caret-right"></i>');
        vid1.autoplay = false;
        vid1.pause();
    } else {
        playW1.toggleClass('playing');
        play1.html('<i class="uil uil-pause"></i>');
        vid1.autoplay = true;
        vid1.volume = 1;
        vid1.load();
    }
});
playW2.click(function () {
    if (playW2.hasClass('playing')) {
        playW2.toggleClass('playing');
        play2.html('<i class="uil uil-caret-right"></i>');
        vid2.autoplay = false;
        vid2.pause();
    } else {
        playW2.toggleClass('playing');
        play2.html('<i class="uil uil-pause"></i>');
        vid2.autoplay = true;
        vid2.volume = 1;
        vid2.load();
    }
});
playW3.click(function () {
    if (playW3.hasClass('playing')) {
        playW3.toggleClass('playing');
        play3.html('<i class="uil uil-caret-right"></i>');
        vid3.autoplay = false;
        vid3.pause();
    } else {
        playW3.toggleClass('playing');
        play3.html('<i class="uil uil-pause"></i>');
        vid3.autoplay = true;
        vid3.volume = 1;
        vid3.load();
    }
});
playW4.click(function () {
    if (playW4.hasClass('playing')) {
        playW4.toggleClass('playing');
        play4.html('<i class="uil uil-caret-right"></i>');
        vid4.autoplay = false;
        vid4.pause();
    } else {
        playW4.toggleClass('playing');
        play4.html('<i class="uil uil-pause"></i>');
        vid4.autoplay = true;
        vid4.volume = 0;
        vid4.load();
    }
});
playW5.click(function () {
    if (playW5.hasClass('playing')) {
        playW5.toggleClass('playing');
        play5.html('<i class="uil uil-caret-right"></i>');
        vid5.autoplay = false;
        vid5.pause();
    } else {
        playW5.toggleClass('playing');
        play5.html('<i class="uil uil-pause"></i>');
        vid5.autoplay = true;
        vid5.volume = 0;
        vid5.load();
    }
});

$("#start").click(function () {
    $(".play-wrapper").css("display", "none");
    setTimeout(function (){
        $("html, body").animate(
            { scrollTop: $headerHight },
            {
                complete : function(){
                    if(!completeCalled){
                        completeCalled = true;
                        slide1();
                        vid1.autoplay = true;
                        vid1.volume = 1;
                        vid1.load();
                    }
                }
            }
        );
    }, 100);
});

function slide1() {

        goToSlide(0);

        completeCalled = false;

        setTimeout(function (){
            if (!completeCalledSlide2) {
                completeCalledSlide2 = true;
                slide2();
                vid2.autoplay = true;
                vid2.volume = 1;
                vid2.load();
            }
    }, 35000);
}

function slide2() {

        goToSlide(1);

        completeCalledSlide2 = false;

    setTimeout(function (){
            if (!completeCalledSlide3) {
                completeCalledSlide3 = true;
                slide3();
                vid3.autoplay = true;
                vid3.volume = 1;
                vid3.load();
            }
    }, 23000);
}

function slide3() {

        goToSlide(2);

        completeCalledSlide3 = false;

        setTimeout(function (){
            if (!completeCalledSlide4) {
                completeCalledSlide4 = true;
                column1();
            }
        }, 38500);
}

function column1() {
    completeCalledSlide4 = false;
    setTimeout(function (){
    $("html, body").animate(
        {scrollTop: $headerHight + $col1},
        {
            complete: function () {
                if (!completeCalledCol1) {
                    completeCalledCol1 = true;
                    column2();
                    vid4.autoplay = true;
                    vid4.volume = 0;
                    vid4.load();
                }
            }
        });
    }, 3800);
}

function column2() {
    setTimeout(function (){
        $("html, body").animate(
            {scrollTop: $headerHight + $col1},
            {
                complete: function () {
                    if (!completeCalledCol2) {
                        completeCalledCol2 = true;
                        column3();
                        vid5.autoplay = true;
                        vid5.volume = 0;
                        vid5.load();
                    }
                }
            }
        );
    }, 3800);
}

function column3() {
    setTimeout(function (){
    $("html, body").animate(
        {scrollTop: $headerHight + $col1 + $col2},
        {
            complete: function () {
                if (!completeCalledCol3) {
                    completeCalledCol3 = true;
                    column4();
                }
            }
        });
    }, 35250);
}

function column4() {
    setTimeout(function (){
        $("html, body").animate(
            {scrollTop: $headerHight + $col1 + $col2 + $col3 + $col4},
            {
                complete: function () {
                    if (!completeCalledCol4) {
                        completeCalledCol4 = true;
                    }
                }
            });
    }, 58000);
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