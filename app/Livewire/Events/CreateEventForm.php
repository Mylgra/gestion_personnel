<?php

namespace App\Livewire\Events;

use App\Models\Event;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Tresorkasenda\Forms\Forms;

#[Layout('layouts.app')]
#[Title('Create Even tForm')]
class CreateEventForm extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public string $editor = '';

    public function mount(): void
    {
        //
    }

    public function form(): Forms
    {
        return Forms::make()
            ->hasCard()
            ->schema([

            ])
            ->action(__('Save'));
    }

    public function submit(): void
    {
        $data = $this->validate();
        dd($data);
        $record = Event::query()->create($data);

        $this->redirectRoute(name: "/{{ route }}", navigate: true);
    }

    public function render(): \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View|Application|View
    {
        return view('livewire.events.create-event');
    }
}
