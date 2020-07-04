<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mpociot\Versionable\VersionableTrait;

/**
 * Page
 *
 * @property-read int $id
 *
 * @property User|null $author
 * @property Page|null $parent
 *
 * @property string $name
 * @property string $content
 *
 * @property string $title
 * @property string $description
 * @property string $image
 *
 * @property boolean $protected
 * @property boolean $visible
 *
 * @property Carbon $created_at
 * @property Carbon $updated_ad
 * @property Carbon $deleted_at
 */
class Page extends Model
{
    use VersionableTrait, SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name', 'content', 'title', 'description', 'image', 'protected',
        'visible'
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
