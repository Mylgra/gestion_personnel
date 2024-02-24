<?php

namespace App\Livewire\Domains\Agents;

use App\View\TallFlex\Forms\FormBuilder;
use App\View\TallFlex\Forms\FormSection;
use App\View\TallFlex\Forms\Inputs\SelectInput;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    public string|null $name = null;

    public function render(): View
    {
        return view('livewire.domains.agents.create-agent');
    }

    public function storeData()
    {
        dd($this->name);
    }

    public function components()
    {
        return FormBuilder::make()
            ->schema([
                FormSection::make('Personal Information')
                    ->description('Please enter your personal information.')
                    ->schema([
                        SelectInput::make('name')
                            ->label('Name')
                            ->options([
                                'John Doe',
                                'Jane Doe',
                                'John Smith',
                                'Jane Smith',
                            ])
                            ->searchable()
                            ->multiple()
                            ->placeholder('Enter your name')
                            ->required(),
                    ])
                    ->column(2),
            ]);
    }
}
