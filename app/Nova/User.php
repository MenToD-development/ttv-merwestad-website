<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Line;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Stack;
use Laravel\Nova\Fields\Text;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\User::class;

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
        'id', 'name', 'email',
    ];

    public static $group = 'Rechten';

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

            Gravatar::make()->maxWidth(50),

            Stack::make('Gebruiker', [
                Line::make('name')
                    ->asHeading(),
                Line::make('email')
                    ->asBase()
            ]),

            Text::make('Naam', 'name')
                ->sortable()
                ->rules('required', 'max:255')
                ->onlyOnForms(),

            Text::make('E-mailadres', 'email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}')
                ->onlyOnForms(),

            Password::make('Wachtwoord', 'Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),

            Select::make('Soort account', 'type')
                ->options([
                    \App\User::TYPE_USER => 'Gebruiker, kan alleen inloggen op de website.',
                    \App\User::TYPE_AUTHOR => 'Schrijver, kan inloggen in Nova en content toevoegen.',
                    \App\User::TYPE_ADMIN => 'Administrator, heeft alle mogelijkheden.'
                ])
                ->displayUsingLabels()
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
        return 'Gebruikers';
    }

    /**
     * @inheritDoc
     */
    public static function singularLabel(): string
    {
        return 'Gebruiker';
    }


}
