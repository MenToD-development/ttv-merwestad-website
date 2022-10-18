<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RegistrationReceivedEvent
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public string $name,
        public string $email,
        public ?string $notice = null,
    ) {
    }
}
