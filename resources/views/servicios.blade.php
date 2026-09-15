<x-layout title="Servicios | TechFreelancer" active="servicios">
    <!-- Hero Section -->
    <section
        class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-gap tech-grid relative border-b border-outline-variant/10">
        <div class="max-w-3xl reveal">
            <x-badge text="ENFOQUE PRÁCTICO" class="mb-6" />

            <h1
                class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-8 text-center md:text-left">
                Tecnología aplicada a tu negocio.
            </h1>

            <p
                class="font-body-lg text-body-lg text-on-surface-variant mb-12 max-w-2xl border-l-2 border-outline-variant/30 pl-6">
                No necesitas entender de tecnología. Necesitas una solución que funcione. Traduzco requerimientos
                complejos en herramientas digitales eficientes, limpias y listas para operar.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <x-button href="#desarrollo-web" variant="primary" size="lg" icon="arrow_downward" iconPosition="right">
                    Explorar servicios
                </x-button>
            </div>
        </div>

        <!-- Technical Decorator -->
        <div
            class="absolute right-8 top-1/2 -translate-y-1/2 hidden lg:block opacity-10 pointer-events-none select-none">
            <span class="material-symbols-outlined text-[200px]"
                style="font-variation-settings: 'FILL' 0, 'wght' 100;">developer_mode</span>
        </div>
    </section>

    <!-- Sitios Web Section -->
    <section id="desarrollo-web" class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
            <div class="lg:col-span-5 sticky top-32 reveal">
                <div class="flex items-center gap-3 mb-4">
                    <span class="material-symbols-outlined text-secondary text-3xl"
                        style="font-variation-settings: 'FILL' 0, 'wght' 300;">language</span>
                    <h2 class="font-headline-md text-headline-md text-primary">Desarrollo de sitios web</h2>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant mb-8">
                    Presencia digital estructurada, rápida y optimizada. Sitios construidos no solo para verse bien,
                    sino para convertir visitantes en clientes.
                </p>
                <x-button :href="route('contacto')" variant="primary" size="md">
                    Quiero crear un sitio web
                </x-button>
            </div>

            <div class="lg:col-span-7 mt-12 lg:mt-0 reveal reveal-delay-200">
                <div
                    class="bg-surface-container-lowest border border-outline-variant/20 rounded-lg p-8 ambient-glow tech-node">
                    <div class="mb-12">
                        <h3
                            class="font-headline-sm text-headline-sm text-primary mb-6 border-b border-outline-variant/10 pb-4">
                            ¿Qué puedo crear?</h3>
                        <ul class="space-y-6">
                            <li class="flex items-start gap-4">
                                <div class="w-4 h-px bg-on-tertiary-container mt-3 shrink-0"></div>
                                <div>
                                    <h4 class="font-body-md text-body-md font-semibold text-primary">Landing Pages</h4>
                                    <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">Páginas de
                                        aterrizaje enfocadas en un único objetivo de conversión (ventas, leads,
                                        descargas).</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-4 h-px bg-on-tertiary-container mt-3 shrink-0"></div>
                                <div>
                                    <h4 class="font-body-md text-body-md font-semibold text-primary">Sitios Corporativos
                                    </h4>
                                    <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">
                                        Plataformas completas para presentar la identidad de tu empresa, servicios y
                                        equipo de manera profesional.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-4 h-px bg-on-tertiary-container mt-3 shrink-0"></div>
                                <div>
                                    <h4 class="font-body-md text-body-md font-semibold text-primary">Portafolios</h4>
                                    <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">Exhibición
                                        elegante y minimalista de tu trabajo profesional o proyectos creativos.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3
                            class="font-headline-sm text-headline-sm text-primary mb-6 border-b border-outline-variant/10 pb-4">
                            ¿Qué incluye?</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="bg-surface p-4 rounded border border-outline-variant/10">
                                <span class="material-symbols-outlined text-on-tertiary-container mb-2"
                                    style="font-variation-settings: 'FILL' 0, 'wght' 300;">design_services</span>
                                <h4 class="font-body-md text-body-md font-medium text-primary mb-1">Diseño UX/UI</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm">Interfaces claras,
                                    usables y centradas en el usuario.</p>
                            </div>
                            <div class="bg-surface p-4 rounded border border-outline-variant/10">
                                <span class="material-symbols-outlined text-on-tertiary-container mb-2"
                                    style="font-variation-settings: 'FILL' 0, 'wght' 300;">smartphone</span>
                                <h4 class="font-body-md text-body-md font-medium text-primary mb-1">Adaptación Móvil
                                </h4>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm">Diseño responsive
                                    que funciona en todos los dispositivos.</p>
                            </div>
                            <div class="bg-surface p-4 rounded border border-outline-variant/10">
                                <span class="material-symbols-outlined text-on-tertiary-container mb-2"
                                    style="font-variation-settings: 'FILL' 0, 'wght' 300;">speed</span>
                                <h4 class="font-body-md text-body-md font-medium text-primary mb-1">Optimización SEO
                                </h4>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm">Estructura técnica
                                    para mejorar posicionamiento en Google.</p>
                            </div>
                            <div class="bg-surface p-4 rounded border border-outline-variant/10">
                                <span class="material-symbols-outlined text-on-tertiary-container mb-2"
                                    style="font-variation-settings: 'FILL' 0, 'wght' 300;">security</span>
                                <h4 class="font-body-md text-body-md font-medium text-primary mb-1">Seguridad &
                                    Rendimiento</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm">Tiempos de carga
                                    rápidos y protección básica.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w-full h-px bg-outline-variant/10 max-w-container-max mx-auto my-6"></div>

    <!-- Automatización Section -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
            <div class="lg:col-span-6 sticky top-32 lg:order-2 reveal">
                <div class="flex items-center gap-3 mb-4">
                    <span class="material-symbols-outlined text-secondary text-3xl"
                        style="font-variation-settings: 'FILL' 0, 'wght' 300;">auto_mode</span>
                    <h2 class="font-headline-md text-headline-md text-primary">Automatización de procesos</h2>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant mb-8">
                    Elimina tareas repetitivas. Conecto tus herramientas existentes para que los datos fluyan sin
                    intervención humana, reduciendo errores y liberando tu tiempo.
                </p>
                <x-button :href="route('contacto')" variant="primary" size="md">
                    Quiero automatizar un proceso
                </x-button>
            </div>

            <div class="lg:col-span-6 lg:order-1 relative mt-12 lg:mt-0 reveal reveal-delay-200">
                <div
                    class="bg-surface-container-lowest border border-outline-variant/20 rounded-lg p-8 ambient-glow tech-node tech-grid mb-12">
                    <h3
                        class="font-headline-sm text-headline-sm text-primary mb-8 bg-surface-container-lowest inline-block px-2">
                        ¿Qué puedo automatizar?</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <div class="w-4 h-px bg-on-tertiary-container mt-3 shrink-0"></div>
                            <div>
                                <h4 class="font-body-md text-body-md font-semibold text-primary">Conversaciones en
                                    tiempo real</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">Chats en vivo,
                                    formularios interactivos y otras herramientas que permiten la comunicación inmediata
                                    con tus usuarios.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-4 h-px bg-on-tertiary-container mt-3 shrink-0"></div>
                            <div>
                                <h4 class="font-body-md text-body-md font-semibold text-primary">Reportes mensuales
                                </h4>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">Genera
                                    reportes mensuales automáticos que resumen la actividad y el rendimiento de tus
                                    plataformas y campañas.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-4 h-px bg-on-tertiary-container mt-3 shrink-0"></div>
                            <div>
                                <h4 class="font-body-md text-body-md font-semibold text-primary">Envio de mensajes
                                    masivos</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">Envía mensajes
                                    masivos a tus usuarios a través de diferentes canales, como correo electrónico y
                                    notificaciones push, de manera eficiente y segmentada.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="space-y-4 mt-12">
                        <h3
                            class="font-headline-sm text-headline-sm text-primary mb-6 border-b border-outline-variant/10 pb-4">
                            ¿Qué incluye?</h3>
                        <div class="bg-surface border border-outline-variant/10 p-5 flex items-start gap-4 rounded">
                            <span class="material-symbols-outlined text-on-tertiary-container mt-1">support_agent</span>
                            <div>
                                <h4 class="font-body-md text-body-md font-medium text-primary">Asesoría personalizada
                                </h4>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">Recibe
                                    asesoría personalizada para optimizar tus procesos y estrategias, adaptada a las
                                    necesidades específicas de tu negocio.</p>
                            </div>
                        </div>
                        <div class="bg-surface border border-outline-variant/10 p-5 flex items-start gap-4 rounded">
                            <span class="material-symbols-outlined text-on-tertiary-container mt-1">verified</span>
                            <div>
                                <h4 class="font-body-md text-body-md font-medium text-primary">Garantía de
                                    funcionamiento</h4>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">Garantizamos
                                    el correcto funcionamiento de nuestras soluciones, asegurando que tus procesos se
                                    ejecuten sin problemas y de manera eficiente.</p>
                            </div>
                        </div>
                        <div class="bg-surface border border-outline-variant/10 p-5 flex items-start gap-4 rounded">
                            <span class="material-symbols-outlined text-on-tertiary-container mt-1">support</span>
                            <div>
                                <h4 class="font-body-md text-body-md font-medium text-primary">Seguimiento post-venta
                                </h4>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm mt-1">Realiza un
                                    seguimiento efectivo de tus clientes después de la venta, asegurando su satisfacción
                                    y fomentando relaciones a largo plazo.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Identificar Oportunidades -->
    <section class="bg-surface-container-low py-32 mt-12">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="text-center max-w-2xl mx-auto mb-16 reveal">
                <h2 class="font-headline-md text-headline-md text-primary mb-4">¿Qué pasará con tu negocio?</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Según el problema exacto que enfrentes, tus procesos mejorarán.
                </p>
            </div>

            <div class="relative max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 relative z-10">
                    <!-- Manual State -->
                    <div
                        class="bg-red-100 border border-red-300/60 p-8 shadow-sm tech-node reveal reveal-delay-100 rounded-lg">
                        <div class="flex items-center gap-2 mb-6">
                            <span class="material-symbols-outlined text-red-500">cancel</span>
                            <h3 class="font-headline-sm text-headline-sm text-red-900">Estado Manual (Hoy)</h3>
                        </div>
                        <ul class="space-y-4 font-body-md text-body-md text-red-900/70">
                            <li class="flex items-center gap-3">
                                <span class="w-1.5 h-1.5 bg-red-400 rounded-full shrink-0"></span>
                                Copias y pegas datos entre Excel y otras apps.
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-1.5 h-1.5 bg-red-400 rounded-full shrink-0"></span>
                                Envías el mismo email de bienvenida a cada cliente.
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-1.5 h-1.5 bg-red-400 rounded-full shrink-0"></span>
                                Pierdes información por no centralizarla.
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-1.5 h-1.5 bg-red-400 rounded-full shrink-0"></span>
                                Tu web está desactualizada y no carga rápido.
                            </li>
                        </ul>
                    </div>

                    <!-- Automatic State -->
                    <div
                        class="bg-green-100 border border-green-400/60 ambient-glow tech-node reveal reveal-delay-200 rounded-lg p-8">
                        <div class="flex items-center gap-2 mb-6 ">
                            <span class="material-symbols-outlined text-green-600">check_circle</span>
                            <h3 class="font-headline-sm text-headline-sm text-green-900">Estado Optimizado</h3>
                        </div>
                        <ul class="space-y-4 font-body-md text-body-md text-green-900/80">
                            <li class="flex items-center gap-3">
                                <div class="w-4 h-px bg-green-600 shrink-0"></div>
                                Sistemas interconectados en tiempo real.
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-4 h-px bg-green-600 shrink-0"></div>
                                Comunicaciones automáticas y personalizadas.
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-4 h-px bg-green-600 shrink-0"></div>
                                Datos centralizados, seguros y accesibles.
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-4 h-px bg-green-600 shrink-0"></div>
                                Sitio web moderno que captura clientes 24/7.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop py-32 reveal">
        <h2 class="font-headline-md text-headline-md text-primary mb-12 text-center">Preguntas frecuentes</h2>
        <div class="space-y-4">
            <x-faq-item question="¿Cuánto tiempo toma desarrollar un sitio web?"
                answer="Depende de la complejidad. Una Landing Page puede estar lista en 1-2 semanas, mientras que un sitio corporativo completo suele tomar entre 4 y 6 semanas. Todo comienza con una fase de planificación donde definimos los tiempos exactos."
                state="open" />

            <x-faq-item question="¿La asesoría es gratuita?"
                answer="Sí, la asesoría inicial es gratuita. Durante esta fase, evaluamos tus necesidades y te proponemos la mejor solución antes de iniciar cualquier proyecto." />

            <x-faq-item question="¿Hay garantía del servicio?"
                answer="Sí, todos los servicios cuentan con garantía. Si surge algún problema dentro del período establecido, nos encargamos de solucionarlo sin costo adicional." />
        </div>
    </section>

    <!-- CTA Section -->
    <x-cta-banner />
</x-layout>