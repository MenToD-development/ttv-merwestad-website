<?php

namespace App\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class UserQueryBuilder extends Builder
{
    const AND = 'and';

    const OR = 'or';

    /**
     * Selects a user according to its e-mail address.
     *
     * @param  string  $email
     * @param  string  $type
     * @return UserQueryBuilder
     */
    public function email(
        string $email,
        string $type = self::AND,
    ): UserQueryBuilder {
        if ($type === self::OR) {
            return $this->orWhere('email', '=', $email);
        }

        return $this->where('email', '=', $email);
    }
}
