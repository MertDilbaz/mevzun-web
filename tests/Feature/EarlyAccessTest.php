<?php

namespace Tests\Feature;

use App\Livewire\EarlyAccessForm;
use App\Models\EarlyAccessLead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class EarlyAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_homepage_and_legal_pages(): void
    {
        $this->get('/')->assertStatus(200);
        $this->get('/gizlilik')->assertStatus(200);
        $this->get('/kvkk')->assertStatus(200);
        $this->get('/kullanim-kosullari')->assertStatus(200);
    }

    public function test_can_submit_valid_email_and_saves_to_database(): void
    {
        Livewire::test(EarlyAccessForm::class)
            ->set('email', 'avukat@example.com')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertSet('submitted', true)
            ->assertSee('Teşekkürler. Erken erişim listesine eklendiniz.');

        $this->assertDatabaseHas('early_access_leads', [
            'email' => 'avukat@example.com',
            'source' => 'homepage',
        ]);
    }

    public function test_rejects_empty_email(): void
    {
        Livewire::test(EarlyAccessForm::class)
            ->set('email', '')
            ->call('submit')
            ->assertHasErrors(['email' => 'required']);

        $this->assertDatabaseCount('early_access_leads', 0);
    }

    public function test_rejects_invalid_email_format(): void
    {
        Livewire::test(EarlyAccessForm::class)
            ->set('email', 'not-an-email')
            ->call('submit')
            ->assertHasErrors(['email' => 'email']);

        $this->assertDatabaseCount('early_access_leads', 0);
    }

    public function test_duplicate_email_does_not_create_second_row(): void
    {
        EarlyAccessLead::create([
            'email' => 'avukat@example.com',
            'source' => 'homepage',
        ]);

        Livewire::test(EarlyAccessForm::class)
            ->set('email', 'AVUKAT@EXAMPLE.COM') // test case normalization
            ->call('submit')
            ->assertHasNoErrors()
            ->assertSet('submitted', true);

        $this->assertDatabaseCount('early_access_leads', 1);
    }
}
