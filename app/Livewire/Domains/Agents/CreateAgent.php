<?php

namespace App\Livewire\Domains\Agents;

use App\View\TallFlex\Forms\FormBuilder;
use App\View\TallFlex\Forms\Inputs\TextEditor;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    use WithFileUploads;

    public string $profile = '';

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
                TextEditor::make('profile')
                    ->label('Bio')
                    ->placeholder('Enter your bio here'),
            ]);
    }
}
