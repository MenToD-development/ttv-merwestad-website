<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Top10Item extends Component
{
    /**
     * @var int
     */
    public $number;

    /**
     * @var int
     */
    public $percentage;
    
    /**
     * Create a new component instance.
     *
     * @param int $number
     * @param int $percentage
     */
    public function __construct(int $number, int $percentage)
    {
        $this->number = $number;
        $this->percentage = $percentage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.top10-item');
    }
}
