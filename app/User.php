<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * @category Model
 * @package  App
 * @author   mennotempelaar <menno@fourdesign.nl>
 * @license  MIT https://github.com/mennotempelaar/ttv-merwestad-website/blob/master/LICENSE
 * @link     https://github.com/mennotempelaar/ttv-merwestad-website
 *
 * @property string $type
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * @var string
     */
    public const TYPE_ADMIN = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Checks whether the user is an admin.
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->type === self::TYPE_ADMIN;
    }

    /**
     * The posts which the user wrote.
     *
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
