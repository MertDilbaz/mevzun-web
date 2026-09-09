# Mevzun Website — Homepage V1 Uygulama Spesifikasyonu

**Belge kimliği:** `P-MEVZUN-WEB-HOME-V1`  
**Durum:** `LOCKED / ONAYLANDI`  
**Tarih:** 09.09.2026  
**Ürün:** Mevzun — Hukuk Çalışma Alanı  
**Kapsam:** Yalnız public homepage (`/`)  
**Birincil görsel referans:** Kullanıcı tarafından onaylanan ilk Mevzun Website mockup’ı  
**Ürün görselleri:** Kullanıcının gerçek Mevzun uygulamasından sağlayacağı screenshot asset’leri

---

## 0. Belgenin rolü

Bu belge AntiGravity için yaratıcı bir tasarım önerisi değil, doğrudan **implementation specification** dokümanıdır.

AntiGravity:

- homepage’i yeniden tasarlamayacak,
- referans görseli yalnız “ilham” olarak yorumlamayacak,
- kendi SaaS tasarım anlayışını eklemeyecek,
- yeni feature surface üretmeyecek,
- Mevzun uygulama ekranlarını HTML/CSS ile yeniden çizmeyecek,
- görsel boşlukları sahte dashboard/chatbot ile doldurmayacak.

Görev:

> **Onaylanan Mevzun homepage tasarımını aşağıdaki teknik ve görsel kurallara yüksek sadakatle gerçek Laravel uygulaması olarak kurmak.**

Öncelik sırası:
1. Bu yazılı spesifikasyon.
2. Onaylanan ilk homepage referans görseli.
3. Kullanıcının sağladığı gerçek Mevzun screenshot asset’leri.

Generative referans görseldeki bozuk metin/raster artefact kopyalanmaz; fakat layout, oran, whitespace, section ritmi, screenshot ağırlığı ve genel atmosfer visual target kabul edilir.

---

# ADIM 1 — Proje Kapsamı, Mimari Sınırlar ve Laravel Foundation

## 1.1. Temel amaç

Bu çalışma geçici landing page, statik HTML/CSS prototipi veya throwaway frontend değildir. Kurulacak repository **Mevzun’un kalıcı web uygulamasının başlangıcıdır**.

Bugünkü scope yalnız Homepage olsa da aynı Laravel projesi ileride:

```text
Public Website
├── Homepage                ← ŞİMDİ
├── Marketing Pages         ← sonra
├── Authentication          ← sonra
├── User Account            ← sonra
├── Subscription            ← sonra
├── Billing                 ← sonra
├── License Management      ← sonra
├── Device Management       ← sonra
├── Desktop API             ← sonra
└── AI Usage / Entitlement  ← sonra
```

sistemlerini taşıyabilmelidir.

**HARD RULE:** “Şimdilik landing page; basit frontend yeter” yaklaşımı yasaktır. İlk commit’ten itibaren gerçek Laravel uygulaması kurulacaktır.

## 1.2. V1 kesin kapsam

Bu task kapsamında yapılacak:

- Laravel 13 foundation
- PHP 8.4
- PostgreSQL bağlantısı
- Redis desteği
- Vite asset pipeline
- Tailwind CSS 4
- Alpine.js
- Livewire 4
- Blade marketing layout
- global design system
- Navbar
- Hero
- Problem / Value
- UYAP showcase
- AI dark showcase
- Takvim + Yerel Çalışma Alanı showcase
- Pricing + Early Access
- Footer
- responsive
- motion
- SEO foundation
- accessibility foundation
- performance foundation
- test/QA foundation

Bu task kapsamında **yapılmayacak**:

- login/register
- user account/dashboard
- subscription/billing
- payment provider
- license/device management
- desktop authentication
- Desktop API
- AI backend
- AI quota/usage ledger
- admin panel
- CMS
- auth starter kit
- marketing subpages
- product detail pages

## 1.3. Stack — LOCKED

```text
Backend:             Laravel 13
Runtime:             PHP 8.4
SSR frontend:        Blade
Reactive/server UI:  Livewire 4
Client state:        Alpine.js
Styling:             Tailwind CSS 4
Build:               Vite
Database:            PostgreSQL
Cache/future queue:  Redis
Typography:          Inter
Icons:               Hugeicons
Production:          Linux + Nginx + PHP-FPM + OPcache
```

Agent teknoloji seçimi yapmayacaktır.

## 1.4. Teknolojilerin kullanım sınırı

### Blade
Homepage’in ana render katmanıdır. Presentation section’ları Blade component olacaktır.

### Livewire
Yalnız gerçek server interaction gerektiğinde. Homepage V1’de doğal kullanım alanı Early Access formudur. Animasyon için Livewire kullanılmaz.

### Alpine.js
Yalnız küçük client-side state:
- mobile navigation
- navbar scroll state
- küçük disclosure/toggle gerekiyorsa

Homepage SPA’ye çevrilmez.

## 1.5. SPA olmayacak

Ana model:

```text
Laravel → Blade SSR → HTML
```

Kullanılmayacak:
- React
- Vue
- Svelte
- Inertia
- client-side router

Desktop/Web ayrımı bilinçlidir:

```text
MEVZUN DESKTOP
Wails + SvelteKit + Go + SQLite
```

```text
MEVZUN WEB
Laravel + Blade/Livewire + PostgreSQL
```

## 1.6. Uzun vadeli repository rolü

Repo ileride `web.php` ve `api.php` üzerinden Public Website + Account UI + Desktop API taşıyabilir. Ancak bugün boş service/table/microservice üretmek yok.

Ana ilke:

> **Future-compatible, fakat speculative architecture değil.**

## 1.7. PostgreSQL

Development başlangıcından itibaren PostgreSQL kullanılacaktır. Kolaylık için SQLite ile başlayıp sonra geçiş yapılmayacaktır.

Şimdiden gereksiz tablolar açılmaz:
- subscriptions
- licenses
- devices
- organizations
- ai_usage
- plans

## 1.8. Redis

Redis foundation’da desteklenebilir; fakat public homepage Redis unavailable olduğunda gereksiz yere çökmemelidir. Gelecekte cache, queue, rate limit, sessions vb. için kullanılabilir.

## 1.9. Environment

`.env.example` repo’da; gerçek `.env` secret içerir ve commit edilmez. DB password, app key, provider credential gibi secret’lar repository’ye girmez.

## 1.10. Önerilen proje yapısı

```text
mevzun-web/
├── app/
│   ├── Http/
│   ├── Livewire/
│   ├── Models/
│   ├── Providers/
│   ├── Services/
│   └── Support/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   └── images/
│       ├── brand/
│       └── product/
├── resources/
│   ├── css/app.css
│   ├── js/app.js
│   └── views/
│       ├── components/
│       ├── layouts/marketing.blade.php
│       └── pages/home.blade.php
├── routes/
│   ├── web.php
│   └── api.php
├── tests/
├── composer.json
├── package.json
└── vite.config.*
```

## 1.11. Blade component mimarisi

`home.blade.php` 1000+ satırlık monolith olmamalıdır. Yaklaşık responsibility sınırları:

```text
MarketingLayout
Navbar
Hero
ValueProposition
UyapSection
AiSection
WorkToolsSection
PricingSection
EarlyAccessForm
Footer
```

Ancak aşırı fragmentation da yasaktır. `HeroWord`, `HeroParagraph`, `HeroIconLabel` gibi mikro component spam yapılmayacaktır.

## 1.12. Shared primitives

Gerekliyse:
- Button
- SectionLabel
- ProductFrame
- Icon
- Container
- FeatureList

Agent generic UI kit üretmeyecek.

## 1.13. CSS organizasyonu

Tailwind ana styling sistemidir. `app.css`:
- CSS variables
- brand tokens
- body/base
- typography
- selection
- motion primitives
- reduced-motion
- gerekli küçük global kurallar

için kullanılır.

## 1.14. Magic value politikası

Rastgele `37px`, `83px`, `1437px` bolluğu yok. Temel spacing scale:

```text
4 8 12 16 20 24 32 40 48 64 80 96 120 144 160
```

Fidelity için özel değer istisna olabilir.

## 1.15. JavaScript politikası

JS yalnız:
- navbar scroll state
- mobile menu
- IntersectionObserver reveal
- form interaction (Livewire)
- gerekli küçük state

içindir.

Yok:
- virtual scrolling
- custom scroll engine
- WebGL
- 3D
- heavy client state
- büyük animation framework

## 1.16. Motion library

GSAP, Lenis, Framer Motion, Anime.js, ScrollMagic vb. bu task’ta eklenmeyecek. CSS + Alpine + native browser APIs + IntersectionObserver yeterlidir.

## 1.17. Asset mimarisi

```text
public/images/brand/
public/images/product/
```

Örnek semantik isimler:

```text
home-dark.webp
uyap-cases-light.webp
ai-dark.webp
calendar-light.webp
workspace-smart-table-light.webp
```

Screenshot’lar kullanıcı tarafından sağlanacaktır.

## 1.18. Görsel formatı

AVIF/WebP tercih edilir. UI text quality aşırı compression ile bozulmaz. PNG yalnız gerekirse. SVG logo/vector için.

## 1.19. Font

Inter self-host edilebilir. Yalnız gerekli weight’ler:

```text
400 500 600 700
```

## 1.20. Icon family

Yalnız Hugeicons. Lucide/Heroicons gibi ikinci family eklenmez.

## 1.21. Root route

`GET /` homepage render eder. Gereksiz controller abstraction veya devasa route closure logic yok.

## 1.22. SEO foundation

Layout:
- title
- description
- canonical
- OpenGraph
- Twitter/X meta
- favicon
- theme color

destekler.

## 1.23. Semantic/accessibility foundation

- `<header>`
- `<nav>`
- `<main>`
- `<section>`
- `<footer>`
- exactly one `<h1>`
- sectionlarda `<h2>`
- keyboard navigation
- visible focus
- meaningful alt text
- reduced motion

başlangıçtan.

## 1.24. Demo data

Website screenshot’larında gerçek kullanıcı/müvekkil/dosya bilgisi yok. Sentetik, tutarlı demo data.

