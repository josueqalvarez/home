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
        });
    </script>
</body>
</html>
