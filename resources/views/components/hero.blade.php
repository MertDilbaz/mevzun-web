<section id="hero" class="w-full bg-[var(--bg-app)]">
    <div class="px-5 sm:px-8 lg:px-10">
        <div class="mx-auto flex min-h-[calc(100svh-80px)] w-full max-w-[1440px] items-center py-10 sm:py-12 lg:py-10">
            <div class="grid w-full grid-cols-1 items-center gap-10 lg:grid-cols-[minmax(0,0.35fr)_minmax(0,0.65fr)] lg:gap-10 xl:gap-12">
                <div class="flex min-w-0 flex-col items-start">
                    <span
                        class="mb-3 select-none text-[12px] font-semibold uppercase tracking-[0.14em] text-[var(--accent)]"
                        data-reveal
                        data-reveal-delay="0"
                    >
                        AVUKATLAR İÇİN
                    </span>

                    <h1
                        class="mb-5 max-w-[540px] text-[34px] font-semibold leading-[1.08] tracking-[-0.035em] text-[var(--text-primary)] sm:text-[42px] lg:text-[38px] xl:text-[44px] 2xl:text-[48px]"
                        data-reveal
                        data-reveal-delay="45"
                    >
                        <span class="block">Hukuki çalışmalarınız için</span>
                        <span class="block">tek bir çalışma alanı.</span>
                    </h1>

                    <p
                        class="mb-7 max-w-[480px] text-[15px] font-normal leading-[1.6] text-[var(--text-secondary)] sm:text-[16px]"
                        data-reveal
                        data-reveal-delay="90"
                    >
                        UYAP dosyalarınızı yönetin, davalarınız üzerinde çalışın, takviminizi takip edin ve yapay zekâ desteğiyle tüm hukuki iş akışınızı bir araya getirin.
                    </p>

                    <a
                        href="#ai"
                        class="group mb-8 inline-flex h-[48px] items-center justify-center gap-2.5 rounded-[4px] border border-transparent bg-[var(--accent)] px-6 text-[15px] font-medium text-white transition-[background-color,transform] duration-150 ease-[cubic-bezier(0.2,0,0,1)] hover:-translate-y-px hover:bg-[var(--accent-hover)] active:translate-y-0 active:bg-[var(--accent-hover)]"
                        data-reveal
                        data-reveal-delay="135"
                    >
                        Mevzun'u keşfet
                        <x-icon name="arrow-right" size="16" class="transition-transform duration-150 group-hover:translate-x-1" />
                    </a>

                    <div
                        class="grid w-full grid-cols-2 gap-x-4 gap-y-3.5 border-t border-[var(--border-subtle)] pt-5 text-[12px] font-medium text-[var(--text-secondary)] sm:gap-x-6"
                        data-reveal
                        data-reveal-delay="180"
                    >
                        <div class="flex items-center gap-2 whitespace-nowrap">
                            <x-icon name="link" size="16" class="text-[var(--accent)]" />
                            <span>UYAP entegrasyonu</span>
                        </div>
                        <div class="flex items-center gap-2 whitespace-nowrap">
                            <x-icon name="ai" size="16" class="text-[var(--accent)]" />
                            <span>Yapay zekâ desteği</span>
                        </div>
                        <div class="flex items-center gap-2 whitespace-nowrap">
                            <x-icon name="shield" size="16" class="text-[var(--accent)]" />
                            <span>Güvenli çalışma alanı</span>
                        </div>
                        <div class="flex items-center gap-2 whitespace-nowrap">
                            <x-icon name="monitor" size="16" class="text-[var(--accent)]" />
                            <span>Masaüstü uygulama</span>
                        </div>
                    </div>
                </div>

                <div
                    class="flex min-w-0 w-full items-center justify-center lg:justify-end"
                    data-reveal
                    data-reveal-delay="95"
                >
                    <x-product-frame
                        src="images/product/home-light.webp"
                        light-src="images/product/home-light.webp"
                        dark-src="images/product/home-dark.webp"
                        alt="Mevzun masaüstü uygulamasında duruşmalar, görevler, son güncellenen dosyalar ve hızlı erişim alanlarının bulunduğu Ana Sayfa ekranı."
                        ratio="1914/1004"
                        :priority="true"
                        class="w-full max-w-none transition-[transform,border-color] duration-200 ease-[cubic-bezier(0.2,0,0,1)] hover:-translate-y-0.5 hover:border-[var(--accent)] dark:hover:border-[#3a454d]"
                    />
                </div>
            </div>
        </div>
    </div>
</section>
