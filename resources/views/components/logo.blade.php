@props([
    'size' => 32,
    'variant' => 'light',
    'showDescriptor' => true,
])

@php
    $icon = $variant === 'dark'
        ? 'images/brand/mevzun-icon-dark-128.png'
        : 'images/brand/mevzun-icon-light-128.png';
    $brandText = $variant === 'dark' ? 'text-white' : 'text-[#172033]';
    $descriptorText = $variant === 'dark' ? 'text-[#a9b2ba]' : 'text-[#8791a0]';
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-2.5']) }}>
    <img src="{{ asset($icon) }}"
         alt=""
         width="{{ $size }}"
         height="{{ $size }}"
         aria-hidden="true"
         class="shrink-0 block"
         style="width: {{ $size }}px; height: {{ $size }}px;" />

    <span class="flex flex-col leading-none">
        <span class="text-[15px] font-semibold {{ $brandText }}">Mevzun</span>
        @if($showDescriptor)
            <span class="mt-1 text-[11px] font-normal {{ $descriptorText }}">Hukuk Çalışma Alanı</span>
        @endif
    </span>
</span>
