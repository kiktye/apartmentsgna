import "./bootstrap";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        const slot = document.getElementById("page-slot");

        slot.style.opacity = "1";
        slot.style.visibility = "visible";

        // Animations
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

    document
        .getElementById("detailsButton")
        .addEventListener("click", function () {
            const buildingContainer =
                document.getElementById("buildingContainer");
            const swiperContainer = document.getElementById("swiperContainer");
            const swiperWrapper = document.getElementById("swiperWrapper");

            gsap.to(buildingContainer, {
                duration: 0.35,
                x: "-100%",
                opacity: 0,
                onComplete: function () {
                    buildingContainer.style.display = "none";
                    buildingContainer.classList.add("hidden");
                    swiperContainer.style.display = "block";
                    swiperWrapper.classList.remove("hidden");

                    gsap.from(swiperContainer, {
                        duration: 0.35,
                        x: "100%",
                        opacity: 0,
                    });
                },
            });
        });

    document.querySelectorAll("#backButton").forEach((button) => {
        button.addEventListener("click", function () {
            const buildingContainer =
                document.getElementById("buildingContainer");
            const swiperContainer = document.getElementById("swiperContainer");
            const swiperWrapper = document.getElementById("swiperWrapper");

            swiperContainer.style.display = "none";
            buildingContainer.style.display = "block";
            swiperWrapper.classList.add("hidden");
            buildingContainer.classList.remove("hidden");

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
});

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
