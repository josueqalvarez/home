<x-layout title="Proyectos | TechFreelancer" active="proyectos">
    <div class="relative min-h-screen">
        <div class="absolute inset-0 technical-bg z-[-1] opacity-50 pointer-events-none"></div>

        <!-- Hero Section -->
        <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-16 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                <div class="md:col-span-8 md:col-start-1 reveal">
                    <x-badge text="Portafolio de Trabajo" class="mb-6" />
                    <h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-primary mb-6 text-center md:text-left">
                        Proyectos que convierten ideas en soluciones.
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl border-l-2 border-on-tertiary-container pl-6">
                        Una muestra de aplicaciones, productos y soluciones que he desarrollado. Cada proyecto refleja un enfoque metódico para resolver problemas complejos con interfaces claras y código robusto.
                    </p>
                </div>
            </div>
        </section>

        <!-- Projects Grid -->
        <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="flex flex-col gap-24">
                <!-- Project 1 -->
                <x-project-card 
                    number="01"
                    category="Automatización"
                    title="Envio de Mensajes Masivos"
                    description="Aplicación de escritorio diseñada para el envío masivo de mensajes independiente de cualquier cuenta de Whatsapp. (El video de muestra se encuentra difuminado por fines éticos)"
                    :technologies="['Python', 'Selenium', 'MySQL']"
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuDYlqlP6j511NcgJtRyXGwAgMAP9ek6-McR5JRMJ99PCronzE6cgxwT4XUe0AEWhWuWGkWTUelOns6Gdxz5U67p5N3xe_WyBOFIGdyETWeL_JUFOdlQ_XyzRNixNTL2D6LItMSnCnVLVMh6oHnNyWDopMLDZVb_V2BvioCgwKwdd9UViy2ouXeMmpJdkjhz4N1FYL-w1jtNT2QWUxkZEV2-xXD48_azok443jQ1NZevwLUKMVNJOzBBlQ"
                    :video="asset('videos/envio-de-mensajes-masivos.mp4')"
                    imageAlt="Envio de Mensajes Masivos"
                    :link="route('contacto')"
                    linkText="Ver proyecto"
                    :reversed="false"
                    class="reveal" />

                <!-- Project 2 -->
                <x-project-card 
                    number="02"
                    category="Sitio web"
                    title="Agua de Mesa 'SAN ANDRES'"
                    description="Sitio web corporativo para la marca de agua de mesa SAN ANDRES, enfocado en presentar la marca y sus productos de manera atractiva y funcional."
                    :technologies="['Javascript', 'React', 'Tailwind CSS', 'HTML', 'CSS', 'MySQL']"
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuDSUIirOTnJRxCEqbXrF-iBf81jX6vrrQVsTLEY4c5AqwB5JJd-iJA4h-zfRm9hpRgZ2BLaZo5-fTBOSR1g0tpF97R0FUlm5Wv-tG4uutmJPlJun7ML9zBXRmsSzfGQWCODUTbKHyPR9bnM92NWNdsQAznO5MUL-WYe62_OlQcf4PHk_SueJSChpbDPmTBVJyC3Uz-CYyos1KQKr4KoYrcY6ZfWshpsSAk4WWljkLXlTMFgFOjstdBN5A"
                    imageAlt="Agua de Mesa SAN ANDRES"
                    :link="route('contacto')"
                    linkText="Ver caso de estudio"
                    :reversed="true"
                    class="reveal" />
            </div>
        </section>

        <!-- Technical Indicator Bottom -->
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mt-24 mb-12 flex justify-center reveal">
            <div class="flex items-center gap-4 text-outline font-code-sm text-code-sm">
                <span class="w-12 h-px bg-outline-variant/50"></span>
                <span>CARTERA DE CLIENTES: ACTIVA</span>
                <span class="w-12 h-px bg-outline-variant/50"></span>
            </div>
        </div>

        <!-- CTA Section -->
        <x-cta-banner />
    </div>
</x-layout>
