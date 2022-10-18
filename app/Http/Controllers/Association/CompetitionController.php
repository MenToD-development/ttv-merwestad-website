<?php

namespace App\Http\Controllers\Association;

use App\Http\Controllers\Controller;
use App\View\Models\MainLayoutViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function __invoke(Request $request): View
    {
        $model = new MainLayoutViewModel(
            config('app.name'),
            'NTTB Competitie spelen bij tafeltennisvereniging Merwestad in '
                .'Dordrecht.',
        );

        return view(
            'pages.association.competition',
            compact('model'),
        );
    }
}
