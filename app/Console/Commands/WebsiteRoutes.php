<?php

namespace App\Console\Commands;

use Akaunting\Setting\Facade;
use App\Page;
use App\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class WebsiteRoutes extends Command
{
    const ROUTES_FILE = __DIR__ . '/../../../routes/' . 'routes.json';

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
     * @var Collection
     */
    protected $routes;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    protected function visiblePages(): void
    {
        Page::visible()
            ->get()
            ->each(function (Page $page) {
                if ($this->isLandingPage($page)) {
                    $this->route(
                        '',
                        'PageController',
                        $page->id
                    );
                    return;
                }

                $this->route(
                    $page->path(),
                    'PageController',
                    $page->id
                );
            });
    }

    protected function publishedPosts()
    {
        $newsPage = Page::find(setting('news-page'));

        Post::published()
            ->get()
            ->each(function (Post $post) use ($newsPage) {
                $this->route(
                    $post->path($newsPage),
                    'PostController',
                    $post->id
                );
            });
    }

    protected function route(string $path, string $controller, string $name): void
    {
        $this->routes->add(
            compact('path', 'controller', 'name')
        );
    }

    protected function isLandingPage(Page $page): bool
    {
        return $page->id === (int) setting('landing-page');
    }

    protected function save(): void
    {
        if (!touch(__DIR__ . '/../../../routes/routes.json')) {
            throw new \Exception('Can\'t touch routes/routes.json');
        }

        file_put_contents(
            $this->file(),
            $this->routes->toJson(JSON_PRETTY_PRINT)
        );
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->routes = Collection::make();

        $this->visiblePages();

        if (setting('news-page')) {
            $this->publishedPosts();
        }

        $this->save();
    }

    public function file(): string
    {
        return self::ROUTES_FILE;
    }
}
