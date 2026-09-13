@props([
    'type' => 'caps', // 'caps', 'pill', 'code'
    'text' => null,
    'class' => ''
])

@if($type === 'caps')
    <div {{ $attributes->merge(['class' => "inline-flex items-center space-x-2 {$class}"]) }}>
        <span class="w-8 h-px bg-on-tertiary-container"></span>
        <span class="font-label-caps text-label-caps text-on-tertiary-container tracking-widest uppercase">
            {{ $text ?? $slot }}
        </span>
    </div>
@elseif($type === 'pill')
    <span {{ $attributes->merge(['class' => "px-3 py-1 bg-surface-container-low border border-outline-variant/20 rounded text-code-sm font-code-sm text-primary {$class}"]) }}>
        {{ $text ?? $slot }}
    </span>
@else
    <span {{ $attributes->merge(['class' => "font-code-sm text-code-sm text-on-surface-variant {$class}"]) }}>
        {{ $text ?? $slot }}
    </span>
@endif
