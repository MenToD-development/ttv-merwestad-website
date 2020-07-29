<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;
use Illuminate\View\View;

class MenuItem extends Component
{
    /**
     * The name of the route
     *
     * @var string
     */
    public $routeName;

    /**
     * MenuItem constructor.
     *
     * @param string $routeName
     */
    public function __construct(string $routeName)
    {
        $this->routeName = $routeName;
    }

    /**
     * Checks whether the menu item is active or not
     *
     * @return bool
     */
    public function active(): bool {
        return Route::current()->getName() === $this->routeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.menu-item');
    }
}
