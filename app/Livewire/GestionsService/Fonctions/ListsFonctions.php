<?php

namespace App\Livewire\GestionsService\Fonctions;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class ListsFonctions extends Component
{
    public function render(): View
    {
        return view('livewire.gestions-service.fonctions.lists-fonctions');
    }
}
