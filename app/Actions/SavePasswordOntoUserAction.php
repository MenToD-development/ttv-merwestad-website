<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\DataTransferObjects\Password;

class SavePasswordOntoUserAction
{
    public function execute(User $user, Password $password): void
    {
        $user->password = Hash::make($password->password);
        $user->remember_token = Str::random(60);
        $user->save();
    }
}
