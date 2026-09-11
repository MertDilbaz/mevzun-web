<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomepageStructureTest extends TestCase
{
    public function test_homepage_has_all_required_section_ids(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response->assertSee('id="hero"', false);
        $response->assertSee('id="product"', false);
        $response->assertSee('id="uyap"', false);
        $response->assertSee('id="ai"', false);
        $response->assertSee('id="work-tools"', false);
        $response->assertSee('id="pricing"', false);
        $response->assertSee('id="early-access"', false);
        $response->assertSee('id="footer"', false);
        $response->assertSee('id="main-content"', false);
    }

    public function test_homepage_has_required_headlines(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response->assertSee('Hukuki çalışmalarınız için tek bir çalışma alanı.');
        $response->assertSee('Bütün ihtiyaçlarınız tek yerde.');
        $response->assertSee("Dava dosyanız UYAP'ta, notlarınız Excel'de, takviminiz başka yerde olmak zorunda değil.", false);
        $response->assertSee('UYAP dosyalarınız çalışma alanınızda.');
        $response->assertSee('Yapay zekâ, dava bağlamını bilir.');
        $response->assertSee('Gününüzü, dosyalarınızla birlikte yönetin.');
        $response->assertSee('Verilerinizi size özel şekilde yönetin.');
        $response->assertSee('Şeffaf, sade, tek paket.');
    }

    public function test_homepage_has_revised_hero_ecosystem(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response->assertDontSee('AVUKATLAR İÇİN');
        $response->assertDontSee("Mevzun'u keşfet");

        $response->assertSee('UYAP davalarınız');
        $response->assertSee('Yapay Zekâ asistanınız');
        $response->assertSee('Yerel çalışma dosyalarınız');
        $response->assertSee('Takvim ve görevler');
        $response->assertSee('Müvekkiller ve duruşmalar');
        $response->assertSee('Daha verimli');
        $response->assertSee('bir hukuk pratiği');
    }

    public function test_homepage_has_required_section_labels(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response->assertSee('ÇALIŞMA DÜZENİ');
        $response->assertSee('01 / UYAP ENTEGRASYONU');
        $response->assertSee('02 / YAPAY ZEKÂ');
        $response->assertSee('03 / TAKVİM VE GÖREV YÖNETİMİ');
        $response->assertSee('04 / YEREL ÇALIŞMA ALANI');
        $response->assertSee('FİYATLANDIRMA');
        $response->assertSee('ERKEN ERİŞİM');
    }

    public function test_homepage_has_no_ai_slop_or_banned_patterns(): void
    {
        $content = $this->get('/')->getContent();

        $this->assertStringNotContainsString('sınırsız AI', $content);
        $this->assertStringNotContainsString('Most Popular', $content);
        $this->assertStringNotContainsString('En Popüler', $content);
        $this->assertStringNotContainsString('Best Value', $content);
        $this->assertStringNotContainsString('Hukukta devrim', $content);
        $this->assertStringNotContainsString('kabus sona eriyor', $content);
        $this->assertStringNotContainsString('tekrar tarayıcıya dönmeden', $content);
        $this->assertStringNotContainsString('UYAP’a hiç dönmeden', $content);
    }

    public function test_homepage_has_accessible_skip_link(): void
    {
        $response = $this->get('/');
        $response->assertSee('Ana içeriğe geç');
        $response->assertSee('href="#main-content"', false);
    }
}
