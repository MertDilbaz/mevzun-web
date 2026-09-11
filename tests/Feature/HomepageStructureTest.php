<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomepageStructureTest extends TestCase
{
    public function test_homepage_has_v2_section_structure(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response->assertSee('id="hero"', false);
        $response->assertSee('id="ai"', false);
        $response->assertSee('id="features"', false);
        $response->assertSee('id="uyap"', false);
        $response->assertSee('id="pricing"', false);
        $response->assertSee('id="early-access"', false);
        $response->assertSee('id="footer"', false);
        $response->assertSee('id="main-content"', false);

        $response->assertDontSee('id="work-tools"', false);
        $response->assertDontSee('id="product"', false);
    }

    public function test_homepage_has_approved_v2_content(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response->assertSee('AVUKATLAR İÇİN');
        $response->assertSee('Hukuki çalışmalarınız için');
        $response->assertSee('tek bir çalışma alanı.');
        $response->assertSee('02 / YAPAY ZEKÂ');
        $response->assertSee('Yapay zekâ, dava bağlamını anlar.');
        $response->assertSee('Tüm dosyalar tek yerde');
        $response->assertSee('Güvenli ve gizli');
        $response->assertSee('Daha verimli çalışın');
        $response->assertSee('Her yerden erişin');
        $response->assertSee('FİYATLANDIRMA');
        $response->assertSee('Şeffaf, sade, tek paket.');
        $response->assertSee('Mevzun Pro');
        $response->assertSee('₺1.500');
    }

    public function test_homepage_uses_one_h1_and_removes_old_v1_copy(): void
    {
        $content = $this->get('/')->getContent();

        $this->assertSame(1, substr_count($content, '<h1'));
        $this->assertStringNotContainsString('Nasıl çalışır?', $content);
        $this->assertStringNotContainsString("Dava dosyanız UYAP'ta, notlarınız Excel'de", $content);
        $this->assertStringNotContainsString('Gününüzü, dosyalarınızla birlikte yönetin.', $content);
        $this->assertStringNotContainsString('Verilerinizi size özel şekilde yönetin.', $content);
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

    public function test_homepage_has_accessible_skip_link_and_product_asset_contract(): void
    {
        $response = $this->get('/');

        $response->assertSee('Ana içeriğe geç');
        $response->assertSee('href="#main-content"', false);
        $response->assertSee('images/product/home-dark.webp', false);
        $response->assertSee('images/product/home-light.webp', false);
        $response->assertSee('images/product/ai-dark.webp', false);
    }

    public function test_homepage_has_brand_logos_and_theme_toggle(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('/images/brand/mevzun-logo-light.png', false);
        $response->assertSee('/images/brand/mevzun-logo-dark.png', false);
        $response->assertSee('Açık temaya geç');
        $response->assertSee('Koyu temaya geç');
    }

    public function test_homepage_navbar_has_scaled_elements_and_nav_links(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('h-[80px]', false);
        $response->assertSee('h-[70px]', false);
        $response->assertSee('mz-nav-link', false);
        $response->assertSee('Ürün');
        $response->assertSee('UYAP');
        $response->assertSee('Yapay Zekâ');
        $response->assertSee('Fiyatlandırma');
        $response->assertSee('İletişim');
    }
}
