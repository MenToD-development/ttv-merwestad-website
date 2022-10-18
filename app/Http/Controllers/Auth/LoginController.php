<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\View\Models\AuthLayoutViewModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $model = new AuthLayoutViewModel(
            config('app.name'),
            'Log in op jouw merwestad account',
        );

        return view('pages.auth.login', compact('model'));
    }
}
