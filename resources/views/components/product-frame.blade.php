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

<div
    {{ $attributes->merge(['class' => "w-full overflow-hidden rounded-[4px] border $borderColor $bgColor select-none"]) }}
    style="aspect-ratio: {{ $ratio }};"
>
    @if($assetExists)
        <img
            src="{{ asset($src) }}"
            alt="{{ $alt }}"
            loading="{{ $priority ? 'eager' : 'lazy' }}"
            decoding="async"
            @if($priority) fetchpriority="high" @endif
            class="block h-full w-full object-contain object-center"
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
