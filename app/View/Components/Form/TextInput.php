<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Support\Htmlable;

final class TextInput extends Input
{
    public function render(): View | Htmlable | string | Closure
    {
        return view('components.form.text-input');
    }
}
