<div class="w-full">
    @if($submitted)
        <div
            class="rounded-[4px] border border-[var(--accent)]/30 bg-[var(--accent-soft)] p-4 text-[14px] font-medium text-[var(--accent)] dark:text-[var(--accent-hover)]"
            role="status"
            aria-live="polite"
        >
            Teşekkürler. Erken erişim listesine eklendiniz.
        </div>
    @else
        <form wire:submit.prevent="submit" class="w-full">
            <label for="early-access-email" class="sr-only">E-posta adresiniz</label>

            <div class="flex w-full flex-col gap-2 sm:flex-row">
                <input
                    type="email"
                    id="early-access-email"
                    wire:model.defer="email"
                    autocomplete="email"
                    inputmode="email"
                    placeholder="E-posta adresiniz"
                    class="h-11 min-w-0 flex-1 rounded-[4px] border border-[var(--border)] bg-[var(--bg-elevated)] px-3.5 text-[14px] text-[var(--text-primary)] placeholder-[var(--text-muted)] transition-[border-color,background-color] duration-150 focus:border-[var(--accent)] focus:bg-[var(--bg-elevated)] focus:outline-none @error('email') border-red-500 @enderror"
                    aria-invalid="@error('email') true @else false @enderror"
                    aria-describedby="early-access-help @error('email') early-access-error @enderror"
                />

                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    class="group inline-flex h-11 shrink-0 items-center justify-center gap-2 rounded-[4px] border border-transparent bg-[var(--accent)] px-5 text-[14px] font-medium text-white transition-[background-color,transform] duration-150 hover:-translate-y-px hover:bg-[var(--accent-hover)] active:translate-y-0 active:bg-[var(--accent-hover)] disabled:pointer-events-none disabled:opacity-60"
                >
                    <span wire:loading.remove>Katıl</span>
                    <span wire:loading>Kaydediliyor…</span>
                    <x-icon name="arrow-right" size="16" wire:loading.remove class="transition-transform duration-150 group-hover:translate-x-0.5" />
                </button>
            </div>

            @error('email')
                <p id="early-access-error" class="mt-2 text-[12px] text-red-600" role="alert">
                    {{ $message }}
                </p>
            @enderror

            <p id="early-access-help" class="mt-2 text-[11px] leading-[1.45] text-[var(--text-muted)]">
                E-posta adresiniz yalnız erken erişim ve ürün duyuruları için kullanılır.
                <a href="/kvkk" class="text-[var(--accent)] underline-offset-2 hover:underline">KVKK Aydınlatma Metni</a>
            </p>
        </form>
    @endif
</div>