## 1.25. AntiGravity mimari yasakları

İzinsiz:
- React/Vue/Svelte/Inertia
- Bootstrap/başka CSS framework
- başka icon pack
- MySQL/SQLite
- Node backend
- microservice
- ayrı API repo
- headless CMS
- admin panel
- auth starter kit
- payment package
- animation library

eklenmez.

## 1.26. Foundation acceptance

- composer install PASS
- npm install PASS
- npm run build PASS
- `/` HTTP 200
- PostgreSQL connection PASS
- migrations PASS
- Tailwind PASS
- Alpine PASS
- Inter PASS
- Hugeicons PASS
- console/server exception yok
- horizontal overflow yok

Foundation sırasında agent kendi kendine homepage tasarımına başlamaz.

---

# ADIM 2 — Global Design System ve Design Tokenları

## 2.1. Ana görsel yön — LOCKED

> **Modern Archive + Product-led Software Presentation**

Üç kelime:

> **Keskin — Sakin — Ürün Odaklı**

Kimlik:
- büyük temiz typography
- güçlü alignment
- kontrollü whitespace
- ince border
- çok düşük radius
- sınırlı palette
- gerçek product UI

ile oluşur.

## 2.2. AI Slop — HARD BAN

Kesinlikle kullanılmayacak:

- mor/pembe/mavi gradient
- neon glow
- glowing border
- blur blob
- aurora
- floating sparkle
- dekoratif AI stars
- 3D küre
- hologram
- glowing brain
- robot
- AI beam
- mesh gradient
- glass cards
- translucent blur panels
- floating UI cards
- cursor-follow spotlight
- neon cyan text
- gradient headline
- neural network background
- particles
- future-tech decoration

## 2.3. Shadow — HARD RULE: YOK

Homepage componentlerinde default:

```css
box-shadow: none;
```

Gölge olmayacak:
- navbar
- button
- card
- pricing
- input
- UYAP frame
- AI frame
- Takvim
- Workspace
- footer
- badges
- product frame
- screenshot
- hover states

Derinlik yalnız:
1. background tone
2. border
3. whitespace
4. contrast
5. typography hierarchy

ile.

## 2.4. Radius — ÇOK AZ

| Token | Değer |
|---|---:|
| none | 0px |
| xs | 2px |
| sm | 4px |
| md | 6px yalnız istisna |

Ana band: **0–4px**.

Normal marketing componentlerinde 8/12/16/24/32px yok.

`rounded-full` yalnız gerçek status/avatar gibi semantic öğelerde.

## 2.5. Border

Aday tokenlar:

```css
--border-subtle: #e7e9ec;
--border-default: #dfe3e7;
--border-strong: #cdd2d8;
--border-dark-subtle: #252c31;
--border-dark-default: #30383e;
```

Normal panel: 1px. Hover’da border biraz güçlenebilir.

## 2.6. Light surfaces

```css
--bg-page: #ffffff;
--bg-subtle: #f7f8fa;
--bg-muted: #f2f4f6;
--surface: #ffffff;
--surface-hover: #f5f8fa;
```

## 2.7. Text

```css
--text-primary: #172033;
--text-secondary: #596579;
--text-muted: #8791a0;
--text-inverse: #f5f7f9;
```

## 2.8. Mevzun Blue

Aday:

```css
--blue-primary: #2674c8;
--blue-hover: #1f66b5;
--blue-active: #19579b;
--blue-soft: #eaf3fb;
--blue-soft-hover: #deedf9;
--blue-text: #216bb9;
```

Final renk Desktop Mevzun brand tokenlarıyla doğrulanır. Yeni marketing blue icat edilmez.

## 2.9. Accent sınırı

Mavi:
- CTA
- text link
- section label/index
- active nav
- icon vurgu
- check

için.

Yok:
- full-blue headline
- her icon için mavi kutu
- her border mavi
- her hover blue surface

## 2.10. AI Dark palette

```css
--ai-bg: #11171b;
--ai-surface: #171e23;
--ai-border: #2b343b;
--ai-text-primary: #f5f7f8;
--ai-text-secondary: #a9b2ba;
```

AI purple yok.

## 2.11. Gradient/background texture

**Gradient yok.**

**Texture yok.**

Yok:
- dot grid
- noise
- pattern
- diagonal lines
- grid
- blob

## 2.12. Typography

Font: Inter.

Weights:
- 400 body
- 500 UI
- 600 headings/CTA
- 700 yalnız gerektiğinde
- 800/900 yok

Scale:

| Rol | Boyut | Weight |
|---|---:|---:|
| Hero H1 | 56–64px | 600 |
| Large H2 | 44–52px | 600 |
| Section H2 | 36–48px | 600 |
| H3 | 20–24px | 600 |
| Lead | 17–18px | 400 |
| Body | 16px | 400 |
| Small | 14px | 400/500 |
| Label | 12px | 600 |

Hero line-height 1.05–1.10. Section heading ~1.12–1.18.

## 2.13. Text measure

Hero H1 ~520–600px. Section heading ~420–580px. Body ~60–70 chars / max ~38rem.

## 2.14. Section label

Örnek:

```text
AVUKATLAR İÇİN
01 / UYAP ENTEGRASYONU
02 / YAPAY ZEKÂ
```

12px / 600 / uppercase / 0.10–0.14em tracking.

## 2.15. Spacing

```text
4 8 12 16 20 24 32 40 48 64 80 96 120 144 160
```

Major section: 144–160px. Normal: ~120px. Compact: ~80–112px.

## 2.16. Containers / grid

```text
Standard:      1280px
Product Wide:  1440px
Text:           760px
Grid:          12 columns
Gap:            24–32px
```

Horizontal padding:
- 40 large desktop
- 32 desktop
- 24 tablet
- 20 mobile
- 16 very small

## 2.17. Card yaklaşımı

Ana primitive card değildir. Öncelik:
- section
- grid
- divider
- surface change

Gerekli card:

```css
background:#fff;
border:1px solid var(--border-subtle);
border-radius:4px;
box-shadow:none;
```

## 2.18. Buttons

Primary:
- solid Mevzun blue
- white
- 1px border
- 4px
- no shadow

Secondary:
- white/transparent
- dark
- 1px border
- 4px
- no shadow

Height:
- navbar ~40–42
- normal 44–46
- Hero ~48

Text 14–15px / 500–600.

## 2.19. Icons

Hugeicons:
- 16 compact
- 18 navbar
- 20 feature
- 24 section

Varsayılan icon container yok.

## 2.20. Input

44–46px, 1px border, 4px radius, no shadow.

Focus:

```css
outline:2px solid var(--blue-primary);
outline-offset:2px;
```

## 2.21. ProductFrame

- 1px border
- 4px radius
- no shadow
- overflow hidden
- real aspect ratio

Screenshot stretch yok.

## 2.22. Surface rhythm

Örnek:

```text
White
Soft Gray
White
Dark AI
White
Soft Gray
White Footer
```

## 2.23. Fotoğraf/dekorasyon

Homepage V1’de insan/stok fotoğraf yok. AI illustration yok. Görsel ana kaynak gerçek Mevzun UI.

## 2.24. Alarm utility’leri

Şunların yaygın kullanımı QA alarmıdır:

```text
rounded-xl
rounded-2xl
rounded-3xl
shadow-*
drop-shadow-*
backdrop-blur-*
blur-*
bg-gradient-*
```

## 2.25. HARD RULES

> **Kutucuklarda box-shadow kullanılmayacaktır.**

> **Derinlik border, yüzey tonu ve spacing ile sağlanacaktır.**

> **Mevzun Website jenerik AI-generated SaaS / AI slop estetiğine kaymayacaktır.**

> **Ana radius bandı 0–4px.**

> **Gradient, glassmorphism, neon, glow, decorative blur yok.**

---

# ADIM 3 — Page Shell, Grid Geometrisi ve Navbar

## 3.1. Semantic shell

```text
<body>
  <header><nav /></header>
  <main>
    <section id="hero" />
    <section id="product" />
    <section id="uyap" />
    <section id="ai" />
    <section id="work-tools" />
    <section id="pricing" />
  </main>
  <footer />
</body>
```

## 3.2. Ana alignment

Navbar logo, Hero text, Value, UYAP text, Pricing intro ve Footer brand aynı ana grid ekseninde.

## 3.3. Container

Standard 1280px. Büyük product visual 1440px. Full-width AI background içeriği yine constrained.

## 3.4. Horizontal overflow — HARD RULE

Hiçbir viewport’ta yatay scroll yok. `overflow-x-hidden` ile hata gizlemek kabul edilmez.

## 3.5. Scroll

Native smooth anchor scroll. Sticky navbar offset için `scroll-margin-top` ~88–104px. Browser scroll restoration korunur.

## 3.6. Navbar

- semantic `<header><nav>`
- sticky top
- her zaman görünür
- başlangıç ~68–72px
- scroll sonrası visual compact ~62–64px
- threshold ~48–64px
- hide-on-scroll yok
- transition ~180–240ms ease-out
- solid white
- 1px bottom border
- **shadow yok**
- **blur/glass yok**

Structural footprint stabil tutulur; scroll state layout shift üretmez.

## 3.7. Brand

```text
[logo] Mevzun
       Hukuk Çalışma Alanı
```

Logo ~28–32px. Brand 15–16px/600. Descriptor 11–12px muted. Scroll sırasında logo/text zıplamaz.

## 3.8. Desktop navigation

```text
Ürün
UYAP
Yapay Zekâ
Fiyatlandırma
İletişim
```

V1’de Ürün dropdown yok. Anchor links.

Nav 13–14px / 500, spacing ~28–36px.

Hover yalnız color. Active scroll-spy opsiyonel; mavi text veya 1px underline. Pill active state yok.

## 3.9. Navbar CTA

```text
Mevzun'u deneyin
```

- solid blue
- 4px
- no shadow
- ~40–42px

Kullanıcı sistemi yokken target:

```text
#early-access
```

## 3.10. Layout tekniği

CSS Grid `auto 1fr auto` uygundur. Nav visual center dengesi QA ile kontrol edilir.

## 3.11. Mobile navbar

Yaklaşık <1024:

