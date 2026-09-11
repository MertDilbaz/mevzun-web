<div {{ $attributes->class(['hero-mevzun-hub min-w-[92px] rounded-[6px] border border-[var(--border)] bg-[var(--bg-elevated)] px-4 py-3 text-center']) }}>
    <div class="mx-auto flex h-[42px] w-[42px] items-center justify-center" aria-hidden="true">
        {{-- Icon assets are named by artwork color: dark artwork for light UI, light artwork for dark UI. --}}
        <img
            src="/images/brand/mevzun-icon-dark-128.png"
            alt=""
            width="42"
            height="42"
            class="block h-[42px] w-[42px] object-contain dark:hidden"
        />
        <img
            src="/images/brand/mevzun-icon-light-128.png"
            alt=""
            width="42"
            height="42"
            class="hidden h-[42px] w-[42px] object-contain dark:block"
        />
    </div>
    <div class="mt-1.5 text-[16px] font-semibold tracking-[-0.015em] text-[var(--text-primary)]">Mevzun</div>
</div>
