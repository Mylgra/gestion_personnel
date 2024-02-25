<?php

namespace App\View\TallFlex\Contracts;

trait HasRequired
{
    protected bool $required = true;


    public function required(bool|Closure $condition = true): self
    {
        $this->required = $condition;

        return $this;
    }

    public function getRequired(): bool
    {
        return (bool)$this->evaluate($this->required);
    }
}
