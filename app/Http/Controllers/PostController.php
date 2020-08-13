<?php

namespace App\Http\Controllers;

use App\Page;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke(Request $request)
    {
        $post = Post::findOrFail($request->route()->getName());
        $overviewPage = Page::find(setting('news-page'));

        return view(
            'page.post',
            compact('post', 'overviewPage')
        );
    }
}
