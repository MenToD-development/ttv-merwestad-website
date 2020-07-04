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
        ];
    }
}
