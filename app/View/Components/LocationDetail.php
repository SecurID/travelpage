<?php

namespace App\View\Components;

use App\Models\Location;
use Illuminate\View\Component;

class LocationDetail extends Component
{
    public Location $location;
    public $activities;
    public $prices;
    public $country;

    public function __construct($location, $activities, $prices, $country)
    {
        $this->location = $location;
        $this->activities = $activities;
        $this->prices = $prices;
        $this->country = $country;
    }

    public function render()
    {
        return view('components.location-detail');
    }
}
