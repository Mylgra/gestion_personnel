<?php

namespace App\View;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use InvalidArgumentException;
use ReflectionClass;
use ReflectionMethod;
use Throwable;

class LinkItems implements Htmlable
{
    public string | \Closure | null $icon = null;
    public string | null $active = null;
    public array $children = [];
    public string  $route;

    public function __construct(
        public ?string $name = null
    )
    {
    }

    public static function make(string $name): self
    {
        return new static($name);
    }

    public function render(): View
    {
        return view('components.sidebar.link-items', $this->extractPublicMethods());
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function route(string $route): static
    {
        if (!Route::has($route)) {
            throw new InvalidArgumentException('The provided route does not exist.');
        }
        $this->route = $route;

        return $this;
    }

    public function getRoute(): string
    {
        return route($this->route);
    }

    private function extractPublicMethods(): array
    {
        $methods = new ReflectionClass($this);
        $publicMethods = [];

        foreach ($methods->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
            $methodName = $method->getName();
            if (method_exists($this, $methodName)) {
                $publicMethods[$methodName] = $this->$methodName(...);
            }
        }

        return $publicMethods;
    }

    public function icon(string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): \Closure|string|null
    {
        return $this->icon;
    }

    public function children(array $children): static
    {
        $this->children = array_map(function ($child) {
            if ($child instanceof LinkItems) {
                return $child;
            }
            throw new InvalidArgumentException('Invalid must be instance of Link.');
        }, $children);

        return $this;
    }

    public function getChildren(): array
    {
        return array_map(function ($child) {
            return $child;
        }, $this->children);
    }

    /**
     * @throws Throwable
     */
    public function toHtml(): string
    {
        return $this->render()->render();
    }
}
