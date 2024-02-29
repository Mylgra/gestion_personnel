<?php

declare(strict_types=1);

namespace App\Livewire\Domains\Agents;

use App\Models\Agent;
use App\View\TallFlex\Tables\Datatable;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class ListsAgents extends Component
{
    public $component;

    public string $search = '';

    public function render(): View
    {
        return view('livewire.domains.agents.lists-agents');
    }

    public function delete(string $item): void
    {
        dd($item);
    }

    public function components()
    {
        return Datatable::make('Liste des agents')
            ->fields([
                'type' => 'Type',
                'status' => 'Status',
                'state' => 'State',
                'actions' => "Actions"
            ])
            ->search($this->search)
            ->model(Agent::class)
            ->actions([
                'show' => 'show-agent',
                'edit' => 'show-agent',
                'delete' => 'show-agent',
            ]);
    }
}
