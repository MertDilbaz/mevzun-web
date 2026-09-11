<section id="hero" class="w-full border-b border-[#252c31] bg-[#11171b] pt-12 pb-14 lg:pt-14 lg:pb-16">
    <div class="mx-auto max-w-[1280px] px-5 sm:px-8 lg:px-10" data-reveal>
        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12 lg:gap-10">
            {{-- Left: message --}}
            <div class="flex flex-col items-start lg:col-span-5">
                <h1 class="mb-7 max-w-[590px] text-[40px] font-semibold leading-[1.08] tracking-[-0.025em] text-[#f5f7f8] sm:text-[50px] lg:text-[60px]">
                    Hukuki çalışmalarınız için tek bir çalışma alanı.
                </h1>

                <p class="mb-12 max-w-[540px] text-[17px] font-normal leading-[1.62] text-[#a9b2ba] sm:text-[18px]">
                    UYAP dosyalarınızı yönetin, davalarınız üzerinde çalışın, takviminizi takip edin ve yapay zekâ desteğiyle tüm hukuki iş akışınızı bir araya getirin.
                </p>

                <div class="grid w-full grid-cols-2 gap-x-6 gap-y-5 border-t border-[#30383e] pt-7 text-[13px] font-medium text-[#a9b2ba] sm:grid-cols-4 lg:grid-cols-2 xl:grid-cols-4">
                    <div class="flex items-start gap-2.5">
                        <x-icon name="link" size="18" class="mt-0.5 text-[#83c4e3]" />
                        <span>UYAP<br class="hidden lg:block xl:hidden"> entegrasyonu</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <x-icon name="shield" size="18" class="mt-0.5 text-[#83c4e3]" />
                        <span>Güvenli<br class="hidden lg:block xl:hidden"> çalışma alanı</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <x-icon name="sparkle" size="18" class="mt-0.5 text-[#83c4e3]" />
                        <span>Yapay zekâ<br class="hidden lg:block xl:hidden"> desteği</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <x-icon name="desktop" size="18" class="mt-0.5 text-[#83c4e3]" />
                        <span>Masaüstü<br class="hidden lg:block xl:hidden"> uygulama</span>
                    </div>
                </div>
            </div>

            {{-- Right: editable animated ecosystem --}}
            <div class="flex w-full items-center justify-center lg:col-span-7">
                <x-hero-ecosystem />
            </div>
        </div>
    </div>
</section>
