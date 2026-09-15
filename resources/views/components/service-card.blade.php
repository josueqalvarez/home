@props([
    'title',
    'icon' => 'web',
    'items' => [],
    'highlight' => false,
    'background' => null,
    'class' => ''
])

<div {{ $attributes->merge(['class' => "bg-surface-container-lowest border border-outline-variant/20 rounded-lg p-8 md:p-12 relative overflow-hidden h-auto min-h-fit ambient-glow group hover:-translate-y-2 hover:border-secondary/40 hover:shadow-[0_18px_40px_-18px_rgba(99,216,239,0.35)] transition-all duration-500 ease-out tech-node tech-node-br {$class} w-full"]) }}>
    @if($background)
        <img src="{{ asset('media/' . rawurlencode($background)) }}" alt="" aria-hidden="true" class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-linear-to-r from-surface-container-lowest via-surface-container-lowest/90 to-surface-container-lowest/25"></div>
    @endif
    <div class="relative z-10">
    <div class="flex items-center gap-3">
    <div class="w-12 h-12 bg-surface-container-high/90 rounded-full flex items-center justify-center mb-8 group-hover:bg-surface-container-high transition-all duration-100 ease-out">
        <span class="material-symbols-outlined text-primary group-hover:text-secondary group-hover:scale-110 group-hover:rotate-3 transition-all duration-100 ease-out text-2xl">{{ $icon }}</span>
    </div>
    <h3 class="font-headline-sm text-headline-sm text-primary mb-6 ">{{ $title }}</h3>
    </div>
    @if(count($items) > 0)
        <ul class="space-y-4">
            @foreach($items as $item)
                <li class="flex items-center text-on-surface-variant font-body-md text-body-md">
                    <span class="w-4 h-px bg-on-tertiary-container mr-4 shrink-0"></span>
                    <span>{{ $item }}</span>
                </li>
            @endforeach
        </ul>
    @else
        {{ $slot }}
    @endif
    </div>
</div>
