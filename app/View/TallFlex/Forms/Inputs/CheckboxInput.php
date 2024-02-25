<?php

namespace App\View\TallFlex\Forms\Inputs;

use App\View\TallFlex\Contracts\HasChecked;
use App\View\TallFlex\Contracts\HasLabel;
use App\View\TallFlex\Contracts\HasRequired;
use App\View\TallFlex\Forms\GenerateForms;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Livewire\Component;
use Throwable;

class CheckboxInput extends GenerateForms implements Htmlable
{
    use HasLabel;
    use HasRequired;
    use HasChecked;

    protected Component $livewire;

    protected string|null $tooltip = null;

    public function __construct(
        public string $name
    )
    {
    }

    public static function make(string $name): static
    {
        return new static($name);
    }

    public function getName(): string
    {
        return $this->evaluate($this->name);
    }

    public function evaluate(mixed $value)
    {
        if ($value instanceof Closure) {
            return app()->call($value, [
                'state' => $this->livewire->{$this->getName()},
            ]);
        }
        return $value;
    }

    public function tooltip(string $tooltip): static
    {
        $this->tooltip = $tooltip;
        return $this;
    }

    public function getTooltip(): string|null
    {
        return $this->evaluate($this->tooltip);
    }

    /**
     * @throws Throwable
     */
    public function toHtml(): string
    {
        return $this->render()->render();
    }

    public function render(): View
    {
        return view('components.forms.checkbox', $this->extractPublicMethods());
    }
}
