@props([
    'title' => '¿Buscas asesoría?',
    'description' => 'Si buscas enfrentar un problema específico en tu negocio',
    'buttonText' => 'Hablemos',
    'buttonLink' => null,
    'class' => ''
])

@php
    $targetLink = $buttonLink ?? route('contacto');
@endphp

<section {{ $attributes->merge(['class' => "max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop my-20 reveal {$class}"]) }}>
    <div class="bg-surface-container-high rounded-xl p-12 md:p-20 text-center relative overflow-hidden border border-outline-variant/10 shadow-sm">
        <div class="absolute inset-0 tech-grid opacity-30 pointer-events-none"></div>
        <div class="relative z-10 max-w-2xl mx-auto">
            <h2 class="font-headline-md text-headline-md text-primary mb-6">{{ $title }}</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-10">
                {{ $description }}
            </p>
            <x-button :href="$targetLink" variant="secondary" size="lg" icon="arrow_forward" iconPosition="right">
                {{ $buttonText }}
            </x-button>
        </div>
    </div>
</section>
