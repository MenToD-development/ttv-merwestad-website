<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Service extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'service';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Service';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            // Define the layout's fields.
        ];
    }

}
