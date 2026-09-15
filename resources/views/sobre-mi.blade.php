<x-layout title="Sobre mí | TechFreelancer" active="sobre-mi">
    <!-- Hero Section -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-12 mb-section-gap">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
            <div class="md:col-span-7 lg:col-span-6 relative z-10 reveal">
                <div class="mb-6 inline-block">
                    <x-badge text="Perfil Profesional" />
                </div>
                
                <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-6 text-center md:text-left">
                    Hola, soy <br/><span class="text-secondary">Josue Q Alvarez</span>.
                </h1>
                
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-lg">
                    Llevo mas de 4 años en la industria, y estoy por culminar mis estudios de Ingenieria de Software. Apasionado por el emprendimiento y la creación de soluciones tecnológicas innovadoras.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <x-button :href="route('contacto')" variant="secondary" size="lg">
                        Hablemos de tu proyecto
                    </x-button>
                    <x-button :href="route('proyectos')" variant="outline" size="lg">
                        Ver proyectos
                    </x-button>
                </div>
            </div>

            <div class="md:col-span-5 lg:col-span-5 lg:col-start-8 mt-12 md:mt-0 relative reveal reveal-delay-200">
                <div class="absolute inset-0 bg-tech-grid opacity-50 -z-10 translate-x-4 translate-y-4 rounded-lg"></div>
                <div class="relative bg-surface-container-lowest border border-outline-variant/20 rounded-lg p-2 ambient-glow tech-node tech-node-tl tech-node-br">
                    <img loading="lazy" 
                         decoding="async"
                         class="lazy-img w-full h-auto aspect-3/4 object-cover rounded shadow-sm" 
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNyZ6qqSqa9ByrA4gjeZ-4blnVTGWIYYjQGqdLHRreUQ_kFV4fCZU1C7XC7_LBmuXtpBjtCmLosD_ytiOc2JGIW1B-VUJGjg4Rr-hDX4tM3BxBDPSWZAdltz6d5TOmFKLNvEuTzUJg19uXce60phrj9hsqVVWI0omePkN_voW4QOlHb59t8n06KqOHio0OLpFMkiMFEN5O64Gou5QaQ74AfyLbbynYfYICsf2PZj_oYsXuifDYDGdmbQ"
                         alt="Foto de perfil profesional"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Mi Enfoque Section -->
    <section class="bg-surface-container-low py-section-gap relative overflow-hidden">
        <div class="absolute inset-0 bg-tech-grid opacity-30 pointer-events-none"></div>
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter ">
                <div class="md:col-span-4 mb-10 md:mb-0 reveal
                text-primary sticky top-32">
                    <h2 class="font-headline-md text-headline-md text-primary mb-4">Mi forma de trabajar</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        La tecnología debe ser un facilitador, no un obstáculo. Mi enfoque se centra en la claridad estructural y la eficiencia.
                    </p>
                </div>
                <div class="md:col-span-7 md:col-start-6">
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Principle 1 -->
                        <div class="bg-surface-container-lowest p-8 border border-outline-variant/20 rounded-lg ambient-glow flex gap-6 items-start hover:border-on-tertiary-container/30 transition-colors reveal reveal-delay-100">
                            <div class="w-12 h-12 rounded bg-surface-variant flex items-center justify-center shrink-0 border border-outline-variant/30">
                                <span class="material-symbols-outlined text-secondary text-2xl">architecture</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Entender antes de construir</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">El código es la última etapa. Primero analizamos el problema real de tu negocio para diseñar la solución arquitectónica correcta.</p>
                            </div>
                        </div>

                        <!-- Principle 2 -->
                        <div class="bg-surface-container-lowest p-8 border border-outline-variant/20 rounded-lg ambient-glow flex gap-6 items-start hover:border-on-tertiary-container/30 transition-colors reveal reveal-delay-200">
                            <div class="w-12 h-12 rounded bg-surface-variant flex items-center justify-center shrink-0 border border-outline-variant/30">
                                <span class="material-symbols-outlined text-secondary text-2xl">chat</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Comunicación clara</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">Sin jerga técnica innecesaria. Mantengo un diálogo transparente sobre el progreso, los desafíos y las expectativas del proyecto.</p>
                            </div>
                        </div>

                        <!-- Principle 3 -->
                        <div class="bg-surface-container-lowest p-8 border border-outline-variant/20 rounded-lg ambient-glow flex gap-6 items-start hover:border-on-tertiary-container/30 transition-colors reveal reveal-delay-300">
                            <div class="w-12 h-12 rounded bg-surface-variant flex items-center justify-center shrink-0 border border-outline-variant/30">
                                <span class="material-symbols-outlined text-secondary text-2xl">build_circle</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-2">Soluciones útiles</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">Desarrollo herramientas pragmáticas y escalables que aportan valor tangible desde el primer día, evitando sobreingeniería.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores Section -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-section-gap">
        <div class="border-t border-outline-variant/20 pt-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                <div class="md:col-span-4 reveal">
                    <h2 class="font-headline-md text-headline-md text-primary sticky top-32">Lo que puedes esperar de mí</h2>
                </div>
                <div class="md:col-span-7 md:col-start-6">
                    <ul class="space-y-12">
                        <li class="relative pl-8 reveal reveal-delay-100">
                            <span class="absolute left-0 top-3 w-4 h-0.5 bg-on-tertiary-container"></span>
                            <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Comunicación directa</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">Hablo claro, evito rodeos y me aseguro de que siempre sepas en qué estado se encuentra tu proyecto.</p>
                        </li>
                        <li class="relative pl-8 reveal reveal-delay-200">
                            <span class="absolute left-0 top-3 w-4 h-0.5 bg-on-tertiary-container"></span>
                            <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Compromiso</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">Asumo la responsabilidad de las entregas y la calidad del código como si el negocio fuera mío.</p>
                        </li>
                        <li class="relative pl-8 reveal reveal-delay-300">
                            <span class="absolute left-0 top-3 w-4 h-0.5 bg-on-tertiary-container"></span>
                            <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Transparencia</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">Sin costes ocultos ni sorpresas técnicas. Documento procesos y decisiones arquitectónicas.</p>
                        </li>
                        <li class="relative pl-8 reveal reveal-delay-400">
                            <span class="absolute left-0 top-3 w-4 h-0.5 bg-on-tertiary-container"></span>
                            <h4 class="font-headline-sm text-headline-sm text-primary mb-2">Resultados</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">El objetivo final es siempre que la tecnología resuelva un problema real y mejore la eficiencia.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Tecnología Section -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-gap">
        <div class="text-center mb-16 max-w-2xl mx-auto reveal">
            <x-badge text="Stack Tecnológico (para programadores)" class="mb-4" />
            <h2 class="font-headline-md text-headline-md text-primary mb-8">Utilizo distintos lenguajes de programación para crear soluciones efectivas</h2>
            <p class="mb-10">
                Entre algunos de los principales, están:
            </p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 text-left" aria-label="Tecnologías con las que trabajo">
                @php
                    $technologies = [
                        ['name' => 'Python', 'slug' => 'python'],
                        ['name' => 'MySQL', 'slug' => 'mysql'],
                        ['name' => 'MongoDB', 'slug' => 'mongodb'],
                        ['name' => 'GitHub', 'slug' => 'github'],
                        ['name' => 'PHP', 'slug' => 'php'],
                        ['name' => 'Laravel', 'slug' => 'laravel'],
                        ['name' => 'HTML', 'slug' => 'html5'],
                        ['name' => 'CSS', 'slug' => 'css'],
                        ['name' => 'JavaScript', 'slug' => 'javascript'],
                        ['name' => 'React', 'slug' => 'react'],
                    ];
                @endphp
                @foreach($technologies as $index => $technology)
                    <div class="border border-outline-variant/20 p-5 rounded-lg bg-surface-container-lowest flex flex-col items-center justify-center gap-3 hover:border-secondary/50 hover:shadow-[0_10px_30px_-10px_rgba(37,99,235,0.1)] transition-all tech-node reveal reveal-delay-{{ ($index % 4 + 1) * 100 }}">
                        <img src="https://cdn.simpleicons.org/{{ $technology['slug'] }}/63d8ef" alt="Icono de {{ $technology['name'] }}" width="48" height="48" class="w-12 h-12 shrink-0 object-contain" loading="eager" decoding="async">
                        <span class="font-code-sm text-code-sm text-on-surface-variant font-medium text-center">{{ $technology['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <x-cta-banner />
</x-layout>
