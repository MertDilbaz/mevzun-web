<section id="pricing" class="w-full border-b border-[#e7e9ec] bg-[#f7f8fa] py-16 lg:py-20">
    <div class="mx-auto max-w-[1360px] px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 items-stretch gap-8 lg:grid-cols-12 lg:gap-8">
            <div class="flex flex-col items-start justify-center lg:col-span-4 lg:pr-5" data-reveal>
                <span class="mb-4 select-none text-[12px] font-semibold uppercase tracking-[0.14em] text-[#2674c8]">
                    FİYATLANDIRMA
                </span>

                <h2 class="mb-4 text-[32px] font-semibold leading-[1.12] tracking-[-0.025em] text-[#172033] sm:text-[38px]">
                    Şeffaf, sade, tek paket.
                </h2>

                <p class="max-w-[430px] text-[15px] leading-[1.65] text-[#596579] sm:text-[16px]">
                    Tüm temel Mevzun özellikleri tek plan altında. Karmaşık paketler ve gereksiz özellik katmanları olmadan.
                </p>
            </div>

            <div
                class="flex w-full flex-col rounded-[4px] border border-[#dfe3e7] bg-white p-6 transition-[border-color,transform] duration-200 ease-[cubic-bezier(0.2,0,0,1)] hover:-translate-y-px hover:border-[#b9c7d5] sm:p-7 lg:col-span-4"
                data-reveal
                data-reveal-delay="55"
            >
                <div class="mb-5 flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-[17px] font-semibold tracking-[-0.015em] text-[#172033]">Mevzun Pro</h3>
                        <p class="mt-1 text-[12px] text-[#8791a0]">Tüm temel özellikler dahil</p>
                    </div>
                </div>

                <div class="mb-5 flex items-end gap-2">
                    <span class="text-[42px] font-semibold leading-none tracking-[-0.035em] text-[#172033]">
                        {{ config('marketing.pricing.monthly', '₺1.500') }}
                    </span>
                    <span class="pb-1 text-[15px] text-[#596579]">/ ay</span>
                </div>

                <div class="mb-5 h-px w-full bg-[#e7e9ec]"></div>

                <ul class="mb-6 grid gap-2.5 text-[14px] text-[#596579]">
                    @foreach ([
                        'UYAP dosya yönetimi',
                        'Takvim ve çalışma araçları',
                        'Yapay zekâ özellikleri',
                        'Yerel Çalışma Alanı',
                    ] as $feature)
                        <li class="flex items-center gap-2.5">
                            <x-icon name="check" size="18" class="text-[#2674c8]" />
                            <span>{{ $feature }}</span>
                        </li>
                    @endforeach
                </ul>

                <a
                    href="#early-access"
                    class="group mt-auto inline-flex h-11 w-full items-center justify-center gap-2 rounded-[4px] bg-[#2674c8] px-5 text-[14px] font-medium text-white transition-[background-color,transform] duration-150 hover:-translate-y-px hover:bg-[#1f66b5] active:translate-y-0 active:bg-[#19579b]"
                >
                    Mevzun'u deneyin
                    <x-icon name="arrow-right" size="16" class="transition-transform duration-150 group-hover:translate-x-0.5" />
                </a>
            </div>

            <div
                id="early-access"
                class="flex w-full scroll-mt-28 flex-col rounded-[4px] border border-[#dfe3e7] bg-white p-6 transition-[border-color] duration-200 hover:border-[#c8d1da] sm:p-7 lg:col-span-4"
                data-reveal
                data-reveal-delay="110"
            >
                <span class="mb-3 select-none text-[12px] font-semibold uppercase tracking-[0.14em] text-[#2674c8]">
                    ERKEN ERİŞİM
                </span>

                <h3 class="mb-3 max-w-[330px] text-[22px] font-semibold leading-[1.15] tracking-[-0.02em] text-[#172033]">
                    Mevzun hazır olduğunda haber alın.
                </h3>

                <p class="mb-6 max-w-[360px] text-[14px] leading-[1.6] text-[#596579] sm:text-[15px]">
                    Erken erişim ve ürün duyuruları için e-posta adresinizi bırakın.
                </p>

                <div class="mt-auto w-full">
                    <livewire:early-access-form />
                </div>
            </div>
        </div>
    </div>
</section>
