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
    <link rel="icon" type="image/png" media="(prefers-color-scheme: light)" href="{{ asset('images/brand/mevzun-icon-light-128.png') }}">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: dark)" href="{{ asset('images/brand/mevzun-icon-dark-128.png') }}">

    <script>document.documentElement.classList.add('js');</script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-white font-sans text-[#172033] antialiased selection:bg-[#eaf3fb] selection:text-[#216bb9]">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:left-3 focus:top-3 focus:z-50 focus:rounded-[4px] focus:bg-[#2674c8] focus:px-4 focus:py-2 focus:text-white focus:outline-none">
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
