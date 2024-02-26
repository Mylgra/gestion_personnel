<?php

namespace App\Livewire\Domains\Agents;

use App\View\TallFlex\Forms\FormBuilder;
use App\View\TallFlex\Forms\Inputs\FileUpload;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    use WithFileUploads;

    public array $profile = [];

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
                FileUpload::make('profile')
                    ->directory('public')
                    ->reorder()
                    ->maxFileSize('3MB')
                    ->required()
                    ->allowImagePreview()
                    ->allowImageCrop()
            ])
            ->column(2);
    }
}
