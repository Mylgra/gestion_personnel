<?php

namespace App\View\TallFlex\Charts;

use App\View\TallFlex\Contracts\HasEvaluated;
use App\View\TallFlex\Contracts\HasExtractPublicMethods;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Livewire\Component;
use Override;
use Throwable;

class Chart extends Component implements Htmlable
{
    use HasEvaluated;
    use HasExtractPublicMethods;

    protected Closure|string|null $label = null;

    protected Closure|array|null $datasets = [];

    protected string|Closure|null $type = null;

    protected array|string|Closure|null $backgroundColor = null;

    protected array|Closure|string|null $borderColor = null;

    public function __construct(
        protected string $name
    )
    {
    }

    public static function make(string $name = null): static
    {
        return new static($name);
    }

    public function getName(): ?string
    {
        return $this->evaluate($this->name);
    }

    public function label(string|Closure|null $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->evaluate($this->label);
    }

    public function type(string|Closure|null $type = 'line'): static
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->evaluate($this->type);
    }

    public function datasets(array|Closure|null $datasets): static
    {
        $this->datasets = $datasets;

        return $this;
    }

    public function backgroundColor(array|string|Closure|null $backgroundColor): static
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->evaluate($this->backgroundColor);
    }

    public function borderColor(array|string|Closure|null $borderColor): static
    {
        $this->borderColor = $borderColor;

        return $this;
    }

    public function getBorderColor(): ?string
    {
        return $this->evaluate($this->borderColor);
    }

    public function getDatasets(): array
    {
        return $this->evaluate($this->datasets);
    }

    /**
     * @inheritDoc
     * @throws Throwable
     */
    #[Override]
    public function toHtml(): string
    {
        return $this->render()->render();
    }

    public function render(): View
    {
        return view('components.charts.chart', $this->extractPublicMethods());
    }
}
