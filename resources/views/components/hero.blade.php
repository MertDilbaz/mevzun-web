<section id="hero" class="w-full bg-[var(--bg-app)]">
    <div class="px-5 sm:px-8 lg:px-10">
        <div class="mx-auto flex min-h-[calc(100svh-80px)] w-full max-w-[1440px] items-center py-10 sm:py-12 lg:py-10">
            <div class="grid w-full grid-cols-1 items-center gap-10 lg:grid-cols-12 lg:gap-10 xl:gap-12">
                <div class="flex min-w-0 flex-col items-start lg:col-span-5">
                    <h1
                        class="mb-5 max-w-[600px] text-[34px] font-semibold leading-[1.08] tracking-[-0.035em] text-[var(--text-primary)] sm:text-[42px] lg:text-[48px] xl:text-[54px] 2xl:text-[58px]"
                        data-reveal
                        data-reveal-delay="0"
                    >
                        Hukuki çalışmalarınız için tek bir çalışma alanı.
                    </h1>

                    <p
                        class="mb-8 max-w-[540px] text-[15px] font-normal leading-[1.6] text-[var(--text-secondary)] sm:text-[16px] lg:text-[17px]"
                        data-reveal
                        data-reveal-delay="45"
                    >
                        UYAP dosyalarınızı yönetin, davalarınız üzerinde çalışın, takviminizi takip edin ve yapay zekâ desteğiyle tüm hukuki iş akışınızı bir araya getirin.
                    </p>

                    <div
                        class="grid w-full grid-cols-2 gap-x-4 gap-y-3.5 border-t border-[var(--border-subtle)] pt-5 text-[12px] font-medium text-[var(--text-secondary)] sm:gap-x-6 xl:grid-cols-4"
                        data-reveal
                        data-reveal-delay="90"
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
                    class="flex min-w-0 w-full items-center justify-center lg:col-span-7 lg:justify-end"
                    data-reveal
                    data-reveal-delay="70"
                >
                    <x-hero-ecosystem />
                </div>
            </div>
        </div>
    </div>
</section>
