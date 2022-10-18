<?php

namespace App\View\Models;

use Illuminate\Contracts\Support\Arrayable;

abstract class LayoutViewModel implements Arrayable
{
    /**
     * Blade file which will be loaded within an @extends.
     *
     * @var string
     */
    public string $path = 'layouts.main';

    public string $applicationName;

    public string $pageTitle;

    public function __construct(
        string $applicationName,
        string $pageTitle,
    ) {
        $this->applicationName = $applicationName;
        $this->pageTitle = $pageTitle;
    }

    public function toArray(): array
    {
        return [
            'path' => $this->path,
            'applicationName' => $this->applicationName,
            'pageTitle' => $this->pageTitle,
        ];
    }
}
