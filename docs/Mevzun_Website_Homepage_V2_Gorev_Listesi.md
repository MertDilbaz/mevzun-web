# Mevzun Website — Homepage V2 Görev Listesi

**Durum:** ONAY BEKLİYOR  
**Tarih:** 09.09.2026  
**Hedef branch:** `develop`  
**Kapsam:** Homepage (`/`) — gerçek ürün screenshot'ları hariç tüm yapı, styling, interaction, responsive, accessibility, form ve QA hazırlığı  
**Görsel hedef:** Kullanıcının son onayladığı sadeleştirilmiş homepage referansı  
**Teknik temel:** Mevcut Laravel 13 + Blade + Livewire 4 + Alpine.js + Tailwind CSS 4 yapısı

---

## 0. Bu planın rolü

Bu belge geliştirmeye başlamadan önce uygulanacak iş paketlerini kilitler.

Eski `Mevzun_Website_Homepage_V1_Uygulama_Spesifikasyonu_LOCKED.md` belgesindeki:

- Laravel / Blade / Livewire / Alpine / Tailwind mimarisi,
- component yaklaşımı,
- düşük radius / shadow-free / ciddi ürün dili,
- motion sınırları,
- responsive / accessibility / performance kuralları,
- ProductFrame ve gerçek screenshot kullanımı,
- Early Access Livewire yaklaşımı,
- SEO ve QA prensipleri

korunur.

Ancak **homepage bilgi mimarisi ve section dizilimi kullanıcı tarafından yeniden onaylanmıştır**. Bu nedenle eski V1 dokümanındaki ayrı `Problem/Value`, `UYAP`, `Takvim + Yerel Çalışma Alanı` section zorunlulukları homepage V2 için geçerli değildir.

Homepage V2'nin tek görsel hedefi kullanıcının son onayladığı sadeleştirilmiş referanstır.

---

# 1. Nihai Homepage Bilgi Mimarisi

- [ ] `Navbar`
- [ ] `Hero`
- [ ] `AI Dark Section`
- [ ] `Feature Strip`
- [ ] `Pricing + Early Access`
- [ ] `Footer`

## Homepage V2'de kaldırılacak eski section'lar

- [ ] Ayrı `UYAP Entegrasyonu` showcase section kaldırılacak.
- [ ] Ayrı `Takvim + Yerel Çalışma Alanı` showcase section kaldırılacak.
- [ ] Ayrı `Çalışma Akışı / Nasıl Çalışır` section kaldırılacak.
- [ ] Hero'daki ikinci CTA / video / "Nasıl çalışır?" butonu kaldırılacak.
- [ ] Eski `Problem / Value Proposition` uzun metin alanı kaldırılacak.
- [ ] Kaldırılan section'ların bıraktığı gereksiz dikey boşluklar temizlenecek.

---

# 2. Component Mimarisi

V1 dokümanındaki responsibility sınırları korunacak; monolithic `home.blade.php` yapılmayacak ve micro-component spam yapılmayacak.

## Ana componentler

- [ ] `MarketingLayout`
- [ ] `Navbar`
- [ ] `Hero`
- [ ] `AiSection`
- [ ] `ValueProposition` mevcut componenti V2'de `FeatureStrip` rolüne dönüştürülecek veya anlamlı şekilde yeniden adlandırılacak.
- [ ] `PricingSection`
- [ ] `EarlyAccessForm`
- [ ] `Footer`

## Kullanılmayacak / homepage root'tan çıkarılacak componentler

- [ ] `UyapSection`
- [ ] `WorkToolsSection`

> Not: Dosyalar gereksizse silinebilir; gelecekte tekrar kullanılma ihtimali varsa orphan component bırakmak yerine net karar verilecek. Kullanılmayan component production render ağacında bulunmayacak.

## Shared primitives

- [ ] `Button`
- [ ] `SectionLabel`
- [ ] `ProductFrame`
- [ ] `Icon`
- [ ] gerekiyorsa `Container`
- [ ] gerekiyorsa `FeatureList`

Shared primitive yalnız gerçek tekrar varsa üretilecek; generic UI kit oluşturulmayacak.

---

# 3. Faz 1 — Baseline Audit ve Güvenli Başlangıç

Geliştirmeye başlamadan önce repo'nun güncel `develop` hali okunacak.

