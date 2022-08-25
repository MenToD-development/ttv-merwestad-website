<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\RegistrationReceivedEvent;
use App\Notifications\RegistrationReceived;

class NotifyUsersAboutNewRegistrationForm
{
    public function handle(RegistrationReceivedEvent $event): void
    {
        $user = User::findOrFail(1);

        $user->notify(new RegistrationReceived(
            $event->name,
            $event->email,
            $event->notice,
        ));
    }
}
