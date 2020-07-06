<?php

namespace App;

use App\Casts\MerwestadFlexibleCast;
use App\Events\PageSaved;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Mpociot\Versionable\VersionableTrait;

/**
 * Page
 *
 * @property-read int $id
 *
 * @property User|null $author
 * @property Page|null $parent
 * @property Collection $children
 * @property Collection $menus
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
 *
 * @method Builder visible()
 */
class Page extends Model
{
    use VersionableTrait, SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'content', 'title', 'description', 'image', 'protected',
        'visible'
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'content' => MerwestadFlexibleCast::class
    ];

    /**
     * @var array
     */
    protected $dispatchesEvents = [
        'saved' => PageSaved::class
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(Page::class, 'parent_id');
    }

    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class)
            ->withPivot('order');
    }

    public function scopeVisible(Builder $query): Builder
    {
        return $query->where('visible', '1');
    }

    public function path(): string
    {
        $path = '';
        if ($this->parent) {
            $path = $this->parent->path();
        }
        $path .= '/' . Str::slug($this->name, '-');
        return trim($path, '/');
    }

    public function routeName(): string
    {
        return Str::slug($this->name, '-');
    }
}
