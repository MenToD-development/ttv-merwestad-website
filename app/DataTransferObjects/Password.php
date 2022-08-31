<?php

namespace App\DataTransferObjects;

class Password
{
    public function __construct(
        public string $password,
    ) {
    }
}
