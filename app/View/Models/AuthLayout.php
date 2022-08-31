<?php

namespace App\View\Models;

use Illuminate\Contracts\Support\Arrayable;

/**
 * @template TKey of array-key
 * @template TValue
 */
class AuthLayout implements Arrayable
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

    /**
     * Get the instance as an array.
     *
     * @return array<TKey, TValue>
     */
    public function toArray(): array
    {
        return [
            'path' => $this->path,
            'applicationName' => $this->applicationName,
            'pageTitle' => $this->pageTitle,
            'image' => $this->image,
        ];
    }
}
