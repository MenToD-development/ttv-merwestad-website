<?php


namespace App\Http\View\Composers;


use App\Post;
use Illuminate\View\View;

class NewsPreviewComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $featured = Post::featured()
            ->first();

        $view->with('featured', $featured);
        $view->with('posts', Post::latest()
            ->latest('published_on')
            ->limit(3)
            ->get()
            ->filter(function (Post $post) {
                return !$post->featured;
            })
        );
    }
}
