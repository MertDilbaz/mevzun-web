<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @php
        $pageTitle = $title ?? 'Mevzun — Hukuk Çalışma Alanı';
        $pageDescription = $description ?? 'Avukatların UYAP dosyalarını, günlük çalışma düzenini ve yapay zekâ destekli hukuki işlerini tek masaüstü çalışma alanında birleştiren profesyonel hukuk yazılımı.';
    @endphp

    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: light)" href="/images/brand/mevzun-icon-dark-128.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: dark)" href="/images/brand/mevzun-icon-light-128.png">

    <script>
        document.documentElement.classList.add('js');
        (function() {
            try {
                const storedTheme = localStorage.getItem('theme');
                const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                if (storedTheme === 'dark' || (!storedTheme && systemPrefersDark)) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            } catch (_) {}
        })();
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-[var(--bg-app)] font-sans text-[var(--text-primary)] antialiased selection:bg-[var(--accent-soft)] selection:text-[var(--accent)] transition-colors duration-200">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:left-3 focus:top-3 focus:z-50 focus:rounded-[4px] focus:bg-[var(--accent)] focus:px-4 focus:py-2 focus:text-white focus:outline-none">
        Ana içeriğe geç
    </a>

    <x-navbar />

    <main id="main-content" class="w-full">
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>
</html>
