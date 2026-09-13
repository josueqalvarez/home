// Initialize Lazy Loading & Scroll Reveal Animations
document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll Reveal Animation using IntersectionObserver
    const revealElements = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        // Fallback for browsers without IntersectionObserver
        revealElements.forEach(el => el.classList.add('is-revealed'));
    }

    // 2. Image Lazy Loading & Fade-in transition
    const lazyImages = document.querySelectorAll('img[data-lazy]');

    const handleImageLoaded = (img) => {
        img.classList.add('loaded');
    };

    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    const src = img.getAttribute('data-src');
                    if (src) {
                        img.src = src;
                    }
                    if (img.complete) {
                        handleImageLoaded(img);
                    } else {
                        img.addEventListener('load', () => handleImageLoaded(img), { once: true });
                    }
                    observer.unobserve(img);
                }
            });
        }, {
            rootMargin: '100px'
        });

        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        lazyImages.forEach(img => {
            const src = img.getAttribute('data-src');
            if (src) img.src = src;
            handleImageLoaded(img);
        });
    }

    // Handle normal images that load lazily
    document.querySelectorAll('img[loading="lazy"]').forEach(img => {
        if (img.complete) {
            img.classList.add('loaded');
        } else {
            img.addEventListener('load', () => img.classList.add('loaded'), { once: true });
        }
    });

    // 3. Mobile Navigation Drawer Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');

    if (mobileMenuBtn && mobileMenu) {
        const toggleMenu = () => {
            mobileMenu.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        };

        mobileMenuBtn.addEventListener('click', toggleMenu);
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', toggleMenu);
        }

        // Close on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            });
        });
    }
});

