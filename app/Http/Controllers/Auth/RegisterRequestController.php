<?php

namespace App\Http\Controllers\Auth;

use App\Events\RegistrationReceivedEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\Event;

class RegisterRequestController extends Controller
{
    public function __invoke(RegistrationRequest $request)
    {
        $event = new RegistrationReceivedEvent(
            $request->get('name'),
            $request->get('email'),
            $request->get('notice') ?? null,
        );

        Event::dispatch($event);

        return redirect()->route('my-merwestad.registered')
            ->with('name', $request->get('name'));
    }
}
