<?php

namespace App\Nova\Flexible\Layouts;

use Exception;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Services extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'services';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Diensten';

    /**
     * @var string
     */
    public $view = 'page.layout.services';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     * @throws Exception
     */
    public function fields()
    {
        return [

            \Laravel\Nova\Fields\Text::make('Label', 'title_label')
                ->help("Deze tekst komt als een klein label boven de titel."),

            \Laravel\Nova\Fields\Text::make('Titel', 'title_content'),

            Flexible::make('Diensten', 'services')
                ->limit(3)
                ->addLayout(Service::class)


        ];
    }

}
