import './bootstrap';
import Aos from 'aos';
import'aos/dist/aos.css';   

Aos.init({
    duration: 1000,
    once: false,
});

import Typed from 'typed.js';

document.addEventListener('DOMContentLoaded', function () {
    const typedTitle = new Typed("#typed-title", {
        strings: ["La Puerta a la Innovación", "Revolucionando", "Redefiniendo los Límites de la Tecnología"],
        typeSpeed: 80,
        showCursor: false,
        backSpeed: 100,
        loop: true,
    })
        
    });

// Carousel Animation
document.addEventListener("DOMContentLoaded", () => {
    const carousel = document.getElementById("carousel");
    if (!carousel) return;

    const items = carousel.querySelectorAll(".carousel-item");
    let currentIndex = 0;
    const track = document.querySelector('.carousel-track');
    const itemWidth = items[0].offsetWidth;
    const visibleItems = Math.floor(track.offsetWidth / itemWidth);

    function updateCarousel(newIndex) {
        items.forEach((item, index) => {
            if (index === newIndex) {
                item.classList.remove("opacity-0", "translate-x-full", "-translate-x-full");
                item.classList.add("opacity-100", "translate-x-0");
            } else if (index < newIndex) {
                item.classList.remove("opacity-100", "translate-x-full", "translate-x-0");
                item.classList.add("opacity-0", "-translate-x-full");
            } else {
                item.classList.remove("opacity-100", "translate-x-full", "-translate-x-full");
                item.classList.add("opacity-0", "translate-x-full");
            }
        });
        currentIndex = newIndex;
        const offset = -currentIndex * itemWidth + (track.offsetWidth / 2 - itemWidth / 2);
        track.style.transform = `translateX(${offset}px)`;
    }

    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    if (prevBtn) {
        prevBtn.addEventListener("click", () => {
            const newIndex = (currentIndex - 1 + items.length) % items.length;
            updateCarousel(newIndex);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener("click", () => {
            const newIndex = (currentIndex + 1) % items.length;
            updateCarousel(newIndex);
        });
    }

    // Auto-advance the carousel every 10 seconds
    setInterval(() => {
        const newIndex = (currentIndex + 1) % items.length;
        updateCarousel(newIndex);
    }, 10000);

    
    updateCarousel(0);
});