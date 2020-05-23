<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\User;

/**
 * Class Post
 *
 * @category Model
 * @package  t.t.v. Merwestad
 * @author   Menno Tempelaar <webmaster@ttvmerwestad.nl>
 * @license  MIT
 * @link
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
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
