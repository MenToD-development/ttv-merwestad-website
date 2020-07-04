<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

class IntroTitle extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'intro-title';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Introductie titel';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            \Laravel\Nova\Fields\Text::make('Kleine titel', 'small-title'),

            \Laravel\Nova\Fields\Text::make('Hoofd titel', 'title')
        ];
    }

}
