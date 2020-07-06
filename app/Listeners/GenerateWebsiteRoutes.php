<?php

namespace App\Listeners;

use App\Events\PageSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Artisan;

class GenerateWebsiteRoutes
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PageSaved  $event
     * @return void
     */
    public function handle(PageSaved $event)
    {
        Artisan::call('website:routes');
    }
}
