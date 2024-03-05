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

class ApexChart extends Component implements Htmlable
{
    use HasEvaluated;
    use HasExtractPublicMethods;

    protected Closure|int|null $height = null;

    protected string|Closure|null $type = null;

    protected Closure|bool|null $dateLabel = false;

    protected Closure|array|null $data = [];

    protected Closure|string|null $stroke = null;

    protected Closure|string|null $color = null;
    
    protected Closure|array|null $categories = [];

    public function __construct(
        protected string $name
    )
    {
    }

    public static function make(string $name = null): static
    {
        return new static($name);
    }

    public function stroke(string|Closure|null $stroke = 'smooth'): static
    {
        $this->stroke = $stroke;

        return $this;
    }

    public function categories(array|Closure|null $categories = []): static
    {
        $this->categories = $categories;

        return $this;
    }

    public function getCategories(): ?array
    {
        return $this->evaluate($this->categories);
    }

    public function getStroke(): ?string
    {
        return $this->evaluate($this->stroke);
    }

    public function getName(): ?string
    {
        return $this->evaluate($this->name);
    }

    public function height(int|Closure|null $height = 300): static
    {
        $this->height = $height;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->evaluate($this->height);
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

    public function dateLabel(bool|Closure|null $dateLabel = true): static
    {
        $this->dateLabel = $dateLabel;

        return $this;
    }

    public function getDateLabel(): ?bool
    {
        return (bool)$this->evaluate($this->dateLabel);
    }

    public function data(array|Closure|null $data = []): static
    {
        $this->data = $data;

        return $this;
    }

    public function getData(): ?array
    {
        return $this->evaluate($this->data);
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
        return view('components.charts.apex-chart', $this->extractPublicMethods());
    }
}
