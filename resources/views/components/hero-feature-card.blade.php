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
        'hero-ecosystem-card flex items-center gap-4 rounded-[4px] border border-[var(--border)] bg-[var(--bg-elevated)] px-5 py-4',
    ]) }}
    style="--hero-card-delay: {{ $delay }}; --hero-card-enter-x: {{ $enterX }}; --hero-card-enter-y: {{ $enterY }};"
>
    <div class="flex h-10 w-10 shrink-0 items-center justify-center text-[var(--accent)]" aria-hidden="true">
        <x-icon :name="$icon" size="28" />
    </div>

    <div class="min-w-0 flex-1">
        <h3 class="text-[14px] font-semibold leading-[1.25] text-[var(--text-primary)]">
            {{ $title }}
        </h3>
        <p class="mt-1.5 text-[12px] font-normal leading-[1.45] text-[var(--text-secondary)]">
            {{ $description }}
        </p>
    </div>

    <x-icon name="arrow-right" size="18" class="shrink-0 text-[var(--accent)]" />
</article>
