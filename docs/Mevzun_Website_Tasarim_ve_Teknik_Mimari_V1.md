# Mevzun Website — Görsel Tasarım ve Teknik Mimari Karar Belgesi
**Belge kimliği:** `P-MEVZUN-WEB-V1`  
**Durum:** Tasarım ve teknik temel kararları  
**Tarih:** 09.09.2026  
**Ürün:** Mevzun — Hukuk Çalışma Alanı

---

## 1. Belgenin amacı

Bu belge, Mevzun’un public website’inin geliştirilmesine başlamadan önce kullanılacak ortak tasarım ve teknik mimari referansıdır.

Amaç yalnızca bir landing page tasarlamak değildir. Kurulacak web projesi ileride:

- public website,
- kullanıcı hesabı,
- abonelik,
- lisanslama,
- cihaz/oturum yönetimi,
- Mevzun Desktop API,
- AI kullanım/kota/maliyet katmanı

gibi ihtiyaçları aynı backend altında taşıyabilecek şekilde hazırlanacaktır.

Ancak **V1 kapsamı public website’tir**. Kullanıcı sistemi, ödeme, lisans ve AI backend uygulaması bu aşamada geliştirilmez.

---

# 2. Mevcut Mevzun uygulamasından çıkarılan görsel kimlik

Bu belge hazırlanırken mevcut Mevzun Ana Sayfa ekranı referans alınmıştır.

## 2.1. Mevcut arayüzde korunması gereken güçlü karakter

Mevzun Desktop şu anda belirgin biçimde:

- bilgi yoğun,
- profesyonel,
- masaüstü-first,
- araç odaklı,
- düşük dekorasyonlu,
- düz yüzeyli,
- gölgesiz veya çok düşük gölgeli,
- ince border kullanan,
- keskin / düşük radiuslu,
- kontrollü mavi vurguya sahip

bir tasarım dili kullanmaktadır.

Website bu dili **birebir kopyalamamalı**, fakat aynı ürün ailesinin parçası olduğu açıkça hissedilmelidir.

### Referans ekrandaki başlıca görsel özellikler

- Sol tarafta koyu, sabit bir navigasyon alanı bulunuyor.
- Aktif navigasyon satırında açık, düşük doygunluklu mavi vurgu kullanılıyor.
- Üst bölgede global arama alanı bulunuyor.
- Arama alanının altında browser benzeri sekme sistemi mevcut.
- Ana içerik grid ve panel mantığıyla kurulmuş.
- Özet veriler yatay bir `SummaryStrip` gibi sunuluyor.
- Büyük bilgi panelleri 2 sütunlu düzen kullanıyor.
- Border çizgileri yüzey ayrımının ana yöntemi.
- Büyük, yumuşak gölgeler bulunmuyor.
- UI çok yuvarlak değil.
- İkonografi line/stroke ağırlıklı.
- Tipografi kompakt ve araç arayüzüne uygun.
- Ana vurgu rengi parlak SaaS mavisi yerine daha kontrollü, arşivsel bir mavi.
- Koyu tema teknolojik görünse de “oyuncu / neon / cyber” bir karaktere sahip değil.

Bu özellikler web tasarımının temel referansıdır.

---

# 3. Website için temel tasarım yönü

## 3.1. Ana konsept

Website şu iki yaklaşımın birleşimi olacaktır:

> **Modern Archive + Product-led SaaS**

Fakat sonuç klasik bir SaaS template’i gibi görünmemelidir.

### İstenen karakter

- ciddi,
- güvenilir,
- modern,
- teknik olarak güçlü,
- hukuk alanına uygun,
- ürünü merkezine koyan,
- sakin,
- premium fakat gösterişsiz.

### Kaçınılacak karakter

- klasik hukuk bürosu sitesi,
- altın / lacivert / terazi klişeleri,
- agresif gradient kullanımı,
- mor-neon “AI” estetiği,
- büyük 3D objeler,
- glassmorphism,
- aşırı yuvarlatılmış SaaS kartları,
- sürekli hareket eden dekoratif animasyonlar,
- stok hukuk görselleri,
- tokmak / terazi / adliye sütunu gibi jenerik semboller.

---

# 4. Website ürün konumlandırması

Mevzun website’de yalnızca “AI avukat uygulaması” olarak konumlandırılmamalıdır.

Ana mesaj:

> **Mevzun, avukatların UYAP’tan günlük çalışma düzenine ve yapay zekâ destekli hukuki işlere kadar tek ortamda çalışmasını sağlayan hukuk çalışma alanıdır.**

Ziyaretçi siteyi aşağı doğru gezerken şu algı sırasını yaşamalıdır:

1. Bu ciddi bir hukuk çalışma yazılımı.
2. UYAP dosyalarıyla doğrudan çalışıyor.
3. Bir dava üzerinde gerçek bir çalışma alanı sağlıyor.
4. Takvim, görev, müvekkil ve yerel çalışma araçlarını birleştiriyor.
5. Tüm bu bağlamın üzerinde AI çalışıyor.
6. Bu ürün yalnızca UYAP arayüzü veya AI chatbot değil.

