<?php

namespace App\Nova\Flexible\Layouts\Elements;

use Laravel\Nova\Fields\Select;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Icon extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'icon';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Icoon';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields($prefix = '')
    {
        return [
            Select::make('Icoon', 'icon' . $prefix)
                ->options([
                    'fa-user-circle' => 'Mijn account icoon',
                    'fa-paper-plane' => 'E-mail icoon',
                    'fa-route' => 'Navigeren / route icoon',
                    'fa-calendar' => 'Agenda icoon',
                    'fa-table-tennis' => 'Tafeltennis icoon',
                    'fa-users' => 'Groep mensen icoon',
                    'fa-arrow-alt-circle-right' => 'Pijl naar rechts',
                    'fa-arrow-alt-circle-left' => 'Pijl naar links',
                    'fa-arrow-alt-circle-up' => 'Pijl naar boven',
                    'fa-arrow-alt-circle-down' => 'Pijl naar beneden',
                    'fa-smile-beam' => 'Glimlachend gezicht',
                    'fa-calendar-check' => 'Agenda met een vink',
                    'fa-fire' => 'Vuur icoon'
                ])
        ];
    }

}
