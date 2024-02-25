<?php

namespace App\Livewire\Domains\Agents;

use App\Models\Person;
use App\View\TallFlex\Forms\FormBuilder;
use App\View\TallFlex\Forms\FormSection;
use App\View\TallFlex\Forms\Inputs\SelectInput;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    public string $person_id = '';

    public function render(): View
    {
        return view('livewire.domains.agents.create-agent');
    }

    public function storeData()
    {
        dd($this->person_id);
    }

    public function components()
    {
        return FormBuilder::make()
            ->schema([
                FormSection::make('Personal Information')
                    ->description('Please enter your personal information.')
                    ->schema([
                        SelectInput::make('person_id')
                            ->label('Select the name of user')
                            ->options(Person::query()->pluck('name', 'id'))
                            //->searchable()
                            // ->multiple()
                            ->placeholder('Enter your name')
                            ->required(),
                    ])
                    ->column(2),
            ]);
    }
}
