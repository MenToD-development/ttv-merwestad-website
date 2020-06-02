<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Post
 *
 * @category Model
 * @package  t.t.v. Merwestad
 * @author   Menno Tempelaar <webmaster@ttvmerwestad.nl>
 * @license  MIT
 * @link
 *
 * @method Builder featured() Selects all featured posts
 * @method Builder latest() Selects all latest posts.
 */
class Post extends Model
{
    /**
     * @var array
     */
    public $dates = [
        'published_on',
        'published_till',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @var string[]
     */
    public $casts = [
        'featured' => 'boolean'
    ];

    /**
     * @return BelongsTo the author of the post.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @param Builder $query the query builder
     * @return Builder the query builder
     */
    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('featured', true);
    }

}
