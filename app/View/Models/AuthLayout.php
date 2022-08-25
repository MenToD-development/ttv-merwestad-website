<?php

namespace App\View\Models;

class AuthLayout
{
    /**
     * Blade file for extending the layout.
     *
     * @var string
     */
    public string $path = 'layouts.auth';

    /**
     * Constructs a new Main layout view model.
     */
    public function __construct(
        public string $applicationName,
        public string $pageTitle,
        public ?string $image = null,
    ) {
        $this->image = $image ?? $this->getMainImage();
    }

    public function getMainImage(): string
    {
        return url(
            'assets/17973663_1910152352590432_7847193252022121877_o.jpeg',
        );
    }
}
