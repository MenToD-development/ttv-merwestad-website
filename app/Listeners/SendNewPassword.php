<?php

namespace App\Listeners;

use Exception;
use App\Events\ChangedPasswordEvent;
use Illuminate\Support\Facades\Event;
use App\Actions\GeneratePasswordAction;
use App\Events\RequestedNewPasswordEvent;
use App\Actions\SavePasswordOntoUserAction;
use App\Notifications\NewPasswordNotification;

class SendNewPassword
{
    public function __construct(
        protected GeneratePasswordAction $generatePasswordAction,
        protected SavePasswordOntoUserAction $savePasswordOntoUserAction,
    ) { }

    /**
     * Handle the event.
     *
     * @param RequestedNewPasswordEvent $event
     *
     * @throws Exception
     * @return void
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
