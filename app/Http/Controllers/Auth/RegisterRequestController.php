<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Event;
use App\Events\RegistrationReceivedEvent;
use App\Http\Requests\RegistrationRequest;

class RegisterRequestController extends Controller
{
    public function __invoke(RegistrationRequest $request)
    {
        $event = new RegistrationReceivedEvent(
            $request->get('name'),
            $request->get('email'),
        );

        Event::dispatch($event);

        return redirect()->route('my-merwestad.registered')
            ->with('name', $request->get('name'));
    }
}
