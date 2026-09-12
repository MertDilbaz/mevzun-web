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
        'hero-ecosystem-card flex min-h-[78px] items-center gap-3 rounded-[4px] border border-[var(--border)] bg-[var(--bg-elevated)] px-4 py-3',
    ]) }}
    style="--hero-card-delay: {{ $delay }}; --hero-card-enter-x: {{ $enterX }}; --hero-card-enter-y: {{ $enterY }};"
>
    <div class="flex h-9 w-9 shrink-0 items-center justify-center text-[var(--accent)]" aria-hidden="true">
        <x-icon :name="$icon" size="24" />
    </div>

    <div class="min-w-0 flex-1">
        <h3 class="text-[13px] font-semibold leading-[1.22] text-[var(--text-primary)] sm:text-[13.5px]">
            {{ $title }}
        </h3>
        <p class="mt-1 text-[11px] font-normal leading-[1.42] text-[var(--text-secondary)] sm:text-[11.5px]">
            {{ $description }}
        </p>
    </div>

    <x-icon name="arrow-right" size="16" class="shrink-0 text-[var(--accent)] opacity-90" />
</article>
