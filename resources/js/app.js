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

        gsap.to("#first-paragraph, #second-paragraph", {
            y: -scrollPos * 0.05,
            opacity: opacity,
            duration: 0.5,
            ease: "power2.out",
        });

        gsap.to("#image-container", {
            y: -scrollPos * 0.1,
            opacity: opacity,
            duration: 2,
            ease: "power2.out",
        });
    });

    // Show Details Container
    document.getElementById("detailsButton").addEventListener("click", function () {
        const buildingContainer = document.getElementById("buildingContainer");
        const swiperContainer = document.getElementById("swiperContainer");
        const swiperWrapper = document.getElementById("swiperWrapper");

        const initialScrollY = window.scrollY;

        gsap.to(buildingContainer, {
            duration: 0.35,
            x: "-100%",
            opacity: 0,
            onComplete: function () {
                buildingContainer.style.display = "none";
                buildingContainer.classList.add("hidden");
                swiperContainer.style.display = "block";
                swiperWrapper.classList.remove("hidden");

                if (initialScrollY > 0) {
                    window.scrollTo({ top: 0, behavior: "smooth" });
                }

                gsap.from(swiperContainer, {
                    duration: 0.35,
                    x: "100%",
                    opacity: 0,
                });
            },
        });
    });

    // Go Back Button
    document.querySelectorAll("#backButton").forEach((button) => {
        button.addEventListener("click", function () {
            const buildingContainer = document.getElementById("buildingContainer");
            const swiperContainer = document.getElementById("swiperContainer");
            const swiperWrapper = document.getElementById("swiperWrapper");

            swiperContainer.style.display = "none";
            buildingContainer.style.display = "block";
            swiperWrapper.classList.add("hidden");
            buildingContainer.classList.remove("hidden");

            if (window.scrollY > 0) {
                window.scrollTo({ top: 0, behavior: "smooth" });
            }

            gsap.fromTo(
                buildingContainer,
                {
                    x: "-100%",
                    opacity: 0,
                },
                {
                    duration: 0.3,
                    x: "0%",
                    opacity: 1,
                }
            );
        });
    });

    // Carousel Swiper
    var swiper = new Swiper(".swiper-container", {
        loop: false,
        centeredSlides: true,
        slidesPerView: 1,
        spaceBetween: 20,
        slideToClickedSlide: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: {
                spaceBetween: 5,
            },
            768: {
                spaceBetween: 20,
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