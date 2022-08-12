<?php

namespace App\Http\Controllers;

use App\View\Models\MainLayout;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $model = new MainLayout(
            config('app.name'),
            'Gezellige tafeltennisvereniging in Dordrecht',
        );

        return view('pages.welcome', compact('model'));
    }
}
