/**
 * GroundedDating Main Interaction Script
 */
document.addEventListener('DOMContentLoaded', () => {

    /* --- 1. Theme Toggle --- */
    const themeToggle = document.getElementById('theme-toggle');
    const htmlEl = document.documentElement;

    // Check for saved theme
    const savedTheme = localStorage.getItem('gd-theme') || 'light';
    htmlEl.setAttribute('data-theme', savedTheme);
    updateThemeIcon(savedTheme);

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const currentTheme = htmlEl.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            htmlEl.setAttribute('data-theme', newTheme);
            localStorage.setItem('gd-theme', newTheme);
            updateThemeIcon(newTheme);
        });
    }

    function updateThemeIcon(theme) {
        if(themeToggle) {
            themeToggle.textContent = theme === 'light' ? '🌙' : '☀️';
        }
    }

    /* --- 2. Sticky Header --- */
    const header = document.getElementById('masthead');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('is-sticky');
            } else {
                header.classList.remove('is-sticky');
            }
        });
    }

    /* --- 3. Scroll Reveal Animations (Intersection Observer) --- */
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const fadeInObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('gd-visible');
                observer.unobserve(entry.target); // Optional: only animate once
            }
        });
    }, observerOptions);

    // Apply to elements with .gd-fade-in class
    document.querySelectorAll('.gd-fade-in').forEach(el => {
        fadeInObserver.observe(el);
    });

    /* --- 4. Mobile Menu Toggle --- */
    const menuToggle = document.querySelector('.menu-toggle');
    const navWrapper = document.querySelector('.gd-nav-wrapper');

    if (menuToggle && navWrapper) {
        menuToggle.addEventListener('click', () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            navWrapper.classList.toggle('is-active');
        });
    }

});
