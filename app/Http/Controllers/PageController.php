<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    protected Page $page;

    /**
     * Sets the page variable from the request.
     *
     * @param Request $request
     */
    protected function setPageFrom(Request $request): void
    {
        $this->setPage(
            Page::where('id', '=', (int) $request->route()->getName())
                ->get()
                ->first()
        );
    }

    public function setPage(Page $page)
    {
        $this->page = $page;
    }

    /**
     * This function gets called from the routes file.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $this->setPageFrom($request);

        return view('page.main', [
            'page' => $this->page
        ]);
    }
}