```text
[Logo + Mevzun]                 [Menu]
```

Menu button Hugeicons, min 44px, accessible label.

Menu navbar altında compact panel:
- white
- top/bottom border
- radius yok
- shadow yok
- full-screen overlay yok

Links:

```text
Ürün
UYAP
Yapay Zekâ
Fiyatlandırma
İletişim
────────
Mevzun'u deneyin
```

Animation:
- open opacity + translateY(-4→0), 160–200ms
- close 120–160ms
- no item stagger
- Escape close
- `aria-expanded`, `aria-controls`

## 3.12. Section IDs

```text
#product
#uyap
#ai
#work-tools
#pricing
#early-access
```

## 3.13. Full-width transitions

White ↔ soft gray ↔ dark geçişleri hard edge. Gradient fade yok.

## 3.14. Z-index

Semantic small scale:
- base 0
- content 10
- sticky 30
- overlay 40
- modal 50

9999 spam yok.

## 3.15. AI section navbar davranışı

Dark AI section’a gelince navbar dark’a dönüşmez. Navbar light sticky devam eder.

## 3.16. Large/ultrawide

1920/2560’da container sınırsız büyümez. Whitespace artar.

## 3.17. Navbar HARD RULES

> **Glassmorphism, blur, shadow yok.**

> **Navbar scroll sırasında kaybolmaz.**

> **State transition jitter/layout shift üretmez.**

> **Tüm ana content aynı grid axis’e oturur.**

> **Horizontal overflow sıfır tolerans.**


# ADIM 4 — Hero Section

## 4.1. Amaç

Hero, ziyaretçinin ilk 3–5 saniyede şu üç soruya cevap bulmasını sağlar:

1. Mevzun nedir?
2. Kim için?
3. Neden farklı?

Ana mesaj:

> Mevzun, avukatların UYAP dosyalarını, günlük çalışma düzenini ve yapay zekâ destekli hukuki işleri tek masaüstü çalışma alanında birleştiren profesyonel bir hukuk yazılımıdır.

Bu uzun açıklama doğrudan H1 olarak kullanılmaz; Hero’nun metin hiyerarşisi aşağıdaki gibi olacaktır.

## 4.2. Layout — LOCKED

Onaylanan ilk referans görseldeki gibi **split hero** kullanılacaktır.

```text
SOL METİN                       SAĞ ÜRÜN GÖRSELİ
```

Centered hero kullanılmayacaktır.

Desktop grid yaklaşık:

```text
5 kolon text
7 kolon product visual
```

Sağ taraf görsel olarak daha baskın olmalı.

## 4.3. Container

Ana içerik 1280px standard container içinde. Product visual sağ sınırda daha geniş hissedebilir fakat uncontrolled overflow yok.

## 4.4. Vertical geometry

Text ve product visual başlangıçta `align-items:center`. Optik fidelity için küçük kontrollü offset kabul edilebilir; rastgele magic margin yok.

Hero tam `100vh` olmayacaktır. Yaklaşık doğal/min-height:

```text
680–760px
```

1440×900 ana viewport’ta:
- navbar tamamen görünür,
- Hero ana mesaj tamamen görünür,
- CTA görünür,
- product visual tamamen veya büyük ölçüde görünür,
- bir sonraki section’ın başlangıcı hafifçe görünmeye başlayabilir.

## 4.5. Background

```text
#FFFFFF
```

veya çok hafif off-white.

Kesinlikle yok:
- gradient
- radial glow
- blob
- dot grid
- mesh
- noise
- decorative background

## 4.6. Eyebrow

```text
AVUKATLAR İÇİN
```

Stil:
- 12px
- 600
- uppercase
- letter-spacing ~0.12em
- Mevzun Blue

## 4.7. H1 — LOCKED

> **Hukuki çalışmalarınız için tek bir çalışma alanı.**

Desktop doğal satır hedefi:

```text
Hukuki çalışmalarınız için
tek bir çalışma alanı.
```

Fakat HTML’e gereksiz `<br>` doldurulmaz; width ile doğal kırılım tercih edilir.

Stil:
- 56–64px
- 600
- line-height 1.05–1.10
- hafif negative tracking
- tek dark color

Yok:
- gradient text
- mavi keyword
- alternating color
- 800/900 weight

## 4.8. Body copy

Önerilen final yön:

> UYAP dosyalarınızı yönetin, davalarınız üzerinde çalışın, takviminizi takip edin ve yapay zekâ desteğiyle hukuki işlerinizi hızlandırın.

Maksimum 2–3 desktop satırı.

Stil:
- 17–18px
- 400
- 1.6 line-height
- text-secondary
- max width ~500–560px

## 4.9. CTA row

```text
[ Mevzun'u keşfet ]   [ Nasıl çalışır? ]
```

Primary:
- target `#product`
- solid Mevzun Blue
- white text
- 4px radius
- shadow none
- ~48px height
- horizontal padding 20–24px

Secondary:
- target `#uyap`
- white/transparent
- 1px border
- dark text
- same height
- 4px radius
- shadow none

Hover:
- primary blue darkens, optional max -1px translate
- secondary soft-gray surface + slightly stronger border
- no scale
- no shadow

## 4.10. Mini feature strip

CTA altında flat icon+label row:

```text
UYAP Entegrasyonu
Yapay Zekâ Desteği
Güvenli ve Yerel
Masaüstü Uygulama
```

Bunlar card değildir.

Hugeicons ~16–18px. Text ~13px/500. Desktop tek row; mobile 2×2 veya wrap.

“Güvenli ve Yerel” copy, AI’ın tamamının local inference yaptığı anlamına gelmeyecek biçimde ileride final copy pass’ında gözden geçirilebilir; aşırı privacy claim yapılmayacaktır.

## 4.11. Ana product visual

Hero’nun sağ tarafında **kullanıcının gerçek Mevzun uygulamasından sağlayacağı Ana Sayfa screenshot’ı** kullanılacaktır.

Tercih: Dark theme.

Screenshot içinde ideal olarak:
- sidebar
- global search
- tabs
- summary strip
- dashboard panelleri
- sentetik demo data

görünür.

AntiGravity:
- screenshot üretmez,
- dashboard taklit etmez,
- browser chrome eklemez,
- laptop/MacBook mockup eklemez.

## 4.12. ProductFrame geometry

```text
1px neutral border
4px radius
box-shadow none
overflow hidden
```

Screenshot doğal aspect ratio.

Yaklaşık desktop max-width 720–780px; fidelity’ye göre ayarlanabilir.

Default rotate 0 / neredeyse düz. Perspective ancak referans açıkça gerektiriyorsa çok düşük seviyede.

## 4.13. Product visual interaction

Hero, homepage’in en interaktif screenshot’ı olabilir.

Hover maksimum:

```text
translateY(-2px)
scale(1.003–1.005)
```

~200–240ms ease-out.

**Mouse-follow parallax yok.**
**Tilt yok.**
**Zoom modal yok.**
**Glow yok.**
**Floating metric cards yok.**

## 4.14. Initial motion

Hero load:
- text group opacity + max 8–12px Y
- visual ~80ms sonra
- 350–450ms
- toplam sequence <700ms

Eyebrow/headline/body/CTA’yı ayrı ayrı uzun stagger ile oynatmak yok.

## 4.15. Responsive

Tablet/mobile:

```text
Eyebrow
H1
Body
CTA
Mini feature strip
Screenshot
```

Left alignment korunur.

Mobile H1 yaklaşık 36–40px / 600.

Desktop screenshot mobile’da anlamsız küçülürse kullanıcı ayrı mobile crop sağlar; agent rastgele kötü `object-cover` yapmaz.

## 4.16. Performance

Hero screenshot:
- above-the-fold
- lazy değil
- eager/high priority
- explicit width/height
- optimized WebP/AVIF
- CLS yaratmaz

## 4.17. Accessibility

Alt text örneği:

> Mevzun masaüstü uygulamasında davalar, duruşmalar, görevler ve hızlı erişim panellerinin yer aldığı ana çalışma ekranı.

## 4.18. Yasak Hero patternleri

- video background
- canvas/WebGL
- typewriter
- rotating words
- animated counters
- fake social proof
- “500+ avukat”
- floating cards
- glowing screenshot
- gradient headline
- AI orb

## 4.19. HARD RULES

> **Hero split composition olacaktır: solda mesaj, sağda gerçek Mevzun UI.**

> **Hero’nun ana görseli illüstrasyon değil gerçek product screenshot’tır.**

> **Gradient, glow, blob, noise, mesh, particle, AI decoration yok.**

> **Screenshot üzerinde/çevresinde box-shadow yok.**

> **Floating metrics/badges/tooltips yok.**

> **Product geometry hiçbir interaction sırasında bozulmayacak.**

---

# ADIM 5 — Problem / Value Proposition Section

## 5.1. Amaç

Hero ürünün “ne olduğunu” söyler. Bu bölüm:

> **“Mevzun neden gerekli?”**

sorusunu yanıtlar.

Ziyaretçi section sonunda:

> UYAP ayrı, Excel ayrı, takvim ayrı, AI ayrı olmak zorunda değil; Mevzun bunları aynı çalışma bağlamında topluyor.

mesajını anlamalı.

## 5.2. Background / rhythm

Hero White → Value Soft Gray.

```text
#F7F8FA
```

Spacing:
- ~120–144px top
- ~120–144px bottom

## 5.3. Layout

Desktop split:

```text
SOL: Büyük editorial statement
SAĞ: 2×2 value grid
```

Yaklaşık:
- 5 columns intro
- 1 column air
- 6 columns grid

## 5.4. Eyebrow

```text
ÇALIŞMA DÜZENİ
```

“Neden Mevzun?” gibi template marketing dili tercih edilmez.

## 5.5. Headline — LOCKED

> **Dava dosyanız UYAP'ta, notlarınız Excel'de, takviminiz başka yerde olmak zorunda değil.**

Stil:
- 40–48px
- 600
- 1.12–1.18
- tek color
- max width ~500–560px

## 5.6. Supporting copy

> Mevzun; UYAP’taki dava dosyalarınızı, günlük işlerinizi, çalışma kayıtlarınızı ve yapay zekâ destekli hukuki süreçleri aynı çalışma alanında bir araya getirir.

