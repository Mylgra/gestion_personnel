<?php

namespace App\View;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Throwable;

class Header extends Component implements Htmlable
{
    protected bool $notification = false;

    public function __construct(
        public ?string $name = null
    )
    {
    }

    public static function make(string $name): static
    {
        return new static($name);
    }

    public function render(): View
    {
        return view('components.sidebar.header');
    }

    /**
     * @throws Throwable
     */
    public function toHtml(): string
    {
        return $this->render()->render();
    }

    public function isNotify(bool $state): static
    {
        $this->notification = $state;

        return $this;
    }

    public function getNotify(): bool
    {
        return $this->notification ?? false;
    }
}
