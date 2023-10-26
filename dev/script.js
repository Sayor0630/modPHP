const links = document.querySelectorAll('a');
const images = document.querySelectorAll('img');

for (const link of links) {
  link.addEventListener('dragstart', function(event) {
    event.preventDefault();
  });
}

for (const image of images) {
  image.addEventListener('dragstart', function(event) {
    event.preventDefault();
  });
}


const themeButton = document.getElementById("theme-btn");
const themeButtonText = document.getElementById("themebtnText");
const themeButtonIcon = document.getElementById("themebtnIcon");

// Function to set the theme
function setTheme(theme) {
  if (theme === "dark") {
    document.body.classList.add("dark-mode");
    themeButtonText.textContent = "Light";
    themeButtonIcon.innerHTML =  "<i class='bx bxs-moon'></i>" //"🌙"; // Moon icon
  } else {
    document.body.classList.remove("dark-mode");
    themeButtonText.textContent = "Dark";
    themeButtonIcon.innerHTML = "<i class='bx bxs-sun'></i>"  //"☀️"; // Sun icon
  }
}

// Toggle between dark and light modes
themeButton.addEventListener("click", () => {
  if (document.body.classList.contains("dark-mode")) {
    setTheme("light");
    localStorage.setItem("theme", "light");
  } else {
    setTheme("dark");
    localStorage.setItem("theme", "dark");
  }
});

// Check for system theme preference
if (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) {
  setTheme("dark");
} else {
  setTheme("light");
}

// Check for user's stored theme preference
const storedTheme = localStorage.getItem("theme");
if (storedTheme) {
  setTheme(storedTheme);
}



// Slider Script

$(function () {
    "use strict";
    var body = $("body"),
        active = $(".slider ol li, .slider .controll"),
        controll = $(".slider .controll"),
        playpause = $(".playpause"),
        sliderTime = 1,
        sliderWait = 6000,
        i = 999,
        autoRun,
        stop = false;
    // Reset
    $(".slider ul li:first").css("left", 0);
    // Run Slider
    function runSlider(what) {
        what.addClass("active").siblings("li, span").removeClass("active");
    }
    // slider gsap
    function gsapSlider(whose, left) {
        i++;
        if (whose.hasClass("active")) {
            TweenMax.fromTo(
                ".slider ul li.active",
                sliderTime,
                { zIndex: i, left: left },
                { left: 0 }
            );
        }
    }
    // Active
    active.on("click", function () {
        runSlider($(this));
    });
    // Arrow left
    controll.first().on("click", function () {
        var slide = $(".slider ul li.active, .slider ol li.active").is(
            ":first-of-type"
        )
            ? $(".slider ul li:last, .slider ol li:last")
            : $(".slider ul li.active, .slider ol li.active").prev("li");
        runSlider(slide);
        gsapSlider(slide, "100%");
    });
    // Arrow right
    controll.last().on("click", function () {
        var slide = $(".slider ul li.active, .slider ol li.active").is(
            ":last-of-type"
        )
            ? $(".slider ul li:first, .slider ol li:first")
            : $(".slider ul li.active, .slider ol li.active").next("li");
        runSlider(slide);
        gsapSlider(slide, "-100%");
    });
    // Point
    $(".slider ol li").on("click", function () {
        var start = $(".slider ul li.active").index();
        var slide = $(".slider ul li").eq($(this).index());
        runSlider(slide);
        var end = $(".slider ul li.active").index();
        if (start > end) {
            gsapSlider(slide, "100%");
        }
        if (start < end) {
            gsapSlider(slide, "-100%");
        }
    });
    // Auto run slider
    function autoRunSlider() {
        if (body.css("direction") === "ltr" && stop === false) {
            autoRun = setInterval(function () {
                controll.last().click();
            }, sliderWait);
        } else if (body.css("direction") === "rtl" && stop === false) {
            autoRun = setInterval(function () {
                controll.first().click();
            }, sliderWait);
        }
    }
    autoRunSlider();
    // When hover
    active.on("mouseenter", function () {
        if (stop === false) { clearInterval(autoRun); }
    });
    active.on("mouseleave", function () {
        if (stop === false) { autoRunSlider(); }
    });
    // play pause click
    playpause.on("click", function () {
        $(this).toggleClass("fa-play-circle-o fa-pause-circle-o");
        if (playpause.hasClass("fa-play-circle-o")) {
            stop = true;
            clearInterval(autoRun);
            $(this).attr('title', 'play');
        }
        if (playpause.hasClass("fa-pause-circle-o")) {
            stop = false;
            autoRunSlider();
            $(this).attr('title', 'pause');
        }
    });
});



const header = document.querySelector("header");

window.addEventListener ("scroll", function() {
  header.classList.toggle ("sticky", window.scrollY > 0)
});