<?php

namespace App\Http\Controllers;

use App\View\Models\MainLayoutViewModel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $model = new MainLayoutViewModel(
            config('app.name'),
            'Gezellige tafeltennisvereniging in Dordrecht',
        );

        return view('pages.welcome', compact('model'));
    }
}
