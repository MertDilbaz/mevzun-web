<section id="hero" class="flex w-full items-center bg-white py-14 lg:min-h-[calc(100svh-72px)] lg:py-16">
    <div class="mx-auto w-full max-w-[1360px] px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12 lg:gap-12 xl:gap-16">
            <div class="flex flex-col items-start lg:col-span-5">
                <span
                    class="mb-4 select-none text-[12px] font-semibold uppercase tracking-[0.14em] text-[#2674c8]"
                    data-reveal
                    data-reveal-delay="0"
                >
                    AVUKATLAR İÇİN
                </span>

                <h1
                    class="mb-6 max-w-[580px] text-[38px] font-semibold leading-[1.06] tracking-[-0.035em] text-[#172033] sm:text-[48px] lg:text-[58px] xl:text-[62px]"
                    data-reveal
                    data-reveal-delay="45"
                >
                    Hukuki çalışmalarınız için tek bir çalışma alanı.
                </h1>

                <p
                    class="mb-8 max-w-[540px] text-[17px] font-normal leading-[1.62] text-[#596579] sm:text-[18px]"
                    data-reveal
                    data-reveal-delay="90"
                >
                    UYAP dosyalarınızı yönetin, davalarınız üzerinde çalışın, takviminizi takip edin ve yapay zekâ desteğiyle tüm hukuki iş akışınızı bir araya getirin.
                </p>

                <a
                    href="#ai"
                    class="group mb-10 inline-flex h-12 items-center justify-center gap-2.5 rounded-[4px] border border-transparent bg-[#2674c8] px-6 text-[15px] font-medium text-white transition-[background-color,transform] duration-150 ease-[cubic-bezier(0.2,0,0,1)] hover:-translate-y-px hover:bg-[#1f66b5] active:translate-y-0 active:bg-[#19579b]"
                    data-reveal
                    data-reveal-delay="135"
                >
                    Mevzun'u keşfet
                    <x-icon name="arrow-right" size="16" class="transition-transform duration-150 group-hover:translate-x-0.5" />
                </a>

                <div
                    class="grid w-full grid-cols-2 gap-x-5 gap-y-4 border-t border-[#e7e9ec] pt-6 text-[12px] font-medium text-[#596579] sm:flex sm:flex-wrap sm:items-center sm:gap-x-6"
                    data-reveal
                    data-reveal-delay="180"
                >
                    <div class="flex items-center gap-2">
                        <x-icon name="link" size="16" class="text-[#2674c8]" />
                        <span>UYAP entegrasyonu</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-icon name="ai" size="16" class="text-[#2674c8]" />
                        <span>Yapay zekâ desteği</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-icon name="shield" size="16" class="text-[#2674c8]" />
                        <span>Güvenli çalışma alanı</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-icon name="monitor" size="16" class="text-[#2674c8]" />
                        <span>Masaüstü uygulama</span>
                    </div>
                </div>
            </div>

            <div
                class="flex w-full items-center justify-center lg:col-span-7"
                data-reveal
                data-reveal-delay="95"
            >
                <x-product-frame
                    src="images/product/home-dark.webp"
                    alt="Mevzun masaüstü uygulamasında duruşmalar, görevler, son güncellenen dosyalar ve hızlı erişim alanlarının bulunduğu Ana Sayfa ekranı."
                    ratio="16/10"
                    :dark="true"
                    :priority="true"
                    class="w-full max-w-[820px] transition-[transform,border-color] duration-200 ease-[cubic-bezier(0.2,0,0,1)] hover:-translate-y-0.5 hover:border-[#3a454d]"
                />
            </div>
        </div>
    </div>
</section>
