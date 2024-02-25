<?php

namespace App\View\TallFlex\Forms\Inputs;

use App\View\TallFlex\Contracts\HasLabel;
use App\View\TallFlex\Contracts\HasPlaceholder;
use App\View\TallFlex\Contracts\HasRequired;
use App\View\TallFlex\Contracts\HasRule;
use App\View\TallFlex\Forms\GenerateForms;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;
use Throwable;

class SelectInput extends GenerateForms implements Htmlable
{
    use HasLabel;
    use HasPlaceholder;
    use HasRequired;
    use HasRule;

    public bool $native = true;
    protected array|Collection $options = [];
    protected bool $searchable = false;
    protected bool $multiple = false;
    protected Component $livewire;
    protected bool $autofocus = false;
    protected bool $autocomplete = false;
    protected string $autocapitalize = 'off';
    protected bool $disabled = false;

    public function __construct(
        public string $name
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
    public function toHtml(): string
    {
        return $this->render()->render();
    }

    public function render(): View
    {
        return view('components.forms.select', $this->extractPublicMethods());
    }

    public function options($options): static
    {
        if ($options instanceof Model) {
            $this->options = $options->toArray();
        } else {
            $this->options = $options;
        }

        return $this;
    }

    public function getOptions()
    {
        return $this->evaluate($this->options);
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

    public function getName(): string
    {
        return $this->evaluate($this->name);
    }

    public function native(bool $native = true): static
    {
        $this->native = $native;

        return $this;
    }

    public function getNative(): bool
    {
        return $this->evaluate($this->native);
    }

    public function searchable(bool $searchable = true): static
    {
        $this->searchable = $searchable;

        return $this;
    }

    public function getSearchable(): bool
    {
        return $this->evaluate($this->searchable);
    }

    public function multiple(bool $multiple = true): static
    {
        $this->multiple = $multiple;

        return $this;
    }

    public function getMultiple(): bool
    {
        return $this->evaluate($this->multiple);
    }

    public function autofocus(bool $autofocus = true): static
    {
        $this->autofocus = $autofocus;

        return $this;
    }

    public function getAutofocus(): bool
    {
        return $this->evaluate($this->autofocus);
    }

    public function autocomplete(bool $autocomplete = true): static
    {
        $this->autocomplete = $autocomplete;

        return $this;
    }

    public function getAutocomplete(): bool
    {
        return $this->evaluate($this->autocomplete);
    }

    public function autocapitalize(string $autocapitalize = 'off'): static
    {
        $this->autocapitalize = $autocapitalize;

        return $this;
    }

    public function getAutocapitalize(): string
    {
        return $this->evaluate($this->autocapitalize);
    }

    public function disabled(bool $disabled = true): static
    {
        $this->disabled = $disabled;

        return $this;
    }

    public function getDisabled(): bool
    {
        return $this->evaluate($this->disabled);
    }
}
