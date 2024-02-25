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

class ToggleInput extends GenerateForms implements Htmlable
{
    use HasLabel;
    use HasChecked;
    use HasRequired;

    protected string $uniqueId;

    protected Component $livewire;

    public function __construct(
        public string $name,
    )
    {
        $this->uniqueId = uniqid('toggle-' . $this->name, true);
    }

    public static function make(string $name): self
    {
        return new self($name);
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

    public function getUniqueId(): string
    {
        return $this->evaluate($this->uniqueId);
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
        return view('components.forms.toggle', $this->extractPublicMethods());
    }
}
