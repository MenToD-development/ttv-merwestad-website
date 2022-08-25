<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Support\Htmlable;

abstract class Input extends Component
{
    public function __construct(
        public string $label,
        public string $name,
        public ?string $id = null,
        public ?string $placeholder = '',
        public ?bool $required = false,
        public ?string $autoComplete = 'email'
    ) {
        $this->id = $id ?? $this->name;
    }

    abstract public function render(): View | Htmlable | string | Closure;
}