Bu nedenle AI hero’nun ana konusu yapılmayacaktır.

---

# 5. Ana görsel prensip: ürünü göster

Website’in görsel ağırlığının büyük bölümü **gerçek Mevzun UI ekranlarından** gelmelidir.

Hedef:

- gerçek uygulama screenshot’ları,
- seçilmiş UI crop’ları,
- gerektiğinde hafif perspektifsiz mockup kompozisyonları,
- gerçek ürün kullanım bağlamı.

Kaçınılacak:

- laptop içine screenshot yerleştirme,
- telefon mockup’ı,
- soyut AI küreleri,
- anlamsız dashboard çizimleri,
- üründe bulunmayan sahte özelliklerin gösterilmesi.

### Kural

**Website görsel anlatımının yaklaşık %60’ı gerçek ürün arayüzüne dayanmalıdır.**

---

# 6. Tema stratejisi

## 6.1. Public website

Önerilen ana strateji:

- public website: **light-first**
- gerektiğinde dark mode desteği
- AI bölümü: kontrollü dark section
- ürün screenshot’ları: light veya dark tema, bağlama göre

Neden light-first:

- metin okunabilirliği,
- public pazarlama sayfasında daha ferah görünüm,
- screenshot’ların daha güçlü ayrışması,
- Mevzun’un “kurumsal çalışma alanı” karakterini koruması.

Mevcut Desktop uygulamasının dark teması website üzerinde özellikle:

- hero screenshot,
- AI section,
- ürün detayı

gibi alanlarda güçlü bir görsel kontrast sağlayabilir.

---

# 7. Renk sistemi

Website için bağımsız bir “marketing blue” oluşturulmayacaktır.

Mümkün olduğunca Mevzun Desktop ile ortak brand tokenları kullanılmalıdır.

## 7.1. Önerilen temel light tokenlar

```text
Background              #FFFFFF
Secondary Background    #F7F8FA
Elevated Surface        #FFFFFF
Primary Text            #16181D
Secondary Text          #626A76
Muted Text              #8B929D
Border                  #E4E7EB
Border Strong           #D5D9DF

Primary Blue            Mevzun mevcut ana mavi tokenı
Blue Surface            Mevzun açık mavi hover/surface tokenı
Blue Border             Primary Blue'nun düşük doygunluklu varyantı
```

## 7.2. Dark alanlar

```text
Dark Background         #101416 / mevcut desktop tona yakın
Dark Surface            #161B1E
Dark Border             #2A3136
Dark Primary Text       #F2F4F5
Dark Secondary Text     #A9B0B6
```

**Not:** Kesin HEX değerleri uygulamadaki mevcut tokenlar incelendikten sonra tek kaynaktan üretilecektir.

---

# 8. Tipografi

## 8.1. Font

**Inter**

Mevzun Desktop ile aynı aile korunacaktır.

Serif font kullanılmayacaktır.

## 8.2. Önerilen ölçek

### Hero heading
- Desktop: `64–72px`
- Tablet: `44–52px`
- Mobile: `34–40px`
- Weight: `600`
- Line-height: yaklaşık `1.05–1.10`

### Section heading
- Desktop: `44–52px`
- Tablet: `36–42px`
- Mobile: `28–34px`

### Lead/body
- `18px / 28–30px`

### Standart body
- `16px / 24–26px`

### UI annotation
- `13–14px`

### Eyebrow / section index
- `12–13px`
- kontrollü uppercase veya kısa label

---

# 9. Radius, border ve shadow

## 9.1. Radius

Website Mevzun Desktop’tan daha yumuşak olabilir fakat “rounded SaaS” görünümüne geçmemelidir.

Öneri:

```text
Button          4–6px
Input           4–6px
Small Card      6px
Large Surface   6–8px
Screenshot      6–8px
```

Kaçınılacak:

```text
20px+
24px+
32px+
pill-shaped large cards
```

## 9.2. Border

Ana yüzey ayırıcı:

- `1px solid`
- düşük kontrast
- kart sınırlarını tanımlar

## 9.3. Shadow

Genel kural:

> Border birinci yöntem, shadow ikinci yöntem.

Screenshot veya floating yüzey gerektiğinde çok hafif shadow kullanılabilir.

Glassmorphism kullanılmayacaktır.

---

# 10. Grid ve sayfa genişliği

## 10.1. Ana container

```text
Standard Container: 1280px
Wide Product Container: 1440px
Text Measure: 720–850px
```

## 10.2. Desktop grid

- 12 kolon
- geniş section spacing
- 24–32px gutter

## 10.3. Section spacing

Desktop:

```text
120–160px
```

Mobile:

```text
72–96px
```

Amaç sayfayı kartlarla doldurmak değil, ürün ekranlarının nefes almasını sağlamaktır.

---

# 11. Header / Navbar

## 11.1. Yerleşim

### Sol
- Mevzun logo
- wordmark

### Orta
- Ürün
- UYAP
- Yapay Zekâ
- Fiyatlandırma

