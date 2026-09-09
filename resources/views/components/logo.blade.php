@props(['size' => '30'])

<div class="flex items-center gap-2.5 select-none">
    <div class="w-[{{ $size }}px] h-[{{ $size }}px] bg-[#2674c8] rounded-[4px] flex items-center justify-center shrink-0 text-white font-semibold text-base tracking-tight">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 19V5l8 7 8-7v14" />
        </svg>
    </div>
    <div class="flex flex-col leading-none">
        <span class="text-[15px] font-semibold tracking-[-0.01em] text-[#172033]">Mevzun</span>
        <span class="text-[11px] font-normal text-[#8791a0] mt-[2px]">Hukuk Çalışma Alanı</span>
    </div>
</div>
