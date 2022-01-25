<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormCreateLocationActivityPrice extends Component
{
    public $location;
    public $countries;
    public $activity;
    public $price;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($location, $countries, $activity, $price)
    {
        $this->location = $location;
        $this->countries = $countries;
        $this->activity = $activity;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-create-location-activity-price');
    }
}
