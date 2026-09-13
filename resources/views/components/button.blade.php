@props([
    'variant' => 'primary', // 'primary', 'secondary', 'outline', 'ghost'
    'href' => null,
    'type' => 'button',
    'icon' => null,
    'iconPosition' => 'right', // 'left', 'right'
    'size' => 'md', // 'sm', 'md', 'lg'
    'class' => ''
])

@php
    $baseStyles = "inline-flex items-center justify-center font-medium transition-all duration-300 active:scale-95 text-center";
    
    $sizeStyles = match($size) {
        'sm' => 'px-4 py-2 text-sm rounded',
        'lg' => 'px-8 py-4 text-body-lg rounded',
        default => 'px-6 py-3 font-body-md text-body-md rounded',
    };

    $variantStyles = match($variant) {
        'primary' => 'bg-[#2563EB] text-white hover:bg-[#1d4ed8] hover:shadow-[0_0_12px_rgba(0,144,169,0.4)]',
        'secondary' => 'bg-secondary text-on-secondary hover:bg-secondary-container hover:shadow-[0_0_14px_rgba(37,99,235,0.3)]',
        'outline' => 'bg-transparent border border-[#0B1220] text-[#0B1220] hover:bg-surface-container-low',
        'ghost' => 'text-[#2563EB] hover:text-[#1d4ed8] p-0 bg-transparent',
        default => 'bg-[#2563EB] text-white hover:bg-[#1d4ed8]',
    };

    $combinedClass = "{$baseStyles} {$sizeStyles} {$variantStyles} {$class}";
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $combinedClass]) }}>
        @if($icon && $iconPosition === 'left')
            <span class="material-symbols-outlined mr-2 text-sm">{{ $icon }}</span>
        @endif
        {{ $slot }}
        @if($icon && $iconPosition === 'right')
            <span class="material-symbols-outlined ml-2 text-sm">{{ $icon }}</span>
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $combinedClass]) }}>
        @if($icon && $iconPosition === 'left')
            <span class="material-symbols-outlined mr-2 text-sm">{{ $icon }}</span>
        @endif
        {{ $slot }}
        @if($icon && $iconPosition === 'right')
            <span class="material-symbols-outlined ml-2 text-sm">{{ $icon }}</span>
        @endif
    </button>
@endif
