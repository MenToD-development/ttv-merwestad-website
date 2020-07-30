<?php

namespace App\Casts;

use App\Nova\Flexible\Layouts\CallToAction;
use App\Nova\Flexible\Layouts\Service;
use App\Nova\Flexible\Layouts\Services;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;
use App\Nova\Flexible\Layouts\IntroTextWithButtonsAndImage;

class MerwestadFlexibleCast extends FlexibleCast
{
    /**
     * @var string[]
     */
    protected $layouts = [
        'intro-text-with-buttons-and-image' => IntroTextWithButtonsAndImage::class,
        'services' => Services::class,
        'service' => Service::class,
        'call-to-action' => CallToAction::class
    ];
}
