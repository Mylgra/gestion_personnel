<?php

declare(strict_types=1);

namespace App\Livewire\Domains\Agents;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class ListsAgents extends Component
{
    public function render(): View
    {
        return view('livewire.domains.agents.lists-agents');
    }
}
