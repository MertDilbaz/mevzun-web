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

    public function test_homepage_has_exact_locked_headlines(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        // H1 (LOCKED §4.7)
        $response->assertSee('Hukuki çalışmalarınız için tek bir çalışma alanı.');

        // Value Headline (LOCKED §5.5)
        $response->assertSee("Dava dosyanız UYAP'ta, notlarınız Excel'de, takviminiz başka yerde olmak zorunda değil.", false);

        // UYAP Headline (LOCKED §6.7)
        $response->assertSee('UYAP dosyalarınız çalışma alanınızda.');

        // AI Headline (LOCKED §7.3)
        $response->assertSee('Yapay zekâ, dava bağlamını bilir.');

        // Takvim Headline (LOCKED §8.7)
        $response->assertSee('Gününüzü, dosyalarınızla birlikte yönetin.');

        // Workspace Headline (LOCKED §8.11)
        $response->assertSee('Verilerinizi size özel şekilde yönetin.');

        // Pricing Headline (LOCKED §9.5)
        $response->assertSee('Şeffaf, sade, tek paket.');
    }

    public function test_homepage_has_exact_locked_eyebrows_and_labels(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response->assertSee('AVUKATLAR İÇİN');
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

        // Banned buzzwords
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
