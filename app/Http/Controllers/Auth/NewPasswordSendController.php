<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\View\Models\AuthLayout;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class NewPasswordSendController extends Controller
{
    public function __invoke(Request $request): View
    {
        $viewModel = new AuthLayout(
            config('app.name'),
            'Wachtwoord vergeten?',
        );

        return view('pages.auth.password-send', $viewModel);
    }
}
