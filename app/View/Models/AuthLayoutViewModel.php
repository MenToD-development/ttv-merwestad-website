<?php

namespace App\View\Models;

/**
 * @template TKey of array-key
 * @template TValue
 */
final class AuthLayoutViewModel extends LayoutViewModel
{
    /**
     * Blade file for extending the layout.
     *
     * @var string
     */
    public string $path = 'layouts.auth';

    public ?string $image = null;

    /**
     * Constructs a new Main layout view model.
     */
    public function __construct(
        string $applicationName,
        string $pageTitle,
        ?string $image = null,
    ) {
        parent::__construct($applicationName, $pageTitle);

        $this->image = $image ?? $this->getMainImage();
    }

    public function getMainImage(): string
    {
        return url(
            'assets/17973663_1910152352590432_7847193252022121877_o.jpeg',
        );
    }

    /**
     * Get the instance as an array.
     *
     * @return array<TKey, TValue>
     */
    public function toArray(): array
    {
        return [
            ...parent::toArray(),

            'image' => $this->image,
        ];
    }
}
