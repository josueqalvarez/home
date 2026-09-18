<x-layout title="TechFreelancer | Soluciones Tecnológicas" active="inicio">
    <!-- HERO SECTION -->
    <section class="relative min-h-[85vh] flex items-center tech-grid border-b border-outline-variant/10" id="inicio">
        <div
            class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-12 gap-gutter items-center py-section-gap">
            <div class="md:col-span-7 z-10 reveal">
                <x-badge text="Consultoría & Desarrollo" class="mb-6" />

                <h1
                    class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-6 text-center md:text-left">
                    ¿Listo para impulsar tu negocio?
                </h1>

                <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-2xl">
                    ¡Hola! Me llamo Josue, y, con mas de 4 años de experiencia en tecnología, me dedico a convertir
                    ideas en realidad usando tecnología. Me apasiona el emprendimiento y crear soluciones tecnológicas
                    personalizadas para cada situación, en especial la automatización.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <x-button :href="route('contacto')" variant="primary" size="lg">
                        Hablemos
                    </x-button>
                    <x-button :href="route('proyectos')" variant="outline" size="lg">
                        Ver proyectos
                    </x-button>
                </div>

                <div class="flex items-center gap-4 mt-8">
                    <a href="https://wa.me/51945589482?text=Hola%21+vengo+de+la+pagina+web%2C+estoy+interesado+en+..&utm_source=chatgpt.com"
                        target="_blank" aria-label="WhatsApp"
                        class="text-on-surface-variant hover:text-secondary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            fill="currentColor" aria-hidden="true">
                            <path
                                d="M12.04 2c-5.52 0-10 4.48-10 10 0 1.76.46 3.48 1.34 5L2 22l5.14-1.35c1.47.8 3.13 1.22 4.9 1.22h.01c5.52 0 10-4.48 10-10s-4.48-9.87-10.01-9.87zm0 18.15h-.01c-1.55 0-3.07-.42-4.4-1.2l-.32-.19-3.05.8.81-2.97-.21-.31A8.14 8.14 0 0 1 3.9 12c0-4.5 3.66-8.15 8.15-8.15 2.18 0 4.22.85 5.76 2.39a8.09 8.09 0 0 1 2.39 5.77c0 4.5-3.66 8.15-8.16 8.15zm4.47-6.1c-.24-.12-1.44-.71-1.67-.79-.22-.08-.39-.12-.55.12-.16.24-.63.79-.78.95-.14.16-.29.18-.53.06-.24-.12-1.03-.38-1.96-1.21-.72-.65-1.21-1.44-1.35-1.68-.14-.24-.01-.37.11-.49.11-.11.24-.29.36-.43.12-.14.16-.24.24-.4.08-.16.04-.31-.02-.43-.06-.12-.55-1.33-.76-1.82-.2-.48-.4-.42-.55-.42-.14 0-.31-.02-.47-.02-.16 0-.43.06-.65.31-.22.24-.86.84-.86 2.05 0 1.21.88 2.38 1 2.54.12.16 1.74 2.65 4.21 3.72.59.25 1.05.4 1.41.52.59.19 1.13.16 1.55.1.47-.07 1.44-.59 1.65-1.16.2-.57.2-1.06.14-1.16-.06-.1-.22-.16-.46-.28z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/jqalvarezz/" target="_blank" aria-label="Instagram"
                        class="text-on-surface-variant hover:text-secondary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <rect x="3" y="3" width="18" height="18" rx="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@josueqalvarezz" target="_blank" aria-label="TikTok"
                        class="text-on-surface-variant hover:text-secondary transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            fill="currentColor" aria-hidden="true">
                            <path
                                d="M16.5 2c.3 1.8 1.4 3.3 3 4.2.8.5 1.7.8 2.5.9v3.2c-1.6-.1-3.1-.6-4.4-1.5v6.6c0 3.6-2.9 6.6-6.6 6.6S4.4 18.9 4.4 15.4c0-3.6 2.9-6.6 6.6-6.6.3 0 .6 0 .9.1v3.3c-.3-.1-.6-.1-.9-.1-1.8 0-3.3 1.5-3.3 3.3s1.5 3.3 3.3 3.3 3.3-1.5 3.3-3.3V2h2.2z" />
                        </svg>
                    </a>
                    <button type="button" id="phone-toggle-btn" aria-label="Mostrar número de teléfono"
                        class="text-on-surface-variant hover:text-secondary transition-colors flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path
                                d="M6.6 10.8c1.2 2.4 3.2 4.4 5.6 5.6l1.9-1.9c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.5.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.3 21 3 13.7 3 4.9c0-.6.4-1 1-1h3.1c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.5.1.3 0 .7-.2 1l-1.9 1.9z" />
                        </svg>
                        <span id="phone-number"
                            class="ml-0 max-w-0 opacity-0 overflow-hidden whitespace-nowrap transition-all duration-300 font-body-md text-body-md">+51
                            945 589 482</span>
                    </button>
                </div>
            </div>

            <div class="md:col-span-5 relative h-full  mt-12 md:mt-0 reveal reveal-delay-200">
                <div class="absolute inset-0  border-outline-variant/20 rounded-lg ambient-glow overflow-hidden">
                    @php
                        $profileImagePath = storage_path('app/public/Josueqalvarez.png');
                        $profileImage = file_exists($profileImagePath)
                            ? 'data:image/png;base64,' . base64_encode(file_get_contents($profileImagePath))
                            : '';
                    @endphp
                    <img loading="lazy" decoding="async" src="{{ $profileImage }}" alt="Josue Quichca"
                        class="lazy-img object-cover opacity-100">
                </div>
            </div>
        </div>
    </section>

    <!-- EL PROBLEMA SECTION -->
    <section class=" text-on-surface border-y border-outline-variant/30 tech-grid bg-taupe-900"
        style="background-image: linear-gradient(to right, rgba(99, 216, 239, 0.04) 1px, transparent 1px), linear-gradient(to bottom, rgba(99, 216, 239, 0.04) 1px, transparent 1px);">

        <div
            class="mx-auto px-margin-mobile md:px-margin-desktop py-16 md:py-20 gap-gutter items-center flex flex-col justify-center w-full md:w-7/12 text-center">
            <div class=" reveal">
                <h3 class="font-headline-md text-headline-md leading-snug">
                    NO CONTINUES, a menos que lo que busques sea mejorar tu negocio y llevarlo al <i><u>siguiente
                            nivel</u></i>.
                </h3>
            </div>
        </div>
    </section>

    <!-- EL PROBLEMA SECTION -->
    <section class=" text-on-surface border-y border-outline-variant/30 tech-grid bg-taupe-950"
        style="background-image: linear-gradient(to right, rgba(99, 216, 239, 0.04) 1px, transparent 1px), linear-gradient(to bottom, rgba(99, 216, 239, 0.04) 1px, transparent 1px);">

        <div
            class="w-full md:w-8/12 mx-auto px-margin-mobile md:px-margin-desktop py-16 md:py-section-gap gap-gutter items-center flex flex-col justify-center">
            <div class=" reveal">
                <h2 class="font-headline-md text-headline-md mb-6 leading-snug text-center">
                    ¿Cómo saber si puedo ayudarte?
                </h2>
                <p class="font-body-md text-body-md text-on-surface">
                    Observa los siguientes casos, y responde si haces alguno manualmente.
                </p>
                <div class="grid gap-4 p-4 sm:p-6 md:p-10">
                    <!-- Problem Items -->
                    <div
                        class="flex items-start bg-surface-container-low/70 p-6 rounded border border-outline-variant/30 hover:border-on-tertiary-container/40 transition-colors reveal reveal-delay-100">
                        <span
                            class="text-on-tertiary-container mr-4 mt-1 font-label-caps text-label-caps font-semibold">01</span>
                        <p class="font-body-md text-body-md text-on-surface">Responder las mismas preguntas una y otra
                            vez</p>
                    </div>
                    <div
                        class="flex items-start bg-surface-container-low/70 p-6 rounded border border-outline-variant/30 hover:border-on-tertiary-container/40 transition-colors reveal reveal-delay-200">
                        <span
                            class="text-on-tertiary-container mr-4 mt-1 font-label-caps text-label-caps font-semibold">02</span>
                        <p class="font-body-md text-body-md text-on-surface">Hacer tareas repetitivas todos los días
                        </p>
                    </div>
                    <div
                        class="flex items-start bg-surface-container-low/70 p-6 rounded border border-outline-variant/30 hover:border-on-tertiary-container/40 transition-colors reveal reveal-delay-300">
                        <span
                            class="text-on-tertiary-container mr-4 mt-1 font-label-caps text-label-caps font-semibold">03</span>
                        <p class="font-body-md text-body-md text-on-surface">Preparar el resumen mensual de
                            resultados</p>
                    </div>

                </div>

                <div class="flex md:col-span-6 mt-12 md:mt-0">
                    <p class="font-body-md text-body-md text-on-surface mb-4">
                        Si respondiste que sí a alguno de los problemas anteriores,

                        <a class="  text-secondary font-medium hover:text-secondary-fixed-dim transition-colors group hover:underline"
                            href="{{ route('contacto') }}">
                            hablemos
                            <span class="ml-2 transform group-hover:translate-x-1 transition-transform">→</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICIOS SECTION (Reusable Service Cards Component) -->
    <section class="bg-surface py-section-gap" id="servicios">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop ">
            <div class="mb-16 md:w-2/3 reveal">
                <x-badge text="Capacidades" class="mb-4" />
                <h2 class="font-headline-md text-headline-md text-primary max-sm:text-center">Soluciones que puedo crear para tu negocio
                </h2>
            </div>
            <div class="grid md:grid-cols-2 items-start gap-8">
                <x-service-card title="Sitios web" icon="web" :items="['Landing pages', 'Sitios corporativos', 'Catálogos', 'Aplicaciones web']" class="reveal reveal-delay-100" />

                <x-service-card title="Automatización de procesos" icon="account_tree" :items="['Dashboards', 'Chatbots', 'Formularios', 'Flujos automáticos', 'Procesos personalizados']"
                    class="reveal reveal-delay-200" />
            </div>

            <div class="mt-12 text-center reveal">
                <x-button :href="route('servicios')" variant="outline" size="md" icon="arrow_forward"
                    iconPosition="right">
                    Ver todos los servicios en detalle
                </x-button>
            </div>
        </div>
    </section>

    <!-- PROYECTOS DESTACADOS SECTION -->
    <section class="bg-surface-container-low py-section-gap border-t border-outline-variant/10">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 reveal ">
                <div>
                    <x-badge text="Portafolio" class="mb-4" />
                    <h2 class="font-headline-md text-headline-md text-primary  max-sm:text-center">Proyectos destacados</h2>
                </div>
                <div class="mt-4 md:mt-0 max-sm:text-center">
                    <a href="{{ route('proyectos') }}"
                        class="inline-flex items-center text-secondary font-medium hover:underline">
                        Ver todos los proyectos <span
                            class="material-symbols-outlined ml-1 text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>

            <div class="space-y-12">
                <x-project-card number="01" category="Automatización" title="Envio de Mensajes Masivos"
                    description="Aplicación de escritorio diseñada para el envío masivo de mensajes independiente de cualquier cuenta de Whatsapp."
                    :technologies="['Python', 'Selenium', 'MySQL']"
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuDYlqlP6j511NcgJtRyXGwAgMAP9ek6-McR5JRMJ99PCronzE6cgxwT4XUe0AEWhWuWGkWTUelOns6Gdxz5U67p5N3xe_WyBOFIGdyETWeL_JUFOdlQ_XyzRNixNTL2D6LItMSnCnVLVMh6oHnNyWDopMLDZVb_V2BvioCgwKwdd9UViy2ouXeMmpJdkjhz4N1FYL-w1jtNT2QWUxkZEV2-xXD48_azok443jQ1NZevwLUKMVNJOzBBlQ"
                    :video="asset('videos/envio-de-mensajes-masivos.mp4')" imageAlt="Envio de Mensajes Masivos"
                    :link="route('proyectos')" linkText="Ver proyecto" class="reveal" />
            </div>
        </div>
    </section>

    <!-- CTA BANNER -->
    <x-cta-banner />
</x-layout>