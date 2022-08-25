<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;

final class TextInput extends Input
{
    public function render(): View | Htmlable | string | Closure
    {
        return view('components.form.text-input');
    }
}
