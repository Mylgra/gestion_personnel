<?php

namespace App\Livewire\Events;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des personnels')]
class ListEvents extends Component
{
    public function render()
    {
        return view('livewire.events.list-events');
    }
}
