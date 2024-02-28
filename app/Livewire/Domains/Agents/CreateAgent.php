<?php

namespace App\Livewire\Domains\Agents;

use App\View\TallFlex\Forms\Forms;
use App\View\TallFlex\Forms\Inputs\Dropzone;
use App\View\TallFlex\Forms\Inputs\ToggleButton;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    use WithFileUploads;

    public array $name = [];

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
                ToggleButton::make('name')
                    ->description('Name of the agent')
                    ->label('Name')
                    // ->mode('control')
                    //->multiple()
                    ->options([
                        'Laravel',
                        'Tailwindcss',
                        'Livewire',
                        'AlpineJs'
                    ])
//                    ->icons([
//                        'Laravel' => 'user',
//                        'Tailwindcss' => 'loader',
//                        'Livewire' => 'signal',
//                        'AlpineJs' => 'wifi-off'
//                    ])
            ]);
    }
}
