<?php

namespace App\Nova\Flexible\Layouts\Elements;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Image extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'image';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Afbeelding';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            \Laravel\Nova\Fields\Image::make('Afbeelding', 'image')
                ->disk('public')
                ->prunable(),

            \Laravel\Nova\Fields\Text::make('Omschrijving', 'image_description')
                ->help('Deze omschrijving wordt als "alt" tekst gebruikt. Deze omschrijving '
                    . 'wordt ook gebruikt om de afbeelding to omschrijven in zoekresultaten van '
                    . 'Google.')
        ];
    }

}
