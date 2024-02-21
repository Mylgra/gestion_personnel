<?php

declare(strict_types=1);

namespace App\View;

use App\View\Forms\GenerateForms;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use InvalidArgumentException;
use ReflectionClass;
use ReflectionMethod;
use Throwable;

class FormBuilder extends GenerateForms implements Htmlable
{
    protected array $schema = [];

    protected string|null $route = null;

    public function __construct(
        protected ?string $name = null
    )
    {
    }

    public static function make(string $name): static
    {
        return new static($name);
    }

    public function schema(array $schema): static
    {
        $this->schema = array_map(function ($schema) {
            if ($schema instanceof GenerateForms) {
                return $schema;
            }
            throw new InvalidArgumentException('Invalid must be instance of GenerateForms.');
        }, $schema);

        return $this;
    }

    public function getSchema(): array
    {
        return array_map(fn($item) => $item, $this->schema);
    }

    public function getSections(): array
    {
        return $this->schema;
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
        return view('components.forms.form-builder', $this->extractPublicMethods());
    }

    /**
     * @return array<string, Closure>
     */
    public function extractPublicMethods(): array
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function action(string $route): static
    {
        if (!Route::has($route)) {
            throw new InvalidArgumentException('The provided route does not exist.');
        }
        $this->route = $route;

        return $this;
    }

    public function getRoute(): string
    {
        return $this->route ?? "";
    }
}
