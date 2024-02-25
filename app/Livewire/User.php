<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class User extends Component
{
    public function render(): View
    {
        return view('livewire.user');
    }

    public function storeData()
    {
        dd($this);
    }


}
