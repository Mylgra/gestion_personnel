<?php

namespace App\View\TallFlex\Forms\Inputs;

use App\View\TallFlex\Contracts\HasDisabled;
use App\View\TallFlex\Contracts\HasEvaluated;
use App\View\TallFlex\Contracts\HasLabel;
use App\View\TallFlex\Contracts\HasPlaceholder;
use App\View\TallFlex\Contracts\HasReadOnly;
use App\View\TallFlex\Contracts\HasRequired;
use App\View\TallFlex\Forms\GenerateForms;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Throwable;

class Textarea extends GenerateForms implements Htmlable
{
    use HasEvaluated;
    use HasLabel;
    use HasPlaceholder;
    use HasRequired;
    use HasDisabled;
    use HasReadOnly;

    protected int|Closure|null $rows = null;

    protected int|Closure|null $length = null;

    protected int|Closure|null $cols = null;
    protected bool $autosize = false;

    public function __construct(
        public string $name
    )
    {
    }

    public static function make(string $name): static
    {
        return new static($name);
    }

    public function getLength(): int|Closure|null
    {
        return $this->length;
    }

    public function length(int|Closure|null $length): Textarea
    {
        $this->length = $length;
        return $this;
    }

    public function isAutosize(): bool
    {
        return $this->autosize;
    }

    public function autosize(bool $autosize = true): Textarea
    {
        $this->autosize = $autosize;

        return $this;
    }

    public function getCols(): int|Closure|null
    {
        return $this->cols;
    }

    public function cols(int|Closure|null $cols): Textarea
    {
        $this->cols = $cols;
        return $this;
    }

    public function rows(int|Closure|null $rows): static
    {
        $this->rows = $rows;

        return $this;
    }

    public function getRows(): int|Closure|null
    {
        return $this->evaluate($this->rows);
    }

    public function getName(): string
    {
        return $this->evaluate($this->name);
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
        return view('components.forms.textarea', $this->extractPublicMethods());
    }
}