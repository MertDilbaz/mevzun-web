@props([
    'src' => '',
    'lightSrc' => null,
    'darkSrc' => null,
    'alt' => '',
    'ratio' => '16/10',
    'dark' => false,
    'priority' => false,
])

@php
    $effectiveLight = $lightSrc ?? $attributes->get('light-src') ?? (!$dark && $src ? $src : null);
    $effectiveDark = $darkSrc ?? $attributes->get('dark-src') ?? ($dark ? $src : null);

    // If both dark and light sources are resolved, enable dual theme
    $isDualTheme = !empty($effectiveDark) && !empty($effectiveLight);

    $darkExists = !empty($effectiveDark) && file_exists(public_path($effectiveDark));
    $lightExists = !empty($effectiveLight) && file_exists(public_path($effectiveLight));
    $singleExists = !empty($src) && file_exists(public_path($src));

    if ($isDualTheme) {
        $borderColor = 'border-[var(--border)] dark:border-[#2b343b]';
        $bgColor = 'bg-[var(--bg-subtle)] dark:bg-[#171e23]';
        $textColor = 'text-[var(--text-muted)] dark:text-[#a9b2ba]';
    } else {
        $borderColor = $dark ? 'border-[#2b343b]' : 'border-[var(--border)]';
        $bgColor = $dark ? 'bg-[#171e23]' : 'bg-[var(--bg-subtle)]';
        $textColor = $dark ? 'text-[#a9b2ba]' : 'text-[var(--text-muted)]';
    }
@endphp

<div
    {{ $attributes->merge(['class' => "w-full overflow-hidden rounded-[4px] border $borderColor $bgColor select-none"]) }}
    style="aspect-ratio: {{ $ratio }};"
>
    @if($isDualTheme && ($darkExists || $lightExists))
        @if($lightExists)
            <img
                src="{{ asset($effectiveLight) }}"
                alt="{{ $alt }}"
                loading="{{ $priority ? 'eager' : 'lazy' }}"
                decoding="async"
                @if($priority) fetchpriority="high" @endif
                class="block dark:hidden h-full w-full object-cover object-center"
            />
        @endif
        @if($darkExists)
            <img
                src="{{ asset($effectiveDark) }}"
                alt="{{ $alt }}"
                loading="{{ $priority ? 'eager' : 'lazy' }}"
                decoding="async"
                @if($priority) fetchpriority="high" @endif
                class="hidden dark:block h-full w-full object-cover object-center"
            />
        @endif
    @elseif($singleExists)
        <img
            src="{{ asset($src) }}"
            alt="{{ $alt }}"
            loading="{{ $priority ? 'eager' : 'lazy' }}"
            decoding="async"
            @if($priority) fetchpriority="high" @endif
            class="block h-full w-full object-cover object-center"
        />
    @else
        <div class="flex h-full w-full flex-col items-center justify-center p-6 text-center {{ $textColor }}">
            <x-icon name="document" size="28" class="mb-3 opacity-40" />
            <span class="max-w-[520px] text-[13px] font-medium tracking-tight">
                {{ $alt ?: 'Ürün arayüz görseli' }}
            </span>
            @if($src)
                <span class="mt-1 text-[11px] font-mono opacity-55">
                    {{ $src }}
                </span>
            @endif
        </div>
    @endif
</div>
