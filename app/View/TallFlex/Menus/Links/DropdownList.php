<?php

namespace App\View\TallFlex\Menus\Links;

use App\View\TallFlex\Forms\GenerateForms;
use App\View\TallFlex\Forms\HasExstractPublicMethods;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Throwable;

class DropdownList extends GenerateForms implements Htmlable
{
    use HasExstractPublicMethods;

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
