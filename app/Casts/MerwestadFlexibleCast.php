<?php

namespace App\Casts;

use App\Nova\Flexible\Layouts\IntroTextWithButtonsAndImage;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;

class MerwestadFlexibleCast extends FlexibleCast
{
    /**
     * @var string[]
     */
    protected $layouts = [
        'intro-text-with-buttons-and-image' => IntroTextWithButtonsAndImage::class
    ];
}
