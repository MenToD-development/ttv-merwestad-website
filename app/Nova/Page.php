<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Line;
use Laravel\Nova\Fields\Stack;
use Laravel\Nova\Fields\Text;

class Page extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Page::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'title'
    ];

    /**
     * @var string
     */
    public static $group = 'Website';

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Stack::make('Pagina', [
                Line::make('title')
                    ->asHeading(),
                Line::make('name')
                    ->asBase()
            ]),

            Hidden::make('author')
                ->default(function () {
                    return auth()->user()->id;
                }),

            Text::make('Pagina naam', 'name')
                ->required()
                ->help('Hiermee wordt de pagina aangeduid. Deze naam zal ook '
                    . 'in het menu verschijnen.'),

            Heading::make('Meta gegevens')
                ->help('Dit zijn gegevens die mogelijk niet te zien zijn op de website'
                    . ' maar worden gebruikt door Google of andere social media.'),

            Text::make('Pagina titel', 'title')
                ->required()
                ->help('Dit is de alles omschrijven titel waarmee de pagina '
                    . 'wordt omschreven. Deze titel wordt ook als google resultaat '
                    . 'weergeven.')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function label(): string
    {
        return 'Pagina\'s';
    }

    /**
     * @inheritDoc
     */
    public static function singularLabel(): string
    {
        return 'Pagina';
    }
}
