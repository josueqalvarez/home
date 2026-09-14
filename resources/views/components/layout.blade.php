@props([
    'title' => 'TechFreelancer | Soluciones Tecnológicas',
    'active' => 'inicio',
    'metaDescription' => 'Sitios web modernos y automatización de procesos para negocios. Consultoría y desarrollo tecnológico profesional.'
])
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $metaDescription }}">
    <title>{{ $title }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <!-- Tailwind CDN with fallback config for instant full-fidelity rendering -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary-fixed-dim": "#b4c5ff",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#316bf3",
                        "outline-variant": "#c6c6cc",
                        "on-tertiary-container": "#0090a9",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed": "#00174b",
                        "outline": "#76777d",
                        "on-tertiary-fixed-variant": "#004e5c",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#e6e8ea",
                        "on-error": "#ffffff",
                        "secondary": "#0051d5",
                        "error-container": "#ffdad6",
                        "background": "#f7f9fb",
                        "tertiary-fixed": "#acedff",
                        "tertiary-container": "#001f26",
                        "on-primary-fixed-variant": "#404757",
                        "secondary-fixed": "#dbe1ff",
                        "inverse-primary": "#c0c6da",
                        "on-surface-variant": "#45474c",
                        "surface-bright": "#f7f9fb",
                        "surface-variant": "#e0e3e5",
                        "on-secondary-fixed-variant": "#003ea8",
                        "on-tertiary-fixed": "#001f26",
                        "on-background": "#191c1e",
                        "surface-dim": "#d8dadc",
                        "tertiary": "#000000",
                        "on-secondary-container": "#fefcff",
                        "surface-container-highest": "#e0e3e5",
                        "primary": "#000000",
                        "on-primary": "#ffffff",
                        "primary-fixed-dim": "#c0c6da",
                        "surface-container-low": "#f2f4f6",
                        "primary-fixed": "#dce2f6",
                        "surface": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "surface-tint": "#585e6f",
                        "inverse-on-surface": "#eff1f3",
                        "on-primary-container": "#7d8496",
                        "surface-container": "#eceef0",
                        "on-error-container": "#93000a",
                        "tertiary-fixed-dim": "#4cd7f6",
                        "error": "#ba1a1a",
                        "inverse-surface": "#2d3133",
                        "primary-container": "#151b2a",
                        "on-primary-fixed": "#151b2a"
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    spacing: {
                        "margin-desktop": "64px",
                        "gutter": "24px",
                        "container-max": "1200px",
                        "unit": "8px",
                        "margin-mobile": "20px",
                        "section-gap": "120px"
                    },
                    fontFamily: {
                        "sans": ["Inter", "sans-serif"],
                        "mono": ["JetBrains Mono", "monospace"],
                        "body-lg": ["Inter", "sans-serif"],
                        "headline-md": ["Inter", "sans-serif"],
                        "headline-sm": ["Inter", "sans-serif"],
                        "display-lg": ["Inter", "sans-serif"],
                        "label-caps": ["JetBrains Mono", "monospace"],
                        "body-md": ["Inter", "sans-serif"],
                        "code-sm": ["JetBrains Mono", "monospace"],
                        "display-lg-mobile": ["Inter", "sans-serif"]
                    },
                    fontSize: {
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-md": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                        "headline-sm": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700"}],
                        "label-caps": ["12px", {"lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "code-sm": ["13px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "display-lg-mobile": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}]
                    }
                }
            }
        };
    </script>

    <style>
        .tech-grid {
            background-image: 
                linear-gradient(to right, rgba(0, 144, 169, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 144, 169, 0.05) 1px, transparent 1px);
            background-size: 28px 28px;
        }
        .technical-bg {
            background-image: 
                linear-gradient(to right, rgba(0, 144, 169, 0.04) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 144, 169, 0.04) 1px, transparent 1px);
            background-size: 32px 32px;
        }
        .tech-node-tl { position: absolute; top: -2px; left: -2px; width: 5px; height: 5px; background-color: #0090a9; z-index: 10; }
        .tech-node-tr { position: absolute; top: -2px; right: -2px; width: 5px; height: 5px; background-color: #0090a9; z-index: 10; }
        .tech-node-bl { position: absolute; bottom: -2px; left: -2px; width: 5px; height: 5px; background-color: #0090a9; z-index: 10; }
        .tech-node-br { position: absolute; bottom: -2px; right: -2px; width: 5px; height: 5px; background-color: #0090a9; z-index: 10; }

        .node { position: absolute; width: 4px; height: 4px; background-color: #0090a9; }
        .node-tl { top: -2px; left: -2px; }
        .node-tr { top: -2px; right: -2px; }
        .node-bl { bottom: -2px; left: -2px; }
        .node-br { bottom: -2px; right: -2px; }

        .ambient-glow {
            box-shadow: 0 10px 40px -10px rgba(37, 99, 235, 0.06);
        }
        .btn-primary {
            background-color: #2563EB;
            color: #FFFFFF;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #1D4ED8;
            box-shadow: 0 0 12px 2px rgba(0, 144, 169, 0.35);
        }

        /* Custom UI Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f7f9fb; 
        }
        ::-webkit-scrollbar-thumb {
            background: #d8dadc; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #c6c6cc; 
        }

        /* Input active label for contact form */
        .input-active-label {
            display: none;
        }
        input:focus + .input-active-label,
        textarea:focus + .input-active-label,
        select:focus + .input-active-label {
            display: block;
        }

        /* Lazy loading and scroll fade-in animations */
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }
        .reveal.is-revealed {
            opacity: 1;
            transform: translateY(0);
        }
        .reveal-delay-100 { transition-delay: 100ms; }
        .reveal-delay-200 { transition-delay: 200ms; }
        .reveal-delay-300 { transition-delay: 300ms; }
        .reveal-delay-400 { transition-delay: 400ms; }

        img.lazy-img {
            opacity: 0;
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        img.lazy-img.loaded {
            opacity: 1;
        }

        /* Cat paw swiping in from the right edge to slap the WhatsApp ball down */
        @keyframes cat-paw-swipe {
            0%, 8% { transform: translate(140px, -50px) rotate(35deg); opacity: 0; }
            14% { transform: translate(10px, 6px) rotate(-20deg); opacity: 1; }
            18% { transform: translate(0, 16px) rotate(-30deg); opacity: 1; }
            26% { transform: translate(30px, -10px) rotate(10deg); opacity: 1; }
            34%, 100% { transform: translate(140px, -50px) rotate(35deg); opacity: 0; }
        }
        .cat-paw-swipe {
            animation: cat-paw-swipe 3s ease-in-out infinite;
        }

        /* WhatsApp ball reacting to the paw hit, like a dribbled basketball */
        @keyframes wa-ball-dribble {
            0%, 15% { transform: translateY(0); }
            18% { transform: translateY(16px); }
            24% { transform: translateY(-20px); }
            30% { transform: translateY(6px); }
            36% { transform: translateY(-9px); }
            42% { transform: translateY(2px); }
            48% { transform: translateY(-3px); }
            55%, 100% { transform: translateY(0); }
        }
        .wa-ball-dribble {
            animation: wa-ball-dribble 3s ease-in-out infinite;
        }

        /* FAQ accordion: slow open/close via grid-template-rows transition */
        .faq-panel.is-open {
            grid-template-rows: 1fr;
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-sans antialiased selection:bg-secondary-container selection:text-on-secondary min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <x-navbar :active="$active" />

    <!-- Main Content -->
    <main class="grow pt-20">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer :active="$active" />

    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50 overflow-visible">
        <!-- Cat paw entering from the right edge of the screen to slap the ball down -->
        <div class="cat-paw-swipe absolute -top-4 -right-2 pointer-events-none select-none" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="32" height="32" fill="#D9822B" class="drop-shadow-md">
                <ellipse cx="32" cy="42" rx="18" ry="14"/>
                <circle cx="14" cy="20" r="7"/>
                <circle cx="28" cy="11" r="7"/>
                <circle cx="42" cy="11" r="7"/>
                <circle cx="54" cy="20" r="7"/>
            </svg>
        </div>

        <a href="https://wa.me/51945589482?text=Hola%21+vengo+de+la+pagina+web%2C+estoy+interesado+en+..&utm_source=chatgpt.com"
           target="_blank"
           rel="noopener noreferrer"
           aria-label="Contactar por WhatsApp"
           class="wa-ball-dribble relative flex items-center justify-center w-14 h-14 rounded-[50%] bg-[#25D366] text-white shadow-lg hover:bg-[#20bd5a] hover:scale-110 active:scale-95 transition-colors duration-300">
            <span class="absolute inline-flex h-full w-full rounded-[50%] bg-[#25D366] opacity-75 "></span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="currentColor" class="relative" aria-hidden="true">
                <path d="M12.04 2c-5.52 0-10 4.48-10 10 0 1.76.46 3.48 1.34 5L2 22l5.14-1.35c1.47.8 3.13 1.22 4.9 1.22h.01c5.52 0 10-4.48 10-10s-4.48-9.87-10.01-9.87zm0 18.15h-.01c-1.55 0-3.07-.42-4.4-1.2l-.32-.19-3.05.8.81-2.97-.21-.31A8.14 8.14 0 0 1 3.9 12c0-4.5 3.66-8.15 8.15-8.15 2.18 0 4.22.85 5.76 2.39a8.09 8.09 0 0 1 2.39 5.77c0 4.5-3.66 8.15-8.16 8.15zm4.47-6.1c-.24-.12-1.44-.71-1.67-.79-.22-.08-.39-.12-.55.12-.16.24-.63.79-.78.95-.14.16-.29.18-.53.06-.24-.12-1.03-.38-1.96-1.21-.72-.65-1.21-1.44-1.35-1.68-.14-.24-.01-.37.11-.49.11-.11.24-.29.36-.43.12-.14.16-.24.24-.4.08-.16.04-.31-.02-.43-.06-.12-.55-1.33-.76-1.82-.2-.48-.4-.42-.55-.42-.14 0-.31-.02-.47-.02-.16 0-.43.06-.65.31-.22.24-.86.84-.86 2.05 0 1.21.88 2.38 1 2.54.12.16 1.74 2.65 4.21 3.72.59.25 1.05.4 1.41.52.59.19 1.13.16 1.55.1.47-.07 1.44-.59 1.65-1.16.2-.57.2-1.06.14-1.16-.06-.1-.22-.16-.46-.28z"/>
            </svg>
        </a>
    </div>

    <!-- Lazy Loading & Fade-in Reveal JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Scroll Reveal Observer
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
                    threshold: 0.08,
                    rootMargin: '0px 0px -30px 0px'
                });
                revealElements.forEach(el => revealObserver.observe(el));
            } else {
                revealElements.forEach(el => el.classList.add('is-revealed'));
            }

            // Image Lazy Loading & Fade-in
            const lazyImages = document.querySelectorAll('img[loading="lazy"], img.lazy-img');
            const onImgLoad = (img) => {
                img.classList.add('loaded');
            };

            lazyImages.forEach(img => {
                if (img.complete) {
                    onImgLoad(img);
                } else {
                    img.addEventListener('load', () => onImgLoad(img), { once: true });
                }
            });

            // Mobile Menu Toggle
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileClose = document.getElementById('mobile-menu-close');

            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
                if (mobileClose) {
                    mobileClose.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                    });
                }
            }

            // FAQ Accordion with slow open/close animation
            document.querySelectorAll('.faq-toggle').forEach((toggle) => {
                const panel = toggle.nextElementSibling;
                const icon = toggle.querySelector('.faq-icon');
                toggle.addEventListener('click', () => {
                    const isOpen = panel.classList.toggle('is-open');
                    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                    if (icon) {
                        icon.classList.toggle('-rotate-180', isOpen);
                    }
                });
            });
        });
    </script>
</body>
</html>
