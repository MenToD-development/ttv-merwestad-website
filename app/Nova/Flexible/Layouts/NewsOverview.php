<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class NewsOverview extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'news-overview';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Nieuws overzicht';

    /**
     * @var string
     */
    public $view = 'page.layout.news-overview';

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

}