- [ ] `develop` branch HEAD doğrulanacak.
- [ ] `main` ile farklar kontrol edilecek.
- [ ] Mevcut homepage render ağacı çıkarılacak.
- [ ] Mevcut Tailwind/CSS token sistemi okunacak.
- [ ] Logo/light-dark asset yolları doğrulanacak.
- [ ] Kullanılmayan / eski section componentleri tespit edilecek.
- [ ] Mevcut Livewire Early Access formu ve migration/model kontrol edilecek.
- [ ] Mevcut testler incelenecek.
- [ ] Mevcut asset path sözleşmesi kontrol edilecek.

### Kabul kriteri

- Kod değişikliğine başlamadan önce hangi dosyaların değişeceği net olacak.
- Global CSS ile tüm sayfayı tek hamlede kıran geometry override yapılmayacak.

---

# 4. Faz 2 — Global Layout, Grid ve Design Tokens

## Container / page axis

- [ ] Standart içerik genişliği `1280px` temel alınacak.
- [ ] Geniş product visual gerektiğinde `1440px` sınırı korunacak.
- [ ] Desktop gutter'lar container genişliğini yanlışlıkla küçültmeyecek şekilde kurulacak.
- [ ] Hero, AI, Feature Strip, Pricing ve Footer aynı görsel eksene oturacak.
- [ ] Horizontal overflow sıfır toleransla çözülecek; `overflow-x-hidden` ile hata gizlenmeyecek.

## Renk ve yüzey sistemi

- [ ] Light-first sayfa korunacak.
- [ ] AI section için solid koyu yüzey kullanılacak.
- [ ] Mevzun mavisi ana accent olacak.
- [ ] Gradient / glow / glassmorphism kullanılmayacak.
- [ ] Büyük ve yumuşak drop-shadow kullanılmayacak.
- [ ] Border ve surface ayrımı ana derinlik yöntemi olacak.

## Radius / shadow

- [ ] Ana radius bandı 0–4px.
- [ ] 6px yalnız gerekli istisnalarda.
- [ ] Homepage UI componentlerinde `box-shadow: none` temel kuralı korunacak.

## Typography

- [ ] Inter kullanılacak.
- [ ] Hero H1 desktop yaklaşık 56–64px / 600.
- [ ] Section heading yaklaşık 36–48px / 600.
- [ ] Body copy gereksiz uzatılmayacak.
- [ ] Eyebrow / section label küçük uppercase stilinde kalacak.

### Kabul kriteri

- 1440px ve 1920px viewport'ta content axis merkezde.
- Referanstaki görsel yoğunluk korunuyor.
- Hiçbir section viewport kenarına yapışmıyor.

---

# 5. Faz 3 — Navbar

## Yapı

- [ ] Sol: gerçek Mevzun icon + `Mevzun` + `Hukuk Çalışma Alanı`.
- [ ] Orta: `Ürün`, `UYAP`, `Yapay Zekâ`, `Fiyatlandırma`, `İletişim`.
- [ ] Sağ: `Mevzun'u deneyin` CTA.
- [ ] Desktop navbar referanstaki gibi tek satır ve dengeli olacak.

## Sticky / scroll davranışı

- [ ] Navbar sticky olacak.
- [ ] İlk durumda yaklaşık 68–72px yüksekliğinde.
- [ ] Scroll sonrası kontrollü compact state yaklaşık 62–64px.
- [ ] Scroll state yalnız surface/border/spacing ile hissedilecek; blur/glass/shadow yok.

## Hover / micro interaction

- [ ] Nav link hover'da text color transition.
- [ ] Çok ince underline veya baseline indicator animasyonu.
- [ ] CTA hover'da background transition + maksimum 1px translate.
- [ ] Active/focus-visible state net olacak.
- [ ] Hover animasyonları 140–200ms bandında.

## Mobile

- [ ] Hamburger menü.
- [ ] Menü navbar altında açılacak.
- [ ] Beyaz / sade / compact panel.
- [ ] Fullscreen overlay olmayacak.
- [ ] Escape ile kapanacak.
- [ ] `aria-expanded`, `aria-controls` vb. doğru olacak.

### Kabul kriteri

- Navbar hiçbir breakpoint'te taşmıyor.
- Logo ve CTA optik olarak aynı dikey eksende.
- Link hover'ları modern ama sakin.

---

# 6. Faz 4 — Hero

## Layout