### Sağ — V1
- İletişim
- ana CTA

### Sağ — kullanıcı sistemi sonrası
- Giriş Yap
- ana CTA

## 11.2. Davranış

- sticky navbar
- scroll sırasında çok hafif surface/border değişimi
- büyük blur veya glass efekt kullanılmaz
- yüksekliği yaklaşık 64–72px
- mobile’da sade hamburger drawer

## 11.3. Ana CTA

Örnek:

- `Mevzun'u keşfet`
- `Demo talep et`
- `Mevzun'u deneyin`

Kesin CTA metni ürünün dağıtım/lansman planı belli olduğunda kilitlenir.

---

# 12. Ana sayfa bilgi mimarisi

Önerilen sıra:

```text
01  Navbar
02  Hero
03  Problem / Value Statement
04  UYAP
05  Dava Çalışma Alanı
06  Takvim ve Günlük Çalışma
07  Yapay Zekâ
08  Yerel Çalışma Alanı
09  Her Şey Birbirine Bağlı
10  Özellik Özeti / Feature Matrix
11  Fiyatlandırma
12  Final CTA
13  Footer
```

---

# 13. Hero

## 13.1. Kompozisyon

**Centered hero** tercih edilecektir.

Split hero temel seçenek değildir.

```text
                    MEVZUN

          Hukuki çalışmalarınız için
             tek bir çalışma alanı.

   UYAP dosyalarınızı yönetin, günlük işlerinizi
   takip edin ve yapay zekâ desteğiyle çalışın.

        [ Ana CTA ]      [ Nasıl çalışır? ]

          ┌─────────────────────────────┐
          │                             │
          │    GERÇEK MEVZUN UI         │
          │                             │
          └─────────────────────────────┘
```

## 13.2. Hero screenshot

İlk güçlü aday mevcut / geliştirilmiş **Ana Sayfa** ekranıdır.

Fakat nihai seçimde şu ekranlar karşılaştırılmalıdır:

1. Ana Sayfa
2. Davalar
3. Dava çalışma penceresi

### Ana Sayfa’nın avantajı

Yüklenen mevcut ekran:

- Mevzun’un geniş kapsamını tek karede gösteriyor.
- Sidebar sayesinde modülleri görünür kılıyor.
- Üst sekmeler “çalışma alanı” hissini destekliyor.
- SummaryStrip ürünün profesyonel karakterini gösteriyor.
- Takvim, görev, dava ve hızlı erişim ilişkisini aynı anda hissettiriyor.

### Ana Sayfa’nın dezavantajı

Boş veri durumunda screenshot pazarlama açısından yeterince güçlü görünmez.

Bu nedenle website için kullanılacak screenshot’ta **kontrollü demo verisi** bulunmalıdır:

- birkaç aktif dava,
- bugünkü duruşma,
- yaklaşan görevler,
- son güncellenen dosyalar,
- hızlı erişimde içerik.

Sahte ürün özelliği eklenmez; yalnızca mevcut ekran gerçekçi demo verisiyle doldurulur.

---

# 14. Problem / Value bölümü

Klasik üç ikonlu SaaS kartı yerine güçlü bir metin kompozisyonu kullanılmalıdır.

Örnek yön:

> **Dava dosyanız UYAP’ta, notlarınız Excel’de, takviminiz başka yerde olmak zorunda değil.**

Altında sade üç kolon:

```text
UYAP                    Çalışma                 Yapay Zekâ
────                    ───────                 ───────────
Dava dosyaları          Takvim                  Dava analizi
Evraklar                Görevler                Araştırma
Safahat                 Müvekkiller             Taslak üretimi
```

Son mesaj:

> **Mevzun bunları aynı çalışma alanında birleştirir.**

---

# 15. UYAP bölümü

## 15.1. Amaç

Mevzun’un UYAP ile gerçek çalışma ilişkisini anlatmak.

## 15.2. Layout

Desktop:

```text
Metin                     Screenshot / UI crop
```

## 15.3. Ana mesaj

- UYAP’a bağlan
- dosyaları bir kez keşfet
- tüm bağlı davaları Mevzun Davalar alanına al
- ihtiyaç duyduğun dosyayı aç
- dosyanın evrak/safahat içeriğini çalışma alanına aktar
- mümkün olduğunca tekrar UYAP tarayıcısına dönmeden çalış

## 15.4. Görsel

Tercih sırası:

1. Davalar ekranı
2. UYAP bağlantı sayfası
3. Keşif progress UI
4. Dava içeri aktarma anı

---

# 16. Dava Çalışma Alanı bölümü

Bu bölüm website’in en güçlü ürün vitrini adaylarından biridir.

## 16.1. Layout

Centered title + full-width screenshot.

```text
                      Bir dava.
               Bütün çalışma bağlamı.

      Evraklar • Taraflar • Safahat • Duruşmalar
      • Harç/Masraf • Tebligatlar • Notlar

┌───────────────────────────────────────────────────────────┐
│                                                           │
│                 DAVA ÇALIŞMA PENCERESİ                    │
│                                                           │
└───────────────────────────────────────────────────────────┘
```

