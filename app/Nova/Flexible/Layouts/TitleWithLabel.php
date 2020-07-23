<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

class TitleWithLabel extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'title-with-label';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Titel met label';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields($prefix = '')
    {
        return [
            \Laravel\Nova\Fields\Text::make('Label', `{$prefix}label`),

            \Laravel\Nova\Fields\Text::make('Titel', `{$prefix}title`)
        ];
    }

}
