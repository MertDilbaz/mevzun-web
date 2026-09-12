<section id="ai" class="w-full bg-[#11171b] py-20 text-[#f5f7f8] lg:py-28">
    <div class="mx-auto max-w-[1360px] px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12 lg:gap-12 xl:gap-16">
            <div class="flex flex-col items-start lg:col-span-5">
                <span
                    class="mb-4 select-none text-[12px] font-semibold uppercase tracking-[0.14em] text-[#4b9ff2]"
                    data-reveal
                >
                    02 / YAPAY ZEKÂ
                </span>

                <h2
                    class="mb-5 max-w-[520px] text-[34px] font-semibold leading-[1.1] tracking-[-0.025em] text-[#f5f7f8] sm:text-[42px] lg:text-[48px]"
                    data-reveal
                    data-reveal-delay="45"
                >
                    Yapay zekâ, dava bağlamını anlar.
                </h2>

                <p
                    class="mb-7 max-w-[500px] text-[16px] leading-[1.65] text-[#a9b2ba] sm:text-[17px]"
                    data-reveal
                    data-reveal-delay="90"
                >
                    Dosyanızı analiz edin, önemli noktaları görün, emsal araştırın ve hukuki taslaklar oluşturun. Mevzun’un yapay zekâ katmanı, üzerinde çalıştığınız dosyanın bağlamıyla birlikte çalışır.
                </p>

                <ul class="mb-8 space-y-3.5 text-[14px] text-[#c1c8ce] sm:text-[15px]">
                    @foreach ([
                        'Dava özeti ve Case Brief',
                        'Emsal karar ve hukuki araştırma',
                        'Taslak dilekçe ve çalışma metni',
                        'Kaynaklarla birlikte inceleme',
                    ] as $index => $feature)
                        <li
                            class="flex items-center gap-3"
                            data-reveal
                            data-reveal-delay="{{ 125 + ($index * 45) }}"
                        >
                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#2674c8] text-white">
                                <x-icon name="check" size="16" />
                            </span>
                            <span>{{ $feature }}</span>
                        </li>
                    @endforeach
                </ul>

                <a
                    href="#early-access"
                    class="group inline-flex h-11 items-center justify-center gap-2 rounded-[4px] bg-[#2674c8] px-5 text-[14px] font-medium text-white transition-[background-color,transform] duration-150 hover:-translate-y-px hover:bg-[#3386dd] active:translate-y-0"
                    data-reveal
                    data-reveal-delay="310"
                >
                    Yapay zekâ özelliklerini incele
                    <x-icon name="arrow-right" size="16" class="transition-transform duration-150 group-hover:translate-x-0.5" />
                </a>
            </div>

            <div
                class="flex w-full items-center justify-center lg:col-span-7"
                data-reveal
                data-reveal-delay="80"
            >
                <x-product-frame
                    src="images/product/ai-dark.webp"
                    alt="Mevzun yapay zekâ çalışma alanında dava analizi, araştırma ve taslak üretimi ekranı."
                    ratio="16/10"
                    :dark="true"
                    class="w-full max-w-[820px] transition-[transform,border-color] duration-200 ease-[cubic-bezier(0.2,0,0,1)] hover:-translate-y-0.5 hover:border-[#46535c]"
                />
            </div>
        </div>
    </div>
</section>