Screenshot 1280–1440px içerik genişliğine yaklaşabilir.

Amaç:

> Kullanıcı bunun bir “dosya listesi” değil gerçek dava çalışma yüzeyi olduğunu anlasın.

---

# 17. Takvim ve günlük çalışma bölümü

Takvim sayfası mevcut revizyon tamamlandıktan sonra website’in ana showcase ekranlarından biri olacaktır.

## 17.1. Layout

```text
Screenshot                     Metin
```

veya section ritmine göre ters yön.

## 17.2. İçerik

- aylık görünüm
- haftalık görünüm
- duruşmalar
- görevler
- gün detayları
- ilgili dava bağlamı

## 17.3. Pazarlama mesajı

Takvim “ayrı bir calendar” olarak değil:

> **Dava, duruşma ve görev bağlamına bağlı günlük çalışma yüzeyi**

olarak anlatılmalıdır.

---

# 18. AI bölümü

## 18.1. Görsel karakter

AI bölümü site genelinden kontrollü biçimde ayrılabilir.

Öneri:

- full-width dark section
- neon yok
- gradient minimum
- gerçek Mevzun AI UI
- kaynak/citation görünümü
- dava bağlamı hissi

## 18.2. Ana mesaj

> **Yapay zekâ, dava bağlamını bilir.**

Alt yetenekler:

- dava / Case Brief analizi,
- belge ve olay özeti,
- emsal / hukuki araştırma,
- taslak hukuki evrak,
- kaynaklı cevaplar.

## 18.3. Kural

AI mimarisi kesinleşmeden website üzerinde şu tür vaatler yapılmaz:

- “sınırsız AI”
- sabit analiz süresi
- garanti doğruluk
- garanti emsal doğrulaması
- kesin model adı
- kesin token/kota bilgisi

Marketing metni ürün yeteneğini anlatmalı, henüz kilitlenmemiş altyapıyı değil.

---

# 19. Yerel Çalışma Alanı bölümü

V1 ürün kapsamı:

- Smart Table
- XLSX import
- CSV import
- sıfırdan tablo
- native tablo düzenleme
- arama
- filtre
- sıralama
- kolon tipi
- aggregate footer
- UYAP dosyasıyla ilişkilendirme

## 19.1. Görsel

Gerçek Smart Table screenshot’ı.

## 19.2. Ana mesaj yönü

> **Çalışma kayıtlarınız ayrı Excel dosyalarında kaybolmasın.**

veya daha kontrollü bir varyant.

Amaç Mevzun’un yalnızca UYAP istemcisi olmadığını göstermek.

---

# 20. “Her şey bağlı” bölümü

Bu bölüm ürünün sistem mantığını tek bakışta göstermelidir.

Örnek ilişki:

```text
Müvekkil
   │
   ├── Dava
   │    ├── Evrak
   │    ├── Duruşma
   │    ├── Görev
   │    └── AI
   │
   └── Yerel Çalışma Alanı
```

Bu bölümde büyük dekoratif diagram yerine sade, ürün UI diline yakın relation map kullanılabilir.

---

# 21. Feature Matrix

Ana showcase bölümlerinden sonra küçük detayları göstermek için kompakt feature matrix kullanılabilir.

Örnek:

| Alan | Özellikler |
|---|---|
| Davalar | Arama, filtre, UYAP dosyaları, dosya açma |
| Duruşmalar | Yaklaşan duruşmalar, tarih bağlamı |
| Görevler | Öncelik, tarih, dava ilişkisi |
| Müvekkiller | Müvekkil-dava ilişkisi |
| Takvim | Ay/hafta, duruşma ve görev görünümü |
| Yerel Çalışma Alanı | Smart Table, XLSX/CSV |
| AI | Analiz, araştırma, taslak |

Bu bölüm sade olmalıdır; hero niteliğinde kullanılmaz.

---

# 22. Fiyatlandırma

Mevzun’un ticari yaklaşımı:

> **Tek paket, tek fiyat**

Website’de karmaşık 3–4 paket tablosu kullanılmaması tercih edilir.

İlk sürümde fiyat henüz kesin açıklanmayacaksa:

- `Yakında`
- `Erken erişim`
- `Demo talep et`

gibi kontrollü CTA kullanılabilir.

Fiyat kesinleştiğinde tek plan kartı veya düz pricing section yeterlidir.

---

# 23. Final CTA

Geniş fakat sade.

Örnek yapı:

```text
Mevzun ile hukuki çalışma alanınızı tek yerde toplayın.

[ Mevzun'u deneyin ]
```

Arka plan secondary surface veya dark olabilir.

Dekoratif grafik gerekmiyor.

---

# 24. Footer

Önerilen kolonlar:

### Ürün
- Özellikler
- UYAP
- Yapay Zekâ
- Fiyatlandırma

### Şirket
- Hakkımızda
- İletişim

