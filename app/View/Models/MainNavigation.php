<?php

namespace App\View\Models;

class MainNavigation
{
    public MobileMenu $mobileMenuModel;

    /**
     *  Constructs a new MainNavigation view model.
     *
     *  @param  string $applicationName The application name.
     */
    public function __construct(
        public string $applicationName,
        MobileMenu $mobileMenuModel = null,
    ) {
        $this->mobileMenuModel = $mobileMenuModel ?? $this->mobileMenuModel();
    }

    protected function mobileMenuModel(): MobileMenu {
        return new MobileMenu(
            $this->applicationName,
        );
    }
}
