<?php

namespace App\Http\Controllers;

use App\View\Models\MainLayoutViewModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $model = new MainLayoutViewModel(
            config('app.name'),
            '',
        );

        return view('pages.contact', compact('model'));
    }
}
