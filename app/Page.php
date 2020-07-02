<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Versionable\VersionableTrait;

class Page extends Model
{
    use VersionableTrait;

    protected $fillable = [
        'name', 'title'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
