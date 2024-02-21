<?php

declare(strict_types=1);

namespace App\View\TallFlex\Forms;

use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Livewire\Component;
use Override;
use Throwable;

class TextInput extends GenerateForms implements Htmlable
{
    use HasExstractPublicMethods;

    protected Component $component;

    protected string|Closure|null $layout = null;

    protected string|Closure|null $type = null;

    protected bool $required = true;

    protected int|Closure|null $minimum = null;

    public function __construct(
        protected string $name
    )
    {
    }

    public static function make(string $name): static
    {
        return new static($name);
    }

    /**
     * @throws Throwable
     */
    #[Override]
    public function toHtml(): string
    {
        return $this->render()->render();
    }

    public function render(): View
    {
        return view('components.forms.input');
    }

    public function label(string $layout): static
    {
        $this->layout = $layout;

        return $this;
    }

    public function getType(): string|Closure|null
    {
        return $this->type;
    }

    public function type(string|Closure|null $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getLayout(): Closure|string|null
    {
        return $this->layout ?? str()->title($this->name);
    }

    public function required(bool $required): static
    {
        $this->required = $required;

        return $this;
    }

    public function getRequired(): bool
    {
        return $this->required;
    }

    public function min(int $minimum): static
    {
        $this->minimum = $minimum;

        return $this;
    }

    public function getMinimum(): int|Closure|null
    {
        return $this->minimum;
    }
}
