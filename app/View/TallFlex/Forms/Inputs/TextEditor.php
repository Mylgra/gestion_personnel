<?php

namespace App\View\TallFlex\Forms\Inputs;

use App\View\TallFlex\Contracts\HasLabel;
use App\View\TallFlex\Contracts\HasPlaceholder;
use App\View\TallFlex\Forms\GenerateForms;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Livewire\Component;
use Throwable;

class TextEditor extends GenerateForms implements Htmlable
{
    use HasLabel;
    use HasPlaceholder;

    protected Component $livewire;

    protected array|null $options = [];

    protected string|Closure|null $theme = null;

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

    /**
     * @throws Throwable
     */
    public function toHtml(): string
    {
        return $this->render()->render();
    }

    public function render(): View
    {
        return view('components.forms.text-editor', $this->extractPublicMethods());
    }

    public function options(array $options): static
    {
        $this->options = $options;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->evaluate($this->options);
    }

    public function getTheme(): string
    {
        return $this->evaluate($this->theme) ?? '';
    }

    public function theme(string|Closure|null $theme = 'snow'): TextEditor
    {
        $this->theme = $theme;
        return $this;
    }
}
