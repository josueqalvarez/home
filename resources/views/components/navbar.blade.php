@props([
    'active' => 'inicio'
])

<nav class="bg-surface/80 backdrop-blur-md fixed top-0 w-full z-50 border-b border-outline-variant/10 shadow-[0_4px_20px_0_rgba(37,99,235,0.05)]">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex justify-between items-center h-20">
        <!-- Brand -->
        <a href="{{ route('inicio') }}" class="font-headline-sm text-headline-sm font-bold text-primary hover:opacity-80 transition-all duration-300">
            JOSUE Q. ALVAREZ
        </a>

        <!-- Desktop Navigation Links -->
        <div class="hidden md:flex space-x-8 items-center font-body-md text-body-md">
            <a href="{{ route('inicio') }}" 
               class="{{ $active === 'inicio' ? 'text-secondary font-semibold border-b-2 border-secondary pb-1' : 'text-on-surface-variant hover:text-primary' }} transition-all duration-300 active:scale-95">
                Inicio
            </a>
            <a href="{{ route('servicios') }}" 
               class="{{ $active === 'servicios' ? 'text-secondary font-semibold border-b-2 border-secondary pb-1' : 'text-on-surface-variant hover:text-primary' }} transition-all duration-300 active:scale-95">
                Servicios
            </a>
            <a href="{{ route('proyectos') }}" 
               class="{{ $active === 'proyectos' ? 'text-secondary font-semibold border-b-2 border-secondary pb-1' : 'text-on-surface-variant hover:text-primary' }} transition-all duration-300 active:scale-95">
                Proyectos
            </a>
            <a href="{{ route('sobre-mi') }}" 
               class="{{ $active === 'sobre-mi' ? 'text-secondary font-semibold border-b-2 border-secondary pb-1' : 'text-on-surface-variant hover:text-primary' }} transition-all duration-300 active:scale-95">
                Sobre mí
            </a>
        </div>

        <!-- Desktop CTA -->
        <div class="hidden md:block">
            <a href="{{ route('contacto') }}" 
               class="inline-flex items-center justify-center bg-secondary text-on-secondary px-6 py-3 rounded hover:bg-secondary-fixed-dim hover:shadow-[0_0_8px_rgba(99,216,239,0.5)] transition-all duration-300 font-medium active:scale-95 {{ $active === 'contacto' ? 'ring-2 ring-secondary ring-offset-2' : '' }}">
                Hablemos
            </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <button id="mobile-menu-btn" class="md:hidden text-primary p-2 focus:outline-none" aria-label="Abrir menú">
            <span class="material-symbols-outlined text-2xl">menu</span>
        </button>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden md:hidden bg-surface-container-lowest border-b border-outline-variant/20 px-6 py-6 shadow-xl">
        <div class="flex justify-between items-center mb-6 pb-4 border-b border-outline-variant/10">
            <span class="font-headline-sm text-lg font-bold text-primary">Menú</span>
            <button id="mobile-menu-close" class="text-on-surface-variant p-1">
                <span class="material-symbols-outlined text-xl">close</span>
            </button>
        </div>
        <div class="flex flex-col space-y-4 font-body-md text-body-md">
            <a href="{{ route('inicio') }}" 
               class="{{ $active === 'inicio' ? 'text-secondary font-semibold bg-surface-container-low px-3 py-2 rounded' : 'text-on-surface-variant hover:text-primary px-3 py-2' }}">
                Inicio
            </a>
            <a href="{{ route('servicios') }}" 
               class="{{ $active === 'servicios' ? 'text-secondary font-semibold bg-surface-container-low px-3 py-2 rounded' : 'text-on-surface-variant hover:text-primary px-3 py-2' }}">
                Servicios
            </a>
            <a href="{{ route('proyectos') }}" 
               class="{{ $active === 'proyectos' ? 'text-secondary font-semibold bg-surface-container-low px-3 py-2 rounded' : 'text-on-surface-variant hover:text-primary px-3 py-2' }}">
                Proyectos
            </a>
            <a href="{{ route('sobre-mi') }}" 
               class="{{ $active === 'sobre-mi' ? 'text-secondary font-semibold bg-surface-container-low px-3 py-2 rounded' : 'text-on-surface-variant hover:text-primary px-3 py-2' }}">
                Sobre mí
            </a>
            <a href="{{ route('contacto') }}" 
               class="inline-flex items-center justify-center bg-secondary text-on-secondary px-6 py-3 rounded hover:bg-secondary-fixed-dim font-medium text-center mt-2">
                Hablemos
            </a>
        </div>
    </div>
</nav>
