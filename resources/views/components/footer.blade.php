@props([
    'active' => ''
])

<footer class="bg-surface w-full py-16 border-t border-outline-variant/20">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
        <div class="md:col-span-6 mb-8 md:mb-0 ">
            <a href="{{ route('inicio') }}" class="font-headline-sm text-headline-sm font-bold text-primary block mb-3 hover:opacity-80 transition-opacity">
                TechFreelancer
            </a>
            <p class="font-body-md text-body-md text-on-surface-variant">
                © {{ date('Y') }} TechFreelancer. Sitios web y automatización para negocios.
            </p>
        </div>
        <div class="md:col-span-6 flex flex-col md:flex-row justify-end md:space-x-8 space-y-4 md:space-y-0">
            <a href="{{ route('inicio') }}" class="text-on-surface-variant hover:text-secondary transition-colors font-body-md text-body-md {{ $active === 'inicio' ? 'text-secondary font-medium' : '' }}">
                Inicio
            </a>
            <a href="{{ route('servicios') }}" class="text-on-surface-variant hover:text-secondary transition-colors font-body-md text-body-md {{ $active === 'servicios' ? 'text-secondary font-medium' : '' }}">
                Servicios
            </a>
            <a href="{{ route('proyectos') }}" class="text-on-surface-variant hover:text-secondary transition-colors font-body-md text-body-md {{ $active === 'proyectos' ? 'text-secondary font-medium' : '' }}">
                Proyectos
            </a>
            <a href="{{ route('sobre-mi') }}" class="text-on-surface-variant hover:text-secondary transition-colors font-body-md text-body-md {{ $active === 'sobre-mi' ? 'text-secondary font-medium' : '' }}">
                Sobre mí
            </a>
            <a href="{{ route('contacto') }}" class="text-on-surface-variant hover:text-secondary transition-colors font-body-md text-body-md {{ $active === 'contacto' ? 'text-secondary font-medium' : '' }}">
                Contacto
            </a>
        </div>
    </div>
</footer>
