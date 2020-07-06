<?php


namespace App\Http\View\Composers;

use Akaunting\Setting\Facade as Setting;
use App\Menu;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

class DisclaimerMenuComposer
{
    public function menu(): Menu
    {
        return Menu::where('id', '=', Setting::get('disclaimer-menu'))
            ->get()
            ->first();
    }

    public function pages(): Collection
    {
        return $this->menu()->pages
            ->sortBy('pivot.order');
    }

    public function compose(View $view)
    {
        $view->with('disclaimerItems', $this->pages());
    }
}
