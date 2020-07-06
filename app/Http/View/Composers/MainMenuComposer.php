<?php


namespace App\Http\View\Composers;

use Akaunting\Setting\Facade as Setting;
use App\Menu;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

class MainMenuComposer
{
    protected function menu(): Menu
    {
        return Menu::where('id', '=', Setting::get('main-menu'))
            ->get()
            ->first();
    }

    protected function pages(): Collection
    {
        return $this->menu()->pages
            ->sortBy('pivot.order');
    }

    public function compose(View $view): void
    {
        $view->with('mainMenuItems', $this->pages());
    }
}
