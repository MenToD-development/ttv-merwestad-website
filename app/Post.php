<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
