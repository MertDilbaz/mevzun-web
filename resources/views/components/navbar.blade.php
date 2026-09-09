<header x-data="{ scrolled: false, mobileMenuOpen: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
        class="sticky top-0 z-30 w-full bg-white border-b border-[#dfe3e7] transition-[height] duration-200 ease-[cubic-bezier(0.2,0,0,1)]"
        :class="scrolled ? 'h-[64px]' : 'h-[72px]'">
    <nav class="mz-container h-full flex lg:grid lg:grid-cols-[auto_1fr_auto] items-center justify-between lg:justify-normal"
         aria-label="Ana Navigasyon">
        
        <!-- Left: Brand / Logo -->
        <a href="#hero" class="flex items-center gap-2.5 focus-visible:outline-2 focus-visible:outline-[#2674c8] focus-visible:outline-offset-2">
            <x-logo size="32" />
        </a>

        <!-- Center: Desktop Navigation Links (LOCKED §3.8) -->
        <div class="hidden lg:flex items-center gap-8 text-[14px] font-medium text-[#596579] justify-self-center">
            <a href="#product" class="hover:text-[#2674c8] transition-colors duration-150 py-1">Ürün</a>
            <a href="#uyap" class="hover:text-[#2674c8] transition-colors duration-150 py-1">UYAP</a>
            <a href="#ai" class="hover:text-[#2674c8] transition-colors duration-150 py-1">Yapay Zekâ</a>
            <a href="#pricing" class="hover:text-[#2674c8] transition-colors duration-150 py-1">Fiyatlandırma</a>
            <a href="#footer" class="hover:text-[#2674c8] transition-colors duration-150 py-1">İletişim</a>
        </div>

        <!-- Right: CTA Button (Desktop) -->
        <div class="hidden lg:flex items-center gap-4 justify-self-end">
            <a href="#early-access" 
               class="inline-flex items-center justify-center h-[40px] px-4 rounded-[4px] bg-[#2674c8] hover:bg-[#1f66b5] active:bg-[#19579b] text-white text-[14px] font-medium border border-transparent transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-[#2674c8] focus-visible:outline-offset-2">
                Mevzun'u deneyin
            </a>
        </div>

        <!-- Mobile: Hamburger Button (<1024px) -->
        <div class="flex items-center lg:hidden">
            <button type="button" 
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="min-w-[44px] min-h-[44px] flex items-center justify-center text-[#172033] hover:text-[#2674c8] focus-visible:outline-2 focus-visible:outline-[#2674c8]"
                    aria-label="Menüyü aç veya kapat"
                    :aria-expanded="mobileMenuOpen.toString()"
                    aria-controls="mobile-menu">
                <template x-if="!mobileMenuOpen">
                    <x-icon name="menu" size="24" />
                </template>
                <template x-if="mobileMenuOpen">
                    <x-icon name="close" size="24" />
                </template>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Panel (LOCKED §3.11: under navbar, white, border-b, no shadow, no overlay) -->
    <div id="mobile-menu"
         x-show="mobileMenuOpen"
         x-cloak
         @click.outside="mobileMenuOpen = false"
         @keydown.escape.window="mobileMenuOpen = false"
         x-transition:enter="transition ease-out duration-180"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-140"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-1"
         class="lg:hidden w-full bg-white border-b border-[#dfe3e7]">
        <div class="mz-container py-4 flex flex-col gap-3">
            <a href="#product" @click="mobileMenuOpen = false" class="text-[15px] font-medium text-[#172033] hover:text-[#2674c8] py-2">Ürün</a>
            <a href="#uyap" @click="mobileMenuOpen = false" class="text-[15px] font-medium text-[#172033] hover:text-[#2674c8] py-2">UYAP</a>
            <a href="#ai" @click="mobileMenuOpen = false" class="text-[15px] font-medium text-[#172033] hover:text-[#2674c8] py-2">Yapay Zekâ</a>
            <a href="#pricing" @click="mobileMenuOpen = false" class="text-[15px] font-medium text-[#172033] hover:text-[#2674c8] py-2">Fiyatlandırma</a>
            <a href="#footer" @click="mobileMenuOpen = false" class="text-[15px] font-medium text-[#172033] hover:text-[#2674c8] py-2">İletişim</a>
            <div class="h-[1px] bg-[#e7e9ec] my-1"></div>
            <a href="#early-access" 
               @click="mobileMenuOpen = false"
               class="inline-flex items-center justify-center h-[44px] w-full rounded-[4px] bg-[#2674c8] hover:bg-[#1f66b5] text-white text-[15px] font-medium transition-colors">
                Mevzun'u deneyin
            </a>
        </div>
    </div>
</header>
