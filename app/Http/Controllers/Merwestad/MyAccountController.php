<?php

namespace App\Http\Controllers\Merwestad;

use App\Http\Controllers\Controller;
use App\View\Models\MyAccountViewModel;
use App\View\Models\MyMerwestadLayoutViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function __invoke(Request $request): View
    {
        $model = new MyAccountViewModel(
            new MyMerwestadLayoutViewModel(
                config('app.name'),
                'Het account van '.Auth::user()->name.'.',
            ),
            Auth::user(),
        );

        return view(
            'pages.my-merwestad.my-account',
            compact('model'),
        );
    }
}
