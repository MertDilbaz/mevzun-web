@props([
    'src' => '',
    'alt' => '',
    'ratio' => '16/10',
    'dark' => false,
    'priority' => false,
])

@php
    $assetExists = !empty($src) && file_exists(public_path($src));
    $borderColor = $dark ? 'border-[#2b343b]' : 'border-[#dfe3e7]';
    $bgColor = $dark ? 'bg-[#171e23]' : 'bg-[#f7f8fa]';
    $textColor = $dark ? 'text-[#a9b2ba]' : 'text-[#8791a0]';
@endphp

<div {{ $attributes->merge(['class' => "w-full overflow-hidden rounded-[4px] border $borderColor $bgColor select-none"]) }}
     style="aspect-ratio: {{ $ratio }};">
    @if($assetExists)
        <img src="{{ asset($src) }}"
             alt="{{ $alt }}"
             loading="{{ $priority ? 'eager' : 'lazy' }}"
             decoding="{{ $priority ? 'sync' : 'async' }}"
             class="w-full h-full object-cover object-top block" />
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