- [ ] Desktop split hero korunacak.
- [ ] Sol metin yaklaşık %42–45.
- [ ] Sağ product visual yaklaşık %55–58.
- [ ] Hero yeterince yüksek olacak; ilk viewport'ta alt section hemen görünmeyecek.
- [ ] 1440x900 ve 1920x1080'da ürün ekranı baskın ama metni ezmeyen oranda olacak.

## İçerik

- [ ] Eyebrow: `AVUKATLAR İÇİN`.
- [ ] H1: `Hukuki çalışmalarınız için tek bir çalışma alanı.`
- [ ] Açıklama kısa ve ürün positioning'i net olacak.
- [ ] Tek CTA: `Mevzun'u keşfet`.
- [ ] İkinci CTA / video / `Nasıl çalışır?` olmayacak.

## Hero mini capability row

Referanstaki hafif ikon satırı korunacak:

- [ ] `UYAP entegrasyonu`
- [ ] `Yapay zekâ desteği`
- [ ] `Güvenli ve yerel` veya ürün iddiasına göre daha güvenli final copy
- [ ] `Masaüstü uygulama` / `Her yerden erişim` final copy doğrulanacak

> Unverified güvenlik / local guarantee pazarlama iddiası yapılmayacak.

## Hero screenshot frame

- [ ] Screenshot gelene kadar doğru aspect ratio'lu placeholder.
- [ ] Beklenen asset: `public/images/product/home-dark.webp`.
- [ ] Gerçek screenshot frontal/perspektifsiz kullanılacak.
- [ ] `object-fit` screenshot'ı bozmayacak.
- [ ] Desktop'ta yüksek visual weight.
- [ ] Hero image eager/high-priority.
- [ ] `width` / `height` veya aspect-ratio CLS önlemek için açık tanımlı.

## Hero motion

- [ ] H1 + body + CTA ilk yükte hafif staged reveal.
- [ ] ProductFrame 60–100ms gecikmeyle opacity/translate reveal.
- [ ] Maksimum translateY 8–10px.
- [ ] Toplam süre 350–420ms.
- [ ] Reduced-motion'da motion tamamen sadeleşecek.

### Kabul kriteri

- İlk viewport'ta Hero tek başına güçlü bir açılış oluşturuyor.
- Alt bölüm kullanıcıya ilk bakışta yığılmıyor.

---

# 7. Faz 5 — AI Dark Section

## Layout

- [ ] Full-width solid dark surface.
- [ ] İçerik yine ana container eksenine oturacak.
- [ ] Sol: kısa satış metni + 3–4 feature bullet.
- [ ] Sağ: büyük AI screenshot.
- [ ] Screenshot alanı metinden daha baskın görsel ağırlık taşıyacak.

## İçerik

- [ ] Label: `02 / YAPAY ZEKÂ`.
- [ ] Heading: `Yapay zekâ, dava bağlamını bilir.` veya son referanstaki onaylı küçük varyant.
- [ ] Generic AI chatbot dili kullanılmayacak.
- [ ] Model/provider/quota/accuracy/unlimited/local guarantee gibi vaatler olmayacak.
- [ ] `Güvenilir sonuçlar` gibi garanti çağrışımlı copy kullanılmayacak.
- [ ] Kaynaklı inceleme / case brief / araştırma / taslak üretim kapsamı kısa biçimde anlatılacak.

## Screenshot

- [ ] Beklenen asset: `public/images/product/ai-dark.webp`.
- [ ] Asset gelene kadar placeholder.
- [ ] Below-fold olduğu için lazy load.
- [ ] Frame dark section ile birleşip kaybolmayacak; ince border ile ayrışacak.

## Motion

- [ ] Section viewport'a girince one-time reveal.
- [ ] Text ve screenshot farklı ama yakın zamanlamalı reveal.
- [ ] Bullet'larda maksimum 40–60ms hafif stagger.
- [ ] Scroll hijack/parallax yok.

### Kabul kriteri

- AI section sayfadaki ana kontrast kırılması olacak.
- Cyber/neon/AI-slop estetiğine düşmeyecek.

---

# 8. Faz 6 — Feature Strip

Bu bölüm artık hero altında değil, AI bölümünün altında yer alacak.

## Yapı

Desktop'ta dört eşit editorial kolon:

- [ ] `Tüm dosyalar tek yerde`
- [ ] `Güvenli ve gizli`
- [ ] `Daha verimli çalışın`
- [ ] `Her yerden erişin`

Her kolon:

