<?php

namespace App\View\TallFlex\Widgets;

use App\View\TallFlex\Contracts\HasEvaluated;
use App\View\TallFlex\Contracts\HasExtractPublicMethods;
use App\View\TallFlex\Forms\GenericForms;
use Closure;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Override;
use Throwable;

class FullCalendar extends GenericForms implements Htmlable
{
    use HasEvaluated;
    use HasExtractPublicMethods;

    protected Closure|string|null $type = null;
    
    protected Arrayable|Closure|array|Collection $events = [];

    public function __construct(
        protected string $name
    )
    {
    }

    public static function make(?string $name = null): static
    {
        return new static($name);
    }

    public function getName(): ?string
    {
        return $this->evaluate($this->name);
    }

    public function type(string|Closure|null $type = 'dayGridMonth'): static
    {
        $this->type = $type;

        return $this;
    }

    public function events(array|Closure|Collection|Arrayable $events): static
    {
        $this->events = $events;

        return $this;
    }

    public function getEvents(): ?array
    {
        return $this->evaluate($this->events);
    }

    public function getType(): ?string
    {
        return $this->evaluate($this->type);
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
        return view('components.widgets.fullcalendar', $this->extractPublicMethods());
    }
}
