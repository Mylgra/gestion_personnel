<?php

declare(strict_types=1);

namespace App\Livewire\Pages;

use App\Action\AuthenticationAction;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Dashboard')]
class Welcome extends Component
{
    public function render(): View
    {
        return view('livewire.pages.welcome');
    }

    public function submit(AuthenticationAction $action): void
    {
        $action->sendVerification();
    }
}
