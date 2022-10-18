<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

abstract class Input extends Component
{
    public function __construct(
        public string $label,
        public string $name,
        public ?string $id = null,
        public ?string $value = null,
        public ?string $placeholder = '',
        public ?bool $required = false,
        public ?string $description = '',
        public ?string $autoComplete = 'email'
    ) {
        $this->id = $id ?? $this->name;
    }

    abstract public function render(): View | Htmlable | string | Closure;
}
