<?php

namespace App\Nova\Flexible\Layouts;

use App\Page;
use Illuminate\Support\Collection;
use Laravel\Nova\Fields\Select;
use Manogi\Tiptap\Tiptap;
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
     * @var Collection
     */
    protected $fields;

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
            Select::make('Titel icoon', 'icon')
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
                ->help('Dit icoon wordt naast de titel weergeven.'),

            \Laravel\Nova\Fields\Text::make('Titel', 'title'),

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
                ]),

            Select::make('Link naar pagina', 'button_page')
                ->options($this->pages()),

            \Laravel\Nova\Fields\Text::make('Externe link', 'button_link')
                ->help('Vul hier een website adres in als de button naar een externe '
                    . 'website moet linken'),

            \Laravel\Nova\Fields\Text::make('Button tekst', 'button_content')
                ->help('Deze tekst wordt in de button geplaatst'),

            Select::make('Icoon voor in de button', 'button_icon')
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
                ->help('Dit icoon wordt in de button getoond.'),

        ];
    }

}
