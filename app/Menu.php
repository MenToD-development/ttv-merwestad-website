<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Menu
 *
 * @property-read int $id
 *
 * @property Collection $pages
 *
 * @property string $name
 * @property string $description
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Menu extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function pages(): BelongsToMany
    {
        return $this->belongsToMany(Page::class)
            ->withPivot('order');
    }
}
