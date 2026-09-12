<section id="features" class="w-full border-b border-[var(--border-subtle)] bg-[var(--bg-surface)] py-10 sm:py-12 lg:py-14">
    <div class="mx-auto max-w-[1360px] px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
            @php
                $items = [
                    [
                        'id' => 'uyap',
                        'icon' => 'database',
                        'title' => 'Tüm dosyalar tek yerde',
                        'body' => 'UYAP dosyaları, evraklar, çalışma kayıtları ve takviminiz aynı düzende.',
                    ],
                    [
                        'id' => null,
                        'icon' => 'shield',
                        'title' => 'Güvenli ve gizli',
                        'body' => 'Çalışma verileriniz kontrollü bir masaüstü çalışma alanında yönetilir.',
                    ],
                    [
                        'id' => null,
                        'icon' => 'bolt',
                        'title' => 'Daha verimli çalışın',
                        'body' => 'Tekrarlayan uygulama geçişlerini azaltın, odağınızı dosyanızda tutun.',
                    ],
                    [
                        'id' => null,
                        'icon' => 'monitor',
                        'title' => 'Her yerden erişin',
                        'body' => 'Masaüstü uygulamasıyla çalışma düzeninizi kullandığınız cihaza taşıyın.',
                    ],
                ];
            @endphp

            @foreach ($items as $index => $item)
                <article
                    @if($item['id']) id="{{ $item['id'] }}" @endif
                    class="mz-feature-item group flex min-h-[172px] flex-col items-start px-0 py-7 sm:px-7 lg:min-h-[188px] lg:px-8"
                    data-reveal
                    data-reveal-delay="{{ $index * 55 }}"
                >
                    <x-icon
                        :name="$item['icon']"
                        size="32"
                        class="mb-5 text-[var(--accent)] transition-[color,transform] duration-200 ease-[cubic-bezier(0.2,0,0,1)] group-hover:-translate-y-0.5 group-hover:text-[var(--accent-hover)]"
                    />
                    <h3 class="mb-2 text-[17px] font-semibold tracking-[-0.015em] text-[var(--text-primary)] transition-colors duration-150 group-hover:text-[var(--accent)] sm:text-[18px]">
                        {{ $item['title'] }}
                    </h3>
                    <p class="max-w-[260px] text-[14px] leading-[1.55] text-[var(--text-secondary)]">
                        {{ $item['body'] }}
                    </p>
                </article>
            @endforeach
        </div>
    </div>
</section>
