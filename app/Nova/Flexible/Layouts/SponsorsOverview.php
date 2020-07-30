<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

class SponsorsOverview extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'sponsors-overview';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Sponsoren overzicht';

    /**
     * @var string
     */
    public $view = 'page.layout.sponsors-overview';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            \Laravel\Nova\Fields\Text::make('Label', 'label'),

            \Laravel\Nova\Fields\Text::make('Titel', 'title')
        ];
    }

}
