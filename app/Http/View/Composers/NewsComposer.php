<?php

namespace App\Http\View\Composers;

use App\Page;
use App\Post;
use Illuminate\View\View;

class NewsComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('overviewPage', Page::find(setting('news-page')));
        $view->with('posts', Post::published()->get());
    }
}
