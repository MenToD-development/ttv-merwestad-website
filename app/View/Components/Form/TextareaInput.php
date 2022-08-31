<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;

final class TextareaInput extends Input
{
    public function __construct(
        public string $label,
        public string $name,
        public ?string $id = null,
        public ?string $placeholder = '',
        public ?bool $required = false,
        public ?string $autoComplete = 'email',
        public ?int $rows = 4,
    ) {
        parent::__construct(
            $this->label,
            $this->name,
            $this->id,
            $this->placeholder,
            $this->required,
            $this->autoComplete,
        );
    }

    public function render(): View | Htmlable | string | Closure
    {
        return view('components.form.textarea-input');
    }
}
