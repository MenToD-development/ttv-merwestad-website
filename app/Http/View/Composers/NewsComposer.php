<?php

namespace App\Http\View\Composers;

use App\Post;
use Illuminate\View\View;

class NewsComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('posts', Post::published()->get());
    }
}
