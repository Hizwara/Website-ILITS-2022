<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BarChart extends Component
{

    public $title;
    public $percent;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $percent='50')
    {
        $this->title = $title;
        $this->percent = $percent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bar-chart');
    }
}
