<?php

namespace App\Livewire\Events;

use App\Models\Event;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use Tresorkasenda\Forms\Forms;

class UpdateEventForm extends Component
{
    use WithFileUploads;

    public Event $record;

    public function mount(Event $record): void
    {

    }

    public function form(): Forms
    {
        return Forms::make()
            ->hasCard()
            ->schema([
// Your fields
            ])
            ->action(__('Save'));
    }

    public function save(): void
    {
        $data = $this->validate();

        $this->record->filled($data);

        $this->record->update($data);

        $this->redirectRoute(name: "{{ route }}", navigate: true);
    }

    public function render(): \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View|Application|View
    {
        return view('livewire.events.update-event');
    }
}
