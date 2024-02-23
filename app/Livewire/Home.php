<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Home extends Component
{
    public function render(): View
    {
        return view('livewire.home');
    }
}