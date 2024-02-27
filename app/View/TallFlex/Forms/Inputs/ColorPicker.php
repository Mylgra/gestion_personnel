<?php

namespace App\View\TallFlex\Forms\Inputs;

use App\View\TallFlex\Contracts\HasEvaluated;
use App\View\TallFlex\Contracts\HasLabel;
use App\View\TallFlex\Contracts\HasPlaceholder;
use App\View\TallFlex\Contracts\HasRequired;
use App\View\TallFlex\Forms\GenerateForms;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Throwable;

class ColorPicker extends GenerateForms implements Htmlable
{
    use HasEvaluated;
    use HasLabel;
    use HasRequired;
    use HasPlaceholder;

    protected string|Closure|null $type = null;

    protected int|Closure|null $width = null;

    public function __construct(
        public string $name,
    )
    {
    }

    public static function make(string $name): static
    {
        return new static($name);
    }

    public function getWidth(): int|Closure|null
    {
        return $this->evaluate($this->width);
    }

    public function width(int|Closure|null $width = 100): ColorPicker
    {
        $this->width = $width;
        return $this;
    }

    public function getName(): int|Closure|string|null
    {
        return $this->evaluate($this->name);
    }

    public function getType(): string|Closure|null
    {
        return $this->evaluate($this->type);
    }

    public function type(string|Closure|null $type): ColorPicker
    {
        $this->type = $type;
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
        return view('components.forms.color-picker', $this->extractPublicMethods());
    }
}
