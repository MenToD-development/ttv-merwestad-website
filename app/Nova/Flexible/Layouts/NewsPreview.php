<?php

namespace App\Nova\Flexible\Layouts;

use App\Post;
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

            Text::make('Titel', 'title')
        ];
    }

    protected function postsAsOptions()
    {
        return Post::published()
            ->all()
            ->mapWithKeys(function (Post $post) {
                return [$post->id => $post->title];
            });
    }

}