### Hukuki
- Gizlilik
- KVKK
- Kullanım Koşulları
- Çerez Politikası

### Alt
- copyright
- şirket bilgisi
- gerektiğinde sosyal linkler

---

# 25. Sayfa yapısı

V1 için önerilen route yapısı:

```text
/
├── /urun
├── /uyap
├── /yapay-zeka
├── /fiyatlandirma
├── /iletisim
├── /gizlilik
├── /kvkk
└── /kullanim-kosullari
```

Opsiyonel:

```text
/hakkimizda
```

Kullanıcı sistemi geldiğinde:

```text
/login
/register
/account
/subscription
/devices
/download
```

---

# 26. Animasyon sistemi

Animasyonların amacı dikkat çekmek değil, hiyerarşiyi desteklemektir.

## 26.1. Scroll reveal

```text
opacity: 0 → 1
translateY: 12px → 0
duration: 250–400ms
```

## 26.2. Hover / navbar

```text
150–200ms
```

## 26.3. Kaçınılacak

- parallax,
- mouse-follow glow,
- 3D tilt,
- sürekli kayan logo marquiseleri,
- background particle,
- neon glow,
- aşırı scroll-jacking.

---

# 27. Screenshot hazırlama standardı

Website’de kullanılacak uygulama görselleri rastgele screenshot olmamalıdır.

Her görsel:

- aynı pencere oranına sahip,
- kontrollü demo verisi içeriyor,
- kişisel veri içermiyor,
- debug bilgisi içermiyor,
- gereksiz boş state göstermiyor,
- mümkün olduğunca aynı ölçek/density ile çekilmiş,
- website için crop edilmiş

olmalıdır.

## 27.1. Önerilen showcase screenshot seti

1. Ana Sayfa
2. Davalar
3. Dava Çalışma Alanı
4. Takvim
5. UYAP
6. Yerel Çalışma Alanı
7. AI ekranı — modül tamamlandıktan sonra

---

# 28. Responsive strateji

## Desktop
Ana referans deneyim.

## Tablet
- iki kolonlar tek kolona düşebilir
- screenshot ve metin sırası korunur
- navbar sadeleşir

## Mobile
Website responsive olacaktır; Mevzun Desktop uygulamasını mobile “uyarlamaya” çalışmaz.

Screenshot’lar:

- tam uygulama görünümü yerine kontrollü crop,
- kritik UI bölümü,
- gerektiğinde horizontal overflow yerine tek odaklı içerik

kullanır.

---

# 29. Erişilebilirlik

Minimum hedef:

- semantic HTML
- WCAG AA kontrast
- keyboard navigation
- visible focus state
- reduced motion desteği
- `aria-*` yalnız gerekli olduğunda
- icon-only butonlarda accessible label
- doğru heading hiyerarşisi

---

# 30. Teknik stack — kilitlenen karar

## Backend

```text
Laravel 13
PHP 8.4
```

Laravel yalnız landing page framework’ü olarak değil, ileride web backend omurgası olarak kullanılacaktır.

## Marketing frontend

```text
Blade
Livewire 4
Alpine.js
Tailwind CSS 4
Vite
```

## Database

```text
PostgreSQL
```

## Cache / Queue

```text
Redis
```

V1 public website’de Redis kritik olmayabilir; fakat proje altyapısında hazır tutulabilir.

## Web server

```text
Nginx
PHP-FPM
OPcache
```

## Deployment

```text
Linux VPS
```

Docker zorunlu değildir.

---

# 31. Neden Blade + Livewire?

Mevzun Desktop SvelteKit kullanıyor olsa da public website için aynı frontend stack’i kullanmak zorunlu değildir.

Website’in öncelikleri:

- SEO,
- SSR,
- düşük JS yükü,
- hızlı landing page,
- Laravel ile doğal entegrasyon,
- ileride auth/account ekranlarına kolay geçiş.

Bu nedenle:

```text
Desktop
Wails + SvelteKit + Go + SQLite

Web
Laravel + Blade/Livewire + PostgreSQL
```

ayrımı bilinçlidir.

---

# 32. PostgreSQL seçimi

Mevzun web backend ileride yalnız içerik değil şu yapıları taşıyabilir:

```text
users
organizations
subscriptions
plans
entitlements
licenses
devices
sessions

ai_usage_events
ai_cost_ledger
ai_quotas
ai_requests

audit_logs
desktop_installations
```

Bu nedenle başlangıçtan PostgreSQL kullanılacaktır.

---

# 33. Önerilen Laravel proje yapısı

```text
mevzun-web/
│
├── app/
│   ├── Http/
│   ├── Livewire/
│   ├── Models/
│   ├── Services/
│   └── Support/
│
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   ├── components/
│   │   ├── pages/
│   │   │   ├── home.blade.php
│   │   │   ├── product.blade.php
│   │   │   ├── uyap.blade.php
│   │   │   ├── ai.blade.php
│   │   │   ├── pricing.blade.php
│   │   │   └── contact.blade.php
│   │   └── legal/
│   │
│   ├── css/
│   │   └── app.css
│   │
│   └── js/
│       └── app.js
│
├── routes/
│   ├── web.php
│   └── api.php
│
├── public/
│   ├── images/
│   └── product/
│
├── tests/
│
└── ...
```

