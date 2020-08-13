<?php

namespace App\Providers;

use App\Http\View\Composers\NewsComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\MainMenuComposer;
use App\Http\View\Composers\SponsorsComposer;
use App\Http\View\Composers\DisclaimerMenuComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            ['layout.partial.navigation', 'layout.partial.footer', 'layout.partial.mobile-menu'],
            MainMenuComposer::class
        );

        View::composer(
            'layout.partial.copyright',
            DisclaimerMenuComposer::class
        );

        View::composer(
            'page.layout.sponsors-overview',
            SponsorsComposer::class
        );

        View::composer(
            ['page.layout.news-overview'],
            NewsComposer::class
        );
    }
}
