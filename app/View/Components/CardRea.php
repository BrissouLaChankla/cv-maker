<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardRea extends Component
{
    public $realisation;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($realisation)
    {
        $this->realisation = $realisation;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-rea');
    }
}
