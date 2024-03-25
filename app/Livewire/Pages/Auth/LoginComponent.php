<?php

namespace App\Livewire\Pages\Auth;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Tresorkasenda\Forms\Forms;
use Tresorkasenda\Forms\Inputs\TextInput;

#[Layout('layouts.guest')]
#[Title('Login')]
class LoginComponent extends Component
{

    public string $email = '';

    public string $password = '';

    public function render(): View
    {
        return view('livewire.pages.auth.login-component');
    }

    public function component()
    {
        return Forms::make()
            ->schema([
                TextInput::make('email')
                    ->label('Your Email')
                    ->placeholder('Your email address')
                    ->autofocus()
                    ->autocomplete()
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->label('Your password')
                    ->password()
                    ->required()
                    ->placeholder('Your password')
            ]);
    }

    public function storeData()
    {
        dd($this->all());
    }
}
