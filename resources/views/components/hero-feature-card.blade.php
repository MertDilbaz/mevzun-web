@props([
    'icon',
    'title',
    'description',
    'delay' => '0ms',
    'enterX' => '0px',
    'enterY' => '16px',
])

<article
    {{ $attributes->class([
        'hero-ecosystem-card flex items-center gap-4 border border-[#2b343b] bg-[#171e23] px-5 py-4 rounded-[4px]',
    ]) }}
    style="--hero-card-delay: {{ $delay }}; --hero-card-enter-x: {{ $enterX }}; --hero-card-enter-y: {{ $enterY }};"
>
    <div class="flex h-10 w-10 shrink-0 items-center justify-center text-[#83c4e3]" aria-hidden="true">
        <x-icon :name="$icon" size="28" />
    </div>

    <div class="min-w-0 flex-1">
        <h3 class="text-[14px] font-semibold leading-[1.25] text-[#f5f7f8]">
            {{ $title }}
        </h3>
        <p class="mt-1.5 text-[12px] font-normal leading-[1.45] text-[#a9b2ba]">
            {{ $description }}
        </p>
    </div>

    <x-icon name="arrow-right" size="18" class="shrink-0 text-[#83c4e3]" />
</article>
