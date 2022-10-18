<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\View\Models\AuthLayoutViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(Request $request): View
    {
        $model = new AuthLayoutViewModel(
            config('app.name'),
            'Registreer je bij T.T.V. Merwestad.',
        );

        return view('pages.auth.register', compact('model'));
    }
}
