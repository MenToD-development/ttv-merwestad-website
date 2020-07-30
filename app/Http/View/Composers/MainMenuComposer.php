<?php


namespace App\Http\View\Composers;

use App\Menu;
use App\Page;
use Illuminate\View\View;
use Akaunting\Setting\Facade as Setting;
use Illuminate\Database\Eloquent\Collection;

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
            ->filter(function (Page $page) {
                return $page->visible;
            })
            ->sortBy('pivot.order');
    }

    public function compose(View $view): void
    {
        $view->with('mainMenuItems', $this->pages());
    }
}
