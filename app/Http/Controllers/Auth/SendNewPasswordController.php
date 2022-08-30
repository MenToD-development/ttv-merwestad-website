<?php

namespace App\Http\Controllers\Auth;

use Event;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\RequestedNewPassword;
use App\Http\Requests\AskForNewPasswordRequest;

class SendNewPasswordController extends Controller
{
    public function __invoke(AskForNewPasswordRequest $request)
    {
        $user = User::where(
            'email',
            '=',
            $request->get('email'),
        )->first();

        $event = new RequestedNewPassword($user);

        Event::dispatch($event);
    }
}