17–18px / 400 / text-secondary.

## 5.7. Kapanış mesajı

Sol blok sonunda:

> **Mevzun bunları aynı çalışma alanında birleştirir.**

16–18px / 500–600.

## 5.8. Sağ taraf — 4 value group

```text
UYAP
Çalışma Alanı
Yapay Zekâ
Verimlilik
```

Bunlar **card olmayacak**.

2×2 editorial grid:

```text
UYAP              | Çalışma Alanı
------------------+----------------
Yapay Zekâ        | Verimlilik
```

Yalnız internal 1px divider. Outer rounded card yok.

## 5.9. İçerik

### UYAP
- Dava dosyaları
- Evraklar
- Safahat ve tebligatlar

### Çalışma Alanı
- Takvim
- Görevler
- Müvekkiller

### Yapay Zekâ
- Dava analizi
- Hukuki araştırma
- Taslak üretimi

### Verimlilik
- Tek çalışma alanı
- Dosya bağlamı
- Daha az uygulama geçişi

## 5.10. Item style

- transparent background
- 0 radius
- no shadow
- 32–40px inner breathing room
- icon 20–24px
- title 18–20px / 600
- list 14–15px
- icon doğrudan; renk Mevzun Blue veya dark neutral

AI için giant sparkle icon kullanılmayacaktır.

## 5.11. Interaction

Blocks clickable değilse hover yok.

Bu section static editorial content.

Scroll reveal bütün intro ve grid grubu seviyesinde; her list item stagger yok.

## 5.12. Mobile

Intro üstte.

Value items tek column:
- UYAP
- divider
- Çalışma Alanı
- divider
- Yapay Zekâ
- divider
- Verimlilik

Mobile’da da card’a dönüşmez.

## 5.13. Copy tone

Yok:
- “Hukukta devrim”
- “kabus sona eriyor”
- fear marketing
- UYAP’ı rakip gibi kötüleme
- Excel’i küçümseme

## 5.14. AI balance

AI diğer üç gruptan daha büyük, daha parlak, daha renkli olmayacaktır.

## 5.15. HARD RULES

> **Problem/Value section dört ayrı SaaS kartından oluşmayacaktır.**

> **UYAP, Çalışma Alanı, AI ve Verimlilik eşit görsel ağırlıktadır.**

> **Shadow, gradient, büyük radius, floating decoration yok.**

> **Bu section özellik satmaktan önce parçalanmış çalışma problemini anlatır.**

---

# ADIM 6 — UYAP Entegrasyonu Section

## 6.1. Rol

İlk büyük gerçek product showcase.

Ziyaretçi şu akışı anlamalı:

```text
UYAP'a bağlan
↓
Dosyaları keşfet
↓
Bağlı davaları Mevzun'da gör
↓
İlgili dosyayı aç
↓
Mevzun içinde çalış
```

## 6.2. Positioning

Yanlış:

> Mevzun UYAP’ın yerine geçer.

Doğru:

> Mevzun, UYAP’taki dava dosyalarını kendi çalışma alanınıza taşıyarak günlük çalışmanızı aynı bağlamda sürdürmenizi sağlar.

## 6.3. Pazarlama claim guardrails

Saha testi tamamlanmadan website’de kesin iddia edilmeyecek:

- %100 otomatik
- tüm UYAP işlemleri
- UYAP’a hiç dönmeden
- tek tıkta her şeyi indir
- kesintisiz bağlantı
- resmî UYAP entegrasyonu
- UYAP tarafından onaylı
- guaranteed sync speed

## 6.4. Label

```text
01 / UYAP ENTEGRASYONU
```

## 6.5. Background / spacing

White.

~144–160px top/bottom.

## 6.6. Layout

```text
Text left
Real product screenshot right
```

Yaklaşık 5/7.

## 6.7. Headline — LOCKED

> **UYAP dosyalarınız çalışma alanınızda.**

44–48px / 600 / 1.1–1.15.

## 6.8. Description

Önerilen final yön:

> UYAP’a bağlandıktan sonra bağlı dava dosyalarınızı keşfedin, Davalar ekranında görüntüleyin ve ihtiyaç duyduğunuz dosyayı doğrudan kendi çalışma alanınızda açın.

> Evrakları ve dava içeriğini ihtiyaç duyduğunuzda içe aktararak günlük çalışmanızı Mevzun üzerinden sürdürebilirsiniz.

## 6.9. Feature list

- E-imza ile UYAP oturumuna bağlanın
- Bağlı dava dosyalarınızı keşfedin
- Davaları tek çalışma alanında görüntüleyin
- Dosya içeriğini ihtiyaç duyduğunuzda içe aktarın

List style:
- editorial dash veya küçük blue Hugeicons
- 14–15px
- giant green checks yok

## 6.10. Text CTA

Ayrı `/uyap` route yoksa “UYAP hakkında daha fazla” dead link eklenmeyecek.

## 6.11. Product screenshot

Kullanıcı gerçek **Davalar ekranı** screenshot’ını sağlayacaktır.

AntiGravity:
- fake UI üretmez
- table/mock dashboard çizmez
- screenshot’ın içeriğini yeniden tasarlamaz

Tercih: light theme.

## 6.12. Screenshot frame

```text
1px border
4px radius
shadow none
overflow hidden
```

Browser/laptop mockup yok.

## 6.13. Crop

Gerekirse görünmeli:
- yeterli app chrome
- Davalar header
- filter/summary
- case list

Kötü object-cover yok. Kullanıcı gerekiyorsa ayrı crop sağlar.

## 6.14. Floating detail UI

V1’de **yok**.

Tek güçlü screenshot.

## 6.15. Interaction / motion

Hero’dan daha sakin:
- hover border slightly stronger
- optional max -1px Y
- no scale zoom
- text/image reveal ~350–450ms
- no sideways 100px slide

## 6.16. Teknik internals homepage’de yok

Yok:
- managed Chromium
- XHR/fetch
- DOM
- transport
- runner
- session internals

## 6.17. UYAP brand

UYAP official logo V1’de kullanılmayacak. Text yeterli.

## 6.18. Responsive

Tablet/mobile:

```text
Label
Headline
Description
Features
Screenshot
```

Screenshot gerekiyorsa user-supplied mobile crop.

## 6.19. Performance/accessibility

Below fold:
- lazy
- async decode
- explicit dimensions

Alt text örneği:

> Mevzun Davalar ekranında UYAP’tan keşfedilen dava dosyalarının listesi.

## 6.20. HARD RULES

> **Ana görsel kullanıcı-supplied gerçek Mevzun Davalar screenshot’ıdır.**

> **AntiGravity fake UYAP UI üretmeyecektir.**

> **Floating overlays/cards yok.**

> **Unverified/resmî entegrasyon claim’leri yok.**

> **Shadow, gradient ve yüksek radius yok.**

---

# ADIM 7 — AI Dark Section

## 7.1. Ana fikir

> **AI bağımsız chatbot değil, dava bağlamı üzerinde çalışan bir çalışma katmanıdır.**

UYAP section sonrası narrative:

```text
UYAP
↓
Dava bağlamı Mevzun'a gelir
↓
AI
↓
Bu bağlam üzerinde analiz/araştırma/taslak
```

## 7.2. Label

```text
02 / YAPAY ZEKÂ
```

## 7.3. Headline — LOCKED

> **Yapay zekâ, dava bağlamını bilir.**

## 7.4. Background

Full-width solid dark:

```text
#11171b
```

veya Desktop dark tokenına yakın.

**Gradient yok.**

## 7.5. AI slop HARD BAN

Bu section’da özellikle yasak:

- purple gradient
- blue-purple gradient
- radial glow
- neon border
- sparkle
- mesh
- aurora
- glassmorphism
- particle
- 3D object
- hologram
- robot
- neural background
- cursor-follow spotlight
- floating prompt/badge
- glowing screenshot

## 7.6. Geometry

Full-width background.

Content 1280px.

Yaklaşık:

```text
5 text / 7 screenshot
```

Spacing ~144–160px.

## 7.7. Headline style

44–52px / 600 / off-white.

Tek color. Gradient/partial blue yok.

## 7.8. Description

> Mevzun’un yapay zekâ katmanı, üzerinde çalıştığınız dava dosyasının bağlamını kullanarak içeriği analiz eder, önemli noktaları öne çıkarır, hukuki araştırmada yardımcı olur ve taslak çalışmalar üretir.

## 7.9. Homepage AI capability set

- Dava analizi ve Case Brief
- Hukuki araştırma ve emsal desteği
- Taslak dilekçe/çalışma metni
- Kaynaklarıyla birlikte inceleme

Liste editorial dash; giant check/spackle yok.

## 7.10. Claim guardrails

Homepage’de gösterilmeyecek:
- exact model/provider
- GPT/Gemini/Qwen/Luna branding
- token
- quota
- günlük/aylık limit
- unlimited AI
- fixed speed
- %100 accuracy
- “hallucination yapmaz”
- guaranteed source
- “veriniz asla cihazdan çıkmaz”

## 7.11. AI screenshot

Kullanıcı gerçek Mevzun AI ekranını sağlayacaktır.

AntiGravity:
- fake chatbot üretmez
- user/assistant bubble üretmez
- fake legal answer üretmez
- Case Brief mockup uydurmaz

Screenshot hazır değilse yalnız final-ratio placeholder; fake UI yok.

## 7.12. ProductFrame

```text
1px dark border
4px radius
shadow none
```

Dark screenshot/background separation yalnız:
- border
- surface tone
- whitespace

ile.

## 7.13. Geometry/interaction

- rotate 0
- perspective yok
- hover only slight border emphasis
- glow yok
- screenshot zoom yok

## 7.14. CTA

Ayrı AI route yoksa dead link yok. Bu section’da büyük primary CTA zorunlu değildir.

## 7.15. Section itself dark

Dark rounded card değil. Section’ın kendisi full-width dark ve radius 0.

## 7.16. Responsive

Tablet/mobile:

```text
02 / YAPAY ZEKÂ
Headline
Description
Feature list
Screenshot
```

