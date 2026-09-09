@props([
    'src' => '',
    'mobileSrc' => null,
    'alt' => '',
    'ratio' => '16/10',
    'dark' => false,
    'priority' => false,
    'fit' => 'contain',
    'position' => 'top',
])

@php
    $assetExists = !empty($src) && file_exists(public_path($src));
    $mobileAssetExists = !empty($mobileSrc) && file_exists(public_path($mobileSrc));
    $borderColor = $dark ? 'border-[#2b343b]' : 'border-[#dfe3e7]';
    $bgColor = $dark ? 'bg-[#171e23]' : 'bg-[#f7f8fa]';
    $textColor = $dark ? 'text-[#a9b2ba]' : 'text-[#8791a0]';
    $fitClass = $fit === 'cover' ? 'object-cover' : 'object-contain';
    $positionClass = match ($position) {
        'center' => 'object-center',
        'bottom' => 'object-bottom',
        default => 'object-top',
    };
@endphp

<div {{ $attributes->merge(['class' => "w-full overflow-hidden rounded-[4px] border $borderColor $bgColor select-none"]) }}
     style="aspect-ratio: {{ $ratio }};">
    @if($assetExists)
        <picture class="block w-full h-full">
            @if($mobileAssetExists)
                <source media="(max-width: 767px)" srcset="{{ asset($mobileSrc) }}">
            @endif
            <img src="{{ asset($src) }}"
                 alt="{{ $alt }}"
                 loading="{{ $priority ? 'eager' : 'lazy' }}"
                 decoding="async"
                 @if($priority) fetchpriority="high" @endif
                 class="w-full h-full {{ $fitClass }} {{ $positionClass }} block" />
        </picture>
    @else
        <!-- LOCKED ADIM 13.16 Placeholder (Final ratio, no fake UI) -->
        <div class="w-full h-full flex flex-col items-center justify-center p-6 text-center {{ $textColor }}">
            <x-icon name="document" size="28" class="mb-3 opacity-40" />
            <span class="text-[13px] font-medium tracking-tight">
                {{ $alt ?: 'Ürün Arayüz Görseli' }}
            </span>
            @if($src)
                <span class="text-[11px] font-mono mt-1 opacity-60">
                    {{ $src }}
                </span>
            @endif
        </div>
    @endif
</div>