- [ ] Hugeicons ikon
- [ ] kısa heading
- [ ] maksimum 1–2 satır açıklama
- [ ] aralarda ince dikey divider
- [ ] kart arka planı / büyük radius / shadow yok

## İçerik güvenliği

- [ ] `Güvenli ve gizli` copy teknik olarak desteklenmeyen guarantee vermeyecek şekilde gözden geçirilecek.
- [ ] `Her yerden erişin` masaüstü ürününün gerçek dağıtım modeline göre final copy olacak.

## Hover

- [ ] Icon accent hafif güçlenecek.
- [ ] Heading color / blue transition olabilir.
- [ ] Surface değişimi çok hafif olacak veya hiç olmayacak.
- [ ] Card lift / scale kullanılmayacak.

## Responsive

- [ ] Tablet 2x2.
- [ ] Mobile 1 kolon veya 2x2 uygun readability ile.
- [ ] Divider sistemi breakpoint'e göre düzgün yeniden kurulacak.

### Kabul kriteri

- Bölüm bilgi yoğun ama kısa okunuyor.
- AI section ile Pricing arasında görsel nefes ve ritim sağlıyor.

---

# 9. Faz 7 — Pricing + Early Access

## Section layout

- [ ] Açık / soft-gray section.
- [ ] Sol editorial intro.
- [ ] Orta `Mevzun Pro` plan surface.
- [ ] Sağ Early Access surface / editorial block.
- [ ] Referanstaki yatay denge korunacak.

## Pricing copy

- [ ] Label: `FİYATLANDIRMA`.
- [ ] Heading: `Şeffaf, sade, tek paket.`
- [ ] Tek plan: `Mevzun Pro`.
- [ ] Fiyat tek source-of-truth noktasından üretilecek.
- [ ] Başlangıç değeri `₺1.500 / ay`.
- [ ] Multi-plan pricing theater yapılmayacak.
- [ ] `Sınırsız AI` / `sınırsız tüm özellikler` gibi riskli copy olmayacak.

## Plan feature list

- [ ] UYAP dosya yönetimi
- [ ] Takvim ve çalışma araçları
- [ ] Yapay zekâ özellikleri
- [ ] Yerel Çalışma Alanı
- [ ] gerekiyorsa güncellemeler

## Early Access form

- [ ] Livewire 4 kullanılacak.
- [ ] Yalnız e-posta alanı.
- [ ] Server-side validation.
- [ ] Duplicate e-mail yeni row üretmeyecek.
- [ ] Loading state.
- [ ] Success state.
- [ ] Error state.
- [ ] Button disabled/loading feedback.
- [ ] Input autocomplete/email semantics.
- [ ] Privacy/KVKK linkleri gerçek route varsa aktif olacak.

## Hover / interaction

- [ ] Pricing plan border emphasis.
- [ ] CTA micro-transition.
- [ ] Early Access input focus state güçlü ama sakin.
- [ ] No floating-card / no exaggerated lift.

### Kabul kriteri

- Tek fiyat ana odak.
- Early Access ikinci bir plan gibi görünmüyor.
- Form klavye ve screen-reader ile kullanılabilir.

---

# 10. Faz 8 — Footer

## Yapı

- [ ] Beyaz surface.
- [ ] 1px top border.
- [ ] Sol: logo + wordmark + kısa tagline.
- [ ] Orta: ürün navigation.
- [ ] Sağ: hukuki linkler / copyright / gerektiğinde sosyal ikonlar.
- [ ] İkinci CTA/form olmayacak.

## Link davranışı

- [ ] Hover text transition.
- [ ] Focus-visible state.
- [ ] Dead link bırakılmayacak.
- [ ] Placeholder hukuki route production'da gerçek sayfaya gitmeli.

### Kabul kriteri

- Footer sakin ve kompakt.
- Pricing'den sonra gereksiz büyük boşluk yok.

---

# 11. Faz 9 — Motion ve Mikro Etkileşim Sistemi

## Motion tokenları

- [ ] `fast`: yaklaşık 140ms
- [ ] `base`: yaklaşık 200ms
- [ ] `slow`: yaklaşık 320ms
- [ ] `reveal`: yaklaşık 380ms
- [ ] maksimum normal marketing motion: yaklaşık 450ms

## Section reveal

- [ ] Native `IntersectionObserver`.
- [ ] opacity `0 -> 1`.
- [ ] translateY maksimum `10px -> 0`.
- [ ] one-time reveal.
- [ ] viewport'a girmeden içerik uzun süre invisible kalmayacak.

