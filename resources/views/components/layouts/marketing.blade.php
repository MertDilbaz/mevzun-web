<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>{{ $title ?? 'Mevzun — Hukuk Çalışma Alanı' }}</title>
    <meta name="description" content="Avukatların UYAP dosyalarını, günlük çalışma düzenini ve yapay zekâ destekli hukuki işlerini tek masaüstü çalışma alanında birleştiren profesyonel hukuk yazılımı.">
    
    <!-- Open Graph / Social Media Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mevzun — Hukuk Çalışma Alanı">
    <meta property="og:description" content="Avukatların UYAP dosyalarını, günlük çalışma düzenini ve yapay zekâ destekli hukuki işlerini tek masaüstü çalışma alanında birleştiren profesyonel hukuk yazılımı.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mevzun — Hukuk Çalışma Alanı">
    <meta name="twitter:description" content="Avukatların UYAP dosyalarını, günlük çalışma düzenini ve yapay zekâ destekli hukuki işlerini tek masaüstü çalışma alanında birleştiren profesyonel hukuk yazılımı.">

    <link rel="canonical" href="{{ url('/') }}">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white text-[#172033] font-sans antialiased min-h-screen flex flex-col selection:bg-[#eaf3fb] selection:text-[#216bb9]">
    <!-- Skip to main content link (LOCKED §12.16) -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 focus:px-4 focus:py-2 focus:bg-[#2674c8] focus:text-white focus:rounded-[4px] focus:outline-none">
        Ana içeriğe geç
    </a>

    <x-navbar />

    <main id="main-content" class="flex-1 w-full">
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>
</html>
