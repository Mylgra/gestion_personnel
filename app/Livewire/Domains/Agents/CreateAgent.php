<?php

namespace App\Livewire\Domains\Agents;

use App\View\TallFlex\Component\Tab;
use App\View\TallFlex\Component\Tabs;
use App\View\TallFlex\Forms\Forms;
use App\View\TallFlex\Forms\Inputs\SelectInput;
use App\View\TallFlex\Forms\Inputs\TextInput;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    use WithFileUploads;

    public string $name = '';
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
                Tabs::make()
                    ->schemas([
                        Tab::make('Tab 1')
                            ->icon('user')
                            ->schema([
                                TextInput::make('name')
                                    ->label('Name')
                                    ->placeholder('Enter name')
                                    ->required(),
                            ])
                            ->column(2),
                        Tab::make('Tab 3')
                            ->icon('bell')
                            ->schema([
                                SelectInput::make('status')
                                    ->label('Status')
                                    ->placeholder('Select status')
                                    ->options([
                                        'active' => 'Active',
                                        'inactive' => 'Inactive',
                                    ])
                                    ->required(),
                            ])
                    ])
            ]);
    }
}
