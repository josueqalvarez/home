@props([
    'title',
    'icon' => 'web',
    'items' => [],
    'highlight' => false,
    'class' => ''
])

<div {{ $attributes->merge(['class' => "bg-white border border-outline-variant/20 rounded-lg p-8 md:p-12 relative h-auto min-h-fit ambient-glow group hover:-translate-y-2 hover:border-secondary/40 hover:shadow-[0_18px_40px_-18px_rgba(0,81,213,0.35)] transition-all duration-500 ease-out tech-node tech-node-br {$class} w-full"]) }}>
    <div class="tech-node-tr opacity-0 scale-0 group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 ease-out"></div>
    <div class="w-12 h-12 bg-surface-container-low rounded-full flex items-center justify-center mb-8 group-hover:bg-secondary/10 transition-all duration-500 ease-out">
        <span class="material-symbols-outlined text-primary group-hover:text-secondary group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 ease-out text-2xl">{{ $icon }}</span>
    </div>
    <h3 class="font-headline-sm text-headline-sm text-primary mb-6 ">{{ $title }}</h3>
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
