<div class="hero-ecosystem-shell relative w-full overflow-hidden rounded-[6px] border border-[#2b343b] bg-[#11171b] px-5 py-6 sm:px-7 lg:min-h-[520px] lg:px-8 lg:py-7">
    <h2 class="relative z-20 text-[24px] font-semibold leading-tight tracking-[-0.02em] text-[#f5f7f8] sm:text-[28px]">
        Bütün ihtiyaçlarınız tek yerde.
    </h2>

    {{-- Desktop composition: real DOM cards + independent SVG connector layer. --}}
    <div class="relative mt-5 hidden min-h-[430px] lg:block">
        <svg
            class="pointer-events-none absolute inset-0 z-0 h-full w-full"
            viewBox="0 0 760 430"
            fill="none"
            aria-hidden="true"
            preserveAspectRatio="none"
        >
            <path class="hero-ecosystem-path" d="M294 93 C342 96 349 145 381 184" />
            <path class="hero-ecosystem-path" d="M479 82 C431 92 421 139 389 184" />
            <path class="hero-ecosystem-path" d="M282 272 C329 261 345 229 382 219" />
            <path class="hero-ecosystem-path" d="M511 258 C454 253 429 229 397 218" />
            <path class="hero-ecosystem-path" d="M389 351 C390 302 390 266 390 231" />

            <circle class="hero-ecosystem-node" cx="294" cy="93" r="4" />
            <circle class="hero-ecosystem-node" cx="479" cy="82" r="4" />
            <circle class="hero-ecosystem-node" cx="282" cy="272" r="4" />
            <circle class="hero-ecosystem-node" cx="511" cy="258" r="4" />
            <circle class="hero-ecosystem-node" cx="389" cy="351" r="4" />
        </svg>

        <x-hero-feature-card
            icon="document"
            title="UYAP davalarınız"
            description="Dosyalarınızı yönetin, süreçleri takip edin."
            delay="80ms"
            enter-x="-18px"
            enter-y="-8px"
            class="absolute left-[2%] top-[5%] z-10 w-[42%]"
        />

        <x-hero-feature-card
            icon="sparkle"
            title="Yapay Zekâ asistanınız"
            description="Hukuki araştırma, özetleme, dilekçe ve daha fazlası."
            delay="150ms"
            enter-x="18px"
            enter-y="-8px"
            class="absolute right-[1%] top-[1%] z-10 w-[43%]"
        />

        <x-hero-feature-card
            icon="folder"
            title="Yerel çalışma dosyalarınız"
            description="Çalışma kayıtlarınızı düzenleyin ve elinizin altında tutun."
            delay="220ms"
            enter-x="-18px"
            enter-y="8px"
            class="absolute left-[0%] top-[47%] z-10 w-[40%]"
        />

        <x-hero-feature-card
            icon="calendar"
            title="Takvim ve görevler"
            description="Duruşmalarınızı ve görevlerinizi kaçırmayın."
            delay="290ms"
            enter-x="18px"
            enter-y="8px"
            class="absolute right-[0%] top-[43%] z-10 w-[39%]"
        />

        <x-hero-feature-card
            icon="users"
            title="Müvekkiller ve duruşmalar"
            description="Müvekkil bilgileri, duruşma takibi ve süreç yönetimi."
            delay="360ms"
            enter-x="0px"
            enter-y="18px"
            class="absolute bottom-[2%] left-[39%] z-10 w-[42%]"
        />

        <div class="absolute left-1/2 top-[43%] z-20 -translate-x-1/2 -translate-y-1/2">
            <x-hero-mevzun-hub />
        </div>

        <div class="absolute bottom-[6%] right-[1%] z-10 max-w-[120px] rotate-[-7deg] text-right text-[13px] font-medium italic leading-[1.35] text-[#78a9c1]">
            <span class="block">Daha verimli</span>
            <span class="block">bir hukuk pratiği</span>
            <svg class="ml-auto mt-1 h-8 w-16" viewBox="0 0 64 32" fill="none" aria-hidden="true">
                <path d="M60 27C42 27 24 19 12 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M12 7L18 8M12 7L13 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
        </div>
    </div>

    {{-- Tablet/mobile keeps the same editable components, but uses a readable stacked composition. --}}
    <div class="mt-6 grid gap-3 lg:hidden">
        <div class="mx-auto mb-2 w-[132px]">
            <x-hero-mevzun-hub />
        </div>

        <x-hero-feature-card icon="document" title="UYAP davalarınız" description="Dosyalarınızı yönetin, süreçleri takip edin." />
        <x-hero-feature-card icon="sparkle" title="Yapay Zekâ asistanınız" description="Hukuki araştırma, özetleme, dilekçe ve daha fazlası." />
        <x-hero-feature-card icon="folder" title="Yerel çalışma dosyalarınız" description="Çalışma kayıtlarınızı düzenleyin ve elinizin altında tutun." />
        <x-hero-feature-card icon="calendar" title="Takvim ve görevler" description="Duruşmalarınızı ve görevlerinizi kaçırmayın." />
        <x-hero-feature-card icon="users" title="Müvekkiller ve duruşmalar" description="Müvekkil bilgileri, duruşma takibi ve süreç yönetimi." />
    </div>
</div>
