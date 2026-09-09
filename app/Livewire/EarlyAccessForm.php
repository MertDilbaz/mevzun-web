<?php

namespace App\Livewire;

use App\Models\EarlyAccessLead;
use Livewire\Component;

class EarlyAccessForm extends Component
{
    public string $email = '';

    public bool $submitted = false;

    protected array $rules = [
        'email' => ['required', 'email', 'max:255'],
    ];

    protected array $messages = [
        'email.required' => 'Lütfen e-posta adresinizi girin.',
        'email.email' => 'Lütfen geçerli bir e-posta adresi girin.',
        'email.max' => 'E-posta adresi en fazla 255 karakter olabilir.',
    ];

    public function submit(): void
    {
        $this->validate();

        $cleanEmail = strtolower(trim($this->email));

        // LOCKED §9.22: Duplicate behavior - aynı email ikinci row oluşturmaz, kullanıcıya sakin feedback verilir.
        EarlyAccessLead::firstOrCreate(
            ['email' => $cleanEmail],
            ['source' => 'homepage']
        );

        $this->submitted = true;
        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.early-access-form');
    }
}
