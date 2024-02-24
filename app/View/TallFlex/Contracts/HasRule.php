<?php

namespace App\View\TallFlex\Contracts;

trait HasRule
{
    protected array $rules = [];

    public function rules(array $rules): static
    {
        $this->rules = $rules;

        return $this;
    }
    
    public function getRules(): array
    {
        return $this->rules;
    }
}
