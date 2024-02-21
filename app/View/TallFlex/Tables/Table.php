<?php

namespace App\View\TallFlex\Tables;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

abstract class Table extends Component
{
    use WithPagination;

    public abstract function columns(): array;

    public function data(): Collection|array
    {
        return $this
            ->query()
            ->get();
    }

    public abstract function query(): Builder;
}
