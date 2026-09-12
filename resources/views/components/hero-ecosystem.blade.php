<div {{ $attributes->class(['hero-ecosystem-shell relative w-full overflow-hidden rounded-[6px] border border-[var(--border)] bg-[var(--bg-surface)] px-5 py-6 sm:px-7 lg:min-h-[458px] lg:px-8 lg:py-7']) }}>
    <h2 class="relative z-20 text-[24px] font-semibold leading-tight tracking-[-0.025em] text-[var(--text-primary)] sm:text-[26px]">
        Bütün ihtiyaçlarınız tek yerde.
    </h2>

    <div class="relative mt-4 hidden h-[358px] lg:block">
        <svg
            class="pointer-events-none absolute inset-0 z-0 h-full w-full text-[var(--accent)]"
            viewBox="0 0 760 358"
            fill="none"
            aria-hidden="true"
            preserveAspectRatio="none"
        >
            {{-- Ambient orbit layer --}}
            <path class="hero-ecosystem-orbit" d="M110 183C178 78 292 37 394 49C519 63 624 137 683 238" />
            <path class="hero-ecosystem-orbit" d="M152 286C252 337 449 343 598 265" />
            <path class="hero-ecosystem-orbit" d="M252 31C352 4 486 17 572 83" />

            {{-- Functional connectors --}}
            <path class="hero-ecosystem-path" d="M263 66C316 69 345 113 379 151" />
            <path class="hero-ecosystem-path" d="M505 58C464 72 433 111 402 151" />
            <path class="hero-ecosystem-path" d="M252 231C314 223 346 193 379 178" />
            <path class="hero-ecosystem-path" d="M523 215C470 211 433 191 403 178" />
            <path class="hero-ecosystem-path" d="M393 314C393 266 391 222 391 194" />

            <circle class="hero-ecosystem-node" cx="263" cy="66" r="4" />
            <circle class="hero-ecosystem-node" cx="505" cy="58" r="4" />
            <circle class="hero-ecosystem-node" cx="252" cy="231" r="4" />
            <circle class="hero-ecosystem-node" cx="523" cy="215" r="4" />
            <circle class="hero-ecosystem-node" cx="393" cy="314" r="4" />

            <circle class="hero-ecosystem-speck" cx="336" cy="102" r="2" />
            <circle class="hero-ecosystem-speck" cx="447" cy="96" r="1.6" />
            <circle class="hero-ecosystem-speck" cx="316" cy="276" r="1.5" />
            <circle class="hero-ecosystem-speck" cx="466" cy="283" r="1.8" />
        </svg>

        <x-hero-feature-card
            icon="document"
            title="UYAP davalarınız"
            description="Dosyalarınızı yönetin, süreçleri takip edin."
            delay="80ms"
            enter-x="-18px"
            enter-y="-8px"
            class="absolute left-[1%] top-[6%] z-10 w-[35%]"
        />

        <x-hero-feature-card
            icon="sparkle"
            title="Yapay Zekâ asistanınız"
            description="Hukuki araştırma, özetleme, dilekçe ve daha fazlası."
            delay="150ms"
            enter-x="18px"
            enter-y="-8px"
            class="absolute right-[1%] top-[1%] z-10 w-[36%]"
        />

        <x-hero-feature-card
            icon="folder"
            title="Yerel çalışma dosyalarınız"
            description="Tüm belgeleriniz güvenle yanınızda."
            delay="220ms"
            enter-x="-18px"
            enter-y="8px"
            class="absolute left-[0%] top-[48%] z-10 w-[35%]"
        />

        <x-hero-feature-card
            icon="calendar"
            title="Takvim ve görevler"
            description="Duruşmalarınızı ve görevlerinizi kaçırmayın."
            delay="290ms"
            enter-x="18px"
            enter-y="8px"
            class="absolute right-[0%] top-[43%] z-10 w-[35%]"
        />

        <x-hero-feature-card
            icon="users"
            title="Müvekkiller ve duruşmalar"
            description="Müvekkil bilgileri, duruşma takibi ve süreç yönetimi."
            delay="360ms"
            enter-x="0px"
            enter-y="18px"
            class="absolute bottom-[0%] left-[40%] z-10 w-[36%]"
        />

        <div class="absolute left-1/2 top-[45%] z-20 -translate-x-1/2 -translate-y-1/2">
            <x-hero-mevzun-hub />
        </div>

        <div class="absolute bottom-[9%] right-[1%] z-10 max-w-[128px] rotate-[-7deg] text-right text-[13px] font-medium italic leading-[1.35] text-[var(--accent)] opacity-85">
            <span class="block">Daha verimli</span>
            <span class="block">bir hukuk pratiği</span>
            <svg class="ml-auto mt-1 h-8 w-16" viewBox="0 0 64 32" fill="none" aria-hidden="true">
                <path d="M60 27C42 27 24 19 12 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M12 7L18 8M12 7L13 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
        </div>
    </div>

    <div class="mt-6 grid gap-3 lg:hidden">
        <div class="mx-auto mb-2 w-[118px]">
            <x-hero-mevzun-hub />
        </div>

        <x-hero-feature-card icon="document" title="UYAP davalarınız" description="Dosyalarınızı yönetin, süreçleri takip edin." />
        <x-hero-feature-card icon="sparkle" title="Yapay Zekâ asistanınız" description="Hukuki araştırma, özetleme, dilekçe ve daha fazlası." />
        <x-hero-feature-card icon="folder" title="Yerel çalışma dosyalarınız" description="Tüm belgeleriniz güvenle yanınızda." />
        <x-hero-feature-card icon="calendar" title="Takvim ve görevler" description="Duruşmalarınızı ve görevlerinizi kaçırmayın." />
        <x-hero-feature-card icon="users" title="Müvekkiller ve duruşmalar" description="Müvekkil bilgileri, duruşma takibi ve süreç yönetimi." />
    </div>
</div>
