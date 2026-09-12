@props(['title', 'updatedAt' => '09.09.2026'])

<x-layouts.marketing :title="$title . ' — Mevzun'">
    <div class="w-full bg-[var(--bg-surface)] py-16 lg:py-24 border-b border-[var(--border)]">
        <div class="max-w-[760px] mx-auto px-5 sm:px-8">
            <span class="text-[12px] font-semibold text-[var(--accent)] uppercase tracking-[0.12em] mb-3 block select-none">
                HUKUKİ BİLGİLENDİRME
            </span>
            <h1 class="text-[32px] sm:text-[40px] font-semibold text-[var(--text-primary)] tracking-tight mb-3">
                {{ $title }}
            </h1>
            <p class="text-[13px] text-[var(--text-muted)] mb-8 pb-6 border-b border-[var(--border)]">
                Son Güncelleme: {{ $updatedAt }}
            </p>

            <div class="prose prose-slate dark:prose-invert max-w-none text-[15px] leading-[1.7] text-[var(--text-secondary)] prose-headings:text-[var(--text-primary)] prose-strong:text-[var(--text-primary)] prose-a:text-[var(--accent)] space-y-6">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layouts.marketing>
