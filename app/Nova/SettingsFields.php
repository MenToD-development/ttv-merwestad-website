<?php


namespace App\Nova;


use Laravel\Nova\Fields\Select;

class SettingsFields
{
    protected function menus(): array
    {
        return \App\Menu::all()->mapWithKeys(function (\App\Menu $menu) {
           return [$menu->id => $menu->name];
        })->toArray();
    }

    public function fields(): array
    {
        return [
            Select::make('Hoofdmenu', 'main-menu')
                ->options($this->menus())
                ->help('Dit menu wordt gebruikt voor het hoofd menu bovenaan de pagina.'),

            Select::make('Disclaimer menu', 'disclaimer-menu')
                ->options($this->menus())
                ->help('Dit menu wordt gebruikt voor onderaan de website in de witte balk.')
        ];
    }
}
