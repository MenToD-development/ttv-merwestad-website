<?php

namespace App\Actions;

use App\Values\Password;
use Exception;

class GeneratePasswordAction
{
    const DEFAULT_KEYSPACE = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * Generate a random string, using a cryptographically secure
     * pseudorandom number generator (random_int)
     *
     * @param  int  $length   How many characters do we want?
     * @param  string  $keyspace A string of all possible characters
     *                           to select from
     * @return Password
     *
     * @throws Exception
     */
    public function execute(
        int $length = 12,
        string $keyspace = self::DEFAULT_KEYSPACE,
    ): Password {
        $string = '';
        $max = mb_strlen($keyspace, '8bit') - 1;

        if ($max < 1) {
            throw new Exception('$keyspace must be at least two characters long');
        }

        for ($i = 0; $i < $length; $i++) {
            $string .= $keyspace[random_int(0, $max)];
        }

        return new Password($string);
    }
}
