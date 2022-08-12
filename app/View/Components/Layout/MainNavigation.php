<?php

namespace App\View\Components\Layout;

use App\View\Models\MainNavigation as ViewModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainNavigation extends Component
{
    /**
     *  View Model containing the data needed for rendering this component.
     *
     *  @var ViewModel
     */
    public ViewModel $model;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        ViewModel $model,
    ) {
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View | string | Closure
    {
        return view('components.layout.main-navigation');
    }
}
