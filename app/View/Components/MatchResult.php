<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;
use Illuminate\View\View;

class MatchResult extends Component
{
    /**
     * @var bool
     */
    public $merwestad;

    /**
     * Create a new component instance.
     * @param bool $merwestad
     */
    public function __construct(bool $merwestad = false)
    {
        $this->merwestad = $merwestad;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.match-result');
    }
}
