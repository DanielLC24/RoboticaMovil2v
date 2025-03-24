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


    document.addEventListener("DOMContentLoaded", () => {
        const items = document.querySelectorAll(".carousel-item");
        let currentIndex = 0;

        function updateCarousel() {
            items.forEach((item, index) => {
                if (index === currentIndex) {
                    item.classList.remove("hidden");
                } else {
                    item.classList.add("hidden");
                }
            });
        }

        document.getElementById("prevBtn").addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateCarousel();
        });

        document.getElementById("nextBtn").addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % items.length;
            updateCarousel();
        });
    });