## 7.17. Motion

Minimal group reveal.

Yok:
- typewriter
- streaming
- cursor animation
- chat bubble animation

## 7.18. AI autonomy language

Yok:
- “davanızı yönetir”
- “stratejiyi belirler”
- “sizin yerinize karar verir”
- “dilekçeyi otomatik hazırlar ve gönderir”

Tercih:
- analiz edin
- araştırın
- taslak oluşturun
- inceleyin

## 7.19. HARD RULES

> **AI section homepage’in tek ana dark showcase alanıdır.**

> **Dark görünüm AI klişesi için değil page rhythm için.**

> **Gradient, glow, neon, sparkle, mesh, glass, particle, 3D kesinlikle yok.**

> **Gerçek user-supplied AI screenshot kullanılır. Fake chatbot yok.**

> **Box-shadow yok.**

> **Provider/model/token/quota/unlimited/accuracy guarantee yok.**

---

# ADIM 8 — Takvim + Yerel Çalışma Alanı Section

## 8.1. Rol

UYAP ve AI’dan sonra ürün kapsamını tamamlar:

> **Mevzun günlük hukuk çalışma düzenini de kapsıyor.**

## 8.2. Aynı section — LOCKED

Takvim ve Yerel Çalışma Alanı ayrı dev sectionlar değil; aynı ana bölümde iki eşit showcase.

## 8.3. Background / spacing

AI dark sonrası White hard cut.

~144–160px top/bottom.

## 8.4. Grid

Desktop:

```text
6 columns Takvim
6 columns Workspace
```

Gap 32–40px.

İki rounded card **değil**.

Outer border/shadow/radius yok.

## 8.5. Equal visual balance

- iki label aynı baseline
- headline top positions dengeli
- screenshot top lines yakın
- screenshot widths dengeli
- copy uzunlukları kontrollü

Screenshotlar aynı ratio olmak zorunda değil; stretch yok. Visual height farkı düşük tutulur.

## 8.6. Takvim label

```text
03 / TAKVİM VE GÖREV YÖNETİMİ
```

## 8.7. Takvim headline — LOCKED

> **Gününüzü, dosyalarınızla birlikte yönetin.**

~36–42px / 600.

## 8.8. Takvim copy

> Duruşmalarınızı, görevlerinizi ve günlük işlerinizi tek takvim üzerinde görün; her kaydı ilgili dava bağlamıyla birlikte takip edin.

Feature set:
- Ay ve hafta görünümü
- Duruşma ve görev takibi
- Dosyayla ilişkili çalışma bağlamı

## 8.9. Takvim screenshot

Kullanıcının gerçek Takvim sayfası screenshot’ı. Agent fake calendar üretmez.

Tercih: light theme.

Frame:
- 1px
- 4px
- no shadow

## 8.10. Workspace label

```text
04 / YEREL ÇALIŞMA ALANI
```

## 8.11. Workspace headline — LOCKED

> **Verilerinizi size özel şekilde yönetin.**

## 8.12. Workspace gerçek scope — HARD RULE

Yalnız Smart Table:

- XLSX import
- CSV import
- sıfırdan tablo
- native table
- search
- filter
- sort
- column types
- aggregate footer
- UYAP relation

Yok:
- general file manager
- PDF/DOCX workspace
- folder system
- Office clone
- “Excel’in yerini alır”

## 8.13. Workspace copy

> XLSX veya CSV verilerinizi içe aktarın ya da sıfırdan bir Smart Table oluşturun. Filtreleyin, sıralayın ve gerektiğinde satırları UYAP dosyalarıyla ilişkilendirin.

Feature set:
- XLSX / CSV içe aktarma
- Smart Table üzerinde çalışma
- UYAP dosyalarıyla ilişkilendirme

## 8.14. Workspace screenshot

Kullanıcının gerçek Smart Table screenshot’ı. Agent fake spreadsheet üretmez.

Tercih: light theme.

## 8.15. Interaction / motion

İki screenshot aynı:
- border transition
- optional max -1px Y
- no shadow
- no zoom

Section reveal:
- left 0ms
- right max +80ms
- opacity + ~10px Y
- no sideways slide

## 8.16. Responsive

Mobile:

```text
Takvim
↓
~96–120px / divider
↓
Workspace
```

Card’a dönüşmez.

## 8.17. CTA

Detail route yoksa CTA yok. Dead link yok.

## 8.18. HARD RULES

> **Takvim + Workspace aynı section’da eşit showcase’dir.**

> **Rounded card değildir.**

> **Screenshotlar gerçek user assets.**

> **Stretch/shadow yok.**

> **Workspace yalnız Smart Table scope ile anlatılır.**

> **Takvim bağımsız calendar değil dava/duruşma/görev bağlamında çalışma yüzeyidir.**


# ADIM 9 — Fiyatlandırma + Early Access Section

## 9.1. Rol

Bu bölüm homepage’in ticari aksiyon alanıdır. Önceki section’lar ürünü anlatır; burada soru:

> **“Bunu nasıl edineceğim?”**

## 9.2. Ticari model — LOCKED

> **Tek paket, tek fiyat.**

Yok:
- Starter
- Professional
- Enterprise
- üçlü pricing matrix

## 9.3. Desktop composition

Onaylanan referans yönünde üçlü horizontal yapı:

```text
Pricing Intro
Plan
Early Access
```

Yaklaşık 4/4/4 kolon. Optik fidelity için küçük ayar olabilir.

Bu section klasik ortalanmış 3-card pricing template değildir.

## 9.4. Background / spacing

Soft gray:

```text
#F7F8FA
```

~112–128px top/bottom.

## 9.5. Headline — LOCKED

> **Şeffaf, sade, tek paket.**

~36–42px / 600.

Supporting copy:

> Tüm temel Mevzun özellikleri tek abonelik altında. Karmaşık paketler veya özellik kilitleri olmadan.

“Sınırsız” kelimesi kullanılmayacaktır.

## 9.6. Plan adı

Referans display için:

```text
Mevzun Pro
```

Bu isim gelecekte ticari paket adı olarak ayrıca değiştirilebilir.

## 9.7. Referans fiyat

```text
₺1.500 / ay
```

Bu, mevcut ticari hedef/referans değerdir; tek bir config/content noktasından değiştirilebilir olmalıdır.

Fiyat değerini birden fazla Blade bölümüne dağınık hardcode etme.

## 9.8. Fiyat görseli

- price 40–48px / 600 civarı
- `/ ay` 16px / secondary
- no animated counter
- no strikethrough

## 9.9. Pricing surface

Plan bağımsız nesne olduğundan kontrollü panel kullanılabilir:

```text
white surface
1px border
4px radius
box-shadow none
```

Referans fidelity daha flat görünüm gerektiriyorsa divider-only yapı tercih edilebilir.

## 9.10. SaaS pricing anti-patternleri — HARD BAN

Yok:
- “Most Popular”
- “En Popüler”
- “Best Value”
- raised middle card
- fake discount
- crossed old price
- annual/monthly toggle
- countdown
- giant green checks
- glow
- gradient
- high-radius card

## 9.11. Plan feature list

Öneri:

- UYAP dosya yönetimi
- Takvim, görev ve çalışma araçları
- Mevzun AI özellikleri
- Yerel Çalışma Alanı

AI için token/request/unlimited limiti homepage’de gösterilmez.

## 9.12. Purchase CTA

Kullanıcı/abonelik sistemi hazır olmadığı için:

```text
Şimdi satın al
```

kullanılmayacaktır.

Conversion Early Access alanından.

## 9.13. Early Access amacı

- lansman öncesi ilgi toplamak
- CTA’ları dead end olmaktan çıkarmak
- ürün hazır olduğunda iletişim kurmak

Bu bir kullanıcı hesabı değildir.

## 9.14. Early Access copy

Başlık:

> **Mevzun hazır olduğunda haberdar olun.**

Supporting copy:

> Erken erişim ve ürün duyuruları için e-posta adresinizi bırakın.

## 9.15. Form alanı

Yalnız:

```text
E-posta adresi
```

İsim, soyisim, telefon, büro yok.

## 9.16. Form layout

Desktop:
```text
[email input              ][ Katıl ]
```

Mobile:
```text
[email input]
[Katıl]
```

## 9.17. Geometry

Input + button:
- 44–46px
- 1px border
- 4px radius
- no shadow

Visible/accessible label bulunur. Placeholder:

```text
E-posta adresiniz
```

## 9.18. Livewire scope

Form gerçekten aktive edilirse **Livewire 4** kullanılabilir.

Örnek sınır:

```text
app/Livewire/EarlyAccessForm.php
resources/views/livewire/early-access-form.blade.php
```

Pricing section’ın tamamı Livewire değildir.

## 9.19. PostgreSQL lead table

Öneri:

```text
early_access_leads
```

Minimal schema:

```text
id
email
source
created_at
updated_at
```

`source` örneğin `homepage`.

## 9.20. Data minimization

Sadece gerekli veri. Password/account/session yok.

## 9.21. Validation

Server-side:
- required
- email
- sensible max length
- trim
- lowercase normalization

Email unique index ile korunabilir.

## 9.22. Duplicate behavior

Aynı email ikinci row oluşturmaz. Kullanıcıya sakin feedback verilir.

## 9.23. Success state

Öneri:

> **Teşekkürler. Erken erişim listesine eklendiniz.**

Yok:
- confetti
- sparkle
- giant success animation

Sadece minimal fade.

## 9.24. Error state

Inline error text.

Yok:
- shake
- glow
- animated warning

## 9.25. Loading state

Submit sırasında:
- button disabled
- `Kaydediliyor…` veya minimal spinner

Double submit engellenir.

## 9.26. Rate limiting

Public form için server-side makul rate limit.

Başlangıçta captcha yok. Spam gerçekten sorun olursa ayrı karar.

## 9.27. Privacy / KVKK production gate

E-posta toplandığı için amaç açık belirtilir.

Production’da lead form aktive edilmeden önce gerçek Privacy/KVKK destination bulunmalıdır.

Dead:

```text
href="#"
```

legal link kullanılmaz.

## 9.28. User system separation

