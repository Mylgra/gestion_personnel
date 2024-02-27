<?php

namespace App\View\TallFlex\Menus\Links;

use App\View\TallFlex\Contracts\HasExtractPublicMethods;
use App\View\TallFlex\Forms\GenericForms;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Throwable;

class DropdownList extends GenericForms implements Htmlable
{
    use HasExtractPublicMethods;

    public function __construct(
        protected ?string $name
    )
    {
    }

    public static function make(?string $name): static
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
        return view('components.sidebar.dropdown', $this->extractPublicMethods());
    }
}
