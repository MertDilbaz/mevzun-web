@props([
    'size' => 30,
    'variant' => 'light',
    'showDescriptor' => true,
])

@php
    $isDark = $variant === 'dark';
    $icon = $isDark
        ? 'images/brand/mevzun-icon-dark-128.png'
        : 'images/brand/mevzun-icon-light-128.png';

    $brandText = $isDark ? 'text-[#f5f7f8]' : 'text-[#172033]';
    $descriptorText = $isDark ? 'text-[#a9b2ba]' : 'text-[#8791a0]';
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-2.5 select-none']) }}>
    <img
        src="{{ asset($icon) }}"
        alt=""
        width="{{ $size }}"
        height="{{ $size }}"
        aria-hidden="true"
        class="block shrink-0"
        style="width: {{ $size }}px; height: {{ $size }}px;"
    />

    <span class="flex flex-col leading-none">
        <span class="text-[15px] font-semibold tracking-[-0.01em] {{ $brandText }}">Mevzun</span>
        @if ($showDescriptor)
            <span class="mt-[2px] text-[11px] font-normal {{ $descriptorText }}">Hukuk Çalışma Alanı</span>
        @endif
    </span>
</span>
