<?php

namespace App\View\Models;

class MainLayout
{
    /**
     * Blade file for extending the layout.
     *
     * @var string
     */
    public string $path = 'layouts.main';

    /**
     * @var MainNavigation
     */
    public MainNavigation $mainNavigation;

    /**
     * Constructs a new Main layout view model.
     */
    public function __construct(
        public string $applicationName,
        public string $pageTitle,
        MainNavigation $mainNavigation = null,
    ) {
        $this->mainNavigation = $mainNavigation ?? $this->getMainNavigation();
    }

    /**
     * Creates a fresh new MainNavigation view model with the data from this
     * view model.
     *
     * @return MainNavigation
     */
    protected function getMainNavigation(): MainNavigation
    {
        return new MainNavigation($this->applicationName);
    }
}
