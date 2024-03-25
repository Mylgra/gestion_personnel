<?php

namespace App\Livewire\GestionService\Service;

use App\Contract\Enums\LevelEnum;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Tresorkasenda\Forms\Forms;
use Tresorkasenda\Forms\Inputs\SelectInput;
use Tresorkasenda\Forms\Inputs\TextInput;

#[Layout('layouts.guest')]
class CreateService extends Component
{
    public function render(): View
    {
        return view('livewire.gestion-service.service.create-service');
    }

    public function components()
    {
        return Forms::make()
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->placeholder('Saisir le nom du service')
                    ->required(),
                TextInput::make('sigle')
                    ->label('Accronym')
                    ->placeholder("Saisir l'accornyme")
                    ->required(),
                SelectInput::make('level')
                    ->label('Niveau')
                    ->placeholder("Rechercher le niveau du service")
                    ->options(LevelEnum::cases())
                    ->searchable()
                    ->required(),
                SelectInput::make('type')
                    ->label('Type')
                    ->placeholder("Rechercher le sous service")
                    ->options([
                        "Politique",
                        "Administratif",
                        "Appui",
                        "Autre"
                    ])
                    ->searchable()
                    ->required(),
                SelectInput::make('service_id')
                    ->label("Sous service")
                    ->placeholder("Rechercher le sous service")
                    ->options([])
            ])
            ->column(2);
    }
}
