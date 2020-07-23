<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Flexible;
use App\Nova\Flexible\Layouts\Elements\Button;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Buttons extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'buttons';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Link buttons';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Flexible::make('Link buttons', 'buttons')
                ->addLayout(Button::class)
                ->button('Voeg een link button toe')
        ];
    }

}
