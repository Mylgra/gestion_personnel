<?php

namespace App\Livewire\Domains\Agents;

use App\View\TallFlex\Forms\FormBuilder;
use App\View\TallFlex\Forms\FormSection;
use App\View\TallFlex\Forms\TextInput;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    public function render(): View
    {
        return view('livewire.domains.agents.create-agent');
    }

    public function storeData()
    {

    }

    public function components()
    {
        return FormBuilder::make()
            ->schema([
                FormSection::make('Personal Information')
                    ->description('Please enter your personal information.')
                    ->schema([
                        TextInput::make('name')
                            ->label('Votre nom'),
                        TextInput::make('username')
                            ->label('Votre post-nom'),
                        TextInput::make('firstname')
                            ->label('Votre prenom'),
                    ])
                    ->column(2),

            ]);
    }
}