Early Access kaydı:
- `users` değildir
- password oluşturmaz
- auth yapmaz
- otomatik account yaratmaz

## 9.29. Email provider

Bu Homepage task’ında Resend/Mailgun/SES vb. provider zorunlu değil. İlk iş DB capture.

## 9.30. Admin

Lead’ler için admin panel yapılmayacak.

## 9.31. Column separation

Intro / Plan / Early Access arasında 1px vertical divider kullanılabilir. Bu, üç rounded card oluşturmadan geometri verir.

## 9.32. Icons/decorations

Yok:
- coin
- crown
- rocket
- diamond
- premium badge

## 9.33. Motion

Section çok hafif reveal alabilir. Price count animation yok.

## 9.34. Responsive

Tablet:
- intro full row
- plan + early access 2 column mümkün

Mobile:
```text
Intro
Plan
Early Access
```

Vertical divider yerine horizontal 1px lines.

## 9.35. Form semantics/accessibility

Gerçek:
- `<form>`
- `<label>`
- `<input type="email" autocomplete="email">`
- `<button type="submit">`

Error association, `aria-invalid` gerektiğinde, success/error için uygun live region.

## 9.36. Form testleri

Aktifse en az:
1. valid email save
2. invalid reject
3. empty reject
4. duplicate no second row
5. success state
6. rapid/double submit controlled

## 9.37. HARD RULES

> **Tek paket, tek fiyat.**

> **Çoklu paket matrix, Most Popular, fake discount, annual toggle, countdown yok.**

> **Pricing yüzeylerinde box-shadow yok; radius max 4px.**

> **Early Access kullanıcı hesabı oluşturmaz.**

> **Livewire yalnız gerçek server form ihtiyacında kullanılır.**

> **Privacy/KVKK hazır olmadan production lead capture aktive edilmez.**

---

# ADIM 10 — Footer

## 10.1. Rol

Footer:
1. markayı tekrar sabitler
2. temel navigation sunar
3. legal linkleri sunar
4. sayfayı sakin biçimde kapatır

İkinci CTA / marketing section değildir.

## 10.2. Pricing ilişkisi

Pricing/Early Access zaten son aksiyon alanıdır. Footer’da tekrar büyük CTA yok.

## 10.3. Background / boundary

White.

Top:

```text
1px border-subtle
```

Shadow yok.

## 10.4. Container / spacing

1280px.

Navbar/Hero ile aynı axis.

Yaklaşık:
- 64–80px top
- 32–40px bottom

## 10.5. Desktop layout

3 ana bölge:

```text
BRAND
ÜRÜN
HUKUKİ
```

Örnek:

```text
[logo] Mevzun           Ürün                Gizlilik
       Hukuk            UYAP                KVKK
       Çalışma Alanı    Yapay Zekâ          Kullanım Koşulları
                        Fiyatlandırma
                        İletişim
```

## 10.6. Brand block

Navbar ile aynı logo/wordmark.

Logo ~28–32px.

Mevzun 15–16px/600.

Descriptor 11–12px muted.

Kısa body opsiyonel:

> UYAP, günlük çalışma ve yapay zekâ destekli hukuki işler için tek çalışma alanı.

## 10.7. Product nav

```text
Ürün
UYAP
Yapay Zekâ
Fiyatlandırma
İletişim
```

Homepage anchor’ları çalışır.

## 10.8. Legal

```text
Gizlilik
KVKK
Kullanım Koşulları
```

Cookie Policy yalnız gerçekten gerekiyorsa.

## 10.9. Dead links — YOK

Route/destination yoksa placeholder `#` yok.

## 10.10. Newsletter / Early Access repeat

**YOK.**

Aynı form Footer’da tekrar edilmez.

## 10.11. Social

Yalnız gerçekten kullanılan resmi hesap varsa. Sırf footer dolsun diye social icon wall yok.

GitHub da ürün müşterisine anlamlı değilse eklenmez.

## 10.12. Copyright

```text
© 2026 Mevzun
```

veya ileride resmî şirket unvanı.

Yıl Laravel `now()->year` ile dinamik olabilir.

Ana footer content ile copyright arasında 1px divider kullanılabilir.

## 10.13. Geometry

- radius 0
- shadow none
- gradient none
- decorative background none
- giant watermark none

## 10.14. Language/App Store

V1 Türkçe. Language selector yok.

App Store/Microsoft Store/download badge yok.

## 10.15. Responsive

Tablet:
```text
Brand
↓
Ürün      Hukuki
```

Mobile:
```text
Brand
Ürün
Hukuki
────────
Copyright
```

Left aligned. Centered generic footer yok.

## 10.16. Typography

Group heading 12–13px/600.

Links ~14px.

Legal/copyright 12–14px; 10px tiny text yok.

## 10.17. Motion

Footer’da motion yok veya bütün footer tek minimal reveal. Linkler tek tek stagger edilmez.

## 10.18. JS

Footer saf Blade. Livewire/Alpine gereksiz.

## 10.19. HARD RULES

> **Footer ikinci marketing CTA alanına dönüşmez.**

> **Newsletter/Early Access tekrarı yok.**

> **Shadow, gradient, high-radius, watermark, decorative background yok.**

> **Placeholder blog/kariyer/docs/social link yok.**

> **Legal dead link production’a çıkmaz.**

---

# ADIM 11 — Motion, Scroll ve Mikro Etkileşim Sistemi

## 11.1. Ana prensip

> **Hareket hissedilir ama dikkat çekmez.**

“Kaymak gibi” deneyim:
- doğru easing
- düşük gecikme
- stabil geometry
- minimum transform
- layout shift yok
- consistent motion

ile sağlanacaktır.

## 11.2. Motion seviyeleri

### A — Navigasyon
- Navbar state
- Anchor scroll
- Mobile menu

### B — Section reveal
- text groups
- screenshots
- pricing major groups

### C — Micro interaction
- button hover
- text link hover
- product frame border
- input focus

Bunun dışına çıkılmaz.

## 11.3. Motion tokens

```text
motion-fast      140ms
motion-base      200ms
motion-slow      320ms
motion-reveal    380ms
motion-max       450ms
```

## 11.4. Easing

UI interaction:
```text
cubic-bezier(0.2, 0, 0, 1)
```

Reveal:
```text
cubic-bezier(0.22, 1, 0.36, 1)
```

veya yakın kontrollü ease-out.

**Spring/bounce/elastic yok.**

## 11.5. Scroll

Native browser scrolling.

Anchor için `scroll-behavior:smooth`.

**Custom smooth-scroll engine yok.**
**Lenis yok.**
**Wheel override yok.**
**Scroll hijack yok.**
**Section snap yok.**
**Pinned storytelling yok.**

## 11.6. Navbar motion

Scroll threshold ~48–64px.

Navbar:
- always visible
- visual compact state
- border/background transition
- ~180–220ms
- no jitter
- no hide-on-scroll
- no structural layout shift

Outer shell stable footprint yaklaşımı tercih edilir.

## 11.7. Nav/button/link interaction

Nav link:
- color only ~140–160ms

Primary:
- background/border color
- optional max -1px Y
- no scale
- no shadow

Secondary:
- soft surface
- border strengthen

Text link:
- color
- arrow varsa max 2px X

## 11.8. Section reveal

Base:

```text
opacity 0 → 1
translateY 10px → 0
duration 350–420ms
```

Max translation 12px.

IntersectionObserver.

One-time only. Scroll back’te reset yok.

## 11.9. Reveal granularity

Group bazlı:
- Hero text
- Hero visual
- UYAP copy
- UYAP visual
- AI copy
- AI visual
- Takvim column
- Workspace column
- Pricing intro/plan/form

Her kelime/list item ayrı stagger yok.

## 11.10. Stagger

60–100ms max.

Hero visual textten ~80ms sonra.

## 11.11. Product image interactions

Hero:
```text
translateY(-2px)
scale(1.003–1.005)
```

Other screenshots:
- border transition
- optional max -1px

**Mouse-follow parallax yok.**
**Tilt yok.**
**Zoom-on-hover yok.**
**Lightbox yok.**
**Scroll-based movement yok.**

## 11.12. AI motion

Ekstra AI animation yok:
- typing
- stream
- bubble
- pulse
- glow
- orb

## 11.13. Infinite animation

Homepage’de sürekli çalışan:
- pulse
- float
- shimmer
- bounce
- blinking badge
- background animation

yok.

## 11.14. Mobile menu

Open:
- opacity + translateY(-4→0)
- 160–200ms

Close:
- 120–160ms

No item stagger.

## 11.15. Form interaction

Focus:
- border blue
- accessible outline

Loading:
- disabled
- text/spinner

Success:
- simple fade

Error:
- inline

No shake/confetti.

## 11.16. Reduced motion — HARD REQUIREMENT

`prefers-reduced-motion:reduce`:
- smooth scroll auto/minimal
- reveal off
- hover transforms off
- navbar transition minimal
- mobile panel transform minimal

Content hiçbir zaman animation tamamlanmasını bekleyerek invisible kalmamalı.

## 11.17. Progressive enhancement

JS fail olsa:
- text görünür
- screenshots görünür
- anchors temel çalışır

Reveal CSS, JS yoksa content’i sonsuza kadar opacity 0 bırakmayacak.

## 11.18. Implementation

Navbar/menu Alpine.

Reveal minimal native IntersectionObserver utility.

Heavy motion library yok.

## 11.19. Performance

Animation için öncelik:
- transform
- opacity
- color
- border-color
- background-color

Kaçın:
- width/height
- top/left
- blur
- shadow

## 11.20. Motion hierarchy

Hero en hareketli; sonra UYAP/AI; sonra work tools; Pricing az; Footer yok/minimal.

## 11.21. Touch

Hover transforms touch cihazlarda uygulanmayabilir.

## 11.22. HARD RULES

> **Motion dekoratif gösteri değil UX hierarchy aracıdır.**

> **Custom smooth scroll, parallax, mouse-follow tilt, scroll hijack, snap yok.**

> **Reveal yalnız opacity + max 10–12px Y, 350–420ms, one-time.**

> **Screenshot geometry bozulmaz.**

> **Reduced-motion zorunlu.**

---

