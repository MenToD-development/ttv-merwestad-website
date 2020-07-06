<?php

namespace App\Nova\Flexible\Layouts;

use Illuminate\Support\Collection;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class IntroTextWithButtonsAndImage extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'intro-text-with-buttons-and-image';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Intro tekst met buttons en een afbeelding';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        $fields = Collection::make();

        $fields = $fields->merge((new IntroTitle())->fields());
        $fields = $fields->merge((new Text())->fields());

        return $fields->toArray();
    }

}
