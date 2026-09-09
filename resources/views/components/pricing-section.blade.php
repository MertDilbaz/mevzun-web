<section id="pricing" class="w-full bg-[#f7f8fa] py-24 lg:py-32 border-b border-[#e7e9ec]">
    <div class="mz-container" data-reveal>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-start">
            <div class="lg:col-span-4 flex flex-col items-start pr-0 lg:pr-4">
                <span class="text-[12px] font-semibold text-[#2674c8] uppercase tracking-[0.12em] mb-4 select-none">FİYATLANDIRMA</span>
                <h2 class="text-[30px] sm:text-[36px] font-semibold text-[#172033] tracking-[-0.02em] leading-[1.15] mb-4">Şeffaf, sade, tek paket.</h2>
                <p class="text-[16px] text-[#596579] font-normal leading-[1.6]">Tüm temel Mevzun özellikleri tek abonelik altında. Karmaşık paketler veya özellik kilitleri olmadan.</p>
            </div>

            <div class="lg:col-span-4 bg-white border border-[#dfe3e7] rounded-[4px] p-6 sm:p-8 flex flex-col items-start w-full">
                <span class="text-[14px] font-semibold text-[#2674c8] mb-2 tracking-tight">Mevzun Pro</span>
                <div class="flex items-baseline gap-1.5 mb-6">
                    <span class="text-[40px] sm:text-[44px] font-semibold text-[#172033] tracking-tight leading-none">₺1.500</span>
                    <span class="text-[16px] text-[#596579] font-normal">/ ay</span>
                </div>
                <div class="w-full h-[1px] bg-[#e7e9ec] mb-6"></div>
                <ul class="space-y-3 w-full text-[14px] sm:text-[15px] text-[#596579]">
                    <li class="flex items-center gap-3"><x-icon name="check" size="18" class="text-[#2674c8] shrink-0" /><span>UYAP dosya yönetimi</span></li>
                    <li class="flex items-center gap-3"><x-icon name="check" size="18" class="text-[#2674c8] shrink-0" /><span>Takvim, görev ve çalışma araçları</span></li>
                    <li class="flex items-center gap-3"><x-icon name="check" size="18" class="text-[#2674c8] shrink-0" /><span>Mevzun AI özellikleri</span></li>
                    <li class="flex items-center gap-3"><x-icon name="check" size="18" class="text-[#2674c8] shrink-0" /><span>Yerel Çalışma Alanı</span></li>
                </ul>
            </div>

            <div id="early-access" class="lg:col-span-4 flex flex-col items-start w-full scroll-mt-28 border-t border-[#dfe3e7] pt-8 lg:border-t-0 lg:border-l lg:pt-0 lg:pl-8 min-h-full">
                <span class="text-[12px] font-semibold text-[#2674c8] uppercase tracking-[0.12em] mb-2 select-none">ERKEN ERİŞİM</span>
                <h3 class="text-[20px] sm:text-[22px] font-semibold text-[#172033] tracking-tight leading-snug mb-3">Mevzun hazır olduğunda haberdar olun.</h3>
                <p class="text-[14px] sm:text-[15px] text-[#596579] font-normal leading-relaxed mb-6 max-w-[360px]">Erken erişim ve ürün duyuruları için e-posta adresinizi bırakın.</p>
                <livewire:early-access-form />
            </div>
        </div>
    </div>
</section>
