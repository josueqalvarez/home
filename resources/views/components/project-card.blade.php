@props([
    'number' => '01',
    'category' => 'Aplicación Web',
    'title',
    'description',
    'technologies' => [],
    'image',
    'video' => null,
    'imageAlt' => 'Vista previa del proyecto',
    'link' => '#',
    'linkText' => 'Ver proyecto',
    'reversed' => false
])

<div {{ $attributes->merge(['class' => 'group relative bg-surface-container-lowest border border-primary-container/10 rounded-lg p-1 hover:border-on-tertiary-container/30 transition-all duration-300 shadow-sm hover:shadow-md']) }}>
    @if(!$reversed)
        <div class="node node-tl"></div>
        <div class="node node-br"></div>
    @else
        <div class="node node-tr"></div>
        <div class="node node-bl"></div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-12 gap-0 overflow-hidden rounded">
        <!-- Image Column -->
        <div class="md:col-span-7 bg-surface-container h-64 md:h-auto min-h-75 relative overflow-hidden {{ $reversed ? 'order-1 md:order-2' : '' }}">
            @if($video)
                  <video autoplay muted loop playsinline preload="auto" aria-hidden="true" tabindex="-1"
                       class="w-full h-full object-cover transition-transform duration-700 blur-[3px]"
                      role="presentation">
                    <source src="{{ $video }}" type="video/mp4">
                </video>
            @else
                <img loading="lazy"
                     decoding="async"
                     src="{{ $image }}"
                     alt="{{ $imageAlt }}"
                     class="lazy-img w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            @endif
            <div class="absolute inset-0 bg-primary/5 group-hover:bg-transparent transition-colors duration-700 pointer-events-none"></div>
        </div>

        <!-- Content Column -->
        <div class="md:col-span-5 p-8 md:p-12 flex flex-col justify-center bg-surface-container-lowest {{ $reversed ? 'border-r border-primary-container/5 order-2 md:order-1' : 'border-l border-primary-container/5' }} relative">
            <div class="absolute top-8 {{ $reversed ? 'left-8' : 'right-8' }} text-on-tertiary-container font-code-sm text-code-sm">
                {{ $number }}
            </div>
            
            <span class="font-label-caps text-label-caps text-on-tertiary-container mb-4 block tracking-widest uppercase {{ $reversed ? 'mt-8 md:mt-0' : '' }}">
                {{ $category }}
            </span>
            
            <h3 class="font-headline-md text-headline-md text-primary mb-4">{{ $title }}</h3>
            
            <p class="font-body-md text-body-md text-on-surface-variant mb-8">
                {{ $description }}
            </p>
            
            @if(count($technologies) > 0)
                <div class="mb-8">
                    <h4 class="font-label-caps text-label-caps text-on-surface-variant mb-3 uppercase tracking-widest">Tecnologías</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach($technologies as $tech)
                            <x-badge type="pill" :text="$tech" />
                        @endforeach
                    </div>
                </div>
            @endif

            <a href="{{ $link }}" class="inline-flex items-center text-secondary font-label-caps text-label-caps hover:translate-x-2 transition-transform uppercase tracking-widest font-semibold group/link">
                {{ $linkText }}
                <span class="material-symbols-outlined ml-2 text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>
    </div>
</div>
