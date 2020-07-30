<?php

namespace App\Providers;

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
            ['layout.partial.navigation', 'layout.partial.footer'],
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
    }
}
