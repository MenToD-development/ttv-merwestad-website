<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\View\Models\AuthLayout;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegistrationCompleteController extends Controller
{
    public function __invoke(
        Request $request,
    ): View {
        $model = new AuthLayout(
            config('app.name'),
            'Aanmelding succesvol verzonden.',
        );

        return view('pages.auth.registered', compact('model'));
    }
}
