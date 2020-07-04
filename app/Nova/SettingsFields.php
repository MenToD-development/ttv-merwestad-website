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

    protected function pages(): array
    {
        return \App\Page::all()->mapWithKeys(function (\App\Page $page) {
            return [$page->id => $page->name];
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
                ->help('Dit menu wordt gebruikt voor onderaan de website in de witte balk.'),

            Select::make('Landings pagina', 'landing-page')
                ->options($this->pages())
                ->help('De geselecteerde pagina wordt als welkomst pagina gebruikt en is de '
                    . 'eerste pagina die geladen wordt.')
        ];
    }
}
