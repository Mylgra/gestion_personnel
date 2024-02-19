<?php

namespace App\View;

use App\View\Exceptions\ModelDoesntExist;
use Exception;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Livewire\Component;
use ReflectionClass;
use ReflectionMethod;
use Throwable;

class Datatable extends Component implements Htmlable
{
    protected array $model = [];

    protected array $fields = [];

    protected string $sortColumn = 'id';

    protected string $sortDirection = 'asc';

    protected array | null $actions = [];

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
        return view('components.datas.datatable', $this->extractPublicMethods());
    }

    /**
     * @throws Throwable
     */
    public function toHtml(): string
    {
        return $this->render()->render();
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

    public function model(string $modelClass, int $perPage = 10): static
    {
        if (!is_subclass_of($modelClass, 'Illuminate\Database\Eloquent\Model')) {
            throw new ModelDoesntExist("The class {$modelClass} is not a valid Eloquent model.");
        }

        $modelInstance = new $modelClass;
        $this->model = [
            'columns' => \Schema::getColumnListing($modelInstance->getTable()),
            'data' => $modelClass::query()
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate($perPage)
        ];

        return $this;
    }

    public function getModels(): array
    {
        return $this->model;
    }

    /**
     * @throws ModelDoesntExist
     */
    public function fields(array $fields): static
    {
        if ($this->model !== []) {
            foreach ($fields as $field) {
                if (!in_array($field, $this->model['columns'])) {
                    throw new \Exception("The field {$field} does not exist in the model.");
                }
            }
        }

        $this->fields = array_merge($fields, ['actions' => 'Actions']);

        return $this;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function sort(string $name): static
    {
        if ($this->sortColumn === $name) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumn = $name;
            $this->sortDirection = 'asc';
        }

        return $this;
    }

    public function actions(array $actions): static
    {
        $this->actions = $actions;

        return $this;
    }

    public function getActions(): array
    {
        return $this->actions;
    }
}
