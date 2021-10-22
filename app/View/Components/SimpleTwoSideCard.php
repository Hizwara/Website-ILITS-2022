<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SimpleTwoSideCard extends Component
{
    public $title;
    public $text;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $title, $text, $image)
    {

        $this->title = $title;
        $this->text = $text;
        $this->image = $image;

        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.simple-two-side-card');
    }
}
