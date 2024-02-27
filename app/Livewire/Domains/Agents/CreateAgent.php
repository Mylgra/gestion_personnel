<?php

namespace App\Livewire\Domains\Agents;

use App\Models\Person;
use App\View\TallFlex\Component\Section;
use App\View\TallFlex\Forms\Forms;
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
        return Forms::make()
            ->schema([
                Section::make('Agent Information')
                    ->schema([
                        SelectInput::make('person_id')
                            ->label('Person')
                            ->searchable()
                            ->options(Person::pluck('name', 'id')->toArray())
                            ->required(),
                    ])
                    ->column(2)
            ]);
    }
}
