@props([
    'question',
    'answer' => null
])

<details class="group bg-surface-container-lowest border border-outline-variant/20 rounded [&_summary::-webkit-details-marker]:hidden transition-all duration-300">
    <summary class="flex cursor-pointer items-center justify-between gap-1.5 p-6 font-body-md text-body-md font-medium text-primary hover:text-secondary select-none">
        <span>{{ $question }}</span>
        <span class="material-symbols-outlined shrink-0 transition duration-300 group-open:-rotate-180 text-on-tertiary-container">
            keyboard_arrow_down
        </span>
    </summary>
    <div class="px-6 pb-6 border-t border-outline-variant/10 mt-2 pt-4">
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            {{ $answer ?? $slot }}
        </p>
    </div>
</details>
