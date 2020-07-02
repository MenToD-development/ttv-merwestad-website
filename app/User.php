<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const TYPE_USER = 'user';
    const TYPE_AUTHOR = 'author';
    const TYPE_ADMIN = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type'
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

    public function accessToNova(): bool
    {
        return in_array($this->type, [
            self::TYPE_AUTHOR, self::TYPE_ADMIN
        ]);
    }

    public function isAdmin(): bool
    {
        return $this->type === self::TYPE_ADMIN;
    }
}
