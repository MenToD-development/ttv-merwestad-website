<?php

namespace App\Values;

use Illuminate\Support\Facades\Hash;

class Password
{
    public readonly bool $changed;

    public readonly string $hashed;

    public function __construct(
        public readonly ?string $password = null,
    ) {
        $this->changed = ($this->password !== null);

        if ($this->password !== null) {
            $this->hashed = Hash::make($this->password);
        }
    }
}
