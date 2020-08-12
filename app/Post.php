<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mpociot\Versionable\VersionableTrait;

/**
 * Class Post
 *
 * @category ttv-merwestad-website
 * @package  App
 * @author   mennotempelaar <menno@fourdesign.nl>
 * @license  MIT https://github.com/Fourdesign/bluecms/blob/development/LICENSE
 * @link     https://github.com/Fourdesign/bluecms
 *
 * @property-read int $id
 * @property string $title
 * @property string $image
 * @property string $content
 * @property boolean $published
 * @property Carbon $published_at
 * @property Carbon $published_till
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 *
 * @method Builder published()
 */
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
        'published' => 'boolean'
    ];

    /**
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('published', 1)
            ->orderByDesc('published_at');
    }

    /**
     * @return string
     */
    public function path(): string {
        return '';
    }
}
