<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class IntroLabel extends Component
{
    const BG_WHITE = 'white';
    const BG_PRIMARY = 'primary';
    const BG_SECONDARY = 'secondary';

    /**
     * @var string
     */
    public $bg;

    /**
     * @var array
     */
    protected $classes = [
        'rounded', 'py-1', 'px-2', 'md:py-2', 'md:px-4'
    ];

    /**
     * @var array
     */
    protected $textClasses = [
        'text-xs', 'md:text-sm', 'font-bold', 'font-sans'
    ];

    /**
     * Create a new component instance.
     *
     * @param string $bg
     */
    public function __construct(string $bg = 'white')
    {
        $this->bg = $bg;

        switch ($this->bg) {
            case self::BG_PRIMARY:
                $this->withPrimaryBackground();
                break;
            case self::BG_SECONDARY:
                $this->withSecondaryBackground();
                break;
            default:
                $this->withWhiteBackground();
                break;
        }
    }

    public function withWhiteBackground(): void
    {
        $this->classes[] = 'bg-secondary-normal';
        $this->textClasses[] = 'text-primary-normal';
    }

    public function withPrimaryBackground(): void
    {
        $this->classes[] = 'bg-white';
        $this->textClasses[] = 'text-primary-normal';
    }

    public function withSecondaryBackground(): void
    {
        $this->classes[] = 'bg-white';
        $this->textClasses[] = 'text-primary-normal';
    }

    /**
     * @return Collection
     */
    public function containerClasses(): Collection
    {
        return Collection::make($this->classes);
    }

    /**
     * @return Collection
     */
    public function textClasses(): Collection
    {
        return Collection::make($this->textClasses);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.intro-label');
    }
}
