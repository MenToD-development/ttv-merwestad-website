<?php

namespace App\Nova\Flexible\Layouts;

use App\Page;
use Laravel\Nova\Fields\Select;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Button extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'button';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Link button';

    protected function pages(): array
    {
        return Page::all()
            ->mapWithKeys(function (Page $page) {
                return [$page->id => $page->name];
            })
            ->toArray();
    }

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('Link naar pagina', 'page_id')
                ->options($this->pages()),

            \Laravel\Nova\Fields\Text::make('Externe link', 'external_link')
                ->help('Vul hier een website adres in als de button naar een externe '
                    . 'website moet linken'),

            \Laravel\Nova\Fields\Text::make('Button tekst', 'content')
                ->help('Deze tekst wordt in de button geplaatst'),

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
                    'fa-arrow-alt-circle-down' => 'Pijl naar beneden'
                ])
        ];
    }

}
