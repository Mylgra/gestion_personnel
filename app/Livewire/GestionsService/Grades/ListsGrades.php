<?php

namespace App\Livewire\GestionsService\Grades;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class ListsGrades extends Component
{
    public function render(): View
    {
        return view('livewire.gestions-service.grades.lists-grades');
    }
}
