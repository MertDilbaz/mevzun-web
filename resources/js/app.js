import Alpine from 'alpinejs';

window.Alpine = Alpine;

if (!window.Alpine.__started) {
    Alpine.start();
    window.Alpine.__started = true;
}

// Progressive enhancement section reveal (LOCKED ADIM 11.8 & 11.18)
document.addEventListener('DOMContentLoaded', () => {
    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    const revealElements = document.querySelectorAll('[data-reveal]');
    if (!revealElements.length || !('IntersectionObserver' in window)) {
        revealElements.forEach(el => el.classList.add('is-revealed'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-revealed');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -30px 0px'
    });

    revealElements.forEach(el => observer.observe(el));
});
