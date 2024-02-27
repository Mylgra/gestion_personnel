<?php

namespace App\Livewire\Domains\Agents;

use App\Models\Person;
use App\View\TallFlex\Forms\FormBuilder;
use App\View\TallFlex\Forms\Inputs\SelectInput;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    use WithFileUploads;

    public string $color;

    public function render(): View
    {
        return view('livewire.domains.agents.create-agent');
    }

    public function storeData()
    {
        dd($this->all());
    }

    public function component()
    {
        return FormBuilder::make()
            ->schema([
                SelectInput::make('agent_type')
                    ->label('Agent Type')
                    ->options(Person::all()->pluck('name', 'id')->toArray())
                    ->required(),
            ]);
    }
}
