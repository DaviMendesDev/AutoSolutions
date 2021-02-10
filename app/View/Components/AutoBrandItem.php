<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AutoBrandItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $autoBrandItem)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.auto-brand-item');
    }
}
