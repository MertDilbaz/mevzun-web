# Mevzun Website Homepage V1 — Execution Plan

> **This file is an execution index, not a second specification. It may not override, reinterpret, broaden, narrow or duplicate the LOCKED specification.**
>
> The sole normative source for all implementation details, copy, layout, styling tokens, behavior, and acceptance criteria is [`docs/Mevzun_Website_Homepage_V1_Uygulama_Spesifikasyonu_LOCKED.md`](file:///C:/Users/mertd/Documents/github%20projects/mevzun-website/docs/Mevzun_Website_Homepage_V1_Uygulama_Spesifikasyonu_LOCKED.md).

---

## Faz 1 — Foundation, Design System & Page Shell

### Source LOCKED Steps
- **ADIM 1:** Proje Kapsamı, Mimari Sınırlar ve Laravel Foundation (`§1.1–§1.26`)
- **ADIM 2:** Global Design System ve Design Tokenları (`§2.1–§2.25`)
- **ADIM 3:** Page Shell, Grid Geometrisi ve Navbar (`§3.1–§3.17`)

### Objective
Kalıcı web omurgasını (Laravel 13, Tailwind CSS 4, Alpine.js, Livewire 4, PostgreSQL, Vite) ayağa kaldırmak, global token ve base CSS sistemini kurmak, semantik sayfa kabuğunu ve sticky navbar'ı spesifikasyondaki geometriyle inşa etmek.

### Execution Scope
- Laravel 13 proje kurulumu, dizin mimarisi ve foundation acceptance (`ADIM 1`).
- Ortam kontrolü (`.env`, PostgreSQL bağlantısı).
- Inter font ve Hugeicons entegrasyonu (`ADIM 1.19`, `ADIM 1.20`).
- Global tokenlar, renk paleti, 0–4px radius sınırı, `box-shadow: none` kuralı ve sıfır gradient/AI slop kurallarının CSS katmanına işlenmesi (`ADIM 2`).
- Semantik kabuk (`<header>`, `<main>`, `<footer>`), 1280px container ekseni ve sıfır yatay taşma (0 overflow) kuralı (`ADIM 3`).
- Sticky, solid white, 68–72px -> 62–64px scroll compact davranışlı Navbar bileşeni ve LOCKED ADIM 3’e uygun navbar-altı mobile menu panel (`ADIM 3`).

### Deliverables
- Çalışır Laravel foundation ve Vite build pipeline (`composer.json`, `package.json`, `vite.config.js`).
- `resources/css/app.css` ve Tailwind 4 token konfigürasyonu.
- `resources/views/layouts/marketing.blade.php`.
- `resources/views/components/navbar.blade.php`.
- `resources/views/pages/home.blade.php` (boş semantik section shell).

### Dependencies
- PHP 8.4, Composer, Node.js ve yerel PostgreSQL ortamı.

### Phase Gate
- `composer install` PASS.
- `npm run build` PASS.
- `php artisan migrate` PASS.
- `GET /` HTTP 200 döner.
- Tarayıcı konsolunda sıfır hata ve sıfır 404.
- `ADIM 1.26` ve `ADIM 13.6` kriterlerinin eksiksiz sağlanması.

### Visual QA Checkpoint
- `ADIM 3` Navbar visual acceptance kuralları: 1440px ve test viewportlarında solid white yüzey, 1px alt border, sıfır shadow/blur, doğru logo ve link hizalaması, scroll state sırasında layout shift olmaması.

---

## Faz 2 — Hero & Value Proposition

### Source LOCKED Steps
- **ADIM 4:** Hero Section (`§4.1–§4.19`)
- **ADIM 5:** Problem / Value Proposition Section (`§5.1–§5.15`)

### Objective
Ziyaretçinin ilk 3–5 saniyede ürünün ne olduğunu, kim için olduğunu ve neden gerekli olduğunu anlamasını sağlayan Split Hero ve editoryal Value Proposition bölümlerini inşa etmek.

### Execution Scope
- Split Hero düzeni: 5 kolon sol metin / 7 kolon sağ ürün görseli (`ADIM 4.2`).
- Hero tipografi hiyerarşisi, metinler, CTA butonları ve `ProductFrame` görsel çerçevesi (`ADIM 4`).
- Gerçek asset kullanıcı tarafından sağlanır; mevcut değilse `ADIM 13.16` uyarınca final aspect-ratio placeholder kullanılır, fake UI üretilmez.
- Soft Gray (`#F7F8FA`) zeminli Value Proposition bölümü, sol editoryal manifesto ve sağ 2×2 value grid (`ADIM 5`).

### Deliverables
- `resources/views/components/hero.blade.php`.
- `resources/views/components/product-frame.blade.php`.
- `resources/views/components/value-proposition.blade.php`.
- `home.blade.php` entegrasyonu.

### Dependencies
- Faz 1'in başarıyla tamamlanması.

### Phase Gate
- Hero ve Value section'larının markup ve CSS doğrulaması.
- Metinlerin ve hiyerarşinin `ADIM 4` ve `ADIM 5` ile %100 birebir olması.
- Sıfır yatay taşma (0 overflow).

### Visual QA Checkpoint
- `ADIM 4` ve `ADIM 5` visual acceptance kriterleri: Split hero oranları (5/7 kolon), zemin renk ayrımı (White -> #F7F8FA), no-shadow doğrulaması, grid hizalaması.

---

## Faz 3 — Core Showcase & AI Dark

### Source LOCKED Steps
- **ADIM 6:** UYAP Entegrasyonu Section (`§6.1–§6.20`)
- **ADIM 7:** AI Dark Section (`§7.1–§7.19`)
- **ADIM 8:** Takvim + Yerel Çalışma Alanı Section (`§8.1–§8.18`)

### Objective
Ürünün üç temel yetenek katmanını (UYAP entegrasyonu, dava bağlamını bilen AI ve takvim/Smart Table çalışma araçları) kilitlenen ritim ve zemin kontrastıyla sergilemek.

### Execution Scope
- `01 / UYAP ENTEGRASYONU` bölümü: Sol metin/aşama listesi ve sağ UYAP ürün görseli (`ADIM 6`).
- `02 / YAPAY ZEKÂ` bölümü: Full-width solid dark (`#11171b`) zemin, sert geçiş, sıfır neon/gradient, sol metin/yetenekler ve sağ koyu AI ürün görseli (`ADIM 7`).
- `03 / TAKVİM VE GÖREV YÖNETİMİ` ve `04 / YEREL ÇALIŞMA ALANI`: Aynı bölümde 6+6 kolon dengeli çift showcase (`ADIM 8`).
- Gerçek asset kullanıcı tarafından sağlanır; mevcut değilse `ADIM 13.16` uyarınca final aspect-ratio placeholder kullanılır, fake UI üretilmez.

### Deliverables
- `resources/views/components/uyap-section.blade.php`.
- `resources/views/components/ai-section.blade.php`.
- `resources/views/components/work-tools-section.blade.php`.
- `home.blade.php` entegrasyonu.

### Dependencies
- Faz 2'nin başarıyla tamamlanması.

### Phase Gate
- Beyaz -> Koyu (#11171b) -> Beyaz zemin geçişlerinin sert ve temiz gerçekleşmesi.
- Dokümandaki metinlerin ve product claim guardrail'lerinin (`ADIM 6.3`, `ADIM 7.10`) eksiksiz korunması.

### Visual QA Checkpoint
- `ADIM 6`, `ADIM 7` ve `ADIM 8` visual acceptance kriterleri: AI bölümünde sıfır neon/gradient, Takvim ve Smart Table arasında görsel denge, 1px border sınırları.

---

## Faz 4 — Ticari Aksiyon & Kapanış

### Source LOCKED Steps
- **ADIM 9:** Fiyatlandırma + Early Access Section (`§9.1–§9.37`)
- **ADIM 10:** Footer (`§10.1–§10.19`)

### Objective
"Tek paket, tek fiyat" ticari modelini, tek e-posta alanlı Early Access formunu ve kurumsal Footer kapanışını hayata geçirmek.

### Execution Scope
- Soft Gray (`#F7F8FA`) zeminli Fiyatlandırma bölümü: 3 yatay blok (Intro + Plan alanı / plan yüzeyi + Early Access) (`ADIM 9`).
- Early Access formu: Yalnızca `email` alanından oluşan yapı (`ADIM 9.15`). Erken erişim bu task'ta aktif edilecekse Livewire 4 bileşeni ve PostgreSQL `early_access_leads` tablosu bağlanır (`ADIM 9.18–§9.21`); production'a alma aşamasında `ADIM 9.27 Privacy / KVKK production gate` zorunludur.
- Beyaz zeminli, 1px üst border'lı, üç sütunlu (Brand, Ürün, Hukuki) Footer (`ADIM 10`).

### Deliverables
- `resources/views/components/pricing-section.blade.php`.
- Conditional: `app/Livewire/EarlyAccessForm.php` ve `resources/views/livewire/early-access-form.blade.php` (form aktif edilecekse).
- Conditional: `database/migrations/xxxx_xx_xx_create_early_access_leads_table.php` ve `app/Models/EarlyAccessLead.php` (form aktif edilecekse).
- `resources/views/components/footer.blade.php`.

### Dependencies
- Faz 3'ün başarıyla tamamlanması ve (form aktif edilecekse) PostgreSQL bağlantısı.

### Phase Gate
- Fiyatlandırma ve Footer semantik yapısının doğrulanması.
- Form aktifse: Tek e-posta alanıyla sunucu taraflı validasyonun geçmesi, PostgreSQL'e kayıt atması, success state dönmesi ve `ADIM 9.27 Privacy / KVKK production gate` koşullarının sağlanması.

### Visual QA Checkpoint
- `ADIM 9` ve `ADIM 10` visual acceptance kriterleri: 3'lü pricing yapısı, Plan alanı / plan yüzeyi hiyerarşisi, form geometrisi (44–46px, no-shadow), footer hizalaması.

---

## Faz 5 — İnce Ayar, Sistem Kalitesi & Acceptance Doğrulaması

### Source LOCKED Steps
- **ADIM 11:** Motion, Scroll ve Mikro Etkileşim Sistemi (`§11.1–§11.22`)
- **ADIM 12:** Responsive, Accessibility ve Performance (`§12.1–§12.31`)
- **ADIM 13:** QA, Görsel Fidelity ve AntiGravity Acceptance Criteria (`§13.1–§13.49`)

### Objective
Tüm sayfa için mikro etkileşimleri, responsive kırılımları, erişilebilirlik ve performans standartlarını tamamlayarak ADIM 13 altındaki nihai acceptance kriterlerini eksiksiz doğrulamak.

### Execution Scope
- Saf CSS ve Alpine/IntersectionObserver ile doğrudan ADIM 11 motion tokenları ve easing sistemi; `prefers-reduced-motion` desteği (`ADIM 11`).
- 10 farklı test viewport'unda responsive davranış denetimi ve sıfır yatay taşma (0 overflow) garantisi (`ADIM 12`).
- WCAG AA kontrast, semantik başlık hiyerarşisi, visible focus ve accessible labellar (`ADIM 12`).
- `ADIM 13.1–§13.49` genelinde teknik ve görsel kalite kapılarının (sıfır console hatası, sıfır 404, clean logs, acceptance audit) denetlenmesi.

### Deliverables
- Motion ve reveal sınıfları (`resources/css/app.css` / `resources/js/app.js`).
- Responsive ve a11y düzeltmeleri.
- Nihai QA doğrulama raporu (`ADIM 13.47`).

### Dependencies
- Faz 1–4'ün tamamlanmış olması.

### Phase Gate
- Tüm build ve test adımlarının hatasız geçmesi (`composer validate`, `npm run build`, `php artisan test`).
- Tarayıcı konsolunda 0 uncaught error, network sekmesinde 0 kırık asset.
- `ADIM 13.1` altındaki 4 acceptance kategorisinin (A. Teknik doğruluk, B. Görsel fidelity, C. UX / motion, D. Responsive / production kalite) eksiksiz onaylanması.
- `ADIM 13.48` ve `ADIM 13.49` final hard rules koşullarının sağlanması.

### Visual QA Checkpoint
- `ADIM 13.9` görsel fidelity iş akışı: 1440×900 ana referans başta olmak üzere tüm test viewportlarında referans ile birebir ritim ve oran kontrolü.
