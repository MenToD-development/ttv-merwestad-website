<?php

namespace App\Http\View\Composers;

use App\Sponsor;
use Illuminate\View\View;

class SponsorsComposer 
{
    public function compose(View $view): void
    {
        $view->with('sponsors', Sponsor::all());
    }
}