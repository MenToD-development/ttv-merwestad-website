<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;

final class EmailInput extends Input
{
    public function render(): View | Htmlable | string | Closure
    {
        return view('components.form.email-input');
    }
}