---

# 34. Component sistemi

Website baştan component tabanlı kurulmalıdır.

## Temel componentler

```text
Navbar
Footer
SectionHeader
Hero
CTAButton
SecondaryButton
ProductScreenshot
ProductCrop
FeatureList
FeatureMatrix
DarkSection
PricingSection
LegalLayout
```

## Kural

Her section için ayrı “kart componenti” yaratmak yerine ortak layout primitive’leri tercih edilmelidir.

---

# 35. Icon sistemi

Mevzun Desktop kararıyla uyumlu olarak:

**Hugeicons**

kullanılmalıdır.

Mümkünse Desktop ve Web aynı ikon metaforlarını paylaşmalıdır.

Örneğin:

- Davalar → folder/case
- Duruşmalar → legal/judge
- Görevler → task
- Takvim → calendar
- Müvekkiller → user/group
- AI → brain/ai
- UYAP → network/link

İkon boyutları website’de dekoratif dev objeler haline getirilmez.

---

# 36. SEO ve metadata

Blade SSR bu konuda temel avantaj sağlayacaktır.

V1’de:

- unique `<title>`
- meta description
- canonical
- OpenGraph
- Twitter/X card
- sitemap
- robots.txt
- structured data
- semantic headings

hazırlanmalıdır.

Özellikle:

```text
Mevzun
hukuk yazılımı
UYAP entegrasyonu
avukat çalışma alanı
dava yönetimi
hukuk yapay zekâ
```

gibi kavramlar doğal metin içerisinde kullanılmalıdır.

Keyword stuffing yapılmaz.

---

# 37. Performans hedefleri

Marketing website hızlı olmalıdır.

Hedefler:

- JS minimum
- lazy-loaded ürün screenshot’ları
- WebP/AVIF
- doğru responsive image sizes
- font self-host veya optimize
- route bazında gereksiz Livewire kullanılmaması
- production asset compression
- HTTP caching
- OPcache

Blade section yalnız statikse Livewire’a çevrilmez.

---

# 38. Test ve kalite araçları — öneri

Core stack’e ek öneri:

```text
Pest
Laravel Pint
PHPStan + Larastan
Playwright
Prettier
```

### Kullanım

- Pest → backend/feature test
- Pint → PHP format
- PHPStan/Larastan → static analysis
- Playwright → responsive/visual/e2e smoke
- Prettier → frontend formatting

Bunlar implementasyon sırasında agent için QA gate olarak kullanılabilir.

---

# 39. Güvenlik temeli

Kullanıcı sistemi henüz yapılmasa da altyapı şu prensiplerle kurulmalıdır:

- CSRF koruması
- secure cookies
- rate limiting
- environment secret management
- production debug kapalı
- HTTPS only
- CSP planı
- güvenli upload prensibi
- audit log altyapısına açık mimari

Kullanıcı sistemi geldiğinde bu belge genişletilecektir.

---

# 40. Kullanıcı sistemi için şimdiden bırakılacak mimari alan

Şu an geliştirilmeyecek fakat repo çöpe gitmemelidir.

Gelecekte:

```text
Account
   ├── User
   ├── Organization / Office
   ├── Subscription
   ├── Entitlement
   ├── Device
   ├── License
   └── Session
```

ve AI tarafında:

```text
User
   └── AI Usage
        ├── Request
        ├── Cost
        ├── Daily Budget
        ├── Monthly Budget
        └── Entitlement
```

eklenebilecektir.

Public website bu sisteme aynı Laravel backend üzerinden bağlanacaktır.

---

# 41. Desktop API için gelecek yön

İleride:

```text
Mevzun Desktop
      ↓
Mevzun API
      ↓
Laravel
      ↓
PostgreSQL
```

yapısı kurulabilir.

Laravel backend:

- auth,
- license,
- subscription,
- device,
- entitlement,
- usage

konularında merkezi kaynak olabilir.

Bu V1 website kapsamında implementasyon gerektirmez.

---

# 42. Website’de kullanılmayacak tasarım kalıpları

Aşağıdakiler bilinçli olarak kapsam dışı tutulmalıdır:

- mor/pembe AI gradient
- glowing orb
- 3D robot
- generic justice stock photo
- courthouse stock photo
- gavel hero image
- oversized rounded cards
- glass cards
- floating testimonial bubbles
- fake company-logo wall
- gerçek olmayan müşteri sayısı
- sahte istatistik
- fake AI conversation
- ürün dışında mock dashboard
- aşırı büyük icon cards
- her section’da aynı 3-card grid

---

# 43. Website ritmi

Bütün sayfanın aynı layout’u tekrar etmemesi gerekir.

Önerilen ritim:

