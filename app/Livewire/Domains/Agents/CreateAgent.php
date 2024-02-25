<?php

namespace App\Livewire\Domains\Agents;

use App\Models\Person;
use App\View\TallFlex\Forms\FormBuilder;
use App\View\TallFlex\Forms\FormSection;
use App\View\TallFlex\Forms\Inputs\CheckboxInput;
use App\View\TallFlex\Forms\Inputs\SelectInput;
use App\View\TallFlex\Forms\Inputs\ToggleInput;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    public string $person_id = '';
    public bool $terms;

    public function render(): View
    {
        return view('livewire.domains.agents.create-agent');
    }

    public function storeData()
    {
        dd($this->terms);
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
                ToggleInput::make('terms')
                    ->label('I agree to the terms and conditions')
                    ->checked()
                    ->required(),
                CheckboxInput::make('terms')
                    ->label('I agree to the terms and conditions')
                    ->checked()
                    ->required(),
            ]);
    }
}
