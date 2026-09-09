@props(['title', 'updatedAt' => '09.09.2026'])

<x-layouts.marketing :title="$title . ' — Mevzun'">
    <div class="w-full bg-white py-16 lg:py-24 border-b border-[#e7e9ec]">
        <div class="max-w-[760px] mx-auto px-5 sm:px-8">
            <span class="text-[12px] font-semibold text-[#2674c8] uppercase tracking-[0.12em] mb-3 block select-none">
                HUKUKİ BİLGİLENDİRME
            </span>
            <h1 class="text-[32px] sm:text-[40px] font-semibold text-[#172033] tracking-tight mb-3">
                {{ $title }}
            </h1>
            <p class="text-[13px] text-[#8791a0] mb-8 pb-6 border-b border-[#dfe3e7]">
                Son Güncelleme: {{ $updatedAt }}
            </p>

            <div class="prose prose-slate max-w-none text-[15px] leading-[1.7] text-[#596579] space-y-6">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layouts.marketing>
