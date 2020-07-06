<?php


namespace App\Nova;

use Laravel\Nova\Fields\Number;

class MenuPageFields
{
    public function __invoke(): array
    {
        return [
            Number::make('Volgorde', 'order')
                ->default(function () {
                    return 1;
                })
                ->sortable()
        ];
    }
}
