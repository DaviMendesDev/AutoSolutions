<?php

namespace App\View\Components;

use App\Models\AutoPart;
use Illuminate\View\Component;

class AutoPartItem extends Component
{
    /**
     * Create the component instance.
     *
     * @param AutoPart $auto_part_model
     * @return void
     */
    public function __construct(public $autoPartItem)
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
        return view('components.auto-part-item');
    }
}
