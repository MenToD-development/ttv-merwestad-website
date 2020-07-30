<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

class ContactInformation extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'contact-information';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Contactgegevens met een Googlemaps';

    public $view = 'page.layout.contact-information';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            \Laravel\Nova\Fields\Text::make('Titel', 'title')
        ];
    }

}
