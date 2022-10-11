<?php

namespace App\Http\Controllers\Auth;

use App\Events\RequestedNewPasswordEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\AskForNewPasswordRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Event;

class SendNewPasswordController extends Controller
{
    public function __invoke(AskForNewPasswordRequest $request): RedirectResponse
    {
        $user = User::query()
            ->email($request->get('email'))
            ->firstOrFail();

        Event::dispatch(new RequestedNewPasswordEvent($user));

        return response()
            ->redirectToRoute('my-merwestad.new-password-send');
    }
}