# ADIM 12 — Responsive, Accessibility ve Performance

## 12.1. Ana prensip

Desktop referans ana visual target’tır.

Responsive:

> desktop’ı küçültmek değil, içerik hiyerarşisini viewport’a göre yeniden düzenlemek.

## 12.2. Test viewportları — LOCKED

```text
1920×1080
1440×900   ← ana fidelity
1366×768
1280×800
1024×768
768×1024
430×932
390×844
360×800
320×568
```

## 12.3. Breakpoint davranışı

Yaklaşık:
```text
<640       mobile
640–767    large mobile
768–1023   tablet
1024–1279  compact desktop
1280+      desktop
```

Tailwind defaults başlangıç olabilir; gerçek geometriye göre ayar yapılabilir.

## 12.4. Horizontal padding

```text
40px  large desktop
32px  desktop
24px  tablet
20px  mobile
16px  very small
```

## 12.5. Typography

Mümkünse `clamp()`. Ancak referans fidelity’ye göre kontrollü breakpoint font sizes kabul.

## 12.6. Section responsive davranışı

### Hero
Desktop split. Tablet/mobile text → screenshot.

### Value
Desktop split. Tablet/mobile intro → value grid. Mobile single-column divider.

### UYAP
Desktop text/screenshot. Tablet/mobile stack.

### AI
Desktop text/screenshot. Tablet/mobile stack; dark full-width korunur.

### Takvim + Workspace
Desktop 2 columns. Mobile Takvim → Workspace.

### Pricing
Desktop 3 columns. Tablet hybrid. Mobile intro → plan → form.

### Footer
Desktop brand/product/legal. Mobile stack.

## 12.7. Mobile screenshots

Desktop screenshot mobile’da okunmazsa:
- kullanıcı ayrı mobile crop sağlar
- `<picture>`/responsive source kullanılabilir

Agent random `object-cover` ile kritik UI kesmez.

## 12.8. Aspect ratio / CLS

Tüm screenshotlar:
- explicit width/height
- veya explicit aspect-ratio
- layout slot baştan ayrılmış

Page load’da zıplama yok.

## 12.9. Horizontal overflow — HARD RULE

Her viewport’ta document width viewport width’ü aşmaz.

`overflow-x-hidden` ile bug saklamak yasak.

## 12.10. Accessibility hedefi

WCAG 2.2 AA’ya yakın temel standard.

Sertifikasyon claim’i değil; implementation hedefi.

## 12.11. Semantic HTML

Doğru landmark:
- header
- nav
- main
- section
- article gerektiğinde
- footer

## 12.12. Heading hierarchy

- exactly one H1
- section H2
- subgroup H3

Görsel boyuta göre semantic seviyeyi bozma.

## 12.13. Link vs button

Navigation = `<a>`.
Action = `<button>`.
Clickable div yok.

## 12.14. Keyboard

Navbar, mobile menu, Hero CTA, form, footer keyboard accessible.

## 12.15. Visible focus

```css
outline:2px solid var(--blue-primary);
outline-offset:2px;
```

Shadow değildir.

## 12.16. Skip link

`Ana içeriğe geç` önerilir. Focus alınca görünür.

## 12.17. Alt text

Anlamlı. “Screenshot” tek başına yeterli değil.

Decorative Hugeicons `aria-hidden`.

Icon-only menu accessible name.

## 12.18. Contrast

Primary/secondary text AA seviyesinde. Muted text aşırı soluk değil.

## 12.19. Forms

Error yalnız renk ile değil text ile.

Livewire success/error uygun live region.

Touch target ~44px.

## 12.20. Core Web Vitals hedefleri

```text
LCP < 2.5s
CLS < 0.1
INP < 200ms
```

## 12.21. Image loading

Hero:
- eager/high priority

UYAP/AI/Calendar/Workspace:
- lazy
- async decode

Tüm images explicit dimensions.

## 12.22. Images

AVIF/WebP tercih. UI text aşırı compression ile blur olmaz.

`srcset` / `sizes` mümkünse.

## 12.23. Inter loading

Yalnız 400/500/600/700. Self-host önerilir. `font-display:swap`.

## 12.24. JS budget

Minimal:
- Alpine navbar/menu
- reveal observer
- Livewire Early Access

Gereksiz third-party:
- analytics
- chat widget
- heatmap
- ad pixel

default olarak yok.

## 12.25. Livewire scope

Yalnız Early Access form. Homepage root Livewire component değildir.

## 12.26. Production

- Vite hashed/minified assets
- OPcache
- Nginx compression/cache headers
- public static asset cache

Redis homepage critical dependency değildir.

## 12.27. SEO

- title
- description
- canonical
- OG
- lang=tr
- viewport
- favicon

Structured data ancak gerçek/doğru claim ile.

## 12.28. Browser support

- Chrome
- Firefox
- Edge
- Safari

Firefox özellikle sticky navbar, scroll, font, image size, Livewire form açısından test edilecek.

## 12.29. Mobile viewport

Hero tam 100vh olmak zorunda değil. Mobile Safari için `dvh`/content-based approach gerektiğinde.

## 12.30. Zoom/text

200% zoom’da temel layout kırılmamalı.

Text blocklarda fixed height yok.

Core layout absolute positioning ile kurulmaz.

## 12.31. HARD RULES

> **Responsive tasarım desktop küçültme değildir.**

> **Mobile screenshot okunmazsa ayrı crop asset kullanılır.**

> **Hero dışındaki büyük görseller lazy-load.**

> **Explicit dimensions/aspect ratio zorunlu.**

> **Gereksiz third-party JS/heavy dependency yok.**

---

# ADIM 13 — QA, Görsel Fidelity ve AntiGravity Acceptance Criteria

## 13.1. Acceptance kategorileri

```text
A. Teknik doğruluk
B. Görsel fidelity
C. UX / motion
D. Responsive / production kalite
```

Herhangi bir ana kategori ciddi başarısızsa task DONE değildir.

## 13.2. Referans önceliği

1. Bu yazılı spec
2. Onaylanan ilk website mockup’ın visual target niteliği
3. Kullanıcının gerçek screenshot asset’leri

Pratikte visual composition için referans görsel; belirsizlik/çelişkide written spec üstündür.

## 13.3. “Birebir” tanımı

Hedef:
- aynı section sırası
- aynı composition
- aynı grid balance
- aynı whitespace karakteri
- aynı light/dark rhythm
- benzer typography proportions
- benzer screenshot scale
- aynı low-radius/no-shadow character
- aynı minimal premium atmosphere

Generative artefact kopyalanmaz.

## 13.4. Redesign yasak

Agent şu gerekçelerle değiştiremez:
- “daha modern”
- “daha SaaS”
- “daha premium”
- “daha rounded”
- “shadow daha iyi”
- “AI bölümünü daha fütüristik yaptım”

Bu specification-driven implementation task’tır.

## 13.5. Önerilen implementasyon sırası

```text
1. Foundation
2. Design tokens
3. Page shell
4. Navbar
5. Hero
6. Value
7. UYAP
8. AI
9. Takvim + Workspace
10. Pricing + Early Access
11. Footer
12. Motion
13. Responsive
14. Accessibility
15. Performance
16. QA
```

## 13.6. Technical foundation gate

PASS olması gereken:
- `composer install`
- `npm install`
- `npm run build`
- `/` HTTP 200
- PostgreSQL connection
- `php artisan migrate`
- Tailwind
- Alpine
- Livewire gerekiyorsa
- Inter
- Hugeicons

## 13.7. Yasak dependency audit

İzinsiz:
- React
- Vue
- Svelte
- Inertia
- Bootstrap
- GSAP
- Lenis
- Framer Motion
- Anime.js
- generic UI framework
- alternate icon family
- CMS

yok.

## 13.8. Logs / console / network

Final QA:
- Laravel log beklenmeyen exception yok
- browser console 0 uncaught JS error
- Alpine/Livewire error yok
- image/font/chunk 404 yok
- broken asset yok

## 13.9. Visual fidelity workflow

Aynı viewport’ta:

```text
Reference Image
vs
Implemented Homepage Screenshot
```

Ana:

```text
1440×900
```

Ek:
- 1920×1080
- 1366×768
- 390×844

Mümkünse overlay/diff.

Önce:
1. layout
2. scale
3. alignment
4. spacing
5. typography
6. color
7. micro details

## 13.10. Section PASS criteria

### Navbar
- doğru height/alignment
- no shadow/blur
- smooth compact
- no jitter

### Hero
- split doğru
- visual doğru scale
- headline geometry doğru
- CTA doğru
- no decorative slop

### Value
- 2×2 divider grid
- 4 rounded cards YOK
- AI equal weight

### UYAP
- left text/right real screenshot
- no floating cards
- correct spacing

### AI
- full-width solid dark
- no gradient/glow/sparkle
- real screenshot
- 5/7-ish clean grid

### Work tools
- balanced 50/50
- no outer cards
- real screenshots

### Pricing
- one-plan
- no SaaS badge theater
- clean dividers/form

### Footer
- restrained
- no second CTA
- no decoration

## 13.11. AI Slop Detection — BLOCKER

Aşağıdakiler website decoration olarak bulunursa **HARD FAIL / BLOCKER**:

```text
purple gradient
blue-purple gradient
radial glow
neon border
glass panel
sparkles
animated orb
blurred blob
floating metric card
floating prompt
AI stars
mesh gradient
particles
3D object
hologram
robot
cursor spotlight
```

## 13.12. Shadow audit — BLOCKER

Source/CSS ara:

```text
box-shadow
shadow-sm
shadow-md
shadow-lg
shadow-xl
shadow-2xl
drop-shadow
hover:shadow-*
```

Homepage’in kendi UI componentlerinde bulunmamalıdır.

## 13.13. Radius audit

Search:

```text
rounded-xl
rounded-2xl
rounded-3xl
rounded-full
```

Normal marketing componentlerde bulunmamalı.

Ana band 0–4px. 6px yalnız istisna.

## 13.14. Gradient/blur audit

Search:

```text
bg-gradient
linear-gradient
radial-gradient
conic-gradient
backdrop-blur
blur-*
```

Tasarımsal kullanım varsa FAIL.

