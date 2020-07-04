<?php

namespace App\Console\Commands;

use App\Page;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class WebsiteRoutes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'website:routes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates the routes for the website';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    protected function isLandingPage(Page $page): bool
    {
        return $page->id === (int) setting('landing-page');
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $routes = Collection::make();

        $pages = Page::visible()->get();

        $pages->each(function (Page $page) use ($routes) {
            if ($this->isLandingPage($page)) {
                $routes->add([
                    'path' => '',
                    'controller' => 'PageController'
                ]);
                return;
            }

            $routes->add([
                'path' => $page->path(),
                'controller' => 'PageController'
            ]);
        });

        /**
         * @todo routes opslaan in een json bestand.
         */
    }
}