```text
HERO
Centered

PROBLEM
Centered editorial text

UYAP
Text → Screenshot

DAVA ÇALIŞMA ALANI
Centered + Full-width screenshot

TAKVİM
Screenshot → Text

AI
Full-width Dark Section

YEREL ÇALIŞMA ALANI
Text → Screenshot

CONNECTED SYSTEM
Diagram / relation composition

FEATURE MATRIX
Compact

PRICING
Centered

FINAL CTA
Centered
```

---

# 44. Ana Sayfa screenshot’ına özel değerlendirme

Yüklenen mevcut Mevzun Ana Sayfa ekranı website açısından iyi bir temel referanstır.

## Güçlü taraflar

- Ürünün kapsamı sidebar’dan anlaşılabiliyor.
- “Ana Sayfa / Davalar / Duruşmalar / Görevler / Dikkat Merkezi / Takvim / Müvekkiller / Yerel Çalışma Alanı / AI” bütünlüğü görünür.
- Üst sekmeler desktop workspace karakterini güçlendiriyor.
- Global arama profesyonel ürün hissi veriyor.
- SummaryStrip ve paneller sistematik bir yapı oluşturuyor.
- Koyu tema screenshot olarak premium durabilir.
- Keskin border ve düşük radius mevcut marka dilini net biçimde gösteriyor.

## Website için iyileştirilmesi gereken taraflar

- Şu an ekranın önemli bölümü empty-state.
- `0 Aktif Davalar`, `0 Bugünkü Duruşmalar` gibi değerler ürünün pazarlama etkisini düşürür.
- Çok geniş screenshot küçük ekranda okunamayabilir.
- Yatay sekme çubuğu tam screenshot’ta oldukça yoğun.
- Üst ve sol chrome çok fazla alan kapladığı için bazı section’larda crop gerekebilir.

## Çözüm

Website showcase sürümünde:

- 6–12 gerçekçi demo dava,
- 2–3 yaklaşan görev,
- 1–2 duruşma,
- son güncellenen dosyalar,
- hızlı erişim öğeleri

bulunmalıdır.

Bu veri yalnız sunum içindir ve gerçek kullanıcı/veri kullanılmaz.

---

# 45. Tasarım karar sistemi

Her yeni website kararı aşağıdaki üç durumdan biriyle işaretlenmelidir:

## `LOCKED`
Uygulamaya geçilebilir.

## `OPEN`
Tasarım görüşmesi gerekli.

## `DEFERRED`
Daha sonraki modüle bağlı.

---

# 46. Şu anda LOCKED kararlar

- `LOCKED` Laravel 13
- `LOCKED` PHP 8.4
- `LOCKED` Blade
- `LOCKED` Livewire 4
- `LOCKED` Alpine.js
- `LOCKED` Tailwind CSS 4
- `LOCKED` Vite
- `LOCKED` PostgreSQL
- `LOCKED` Redis
- `LOCKED` Nginx
- `LOCKED` Linux VPS
- `LOCKED` Inter
- `LOCKED` Hugeicons
- `LOCKED` Modern Archive web karşılığı
- `LOCKED` Product-led landing yaklaşımı
- `LOCKED` düşük radius
- `LOCKED` border-first / minimal shadow
- `LOCKED` gerçek ürün screenshot’larının ana görsel kaynak olması
- `LOCKED` centered hero
- `LOCKED` AI’ın hero’nun ana konusu olmaması
- `LOCKED` AI için ayrı güçlü/dark showcase section düşüncesi
- `LOCKED` public website V1’de kullanıcı sisteminin geliştirilmemesi
- `LOCKED` desktop ve website için ayrı frontend teknoloji yaklaşımı

---

# 47. Henüz OPEN kararlar

Bunlar site implementasyonuna başlamadan veya ilgili section’a geçmeden kararlaştırılmalıdır:

1. Hero ana headline’ın kesin metni
2. Hero CTA’nın kesin metni
3. Hero’da kullanılacak ana screenshot
4. Light-only mi, light+dark toggle mı
5. Navbar’da `Ürün` dropdown olup olmayacağı
6. `/urun` sayfasının bağımsız olup olmayacağı
7. Ana sayfada fiyatın açık yazılıp yazılmayacağı
8. Demo talebi formunun olup olmayacağı
9. İletişim formu
10. AI section’ın kesin içeriği
11. AI UI görseli
12. Connected System bölümünün diagram dili
13. Testimonial / referans kullanılacak mı
14. Kurumsal “Hakkımızda” sayfası V1’de gerekli mi
15. Lansman öncesi “bekleme listesi” kullanılıp kullanılmayacağı
16. Web dark mode toggle
17. Footer şirket/marka hukuki metinleri

---

# 48. DEFERRED kararlar

- kullanıcı kayıt sistemi
- login
- abonelik
- ödeme
- cihaz yönetimi
- lisans doğrulama
- desktop auth
- AI quota
- AI cost ledger
- AI provider/model seçimi
- organization/office modeli
- kullanıcı davet sistemi
- team billing

Bunlar ayrı planlarla ele alınacaktır.

---

# 49. Önerilen geliştirme fazları

## Phase 0 — Tasarım kesinleştirme

