<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BtnFitur extends Component
{

    /** 
     * properties
     */

    public $icon;
    public $text;
    public $color;
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $text, $color, $link)
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->color = $color;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn-fitur');
    }
}
