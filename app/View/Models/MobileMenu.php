<?php

namespace App\View\Models;

class MobileMenu
{
    /**
     * @param  string  $applicationName The application name.
     */
    public function __construct(
        public string $applicationName,
    ) {
    }
}