## Hover system

- [ ] Navbar links.
- [ ] Primary CTA.
- [ ] Feature Strip items.
- [ ] Pricing CTA/form.
- [ ] Footer links.

## Yasaklar

- [ ] GSAP yok.
- [ ] Lenis yok.
- [ ] Framer Motion yok.
- [ ] parallax yok.
- [ ] scroll hijack yok.
- [ ] 3D transform gösterisi yok.
- [ ] sürekli loop animasyon yok.

## Reduced Motion

- [ ] `prefers-reduced-motion: reduce` desteklenecek.
- [ ] reveal ve non-essential transition'lar kapatılacak.

### Kabul kriteri

- Site statik şablon gibi hissettirmiyor.
- Hareket tasarımı üründen dikkat çalmıyor.

---

# 12. Faz 10 — Responsive

Aşağıdaki viewportlar test listesinde olacak:

- [ ] 1920x1080
- [ ] 1440x900 — ana fidelity viewport
- [ ] 1366x768
- [ ] 1280x800
- [ ] 1024x768
- [ ] 768x1024
- [ ] 430x932
- [ ] 390x844
- [ ] 360x800
- [ ] 320x568

## Hero responsive

- [ ] Desktop split.
- [ ] Tablet kontrollü split veya stack.
- [ ] Mobile text üstte, screenshot altta.
- [ ] H1 minimum okunabilir ölçekte.
- [ ] CTA full-width'e gereksiz zorlanmayacak.

## AI responsive

- [ ] Mobile'da text + screenshot stack.
- [ ] Dark section padding dengeli.

## Feature Strip responsive

- [ ] Desktop 4 kolon.
- [ ] Tablet 2x2.
- [ ] Mobile okunabilir düzen.

## Pricing responsive

- [ ] Desktop 3-part layout.
- [ ] Tablet/mobile stack.
- [ ] Form input/button mobile'da taşmayacak.

## Footer responsive

- [ ] Mobile link grupları net.
- [ ] Copyright ve legal linkler okunabilir.

### Kabul kriteri

- Horizontal overflow yok.
- 320px viewport'a kadar layout kırılmıyor.
- Hiçbir breakpoint sadece font küçülterek kurtarılmıyor.

---

# 13. Faz 11 — Accessibility

- [ ] Sayfada tam 1 adet `<h1>`.
- [ ] Heading hierarchy mantıklı.
- [ ] Skip-to-content link.
- [ ] Tüm interactive element'lerde visible focus.
- [ ] Button/link semantiği doğru.
- [ ] Mobile nav ARIA state doğru.
- [ ] Meaningful image alt text.
- [ ] Decorative icon'lar screen-reader'dan gizli.
- [ ] Form label / error association doğru.
- [ ] Contrast WCAG 2.2 AA seviyesine yakın/uygun.
- [ ] Reduced motion desteği.

---

# 14. Faz 12 — Performance ve SEO

## Assets

- [ ] Hero screenshot eager / high priority.
- [ ] AI screenshot lazy.
- [ ] WebP/AVIF tercih.
- [ ] Screenshot text aşırı compression ile bozulmayacak.
- [ ] Explicit width/height veya aspect-ratio.

## JS

- [ ] Yalnız Alpine + gerekli native JS.
- [ ] Large animation bundle yok.
- [ ] Homepage SPA yapılmayacak.

## SEO

- [ ] `<title>`.
- [ ] Meta description.
- [ ] canonical.
- [ ] OpenGraph.
- [ ] Twitter/X meta.
- [ ] favicon/light-dark icon.
- [ ] robots foundation.

---

# 15. Faz 13 — Screenshot Asset Contract

Gerçek screenshot'lar daha sonra kullanıcı tarafından sağlanacak.

## Beklenen zorunlu assetler

```text
public/images/product/home-dark.webp
public/images/product/ai-dark.webp
```

## Opsiyonel responsive crop

```text
public/images/product/home-dark-mobile.webp
public/images/product/ai-dark-mobile.webp
```

## ProductFrame davranışı

- [ ] Asset yokken placeholder doğru ölçüde kalacak.
- [ ] Asset gelince component kodu yeniden yazılmayacak.
- [ ] Screenshot stretch edilmeyecek.
- [ ] Sahte UI çizilmeyecek.
- [ ] Perspektif/laptop mockup içine zorlanmayacak.
- [ ] Uygulama chrome'u screenshot'ın parçasıysa doğal korunacak.

