@props([
    'title',
    'icon' => 'web',
    'items' => [],
    'highlight' => false,
    'class' => ''
])

<div {{ $attributes->merge(['class' => "bg-white border border-outline-variant/20 rounded-lg p-8 md:p-12 relative ambient-glow group hover:border-primary/20 transition-all duration-300 tech-node tech-node-br {$class}"]) }}>
    <div class="tech-node-tr opacity-0 group-hover:opacity-100 transition-opacity"></div>
    <div class="w-12 h-12 bg-surface-container-low rounded-full flex items-center justify-center mb-8 group-hover:bg-secondary/10 transition-colors">
        <span class="material-symbols-outlined text-primary group-hover:text-secondary transition-colors text-2xl">{{ $icon }}</span>
    </div>
    <h3 class="font-headline-sm text-headline-sm text-primary mb-6">{{ $title }}</h3>
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
