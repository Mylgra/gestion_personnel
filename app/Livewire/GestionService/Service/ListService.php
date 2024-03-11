<?php

namespace App\Livewire\GestionService\Service;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class ListService extends Component
{
    public function render(): View
    {
        return view('livewire.gestion-service.service.list-service');
    }
}
