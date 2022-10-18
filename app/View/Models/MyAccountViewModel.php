<?php

namespace App\View\Models;

use App\Models\User;
use Illuminate\Contracts\Support\Arrayable;

class MyAccountViewModel implements Arrayable
{
    public function __construct(
        public LayoutViewModel $layout,
        protected User $user,
    ) {
    }

    public function email(): string
    {
        return $this->user->email;
    }

    public function name(): string
    {
        return $this->user->name;
    }

    public function toArray(): array
    {
        return [
            'layout' => $this->layout,
            'email' => $this->email(),
            'name' => $this->name(),
        ];
    }
}
