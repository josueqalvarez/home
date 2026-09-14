@props([
    'question',
    'answer' => null
])

<div class="faq-item bg-surface-container-lowest border border-outline-variant/20 rounded">
    <button type="button" class="faq-toggle w-full flex cursor-pointer items-center justify-between gap-1.5 p-6 font-body-md text-body-md font-medium text-primary hover:text-secondary select-none" aria-expanded="{{ $attributes->get('state') === 'open' ? 'true' : 'false' }}">
        <span>{{ $question }}</span>
        <span class="faq-icon material-symbols-outlined shrink-0 transition-transform duration-300 text-on-tertiary-container">
            keyboard_arrow_down
        </span>
    </button>
    <div class="faq-panel grid grid-rows-[0fr] transition-[grid-template-rows] duration-500 ease-in-out {{ $attributes->get('state') === 'open' ? 'is-open' : '' }}">
        <div class="overflow-hidden">
            <div class="px-6 pb-6 border-t border-outline-variant/10 mt-2 pt-4">
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    {{ $answer ?? $slot }}
                </p>
            </div>
        </div>
    </div>
</div>
