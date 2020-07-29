<?php

namespace App\Nova\Flexible\Layouts;

use Illuminate\Support\Collection;
use App\Nova\Flexible\Layouts\Elements\Icon;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class TitleWithIcon extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'title-with-icon';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Titel met een icoon';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields($prefix = '')
    {
        $fields = new Collection();

        $fields = $fields->merge(
            (new Icon())->fields($prefix)
        );

        $fields->add(
            \Laravel\Nova\Fields\Text::make('Titel', 'title' . $prefix)
        );

        return $fields->toArray();
    }

}
