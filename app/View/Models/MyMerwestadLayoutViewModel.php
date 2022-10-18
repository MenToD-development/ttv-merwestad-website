<?php

namespace App\View\Models;

final class MyMerwestadLayoutViewModel extends LayoutViewModel
{
    /**
     * Blade file for extending the layout.
     *
     * @var string
     */
    public string $path = 'layouts.my-merwestad';

    /**
     * @var MainNavigation
     */
    public MainNavigation $mainNavigation;

    /**
     * Constructs a new Main layout view model.
     */
    public function __construct(
        string $applicationName,
        string $pageTitle,
        MainNavigation $mainNavigation = null,
    ) {
        parent::__construct($applicationName, $pageTitle);

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

    public function toArray(): array
    {
        return [
            ...parent::toArray(),

            'mainNavigation' => $this->getMainNavigation(),
        ];
    }
}
