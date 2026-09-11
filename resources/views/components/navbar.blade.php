<header
    x-data="{ scrolled: false, mobileMenuOpen: false }"
    @scroll.window="scrolled = window.scrollY > 52"
    class="sticky top-0 z-40 w-full border-b border-[var(--border)] bg-[var(--bg-surface)]/95 backdrop-blur-sm transition-[height,background-color,border-color] duration-200 ease-[cubic-bezier(0.2,0,0,1)]"
    :class="scrolled ? 'h-[70px]' : 'h-[80px]'"
>
    <div class="h-full px-5 sm:px-8 lg:px-10">
        <nav
            class="relative mx-auto flex h-full w-full max-w-[1440px] items-center justify-between"
            aria-label="Ana navigasyon"
        >
            <a
                href="#hero"
                class="inline-flex items-center rounded-[2px] focus-visible:outline-2 focus-visible:outline-[var(--accent)] focus-visible:outline-offset-2"
                aria-label="Mevzun ana sayfa"
            >
                <x-logo size="38" />
            </a>

            <div class="absolute left-1/2 hidden -translate-x-1/2 items-center gap-2 lg:flex">
                <a href="#hero" class="mz-nav-link">Ürün</a>
                <a href="#uyap" class="mz-nav-link">UYAP</a>
                <a href="#ai" class="mz-nav-link">Yapay Zekâ</a>
                <a href="#pricing" class="mz-nav-link">Fiyatlandırma</a>
                <a href="#footer" class="mz-nav-link">İletişim</a>
            </div>

            <div class="flex items-center gap-3.5">
                <x-theme-toggle />

                <a
                    href="#early-access"
                    class="group hidden h-11 items-center justify-center gap-2.5 rounded-[4px] border border-transparent bg-[var(--accent)] px-5 text-[15px] font-medium text-white transition-[background-color,transform] duration-200 ease-[cubic-bezier(0.2,0,0,1)] hover:-translate-y-px hover:bg-[var(--accent-hover)] active:translate-y-0 active:bg-[var(--accent-hover)] lg:inline-flex"
                >
                    <span>Mevzun'u deneyin</span>
                    <x-icon name="arrow-right" size="16" class="transition-transform duration-200 group-hover:translate-x-0.5" />
                </a>

                <button
                    type="button"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="flex h-11 w-11 items-center justify-center rounded-[4px] text-[var(--text-primary)] transition-colors duration-200 hover:bg-[var(--bg-subtle)] hover:text-[var(--accent)] lg:hidden"
                    aria-label="Menüyü aç veya kapat"
                    :aria-expanded="mobileMenuOpen.toString()"
                    aria-controls="mobile-menu"
                >
                    <template x-if="!mobileMenuOpen">
                        <x-icon name="menu" size="24" />
                    </template>
                    <template x-if="mobileMenuOpen">
                        <x-icon name="close" size="24" />
                    </template>
                </button>
            </div>
        </nav>
    </div>

    <div
        id="mobile-menu"
        x-show="mobileMenuOpen"
        x-cloak
        @click.outside="mobileMenuOpen = false"
        @keydown.escape.window="mobileMenuOpen = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="border-b border-[var(--border)] bg-[var(--bg-surface)] px-5 py-4 sm:px-8 lg:hidden"
    >
        <div class="mx-auto flex max-w-[1440px] flex-col gap-1">
            <a href="#hero" @click="mobileMenuOpen = false" class="mz-mobile-nav-link">Ürün</a>
            <a href="#uyap" @click="mobileMenuOpen = false" class="mz-mobile-nav-link">UYAP</a>
            <a href="#ai" @click="mobileMenuOpen = false" class="mz-mobile-nav-link">Yapay Zekâ</a>
            <a href="#pricing" @click="mobileMenuOpen = false" class="mz-mobile-nav-link">Fiyatlandırma</a>
            <a href="#footer" @click="mobileMenuOpen = false" class="mz-mobile-nav-link">İletişim</a>
            <div class="my-2.5 h-px bg-[var(--border-subtle)]"></div>
            <a
                href="#early-access"
                @click="mobileMenuOpen = false"
                class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-[4px] bg-[var(--accent)] px-5 text-[15px] font-medium text-white transition-colors duration-200 hover:bg-[var(--accent-hover)]"
            >
                Mevzun'u deneyin
                <x-icon name="arrow-right" size="16" />
            </a>
        </div>
    </div>
</header>
