<?php

namespace App\Http\Controllers\Association;

use App\View\Models\MainLayout;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecreationController extends Controller
{
    public function __invoke(Request $request): View
    {
        $model = new MainLayout(
            config('app.name'),
            'Recreatief spelen bij tafeltennisvereniging Merwestad in '
                . 'Dordrecht.',
        );

        return view(
            'pages.association.recreation',
            compact('model'),
        );
    }
}
