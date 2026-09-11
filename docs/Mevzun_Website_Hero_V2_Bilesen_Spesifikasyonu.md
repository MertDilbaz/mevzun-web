# Mevzun Website — Hero V2 Bileşen Spesifikasyonu

**Durum:** ACTIVE / USER-APPROVED DIRECTION  
**Kapsam:** Homepage Hero  
**Öncelik:** Bu belge yalnız Hero konusunda `P-MEVZUN-WEB-HOME-V1` ADIM 4 içindeki eski screenshot/eyebrow/CTA kararlarını geçersiz kılar. Diğer homepage kuralları korunur.

## 1. Yeni Hero kararı

Hero artık sağ tarafta tek parça uygulama screenshot'ı göstermeyecektir.

Kaldırılanlar:
- `AVUKATLAR İÇİN` eyebrow
- `Mevzun'u keşfet` CTA
- Hero sağındaki `home-dark.webp` screenshot

Korunanlar:
- `Hukuki çalışmalarınız için tek bir çalışma alanı.` H1
- açıklama metni
- alttaki dört kısa ürün niteliği
- 5/7 split hero geometri yaklaşımı

Yeni sağ taraf:
- bağımsız dış `Mevzun` surface
- başlık: `Bütün ihtiyaçlarınız tek yerde.`
- merkezde Mevzun hub
- çevrede 5 düzenlenebilir HTML bilgi kartı
- kartlar ile merkez arasında bağımsız SVG connector katmanı
- viewport'a ilk girişte tek seferlik kontrollü giriş animasyonu

## 2. Bileşen envanteri

### `hero.blade.php`
Hero'nun ana 5/7 grid kabuğudur. Sol mesajı ve sağ `hero-ecosystem` bileşenini birleştirir.

### `hero-ecosystem.blade.php`
Sağ taraftaki büyük bağımsız yüzeydir. PNG değildir. İçerdiği parçalar:
- section başlığı
- 5 feature card
- merkez hub
- SVG connector katmanı
- sağ alt yardımcı not

Desktop'ta kompozisyon referans görseldeki serbest yerleşimi kullanır. Tablet/mobile'da aynı kartlar okunabilir stacked düzene geçer.

### `hero-feature-card.blade.php`
Tekrar kullanılabilir bilgi kartıdır. Props:
- `icon`
- `title`
- `description`
- `delay`
- `enterX`
- `enterY`

Metinler görsele gömülü değildir; Blade çağrısından değiştirilebilir.

### `hero-mevzun-hub.blade.php`
Merkezdeki Mevzun odak kutusudur. Ayrı bileşendir; kartlarla birleşik bitmap değildir.

### `icon.blade.php`
Hero V2 için kullanılan ikon anahtarları:
- `document`
- `sparkle`
- `folder`
- `calendar`
- `users`
- `desktop`
- `arrow-right`

## 3. İlk içerik seti

1. **UYAP davalarınız**  
   Dosyalarınızı yönetin, süreçleri takip edin.

2. **Yapay Zekâ asistanınız**  
   Hukuki araştırma, özetleme, dilekçe ve daha fazlası.

3. **Yerel çalışma dosyalarınız**  
   Çalışma kayıtlarınızı düzenleyin ve elinizin altında tutun.

4. **Takvim ve görevler**  
   Duruşmalarınızı ve görevlerinizi kaçırmayın.

5. **Müvekkiller ve duruşmalar**  
   Müvekkil bilgileri, duruşma takibi ve süreç yönetimi.

Bu metinlerin tamamı markup içindeki component props üzerinden değiştirilebilir.

## 4. Connector ve motion tekniği

Ek animation dependency kullanılmaz.

Connector çizgileri native SVG `<path>` elemanlarıdır. Dotted/dashed görünüm `stroke-dasharray`, giriş hareketi ise `stroke-dashoffset` üzerinden uygulanır.

Kart girişleri yalnız `transform + opacity` kullanır:
- sol kartlar merkeze doğru kısa X/Y offset'ten gelir
- sağ kartlar ters yönden gelir
- alt kart aşağıdan gelir
- hub en son hafif scale/fade ile görünür

Animation sürekli dönmez; viewport'a ilk girişte tek sefer çalışır.

`prefers-reduced-motion: reduce` durumunda bütün bu hareketler devre dışıdır ve içerik doğrudan görünür.

## 5. Görsel kurallar

- Hero background: `#11171b`
- outer surface: `#11171b`
- feature surface: `#171e23`
- border: `#2b343b`
- primary text: `#f5f7f8`
- secondary text: `#a9b2ba`
- accent/icons: yaklaşık `#83c4e3`
- shadow yok
- gradient yok
- glow yok
- glassmorphism yok
- kart radius 4px
- outer surface radius 6px

## 6. Responsive

### Desktop
Referans görseldeki serbest kompozisyon korunur; merkez hub ve 5 kart aynı büyük surface içinde görünür.

### Tablet / Mobile
Mutlak konumlu yoğun diyagram kullanılmaz. Hub üstte, kartlar altında stacked list olarak gösterilir. Aynı içerik componentleri kullanılır.

## 7. QA

Hero V2 için kontrol edilecekler:
- `AVUKATLAR İÇİN` görünmüyor
- `Mevzun'u keşfet` görünmüyor
- sağ taraf screenshot kullanmıyor
- tüm feature metinleri gerçek HTML text
- kartların ikonları ayrı SVG
- outer surface ayrı DOM container
- reduced-motion destekli
- mobile yatay overflow üretmiyor
- mevcut no-shadow / no-gradient kuralları korunuyor
