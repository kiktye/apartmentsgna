import "./bootstrap";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

document.addEventListener("DOMContentLoaded", function () {
    // Hamburger Menu
    const menuButton = document.querySelector(
        'button[aria-controls="mobile-menu"]'
    );
    const mobileMenu = document.getElementById("mobile-menu");
    const menuOpenIcon = menuButton.querySelector("svg.block");
    const menuCloseIcon = menuButton.querySelector("svg.hidden");

    menuButton.setAttribute("aria-expanded", "false");
    mobileMenu.classList.add("hidden");

    function closeMenu() {
        menuButton.setAttribute("aria-expanded", "false");
        mobileMenu.classList.add("opacity-0", "pointer-events-none");
        mobileMenu.classList.remove("opacity-100", "pointer-events-auto");
        setTimeout(() => {
            mobileMenu.classList.add("hidden");
        }, 300);

        menuOpenIcon.classList.remove("hidden");
        menuCloseIcon.classList.add("hidden");
    }

    menuButton.addEventListener("click", function () {
        const isExpanded = menuButton.getAttribute("aria-expanded") === "true";

        if (isExpanded) {
            closeMenu();
        } else {
            menuButton.setAttribute("aria-expanded", "true");
            mobileMenu.classList.remove("hidden");
            setTimeout(() => {
                mobileMenu.classList.add("opacity-100", "pointer-events-auto");
                mobileMenu.classList.remove("opacity-0", "pointer-events-none");
            }, 10);

            menuOpenIcon.classList.add("hidden");
            menuCloseIcon.classList.remove("hidden");
        }
    });

    window.addEventListener("scroll", function () {
        if (menuButton.getAttribute("aria-expanded") === "true") {
            closeMenu();
        }
    });

    // Loading animation
    setTimeout(function () {
        const slot = document.getElementById("page-slot");

        slot.style.opacity = "1";
        slot.style.visibility = "visible";

        gsap.from("#first-paragraph", {
            x: -200,
            opacity: 0,
            duration: 1.5,
            ease: "power2.out",
            filter: "blur(10px)",
        });

        gsap.from("#second-paragraph", {
            x: -100,
            opacity: 0,
            duration: 1.5,
            delay: 0.5,
            ease: "power2.out",
            filter: "blur(10px)",
        });

        gsap.from("#image-container", {
            y: 200,
            opacity: 0,
            duration: 2,
            ease: "expoScale(0,5,7,none)",
            filter: "blur(4px)",
        });
    }, 200);

    // Scroll-Based Animations
    const introText = document.querySelector("#intro-text");

    window.addEventListener("scroll", () => {
        const scrollPos = window.scrollY;
        const introHeight = introText.offsetHeight;
    
        const opacity = 1 - Math.min(scrollPos / introHeight, 1);
        
        let yOffsetText = -scrollPos * 0.05;
        let yOffsetImage = -scrollPos * 0.1;
        let opacityDuration = 0.5;
    

        if (window.innerWidth <= 768) {
            yOffsetText = -scrollPos * 0.03; 
            yOffsetImage = -scrollPos * 0.05; 
            opacityDuration = 1.8; 
        }
    
        gsap.to("#first-paragraph, #second-paragraph", {
            y: yOffsetText,
            opacity: opacity,
            duration: opacityDuration,
            ease: "power2.out",
        });
    
        gsap.to("#image-container", {
            y: yOffsetImage,
            opacity: opacity,
            duration: opacityDuration * 2,
            ease: "power2.out",
        });
    });

    // Carousel Swiper
    var swiper = new Swiper(".swiper", {
        loop: false,
        centeredSlides: false,
        slidesPerView: 1,
        spaceBetween: 0,
        slideToClickedSlide: false,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
});

function createCounter(elementId, targetNumber, duration) {
    const counterElement = document.getElementById(elementId);
    let startNumber = 0;
    const increment = targetNumber / (duration / 16.67);

    function updateCounter() {
        startNumber += increment;
        if (startNumber < targetNumber) {
            counterElement.innerText = Math.floor(startNumber);
            requestAnimationFrame(updateCounter);
        } else {
            counterElement.innerText = targetNumber;
        }
    }

    updateCounter();
}

createCounter("counter1", 166, 2000);
createCounter("counter2", 24000, 2500);
createCounter("counter3", 88, 3000);
createCounter("counter4", 2200, 3500);
