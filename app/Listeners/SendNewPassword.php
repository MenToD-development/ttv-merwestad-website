<?php

namespace App\Listeners;

use App\Actions\GeneratePasswordAction;
use App\Actions\SavePasswordOntoUserAction;
use App\Events\ChangedPasswordEvent;
use App\Events\RequestedNewPasswordEvent;
use App\Notifications\NewPasswordNotification;
use Exception;
use Illuminate\Support\Facades\Event;

class SendNewPassword
{
    public function __construct(
        protected GeneratePasswordAction $generatePasswordAction,
        protected SavePasswordOntoUserAction $savePasswordOntoUserAction,
    ) {
    }

    /**
     * Handle the event.
     *
     * @param  RequestedNewPasswordEvent  $event
     * @return void
     *
     * @throws Exception
     */
    public function handle(RequestedNewPasswordEvent $event): void
    {
        // Generate password
        $password = $this->generatePasswordAction->execute();

        // Save password onto user
        $this->savePasswordOntoUserAction->execute($event->user, $password);

        Event::dispatch(new ChangedPasswordEvent($event->user));

        $event->user->notify(new NewPasswordNotification(
            $event->user->name,
            $password,
        ));
    }
}
