<div {{ $attributes->class(['hero-mevzun-hub min-w-[94px] rounded-[6px] border border-[var(--border)] bg-[var(--bg-elevated)] px-4 py-3 text-center']) }}>
    {{-- Reuse the exact logo artwork already proven in the navbar, cropping to its symbol. --}}
    <div class="mx-auto h-[44px] w-[44px] overflow-hidden" aria-hidden="true">
        <img
            src="/images/brand/mevzun-logo-light.png"
            alt=""
            width="111"
            height="44"
            class="block h-[44px] w-auto max-w-none object-contain object-left dark:hidden"
        />
        <img
            src="/images/brand/mevzun-logo-dark.png"
            alt=""
            width="111"
            height="44"
            class="hidden h-[44px] w-auto max-w-none object-contain object-left dark:block"
        />
    </div>
    <div class="mt-1.5 text-[16px] font-semibold tracking-[-0.015em] text-[var(--text-primary)]">Mevzun</div>
</div>
