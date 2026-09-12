@props([
    'size' => null,
    'height' => 34,
    'variant' => 'auto',
    'alt' => 'Mevzun',
])

@php
    $h = (int) ($size ?? $height);
    // Aspect ratio: 759 / 302 ≈ 2.5132
    $w = (int) round($h * (759 / 302));
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center select-none']) }}>
    @if ($variant === 'dark')
        <img
            src="/images/brand/mevzun-logo-dark.png"
            alt="{{ $alt }}"
            width="{{ $w }}"
            height="{{ $h }}"
            class="block shrink-0 object-contain"
            style="height: {{ $h }}px; width: {{ $w }}px; aspect-ratio: 759 / 302;"
        />
    @elseif ($variant === 'light')
        <img
            src="/images/brand/mevzun-logo-light.png"
            alt="{{ $alt }}"
            width="{{ $w }}"
            height="{{ $h }}"
            class="block shrink-0 object-contain"
            style="height: {{ $h }}px; width: {{ $w }}px; aspect-ratio: 759 / 302;"
        />
    @else
        <img
            src="/images/brand/mevzun-logo-light.png"
            alt="{{ $alt }}"
            width="{{ $w }}"
            height="{{ $h }}"
            class="block dark:hidden shrink-0 object-contain"
            style="height: {{ $h }}px; width: {{ $w }}px; aspect-ratio: 759 / 302;"
        />
        <img
            src="/images/brand/mevzun-logo-dark.png"
            alt="{{ $alt }}"
            width="{{ $w }}"
            height="{{ $h }}"
            class="hidden dark:block shrink-0 object-contain"
            style="height: {{ $h }}px; width: {{ $w }}px; aspect-ratio: 759 / 302;"
        />
    @endif
</span>
