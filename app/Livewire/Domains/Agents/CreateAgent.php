<?php

declare(strict_types=1);

namespace App\Livewire\Domains\Agents;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Tresorkasenda\Forms\Forms;
use Tresorkasenda\Forms\Inputs\SelectInput;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public string $username = '';

    public function render(): View
    {
        return view('livewire.domains.agents.create-agent');
    }

    public function storeData(): void
    {
        dd($this->all());
    }

    public function component()
    {
        return Forms::make()
            ->schema([
                SelectInput::make('person')
                    ->label('Choisir une personne')
                    ->required()
                    ->searchable()
            ]);
    }
}
