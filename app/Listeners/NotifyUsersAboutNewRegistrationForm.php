<?php

namespace App\Listeners;

use App\Events\RegistrationReceivedEvent;
use App\Models\User;
use App\Notifications\RegistrationReceivedNotification;

class NotifyUsersAboutNewRegistrationForm
{
    public function handle(RegistrationReceivedEvent $event): void
    {
        $user = User::findOrFail(1);

        $user->notify(new RegistrationReceivedNotification(
            $event->name,
            $event->email,
            $event->notice,
        ));
    }
}
