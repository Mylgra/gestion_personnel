<?php

namespace App\Livewire\Domains\Agents;

use App\View\TallFlex\Forms\Editor\MarkdownEditor;
use App\View\TallFlex\Forms\Forms;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    use WithFileUploads;

    public string $profile = '';
    public string $status = '';

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
                MarkdownEditor::make('profile')
                    ->label('Description')
                    ->height(200)
                    ->placeholder('Enter the description'),
            ]);
    }
}
