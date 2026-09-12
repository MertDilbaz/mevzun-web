import Alpine from 'alpinejs';

window.Alpine = Alpine;

if (!window.Alpine.__started) {
    Alpine.start();
    window.Alpine.__started = true;
}

const revealAll = (elements) => {
    elements.forEach((element) => element.classList.add('is-revealed'));
};

document.addEventListener('DOMContentLoaded', () => {
    const revealElements = Array.from(document.querySelectorAll('[data-reveal]'));

    revealElements.forEach((element) => {
        const delay = Number.parseInt(element.dataset.revealDelay ?? '0', 10);
        if (Number.isFinite(delay) && delay > 0) {
            element.style.transitionDelay = `${Math.min(delay, 320)}ms`;
        }
    });

    if (!revealElements.length) {
        return;
    }

    const reducedMotion = window.matchMedia?.('(prefers-reduced-motion: reduce)').matches;
    if (reducedMotion || !('IntersectionObserver' in window)) {
        revealAll(revealElements);
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            entry.target.classList.add('is-revealed');
            observer.unobserve(entry.target);
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -24px 0px',
    });

    revealElements.forEach((element) => observer.observe(element));
});
