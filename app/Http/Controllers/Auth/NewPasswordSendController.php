<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\View\Models\AuthLayoutViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewPasswordSendController extends Controller
{
    public function __invoke(Request $request): View
    {
        $viewModel = new AuthLayoutViewModel(
            config('app.name'),
            'Wachtwoord vergeten?',
        );

        return view('pages.auth.password-send', $viewModel);
    }
}
