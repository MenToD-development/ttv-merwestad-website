<?php

namespace App\Nova\Flexible\Layouts;

use App\Nova\Flexible\Layouts\Elements\Button;
use App\Nova\Flexible\Layouts\Elements\Text;
use Illuminate\Support\Collection;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Whitecube\NovaFlexibleContent\Layouts\LayoutInterface;

class Service extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'service';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Service';

    /**
     * @var Collection
     */
    protected $fields;

    protected function addFields(LayoutInterface $layout): Service
    {
        $this->fields = $this->fields->merge(
            $layout->fields()
        );

        return $this;
    }

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        $this->fields = new Collection();

        $this->addFields(new TitleWithIcon())
            ->addFields(new Text())
            ->addFields(new Button());

        return $this->fields->toArray();
    }

}
