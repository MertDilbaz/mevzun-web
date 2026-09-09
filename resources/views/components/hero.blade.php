<section id="hero" class="w-full bg-white pt-12 pb-16 lg:pt-20 lg:pb-28">
    <div class="max-w-[1280px] mx-auto px-5 sm:px-8 lg:px-10" data-reveal>
        <!-- Split Hero Grid: 5 col text / 7 col product visual (LOCKED §4.2) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-10 items-center">
            
            <!-- Left: Content (5 cols) -->
            <div class="lg:col-span-5 flex flex-col items-start">
                
                <!-- Eyebrow (LOCKED §4.6) -->
                <span class="text-[12px] font-semibold text-[#2674c8] uppercase tracking-[0.12em] mb-4 select-none">
                    AVUKATLAR İÇİN
                </span>

                <!-- H1 (LOCKED §4.7) -->
                <h1 class="text-[36px] sm:text-[46px] lg:text-[56px] font-semibold text-[#172033] tracking-[-0.02em] leading-[1.08] mb-6 max-w-[560px]">
                    Hukuki çalışmalarınız için tek bir çalışma alanı.
                </h1>

                <!-- Body copy (LOCKED §4.8) -->
                <p class="text-[17px] sm:text-[18px] text-[#596579] font-normal leading-[1.6] mb-8 max-w-[520px]">
                    UYAP dosyalarınızı yönetin, davalarınız üzerinde çalışın, takviminizi takip edin ve yapay zekâ desteğiyle hukuki işlerinizi hızlandırın.
                </p>

                <!-- CTA Row (LOCKED §4.9) -->
                <div class="flex flex-wrap items-center gap-4 mb-10 w-full sm:w-auto">
                    <a href="#product" 
                       class="inline-flex items-center justify-center h-[48px] px-6 rounded-[4px] bg-[#2674c8] hover:bg-[#1f66b5] active:bg-[#19579b] text-white text-[15px] font-medium border border-transparent transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-[#2674c8] focus-visible:outline-offset-2">
                        Mevzun'u keşfet
                    </a>
                    <a href="#uyap" 
                       class="inline-flex items-center justify-center h-[48px] px-6 rounded-[4px] bg-transparent hover:bg-[#f7f8fa] text-[#172033] text-[15px] font-medium border border-[#dfe3e7] hover:border-[#cdd2d8] transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-[#2674c8] focus-visible:outline-offset-2">
                        Nasıl çalışır?
                    </a>
                </div>

                <!-- Mini feature strip (LOCKED §4.10: flat, no cards) -->
                <div class="pt-6 border-t border-[#e7e9ec] w-full grid grid-cols-2 sm:flex sm:flex-wrap items-center gap-x-6 gap-y-3 text-[13px] font-medium text-[#596579]">
                    <div class="flex items-center gap-2">
                        <x-icon name="link" size="16" class="text-[#2674c8]" />
                        <span>UYAP Entegrasyonu</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-icon name="ai" size="16" class="text-[#2674c8]" />
                        <span>Yapay Zekâ Desteği</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-icon name="shield" size="16" class="text-[#2674c8]" />
                        <span>Güvenli ve Yerel</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-icon name="folder" size="16" class="text-[#2674c8]" />
                        <span>Masaüstü Uygulama</span>
                    </div>
                </div>

            </div>

            <!-- Right: Product Visual (7 cols) (LOCKED §4.11 – §4.13) -->
            <div class="lg:col-span-7 flex items-center justify-center w-full">
                <x-product-frame 
                    src="images/product/home-dark.webp"
                    alt="Mevzun masaüstü uygulamasında davalar, duruşmalar, görevler ve hızlı erişim panellerinin yer aldığı ana çalışma ekranı."
                    ratio="16/10"
                    :dark="true"
                    :priority="true"
                    class="w-full max-w-[780px] hover:-translate-y-0.5 transition-transform duration-200 ease-[cubic-bezier(0.2,0,0,1)]" />
            </div>

        </div>
    </div>
</section>
