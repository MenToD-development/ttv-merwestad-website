<?php

namespace App\Nova\Flexible\Layouts;

use App\Post;
use Illuminate\Database\Eloquent\Collection;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class NewsPreview extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'news-preview';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Uitgelicht nieuws voor op de home pagina';

    /**
     * @var string
     */
    public $view = 'page.layout.news-preview';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Label'),

            Text::make('Titel', 'title'),

            Select::make('Uitgelicht nieuwsbericht', 'featured')
                ->options($this->postsAsOptions())
        ];
    }

    /**
     * @return mixed
     */
    protected function postsAsOptions()
    {
        return Post::published()
            ->get()
            ->mapWithKeys(function (Post $post) {
                return [$post->id => $post->title];
            })
            ->toArray();
    }

    /**
     * @param int $id
     * @return Post
     */
    public function post(int $id): Post
    {
        return Post::with(['author'])->find($id);
    }

    /**
     * @param int $id
     * @param int $max
     * @return Collection
     */
    public function postsWithout(int $id, int $max = 3): Collection
    {
        return Post::published()
            ->where('id', '!=', $id)
            ->get();
    }
}
