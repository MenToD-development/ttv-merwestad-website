<?php

namespace App\Actions;

use App\DataTransferObjects\UpdateAccountData;
use App\Models\User;

class SaveAccountInformationAction
{
    public function execute(User $user, UpdateAccountData $data): void
    {
        if ($data->password->changed) {
            (new SavePasswordOntoUserAction)->execute($user, $data->password);
        }

        if ($data->email !== $user->email) {
            $user->email = $data->email;
            $user->email_verified_at = null;
            $user->save();

            $user->sendEmailVerificationNotification();
        }
    }
}
