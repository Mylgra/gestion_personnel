<?php

declare(strict_types=1);

namespace App\Livewire\Domains\Agents;

use App\View\TallFlex\Charts\Chart;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class ListsAgents extends Component
{
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
        return Chart::make('statistique')
            ->type('line')
            ->label('Utilisateur')
            ->datasets([
                80, 50, 60, 30, 80, 90, 100
            ]);
    }
}