## 13.15. Geometry audit

Kontrol:
- ana axis consistency
- container widths
- section paddings
- divider alignment
- screenshot edges
- column gaps
- headline width
- no random offsets

Gözle fark edilen kaymalar MAJOR/BLOCKER.

## 13.16. Screenshot integrity

Kullanıcı screenshotları:
- stretch yok
- squash yok
- random crop yok
- perspective distortion yok
- re-draw yok
- fake replacement yok

Asset eksikse final aspect-ratio placeholder kullanılabilir; production DONE sayılmaz.

## 13.17. Typography audit

- Inter aktif
- no second marketing font
- H1 600
- no 800/900 abuse
- text measures controlled
- hierarchy consistent

## 13.18. Button audit

No:
- pill CTA
- glow
- shadow
- gradient
- animated shine

Navbar/Hero/Form buttons aynı design family.

## 13.19. Navbar functional QA

1. page load
2. sticky
3. threshold
4. compact state
5. scroll back
6. no jitter
7. anchors work
8. mobile menu works
9. Escape
10. keyboard

Scroll sırasında layout shift yok.

## 13.20. Smooth scroll QA

- native feel
- correct sticky offset
- heading navbar altında kalmıyor
- no custom heavy physics

## 13.21. Motion QA

- reveal max 10–12px
- ~350–420ms
- one-time
- no parallax
- no tilt
- no typewriter
- no counters
- no infinite animation

Reduced-motion ayrıca test.

## 13.22. JS disabled progressive test

JS kapalıyken ana content görünür. Reveal sistemine bağlı opacity trap yok.

## 13.23. Responsive QA matrix

| Viewport | Ana odak |
|---|---|
| 1920×1080 | max-width / whitespace |
| 1440×900 | reference fidelity |
| 1366×768 | compact desktop |
| 1280×800 | container pressure |
| 1024×768 | navbar / split layouts |
| 768×1024 | tablet stacking |
| 430×932 | large mobile |
| 390×844 | main mobile |
| 360×800 | narrow mobile |
| 320×568 | minimum support |

## 13.24. Horizontal overflow automated gate

Her viewport:

```javascript
document.documentElement.scrollWidth
<= document.documentElement.clientWidth
```

true.

`overflow-x-hidden` ile cheat yok.

## 13.25. Mobile QA

### Navbar
- 44px target
- no overflow
- no glass/shadow

### Hero
- H1 wrap
- CTA
- feature strip
- screenshot readability

### Pricing
- price wrap yok
- form clean
- error state clean

### Footer
- left aligned
- readable
- no overflow

## 13.26. Accessibility gate

En az:
- keyboard-only
- visible focus
- Lighthouse Accessibility
- contrast
- form semantics
- heading hierarchy
- meaningful alt
- reduced motion

Pratik Lighthouse Accessibility hedefi 90+, tercihen 95–100.

## 13.27. Performance gate

Production build üzerinde.

Hedef:
```text
LCP < 2.5s
CLS < 0.1
INP < 200ms
```

Pratik desktop Lighthouse Performance hedefi 90+; düşükse nedeni raporlanır.

## 13.28. Image loading audit

Hero:
- eager/high priority

Below fold:
- lazy

Assetler gereksiz multi-MB olmamalı.

## 13.29. Third-party audit

Final homepage’te ideal external third-party scripts:

```text
none
```

Gerekirse gerekçeli.

## 13.30. Early Access QA

Aktifse:
- valid save
- invalid reject
- empty reject
- duplicate no second row
- rapid submit controlled
- success feedback
- CSRF
- server-side validation

## 13.31. Security basics

- production debug off
- secrets repo’da yok
- CSRF
- Blade escaping
- no unsafe raw user HTML

## 13.32. SEO gate

- title
- description
- canonical
- OG
- `lang=tr`
- viewport
- exactly one H1
- no dead href

## 13.33. Placeholder gate

Production-ready teslimde yok:
- lorem ipsum
- TODO
- “image here”
- fake UI
- broken asset

Kullanıcı asset’i bekleniyorsa blocker olarak açıkça raporlanır.

## 13.34. Turkish character QA

Doğru render:
```text
İ ı Ş ş Ğ ğ Ü ü Ö ö Ç ç
```

## 13.35. Component architecture audit

Expected responsibility level yaklaşık:
```text
MarketingLayout
Navbar
Hero
ValueProposition
UyapSection
AiSection
WorkToolsSection
PricingSection
EarlyAccessForm
Footer
```

Monolithic `home.blade.php` ve micro-component spam ikisi de başarısız yaklaşımdır.

## 13.36. CSS token / magic value audit

Renk/radius/motion central.

Aşırı:
```text
mt-[37px]
left-[83px]
w-[713px]
```
kullanımı yanlış alarmıdır.

## 13.37. Visual QA screenshot frekansı

Gereksiz screenshot/analysis döngüsü yok.

Checkpoint:
1. Navbar + Hero
2. Product sections
3. Pricing + Footer
4. Responsive pass
5. Final

## 13.38. Micro-fix loop yasağı

Yok:
```text
2px değiştir → screenshot → 1px değiştir → screenshot
```

Önce toplu geometry issue listesi çıkar, sonra düzelt.

## 13.39. Agent autonomy sınırı

Agent kendi kararını verebilir:
- internal component names
- idiomatic Laravel details
- exact Tailwind utility composition
- küçük accessibility code choices
- performance-safe implementation details

Agent karar veremez:
- redesign
- section order
- new feature
- color system
- radius philosophy
- shadow
- AI decoration
- new framework

## 13.40. Scope creep

Bu task sırasında eklenmeyecek:
- auth
- account
- billing
- Desktop API
- AI backend
- CMS
- admin
- product subpages

## 13.41. Definition of Done — Technical

- app installs
- build passes
- `/` works
- PostgreSQL works
- Early Access aktifse form works
- no console/server errors
- tests pass

## 13.42. Definition of Done — Visual

- high reference fidelity
- no AI slop
- no shadows
- low radius
- real screenshots
- clean geometry
- responsive clean

## 13.43. Definition of Done — UX

- navbar smooth
- anchors smooth
- reveal subtle
- no jitter
- mobile menu clean
- form feedback clear

## 13.44. Definition of Done — Production quality

- SEO basics
- accessibility basics
- performance targets
- no broken assets/links
- no secrets
- responsive

## 13.45. Severity

### BLOCKER
- app/build fail
- major geometry broken
- horizontal overflow
- distorted screenshot
- AI slop
- shadow philosophy broken
- rounded SaaS redesign
- mobile broken
- console exception

### MAJOR
- visible spacing mismatch
- wrong typography hierarchy
- bad navbar motion
- wrong screenshot scale
- accessibility issue

### MINOR
- optical 1–2px
- small icon alignment
- micro spacing

BLOCKER veya MAJOR varken DONE değildir.

**AI slop = BLOCKER.**  
**Widespread box-shadow = BLOCKER.**  
**Generic high-radius SaaS redesign = BLOCKER.**

## 13.46. Final human approval

Automated QA final acceptance değildir. Kullanıcı referans görselle son görsel incelemeyi yapar ve final kabulü kullanıcı verir.

## 13.47. AntiGravity final report format

Final teslimde en az:

```text
1. Implemented
2. Components created
3. Assets used
4. Routes
5. Database changes
6. Tests
7. Viewports tested
8. Build result
9. Visual fidelity notes
10. Remaining user assets / blockers
```

## 13.48. DONE öncesi minimum çalıştırmalar

Repo config’e göre en az:
- Composer/PHP tests
- `npm run build`
- Laravel tests
- browser/Playwright smoke
- responsive screenshots
- browser console check
- reference comparison

## 13.49. Final HARD RULES

> **AntiGravity bu task’ı yaratıcı redesign değil, high-fidelity implementation görevi olarak ele alacaktır.**

> **Onaylanan ilk Mevzun homepage mockup ana visual target’tır; belirsizlikte bu yazılı spesifikasyon karar kaynağıdır.**

> **Box-shadow, high-radius SaaS card, gradient/glow/glassmorphism ve AI slop BLOCKER seviyesinde ihlaldir.**

> **Kullanıcının sağladığı gerçek Mevzun screenshot’ları asset olarak kullanılacak; AntiGravity fake product UI üretmeyecektir.**

> **Homepage yalnız build çalıştığı için tamamlanmış sayılmaz; fidelity, responsive, motion, accessibility, performance ve browser QA gate’lerinden geçmek zorundadır.**

> **Görsel QA milestone bazında yapılacak; gereksiz mikro screenshot/analiz döngülerine girilmeyecektir.**

---

# Final Homepage Section Sırası

```text
01  Sticky Navbar
02  Hero
03  Problem / Value Proposition
04  01 / UYAP Entegrasyonu
05  02 / Yapay Zekâ — Dark Section
06  03 / Takvim + 04 / Yerel Çalışma Alanı
07  Fiyatlandırma + Early Access
08  Footer
```

---

# Final Görsel Kimlik Özeti

Mevzun Website:

- ciddi
- profesyonel
- product-led
- light-first
- editorial
- grid tabanlı
- gerçek UI ağırlıklı
- no-shadow
- very-low-radius
- no-gradient
- no-glass
- no-glow
- no-AI-slop

olacaktır.

Ana ilke:

> **Premium görünüm dekorasyonla değil; doğru geometri, spacing, typography, border ve gerçek ürün arayüzünün güçlü sunumuyla elde edilecektir.**

---

# Final Scope Sınırı

Bu belge yalnız:

> **Homepage V1**

implementation spec’idir.

Bu task sonrasında ayrı planlarda ele alınacak:
- Authentication
- User system
- Subscription
- Billing
- Licensing
- Device management
- Desktop API
- AI backend
- AI usage accounting
- Legal subpages
- Product detail pages

Homepage bunların gelecekte eklenmesini engellemeyen kalıcı Laravel foundation üzerinde kurulacaktır.

---

# Final Onay

Bu belgede yer alan **ADIM 1–13** kullanıcı tarafından tek tek değerlendirilmiş ve onaylanmıştır.

**Status: `LOCKED / READY FOR IMPLEMENTATION`**
