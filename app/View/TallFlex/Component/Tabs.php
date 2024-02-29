<?php

namespace App\View\TallFlex\Component;

use App\View\TallFlex\Contracts\HasEvaluated;
use App\View\TallFlex\Contracts\HasExtractPublicMethods;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\Component;
use Illuminate\View\View;
use Override;
use Throwable;

class Tabs extends Component implements Htmlable
{
    use HasExtractPublicMethods;
    use HasEvaluated;

    protected Closure|array|null $schema = [];

    public function __construct(
        protected string $name
    )
    {
    }

    public static function make(string|null $name = '')
    {
        return app(static::class, ['name' => $name]);
    }

    public function getName()
    {
        return $this->evaluate($this->name);
    }

    /**
     * @throws Throwable
     */
    #[Override]
    public function toHtml(): string
    {
        return $this->render()->render();
    }

    #[Override]
    public function render(): View
    {
        return view('components.sections.tabs', $this->extractPublicMethods());
    }

    public function schemas(array|Closure|null $schema): static
    {
        $this->schema = $schema;

        return $this;
    }

    public function getSchemas(): array
    {
        return $this->evaluate($this->schema);
    }
}
