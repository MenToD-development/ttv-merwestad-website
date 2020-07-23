<?php

namespace App;

use App\Casts\MerwestadFlexibleCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mpociot\Versionable\VersionableTrait;

class Post extends Model
{
    use VersionableTrait, SoftDeletes;

    protected $fillable = [
        'title', 'content', 'image', 'published', 'published_at',
        'published_till'
    ];

    /**
     * @var string[]
     */
    public $dates = [
        'published_at',
        'published_till',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @var string[]
     */
    public $casts = [
        'published' => 'boolean',
        'content' => MerwestadFlexibleCast::class
    ];

    /**
     * @return string
     */
    public function path(): string {
        return '';
    }
}
