<x-layout title="TechFreelancer | Soluciones Tecnológicas" active="inicio">
    <!-- HERO SECTION -->
    <section class="relative min-h-[85vh] flex items-center tech-grid border-b border-outline-variant/10" id="inicio">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-12 gap-gutter items-center py-section-gap">
            <div class="md:col-span-7 z-10 reveal">
                <x-badge text="Consultoría & Desarrollo" class="mb-6" />
                
                <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-6">
                    Ayudo a negocios a trabajar mejor con tecnología.
                </h1>
                
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-2xl">
                    Creo sitios web y automatizo procesos para que tu negocio sea más simple, eficiente y profesional. Menos ruido, más claridad funcional.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <x-button :href="route('contacto')" variant="primary" size="lg">
                        Hablemos
                    </x-button>
                    <x-button :href="route('proyectos')" variant="outline" size="lg">
                        Ver proyectos
                    </x-button>
                </div>
            </div>

            <div class="md:col-span-5 relative h-96 md:h-full min-h-100 mt-12 md:mt-0 reveal reveal-delay-200">
                <div class="absolute inset-0 bg-white border border-outline-variant/20 rounded-lg ambient-glow overflow-hidden">
                    <div class="tech-node-tl"></div>
                    <div class="tech-node-tr"></div>
                    <div class="tech-node-bl"></div>
                    <div class="tech-node-br"></div>
                    <img loading="lazy" 
                         decoding="async"
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9MTBi7c93mkBjMv7dh2LaY6MIO-yweVz6HwOrP_9Gh86XXjwlOVgvbqPyNIAtBtSEBAiGDnV75CKmxhGUnETdt-nebNQkKqdevHr0RkpvvCA2CY9GL_plMuu79_6AO6WdwJZJ8_KTGW8VYl5ZGaqIBR25yI0xUJUrYIpNxK-R4xyxylu1sVz2jH0A5T5GjMbITy4Uc4PsaQ_GZIFJ4ijF27n_i45pQirv3_pz_9CcU7JjWWmoegmnIA" 
                         alt="Composición abstracta de tecnología y nodos de conexión" 
                         class="lazy-img w-full h-full object-cover opacity-90 mix-blend-multiply">
                </div>
            </div>
        </div>
    </section>

    <!-- EL PROBLEMA SECTION -->
    <section class="bg-[#0B1220] text-white border-y border-white/10 tech-grid" style="background-image: linear-gradient(to right, rgba(0, 144, 169, 0.03) 1px, transparent 1px), linear-gradient(to bottom, rgba(0, 144, 169, 0.03) 1px, transparent 1px);">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-gap grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
            <div class="md:col-span-5 md:pr-12 reveal">
                <h2 class="font-headline-md text-headline-md mb-6 leading-snug">
                    ¿Tu negocio todavía hace esto manualmente?
                </h2>
                <p class="font-body-lg text-body-lg text-white/70 mb-10">
                    Muchas tareas que consumen tiempo pueden simplificarse con tecnología. El trabajo operativo no debería ser el centro de tu día.
                </p>
                <a class="inline-flex items-center text-[#2563EB] font-medium hover:text-secondary-container transition-colors group" href="{{ route('contacto') }}">
                    Quiero mejorar mi negocio
                    <span class="ml-2 transform group-hover:translate-x-1 transition-transform">→</span>
                </a>
            </div>
            <div class="md:col-span-7 mt-12 md:mt-0">
                <div class="grid gap-4">
                    <!-- Problem Items -->
                    <div class="flex items-start bg-white/5 p-6 rounded border border-white/10 hover:border-on-tertiary-container/40 transition-colors reveal reveal-delay-100">
                        <span class="text-on-tertiary-container mr-4 mt-1 font-label-caps text-label-caps font-semibold">01</span>
                        <p class="font-body-md text-body-md text-white/90">Copiar información entre herramientas</p>
                    </div>
                    <div class="flex items-start bg-white/5 p-6 rounded border border-white/10 hover:border-on-tertiary-container/40 transition-colors reveal reveal-delay-200">
                        <span class="text-on-tertiary-container mr-4 mt-1 font-label-caps text-label-caps font-semibold">02</span>
                        <p class="font-body-md text-body-md text-white/90">Repetir las mismas tareas todos los días</p>
                    </div>
                    <div class="flex items-start bg-white/5 p-6 rounded border border-white/10 hover:border-on-tertiary-container/40 transition-colors reveal reveal-delay-300">
                        <span class="text-on-tertiary-container mr-4 mt-1 font-label-caps text-label-caps font-semibold">03</span>
                        <p class="font-body-md text-body-md text-white/90">Gestionar información manualmente</p>
                    </div>
                    <div class="flex items-start bg-white/5 p-6 rounded border border-white/10 hover:border-on-tertiary-container/40 transition-colors reveal reveal-delay-400">
                        <span class="text-on-tertiary-container mr-4 mt-1 font-label-caps text-label-caps font-semibold">04</span>
                        <p class="font-body-md text-body-md text-white/90">No tener una presencia digital profesional</p>
                    </div>
                    <div class="flex items-start bg-white/5 p-6 rounded border border-white/10 hover:border-on-tertiary-container/40 transition-colors reveal reveal-delay-400">
                        <span class="text-on-tertiary-container mr-4 mt-1 font-label-caps text-label-caps font-semibold">05</span>
                        <p class="font-body-md text-body-md text-white/90">Depender demasiado de procesos manuales</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICIOS SECTION (Reusable Service Cards Component) -->
    <section class="bg-surface py-section-gap" id="servicios">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="mb-16 md:w-2/3 reveal">
                <x-badge text="Capacidades" class="mb-4" />
                <h2 class="font-headline-md text-headline-md text-primary">Soluciones que puedo crear para tu negocio</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <x-service-card 
                    title="Sitios web" 
                    icon="web" 
                    :items="['Landing pages', 'Sitios corporativos', 'Catálogos', 'Aplicaciones web']"
                    class="reveal reveal-delay-100" />

                <x-service-card 
                    title="Automatización de procesos" 
                    icon="account_tree" 
                    :items="['Flujos automáticos', 'Integraciones', 'Formularios', 'Notificaciones', 'Procesos personalizados']"
                    class="reveal reveal-delay-200" />
            </div>

            <div class="mt-12 text-center reveal">
                <x-button :href="route('servicios')" variant="outline" size="md" icon="arrow_forward" iconPosition="right">
                    Ver todos los servicios en detalle
                </x-button>
            </div>
        </div>
    </section>

    <!-- PROYECTOS DESTACADOS SECTION -->
    <section class="bg-surface-container-low py-section-gap border-t border-outline-variant/10">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 reveal">
                <div>
                    <x-badge text="Portafolio" class="mb-4" />
                    <h2 class="font-headline-md text-headline-md text-primary">Proyectos destacados</h2>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('proyectos') }}" class="inline-flex items-center text-[#2563EB] font-medium hover:underline">
                        Ver todos los proyectos <span class="material-symbols-outlined ml-1 text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>

            <div class="space-y-12">
                <x-project-card 
                    number="01"
                    category="Aplicación Web"
                    title="FinDash Analytics"
                    description="Plataforma de análisis financiero en tiempo real. Desarrollada para procesar grandes volúmenes de datos transaccionales, ofreciendo visualizaciones limpias y reportes automatizados."
                    :technologies="['React', 'Node.js', 'PostgreSQL']"
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuDYlqlP6j511NcgJtRyXGwAgMAP9ek6-McR5JRMJ99PCronzE6cgxwT4XUe0AEWhWuWGkWTUelOns6Gdxz5U67p5N3xe_WyBOFIGdyETWeL_JUFOdlQ_XyzRNixNTL2D6LItMSnCnVLVMh6oHnNyWDopMLDZVb_V2BvioCgwKwdd9UViy2ouXeMmpJdkjhz4N1FYL-w1jtNT2QWUxkZEV2-xXD48_azok443jQ1NZevwLUKMVNJOzBBlQ"
                    imageAlt="FinDash Analytics Dashboard"
                    :link="route('proyectos')"
                    linkText="Ver proyecto"
                    class="reveal" />
            </div>
        </div>
    </section>

    <!-- CTA BANNER -->
    <x-cta-banner />
</x-layout>
