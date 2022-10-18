<?php

namespace App\Actions;

use App\Models\User;
use App\Values\Password;
use Illuminate\Support\Str;

class SavePasswordOntoUserAction
{
    public function execute(User $user, Password $password): void
    {
        $user->password = $password->hashed;
        $user->remember_token = Str::random(60);
        $user->save();
    }
}
