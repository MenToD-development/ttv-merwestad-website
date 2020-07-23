<?php

namespace App\Nova;

use Laravel\Nova\Panel;
use Manogi\Tiptap\Tiptap;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Illuminate\Support\Carbon;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;
use DigitalCreative\ConditionalContainer\ConditionalContainer;
use DigitalCreative\ConditionalContainer\HasConditionalContainer;

class Post extends Resource
{
    use HasConditionalContainer;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title', 'content', 'image', 'published_at', 'published_till'
    ];

    public static $group = 'Website';

    /**
     * @inheritDoc
     */
    public static function label()
    {
        return 'Nieuws';
    }

    /**
     * @inheritDoc
     */
    public static function singularLabel()
    {
        return 'Nieuwsbericht';
    }


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

            Hidden::make('user_id')
                ->default(function () {
                    return auth()->user()->id;
                }),

            Text::make('Titel', 'title')
                ->required(),

            Image::make('Afbeelding', 'image')
                ->nullable(),

            Tiptap::make('Bericht', 'content'),

            Boolean::make('Gepubliceerd?', 'published'),

            ConditionalContainer::make([
                DateTime::make('Gepubliceerd op', 'published_at')
                    ->default(function () {
                        return Carbon::now()->timestamp();
                    }),

                DateTime::make('Gepubliceerd tot', 'published_till')
                    ->nullable()
            ])->if('published truthy true'),
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
}
