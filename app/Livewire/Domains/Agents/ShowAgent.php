<?php

namespace App\Livewire\Domains\Agents;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ShowAgent extends Component
{
    public function render(): View
    {
        return view('livewire.domains.agents.show-agent');
    }
}
