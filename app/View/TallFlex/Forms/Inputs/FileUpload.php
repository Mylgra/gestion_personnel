<?php

namespace App\View\TallFlex\Forms\Inputs;

use App\View\TallFlex\Contracts\HasLabel;
use App\View\TallFlex\Contracts\HasRequired;
use App\View\TallFlex\Forms\GenerateForms;
use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\View\View;
use Livewire\Component;
use Throwable;

class FileUpload extends GenerateForms implements Htmlable
{
    use HasLabel;
    use HasRequired;

    protected Component $livewire;

    protected string $directory = 'public';

    protected string|null $fileSize = null;

    protected string|null $accepts = null;

    protected bool|Closure $multiple = false;

    protected bool|Closure $reorder = false;

    protected bool|Closure $dropped = false;

    public function __construct(
        public string $name,
    )
    {
    }

    public static function make(string $name): static
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
        return view('components.forms.file-upload', $this->extractPublicMethods());
    }

    public function directory(string $directory): static
    {
        $this->directory = $directory;

        return $this;
    }

    public function multiple(bool $multiple = true): static
    {
        $this->multiple = $multiple;

        return $this;
    }

    public function getMultiple(): bool
    {
        return (bool)$this->evaluate($this->multiple);
    }

    public function evaluate(mixed $value)
    {
        if ($value instanceof Closure) {
            return app()->call($value, [
                'state' => $this->livewire->{$this->getName()},
            ]);
        }
        return $value;
    }

    public function getName(): string
    {
        return $this->evaluate($this->name);
    }

    public function reorder(bool $reorder = true): static
    {
        $this->reorder = $reorder;

        return $this;
    }

    public function getReorder(): bool
    {
        return (bool)$this->evaluate($this->reorder);
    }

    public function maxFileSize(string $fileSize): static
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    public function getFileSize(): string|null
    {
        return $this->evaluate($this->fileSize);
    }

    public function accepts(string $accepts): static
    {
        $this->accepts = $accepts;
        return $this;
    }

    public function dropped(bool $dropped = true): self
    {
        $this->dropped = $dropped;

        return $this;
    }

    public function getDropped(): bool
    {
        return (bool)$this->evaluate($this->dropped);
    }

    public function getAccepts(): string|null
    {
        return $this->evaluate($this->accepts);
    }
}
