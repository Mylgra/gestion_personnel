<?php

namespace App\View\TallFlex\Contracts;

use Closure;

trait HasLabel
{
    protected string|Closure|null $label = null;

    public function label(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel()
    {
        return $this->evaluate($this->label ?? null) ??
            str($this->name)->title();
    }
}
