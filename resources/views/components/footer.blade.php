<footer id="footer" class="w-full border-t border-[var(--border)] bg-[var(--bg-surface)]">
    <div class="mx-auto max-w-[1360px] px-5 py-8 sm:px-8 lg:px-10 lg:py-9">
        <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
            <div class="flex flex-col items-start">
                <a href="#hero" class="rounded-[2px] focus-visible:outline-2 focus-visible:outline-[var(--accent)] focus-visible:outline-offset-2" aria-label="Mevzun ana sayfa">
                    <x-logo size="30" />
                </a>
                <p class="mt-3 max-w-[300px] text-[12px] leading-[1.55] text-[var(--text-muted)]">
                    Hukukta daha düzenli, daha verimli bir çalışma alanı.
                </p>
            </div>

            <nav aria-label="Alt navigasyon" class="flex flex-wrap items-center gap-x-6 gap-y-3 text-[13px] text-[var(--text-secondary)]">
                <a href="#hero" class="mz-footer-link">Ürün</a>
                <a href="#uyap" class="mz-footer-link">UYAP</a>
                <a href="#ai" class="mz-footer-link">Yapay Zekâ</a>
                <a href="#pricing" class="mz-footer-link">Fiyatlandırma</a>
                <a href="#footer" class="mz-footer-link">İletişim</a>
            </nav>

            <div class="flex flex-col items-start gap-2 text-[12px] text-[var(--text-muted)] lg:items-end">
                <p>&copy; {{ date('Y') }} Mevzun. Tüm hakları saklıdır.</p>
                <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                    <a href="/gizlilik" class="mz-footer-link">Gizlilik</a>
                    <a href="/kvkk" class="mz-footer-link">KVKK</a>
                    <a href="/kullanim-kosullari" class="mz-footer-link">Kullanım Koşulları</a>
                </div>
            </div>
        </div>
    </div>
</footer>
