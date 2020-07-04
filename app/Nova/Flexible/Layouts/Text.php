<?php

namespace App\Nova\Flexible\Layouts;

use Manogi\Tiptap\Tiptap;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Text extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'text';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Tekst';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Tiptap::make('Tekst', 'content')
                ->buttons([
                    'italic',
                    'bold',
                    'link',
                    'strike',
                    'underline',
                    'bullet_list',
                    'ordered_list',
                    'blockquote'
                ])
        ];
    }

}
