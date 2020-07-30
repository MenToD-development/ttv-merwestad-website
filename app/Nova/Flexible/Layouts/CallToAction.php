<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Manogi\Tiptap\Tiptap;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class CallToAction extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'call-to-action';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Neem contact op blok';

    /**
     * @var string
     */
    public $view = 'page.layout.call-to-action';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('Icoon', 'icon')
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
                ]),

            Text::make('Titel', 'title'),

            Tiptap::make('Tekst', 'content')
                ->buttons([
                    'italic',
                    'bold',
                    'link',
                    'strike',
                    'underline',
                    'bullet_list',
                    'ordered_list',
                    'blockquote'
                ])
        ];
    }

}
