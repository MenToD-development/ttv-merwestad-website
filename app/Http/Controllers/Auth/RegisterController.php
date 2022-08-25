<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\View\Models\AuthLayout;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(Request $request): View
    {
        $model = new AuthLayout(
            config('app.name'),
            'Registreer je bij T.T.V. Merwestad.',
        );

        return view('pages.my-merwestad.register', compact('model'));
    }
}
