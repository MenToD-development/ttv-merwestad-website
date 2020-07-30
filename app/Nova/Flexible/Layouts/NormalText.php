<?php

namespace App\Nova\Flexible\Layouts;

use Manogi\Tiptap\Tiptap;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class NormalText extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'normal-text';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'NormalText';

    /**
     * @var string
     */
    public $view = 'page.layout.normal-text';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Label', 'label'),

            Text::make('Titel', 'title'),

            Tiptap::make('Tekst', 'text')
        ];
    }

}
