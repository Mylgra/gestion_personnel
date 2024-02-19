<?php

namespace App\Livewire\Domains\Agents;

use App\Models\Agent;
use App\View\Datatable;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ListsAgents extends Component
{
    public $component;

    public function render(): View
    {
        return view('livewire.domains.agents.lists-agents');
    }

    public function components()
    {
        return Datatable::make('Liste des agents')
            ->fields([
                'name' => 'Nom',
                'email' => 'Email',
                'grade_id' => 'Grade',
            ])
            ->sort('name')
            ->model(Agent::class)
            ->actions([
                'show' => 'agents.show',
                'edit' => 'agents.edit',
                'delete' => 'agents.delete',
            ]);
    }
}
