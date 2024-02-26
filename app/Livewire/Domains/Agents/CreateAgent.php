<?php

namespace App\Livewire\Domains\Agents;

use App\View\TallFlex\Forms\FormBuilder;
use App\View\TallFlex\Forms\Inputs\TimePicker;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.guest')]
class CreateAgent extends Component
{
    #[Rule('required')]
    public $start_time = '';
    public $end_time = '';

    public function render(): View
    {
        return view('livewire.domains.agents.create-agent');
    }

    public function storeData()
    {
        $this->validate();
        dd($this->all());
    }

    public function component()
    {
        return FormBuilder::make()
            ->schema([
                TimePicker::make('start_time')
                    ->label('Start time')
                    ->placeholder('Select a start time')
                    ->format('H:i')
                    ->datalist(['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'])
                    ->required(),
                TimePicker::make('end_time')
                    ->label('End time')
                    ->placeholder('Select an end time')
                    ->format('H:i')
                    ->required(),
            ])
            ->column(2);
    }
}
