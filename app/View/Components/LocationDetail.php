<?php

namespace App\View\Components;

use App\Models\Location;
use Illuminate\View\Component;

class LocationDetail extends Component
{
    public Location $location;
    public $activities;
    public $prices;

    public function __construct($location, $activities, $prices)
    {
        $this->location = $location;
        $this->activities = $activities;
        $this->prices = $prices;
    }

    public function render()
    {
        return view('components.location-detail');
    }
}
