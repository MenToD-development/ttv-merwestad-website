<?php

namespace App\Nova;

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Line;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Stack;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use App\Nova\Flexible\Layouts\Services;
use App\Nova\Flexible\Layouts\NormalText;
use App\Nova\Flexible\Layouts\CallToAction;
use Whitecube\NovaFlexibleContent\Flexible;
use App\Nova\Flexible\Layouts\SponsorsOverview;
use App\Nova\Flexible\Layouts\ContactInformation;
use App\Nova\Flexible\Layouts\IntroTextWithButtonsAndImage;

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
                Line::make('name')
                    ->asHeading(),
                Line::make('title')
                    ->asBase()
            ]),

            Panel::make('Pagina', [
                Hidden::make('user_id')
                    ->default(function () {
                        return auth()->user()->id;
                    }),

                Text::make('Pagina naam', 'name')
                    ->required()
                    ->help('Hiermee wordt de pagina aangeduid. Deze naam zal ook '
                        . 'in het menu verschijnen.')
                    ->onlyOnForms(),

                BelongsTo::make('Moeder pagina', 'parent', Page::class)
                    ->withoutTrashed()
                    ->nullable(),

                Boolean::make('Zichtbaar op de website?', 'visible'),

                Boolean::make('Pagina beveiligen?', 'protected')
                    ->canSee(function () {
                        return auth()->user()->isAdmin();
                    }),
            ]),

            Panel::make('Pagina inhoud', [
                Flexible::make('Inhoud', 'content')
                    ->fullWidth()
                    ->addLayout(IntroTextWithButtonsAndImage::class)
                    ->addLayout(Services::class)
                    ->addLayout(CallToAction::class)
                    ->addLayout(SponsorsOverview::class)
                    ->addLayout(ContactInformation::class)
                    ->addLayout(NormalText::class)
            ]),

            Panel::make('Vindbaarheid', [
                Heading::make('Meta gegevens'),

                Text::make('Titel', 'title')
                    ->required()
                    ->help('Dit is de alles omschrijven titel waarmee de pagina '
                        . 'wordt omschreven. Deze titel wordt ook als google resultaat '
                        . 'weergeven.')
                    ->onlyOnForms()
                    ->showOnDetail(),

                Textarea::make('Omschrijving', 'Description')
                    ->onlyOnForms()
                    ->showOnDetail(),

                Image::make('Afbeelding', 'image')
                    ->help('Deze afbeelding wordt gebruikt als hoofdafbeelding dan de pagina.'
                        . ' Deze afbeelding wordt ook gebruikt zodra je de pagina gaat delen op '
                        . 'facebook of andere social media.')
                    ->onlyOnForms()
                    ->showOnDetail()
            ]),

            BelongsToMany::make('Zichtbaar in menu\'s', 'menus', Menu::class)
                ->singularLabel('Menu')
                ->fields(new MenuPageFields()),

            HasMany::make('Dochter pagina\'s', 'children', Page::class)
                ->singularLabel('Dochter pagina')
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
