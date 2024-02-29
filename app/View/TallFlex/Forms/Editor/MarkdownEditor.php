<?php

namespace App\View\TallFlex\Forms\Editor;

use App\View\TallFlex\Contracts\HasEvaluated;
use App\View\TallFlex\Contracts\HasLabel;
use App\View\TallFlex\Contracts\HasPlaceholder;
use App\View\TallFlex\Contracts\HasRequired;
use App\View\TallFlex\Forms\GenericForms;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Override;
use Throwable;

class MarkdownEditor extends GenericForms implements Htmlable
{
    use HasEvaluated;
    use HasLabel;
    use HasRequired;
    use HasPlaceholder;

    protected string $uniqueId = '';

    public function __construct(
        protected string $name
    )
    {
        $this->uniqueId = uniqid('markdown-' . $this->name, true);
    }

    public static function make(string $name)
    {
        return app(static::class, ['name' => $name]);
    }

    public function getName(): string
    {
        return $this->evaluate($this->name);
    }

    public function getUniqueId(): string
    {
        return $this->evaluate($this->uniqueId);
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
        return view('components.forms.editor.markdown', $this->extractPublicMethods());
    }
}
