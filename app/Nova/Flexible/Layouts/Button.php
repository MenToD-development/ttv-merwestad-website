<?php

namespace App\Nova\Flexible\Layouts;

use App\Page;
use Laravel\Nova\Fields\Select;
use Illuminate\Support\Collection;
use App\Nova\Flexible\Layouts\Icon;
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
    public function fields($prefix = '')
    {
        $fields = new Collection();

        $fields->add(
            Select::make('Link naar pagina', `{$prefix}page_id`)
                ->options($this->pages())
        );

        $fields->add(
            \Laravel\Nova\Fields\Text::make('Externe link', `{$prefix}external_link`)
                ->help('Vul hier een website adres in als de button naar een externe '
                    . 'website moet linken'),
        );

        $fields->add(
            \Laravel\Nova\Fields\Text::make('Button tekst', `{$prefix}content`)
                ->help('Deze tekst wordt in de button geplaatst'),
        );

        $fields = $fields->merge(
            (new Icon())->fields()
        );

        return $fields->toArray();
    }

}
