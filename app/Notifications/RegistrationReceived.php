<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegistrationReceived extends Notification
{
    use Queueable;

    public function __construct(
        public string $name,
        public string $email,
    ) { }

    public function via(mixed $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(mixed $notifiable): MailMessage
    {
        return (new MailMessage)
            ->greeting('Hallo!')
            ->subject('Nieuwe aanmelding ontvangen')
            ->line(
                'Er is een nieuwe aanmelding binnen gekomen '
                . 'via de website van T.T.V. Merwestad. De naam van de '
                . 'persoon is ' . $this->name . ' en het e-mailadres is '
                . $this->email . '.',
            );
    }

    public function toArray(mixed $notifiable): array
    {
        return [
            //
        ];
    }
}
