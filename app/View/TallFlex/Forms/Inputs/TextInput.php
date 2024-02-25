<?php

declare(strict_types=1);

namespace App\View\TallFlex\Forms\Inputs;

use App\View\TallFlex\Contracts\HasLabel;
use App\View\TallFlex\Contracts\HasPlaceholder;
use App\View\TallFlex\Contracts\HasRequired;
use App\View\TallFlex\Forms\GenerateForms;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Livewire\Component;
use Throwable;

class TextInput extends GenerateForms implements Htmlable
{
    use HasPlaceholder;
    use HasRequired;
    use HasLabel;

    protected Component $livewire;

    protected string|Closure|null $type = "text";

    protected bool $required = true;

    protected int|Closure|null $minimum = null;

    protected Closure|bool $disabled = false;

    protected Closure|bool $autofocus = true;
    protected mixed $maxValue = null;
    protected string|Closure|null $pattern = null;
    protected string|Closure|null $helpText = null;

    protected int|float|string|Closure|null $step = null;
    protected bool|Closure $isReadOnly = false;

    protected bool $autocomplete = false;

    public function __construct(
        protected string $name,
    )
    {
    }

    public static function make(string $name): static
    {
        return app(static::class, ['name' => $name]);
    }

    public function livewire(Component $livewire): static
    {
        $this->livewire = $livewire;

        return $this;
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
        return view('components.forms.input', $this->extractPublicMethods());
    }

    public function type(string|Closure $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string|Closure|null
    {
        return $this->evaluate($this->type) ?? "text";
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

    public function minLength(int $minimum): static
    {
        $this->minimum = $minimum;

        return $this;
    }

    public function getMinLength(): int|Closure|null
    {
        return $this->evaluate($this->minimum) ?? null;
    }

    public function disabled(bool|Closure $disabled): static
    {
        $this->disabled = $disabled;

        return $this;
    }

    public function autofocus(bool|Closure $autofocus = true): static
    {
        $this->autofocus = $autofocus;

        return $this;
    }

    public function getAutofocus(): bool
    {
        return (bool)$this->evaluate($this->autofocus);
    }

    public function isDisabled(): bool
    {
        return (bool)$this->evaluate($this->disabled);
    }

    public function maxLength(int $maximum): static
    {
        $this->maxValue = $maximum;

        return $this;
    }

    public function getMaxLength(): int|Closure|null
    {
        return $this->evaluate($this->maxValue) ?? null;
    }

    public function pattern(string $pattern): static
    {
        $this->pattern = $pattern;

        return $this;
    }

    public function getPattern(): string|Closure|null
    {
        return $this->evaluate($this->pattern) ?? null;
    }

    public function helpText(string $helpText): static
    {
        $this->helpText = $helpText;

        return $this;
    }

    public function readOnly(bool $readOnly = true): static
    {
        $this->isReadOnly = $readOnly;

        return $this;
    }

    public function getReadOnly(): bool
    {
        return (bool)$this->evaluate($this->isReadOnly);
    }

    public function step(int|float|string|Closure|null $interval): static
    {
        $this->step = $interval;

        return $this;
    }

    public function getStep(): int|float|string|null
    {
        return $this->evaluate($this->step ?? null) ?? null;
    }

    public function getAutocomplete(): bool
    {
        return $this->evaluate($this->autocomplete);
    }

    public function getHelpText(): string|Closure|null
    {
        return $this->helpText;
    }

    public function email(): static
    {
        $this->type = 'email';

        return $this;
    }

    public function numeric(): static
    {
        $this->type = 'number';

        return $this;
    }

    public function password(): static
    {
        $this->type = 'password';

        return $this;
    }

    public function tel(): static
    {
        $this->type = 'tel';

        return $this;
    }

    public function url(): static
    {
        $this->type = 'url';

        return $this;
    }
}
