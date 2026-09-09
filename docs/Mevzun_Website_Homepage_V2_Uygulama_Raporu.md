# Mevzun Website — Homepage V2 Uygulama Raporu

**Durum:** SCREENSHOT ASSETLERİ HARİÇ UYGULANDI  
**Tarih:** 09.09.2026  
**Branch:** `develop`  
**Görsel hedef:** Kullanıcının son onayladığı sadeleştirilmiş homepage referansı

## Uygulanan bilgi mimarisi

Homepage render sırası:

1. Navbar
2. Hero
3. AI Dark Section
4. Feature Strip
5. Pricing + Early Access
6. Footer

Ayrı UYAP showcase, ayrı Takvim + Yerel Çalışma Alanı showcase, eski uzun Problem/Value bölümü ve ayrı çalışma akışı homepage render ağacından kaldırıldı.

## Component düzeni

Aktif homepage componentleri:

- `MarketingLayout`
- `Navbar`
- `Hero`
- `AiSection`
- `FeatureStrip`
- `PricingSection`
- `EarlyAccessForm`
- `Footer`
- `ProductFrame`
- `Icon`
- `Logo`

Eski ve artık kullanılmayan `ValueProposition`, `UyapSection` ve `WorkToolsSection` component dosyaları kaldırıldı.

## Görsel ve interaction çalışmaları

- Hero desktop'ta yüksek açılış alanı olacak şekilde `100svh - navbar` ritmine yaklaştırıldı; alt section ilk bakışta yığılmıyor.
- Hero ikinci CTA kaldırıldı; tek ana CTA kullanılıyor.
- Navbar sticky + compact scroll state aldı.
- Navbar linklerine kontrollü animated underline ve renk geçişi eklendi.
- CTA'larda 1px seviyesinde kontrollü hover hareketi ve arrow micro-interaction kullanıldı.
- Mobile menü navbar altında açılan, overlay kullanmayan sade yapıda tutuldu.
- Hero ve AI ProductFrame alanlarına hafif reveal ve border/translate micro-interaction eklendi.
- Section reveal sistemi `IntersectionObserver` ile one-time çalışıyor.
- Stagger gecikmeleri 320ms üst sınırla kontrol ediliyor.
- `prefers-reduced-motion` desteği korunuyor.
- Feature Strip AI section altına taşındı ve desktop 4 kolon / tablet 2x2 / mobile tek kolon divider sistemi kuruldu.
- Pricing tek plan yapısında korundu; Early Access ayrı ama ikincil yüzey olarak bırakıldı.
- Footer daha kompakt yatay kompozisyona çekildi.
- Global `overflow-x: hidden` kaldırıldı; overflow hatalarının gizlenmesi engellendi.
- Global shadow yasağı korundu; gradient/glow/glassmorphism eklenmedi.

## İçerik / güvenli pazarlama dili

- Hero positioning kısa tutuldu.
- AI başlığı son referansa göre `Yapay zekâ, dava bağlamını anlar.` olarak güncellendi.
- Model/provider/quota/accuracy/unlimited iddiaları kullanılmadı.
- Feature Strip copy'si kısa ve taranabilir tutuldu.
- Fiyat tek kaynaktan `config/marketing.php` üzerinden okunuyor (`₺1.500`).

## Screenshot asset contract

Homepage V2 için yalnız iki zorunlu gerçek ürün screenshot'ı bekleniyor:

- `public/images/product/home-dark.webp`
- `public/images/product/ai-dark.webp`

Asset gelene kadar final aspect ratio'lu `ProductFrame` placeholder kullanılıyor. Screenshot HTML/CSS ile taklit edilmiyor.

## Accessibility / SEO / performance

- Tek H1 korunuyor.
- Skip link korunuyor.
- Focus-visible sistemi korunuyor.
- Mobile menü `aria-expanded` / `aria-controls` kullanıyor ve Escape ile kapanıyor.
- Canonical URL current route üzerinden üretiliyor.
- OG/Twitter title + description layout seviyesinde korunuyor.
- Hero görseli priority/eager; AI görseli lazy.
- ProductFrame `object-contain` kullanıyor; screenshot crop edilmiyor.

## Test / CI

GitHub Actions CI eklendi:

- Composer validate
- Composer install
- Laravel environment hazırlığı
- npm ci
- Vite build
- Pint `--test`
- `php artisan test`

İlk CI çalışması (`run 34386112346`) **SUCCESS** tamamlandı. Build, format kontrolü ve testlerin tamamı geçti.

## Açık kalan işler

1. Kullanıcının demo/fake-data ile hazırlayacağı gerçek `home-dark.webp` screenshot'ı.
2. Kullanıcının demo/fake-data ile hazırlayacağı gerçek `ai-dark.webp` screenshot'ı.
3. Screenshot entegrasyonu sonrası 1920x1080 / 1440x900 / tablet / mobile görsel fidelity kontrolü.
4. Kullanıcının lokal görsel onayı.
5. Onaydan sonra `develop -> main` milestone merge.

Bu maddeler tamamlanmadan homepage V2 görsel olarak FINAL/DONE kabul edilmeyecektir.