- IA
- copy
- hero
- screenshot seti
- section wireframe
- light/dark kararları

## Phase 1 — Laravel foundation

- Laravel proje kurulumu
- Tailwind
- Blade layout
- shared components
- asset pipeline
- route yapısı
- base SEO

## Phase 2 — Home page

- navbar
- hero
- product sections
- AI dark section
- pricing
- footer

## Phase 3 — Detail pages

- Ürün
- UYAP
- AI
- Fiyatlandırma
- İletişim
- Legal

## Phase 4 — Responsive + QA

- desktop
- tablet
- mobile
- accessibility
- performance
- Playwright smoke
- SEO audit

## Phase 5 — Production

- Nginx
- PHP-FPM
- PostgreSQL
- Redis
- HTTPS
- cache
- deploy
- monitoring

## Phase 6 — User system

Ayrı plan.

---

# 50. İlk tasarım çalışmasında üretilecek çıktılar

Implementasyona geçmeden önce aşağıdaki çıktılar hazırlanmalıdır:

1. Ana sayfa desktop wireframe
2. Ana sayfa 1440px referans tasarım
3. Hero alternatifleri
4. Navbar
5. UYAP section
6. Dava çalışma alanı section
7. Takvim section
8. AI dark section
9. Yerel Çalışma Alanı section
10. Pricing
11. Footer
12. Mobile homepage wireframe
13. Screenshot kullanım rehberi
14. Design token listesi

---

# 51. İlk görsel tasarımda kullanılabilecek section akışı

```text
┌──────────────────────────────────────────────────────────┐
│ NAVBAR                                                   │
├──────────────────────────────────────────────────────────┤
│                                                          │
│ HERO                                                     │
│                                                          │
│      Hukuki çalışmalarınız için                         │
│         tek bir çalışma alanı.                           │
│                                                          │
│              [CTA] [Secondary]                           │
│                                                          │
│             [ MEVZUN APP UI ]                            │
│                                                          │
├──────────────────────────────────────────────────────────┤
│ PROBLEM / VALUE                                          │
│                                                          │
│ UYAP + Çalışma + AI                                      │
│                                                          │
├──────────────────────────────────────────────────────────┤
│ 01 / UYAP                                                │
│                                                          │
│ Text                               Screenshot            │
│                                                          │
├──────────────────────────────────────────────────────────┤
│ 02 / DAVA ÇALIŞMA ALANI                                  │
│                                                          │
│           [ FULL WIDTH PRODUCT UI ]                      │
│                                                          │
├──────────────────────────────────────────────────────────┤
│ 03 / TAKVİM                                              │
│                                                          │
│ Screenshot                         Text                  │
│                                                          │
├──────────────────────────────────────────────────────────┤
│██████████████████████████████████████████████████████████│
│ 04 / YAPAY ZEKÂ                                          │
│                                                          │
│ Text                               AI UI                 │
│                                                          │
│██████████████████████████████████████████████████████████│
├──────────────────────────────────────────────────────────┤
│ 05 / YEREL ÇALIŞMA ALANI                                 │
│                                                          │
│ Text                               Smart Table           │
│                                                          │
├──────────────────────────────────────────────────────────┤
│ EVERYTHING CONNECTED                                     │
├──────────────────────────────────────────────────────────┤
│ FEATURE MATRIX                                           │
├──────────────────────────────────────────────────────────┤
│ PRICING                                                  │
├──────────────────────────────────────────────────────────┤
│ FINAL CTA                                                │
├──────────────────────────────────────────────────────────┤
│ FOOTER                                                   │
└──────────────────────────────────────────────────────────┘
```

---

# 52. Nihai tasarım hedefi

Website açıldığında ziyaretçinin ilk algısı:

> **“Bu ciddi bir hukuk çalışma yazılımı.”**

UYAP bölümünde:

> **“UYAP’taki davaları kendi çalışma alanına taşıyor.”**

Dava çalışma alanında:

> **“Burada gerçekten dosya üzerinde çalışabiliyorum.”**

Takvim ve diğer araçlarda:

> **“Günlük hukuk işlerini tek yerde topluyor.”**

AI bölümünde:

> **“Üstelik AI bu çalışma bağlamının üzerinde çalışıyor.”**

Bu algı zinciri bozulmamalıdır.

---

# 53. Son karar özeti

Mevzun website’i:

- Laravel tabanlı,
- Blade/Livewire frontend kullanan,
- PostgreSQL’e dayanan,
- ileride kullanıcı/abonelik/lisans/AI kullanım sistemine büyüyebilen,
- light-first,
- Modern Archive tasarım dilini taşıyan,
- gerçek Mevzun ekranlarını merkeze alan,
- AI’ı ürünü gölgelemeyecek biçimde güçlü bir alt katman olarak sunan,
- klasik hukuk sitesi klişelerinden uzak,
- jenerik SaaS template görünümüne düşmeyen

bir yapı olacaktır.

Bu belge, website tasarım ve implementasyon kararlarında **ana referans doküman** olarak kullanılmalıdır.
