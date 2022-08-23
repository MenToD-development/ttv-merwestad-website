<?php

namespace App\Http\Controllers\Merwestad;

use App\Http\Controllers\Controller;
use App\View\Models\MyMerwestadLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $model = new MyMerwestadLayout(
            config('app.name'),
            'Welkom '.Auth::user()->name.' bij jouw mijn merwestad.'
        );

        return view('pages.my-merwestad.dashboard', compact('model'));
    }
}
