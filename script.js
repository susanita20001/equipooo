
document.addEventListener('DOMContentLoaded', function() {
  
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    
    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });
    
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });
    
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            // Aquí puedes agregar validación personalizada
            console.log('Formulario enviado');
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const dotsContainer = document.querySelector('.slider-dots');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    let currentSlide = 0;
    let slideInterval;

   
    slides.forEach((slide, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });
    const dots = document.querySelectorAll('.dot');

    function goToSlide(n) {
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
        resetInterval();
    }

    function nextSlide() {
        goToSlide(currentSlide + 1);
    }

    function prevSlide() {
        goToSlide(currentSlide - 1);
    }

    function startInterval() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    function resetInterval() {
        clearInterval(slideInterval);
        startInterval();
    }

    nextBtn.addEventListener('click', () => {
        nextSlide();
    });

    prevBtn.addEventListener('click', () => {
        prevSlide();
    });

    startInterval();
    const slider = document.querySelector('.slider');
    
    slider.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });

    slider.addEventListener('mouseleave', () => {
        startInterval();
    });
});
function calcularTotal() {
            const material = document.getElementById("material").value;
            const cantidad = parseInt(document.getElementById("cantidad").value) || 0;
            const precio = precios[material];
            const total = precio * cantidad;

            document.getElementById("resultado").innerHTML =
                `<strong>Material:</strong> ${material}<br>
                 <strong>Precio unitario:</strong> $${precio.toFixed(2)}<br>
                 <strong>Cantidad:</strong> ${cantidad}<br>
                 <strong>Total:</strong> $${total.toFixed(2)}`;
        }

        function borrarCampos() {
            document.getElementById("material").selectedIndex = 0;
            document.getElementById("cantidad").value = "";
            document.getElementById("resultado").innerHTML = "";
        }