---

# 16. Faz 14 — Test ve QA

## Teknik QA

- [ ] `composer install` / dependency consistency.
- [ ] Laravel test suite.
- [ ] Pint.
- [ ] `npm ci` veya lockfile'a uygun install.
- [ ] `npm run build`.
- [ ] Vite production build.
- [ ] Livewire form testleri.
- [ ] Homepage structure testleri yeni V2 yapıya göre güncellenecek.

## Visual QA

- [ ] Navbar + Hero checkpoint.
- [ ] AI + Feature Strip checkpoint.
- [ ] Pricing + Footer checkpoint.
- [ ] Responsive checkpoint.
- [ ] Final full-page checkpoint.

## Görsel BLOCKER kriterleri

Aşağıdakiler varsa iş DONE sayılmayacak:

- [ ] Container eksen kayması.
- [ ] Horizontal overflow.
- [ ] Büyük shadow/glow/gradient.
- [ ] Aşırı radius.
- [ ] SaaS-template kart kalabalığı.
- [ ] Referanstan belirgin section ritmi sapması.
- [ ] Hero'nun gereğinden kısa olması.
- [ ] Alt section'ın ilk viewport'ta gereğinden fazla görünmesi.
- [ ] AI dark section'ın yeterince güçlü kontrast oluşturmaması.
- [ ] Feature Strip'in hero altında kalması.
- [ ] Kaldırılan UYAP / Work Tools / Workflow section'larının render edilmeye devam etmesi.
- [ ] Early Access'in ikinci pricing plan gibi görünmesi.

---

# 17. Commit / Branch Planı

Geliştirme kullanıcı onayından sonra başlayacak.

## Branch

- [ ] Çalışma `develop` üzerinde yapılacak.
- [ ] `main` kullanıcı açıkça onay vermeden güncellenmeyecek.
- [ ] Force push kullanılmayacak.

## Önerilen commit paketleri

1. `refactor(home): align section architecture with approved v2 reference`
2. `feat(home): rebuild navbar and hero visual system`
3. `feat(home): implement ai showcase and feature strip`
4. `feat(home): refine pricing early-access and footer`
5. `feat(home): add motion responsive and accessibility polish`
6. `test(home): update homepage v2 coverage and qa`

Commit sınırları işin gerçek değişikliklerine göre birleştirilebilir; 2px micro-commit spam yapılmayacak.

---

# 18. Kullanıcı Onay Kapısı

Bu belge kaydedildikten sonra **kod geliştirme başlamaz**.

Geliştirme yalnız kullanıcı bu planı onayladıktan sonra başlar.

Onaydan sonra çalışma sırası:

```text
Baseline Audit
    ↓
Layout / Geometry
    ↓
Navbar + Hero
    ↓
AI Dark Section
    ↓
Feature Strip
    ↓
Pricing + Early Access
    ↓
Footer
    ↓
Motion / Interaction
    ↓
Responsive / A11y / Performance
    ↓
Tests / QA
    ↓
Gerçek screenshot entegrasyonu (assetler geldiğinde)
```

---

# 19. Definition of Done — Screenshotlar Hariç

Kullanıcının gerçek ürün screenshot'ları henüz gelmemiş olsa bile aşağıdaki maddeler tamamlandığında screenshot dışı homepage işi tamamlanmış kabul edilebilir:

- [ ] Son onaylı V2 layout birebir uygulanmış.
- [ ] Navbar tamam.
- [ ] Hero tamam ve screenshot placeholder doğru.
- [ ] AI dark section tamam ve placeholder doğru.
- [ ] Feature Strip doğru konumda.
- [ ] Pricing + Early Access tamam.
- [ ] Footer tamam.
- [ ] Motion sistemi tamam.
- [ ] Hover/focus state'leri tamam.
- [ ] Mobile nav tamam.
- [ ] 10 viewport responsive QA tamam.
- [ ] Accessibility checklist tamam.
- [ ] Production Vite build PASS.
- [ ] Laravel testleri PASS.
- [ ] Form testleri PASS.
- [ ] Görsel blocker yok.
- [ ] Kullanıcı final görsel checkpoint'i onayladı.

Gerçek screenshot assetleri geldiğinde yalnız ProductFrame entegrasyonu ve crop/fidelity QA kalacaktır.
