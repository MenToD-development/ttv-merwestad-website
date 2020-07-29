<?php

namespace App\Nova\Flexible\Layouts;

use Illuminate\Support\Collection;
use App\Nova\Flexible\Layouts\TitleWithIcon;
use App\Nova\Flexible\Layouts\TitleWithLabel;
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
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields($prefix = '')
    {
        $fields = new Collection();

        // Titel
        $fields = $fields->merge((new TitleWithLabel())->fields($prefix));

        $fields->add(
            Flexible::make('Diensten', 'services')
                ->limit(3)
                ->addLayout(Service::class)
        );

        return $fields->toArray();
    }

}
