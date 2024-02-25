<?php

namespace App\Livewire\Domains\Agents;

use App\Models\Person;
use App\View\TallFlex\Forms\FormBuilder;
use App\View\TallFlex\Forms\Inputs\SelectInput;
use App\View\TallFlex\Forms\Inputs\TextInput;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    public $username = '';
    public $person_id = '';
    public $agent_id = '';

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
                TextInput::make('username')
                    ->label('Enter your username')
                    ->placeholder('Enter your username')
                    ->required()
                    ->maxLength(4)
                    ->minLength(4),
                SelectInput::make('person_id')
                    ->placeholder('Select person')
                    ->label('Select person')
                    ->options(Person::query()->pluck('name', 'id'))
                    ->multiple()
                    ->searchable(),
                SelectInput::make('agent_id')
                    ->placeholder('Select person')
                    ->label('Select person')
                    ->options(Person::query()->pluck('name', 'id'))
                    ->multiple()
                    ->searchable()
            ])
            ->column(2);
    }
}
