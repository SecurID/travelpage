<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormCreateLocation extends Component
{
    public $location;
    public $countries;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($location, $countries)
    {
        $this->location = $location;
        $this->countries = $countries;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-create-location');
    }
}
