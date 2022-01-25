<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Country;
use App\Models\Location;
use App\Models\Price;

class LocationActivityPriceController extends Controller
{
    public function create()
    {
        $countries = Country::all();
        $location = new Location();
        $activity = new Activity();
        $price = new Price();

        return view('location-activity-price.create', [
            'location' => $location,
            'countries' => $countries,
            'activity' => $activity,
            'price' => $price,
        ]);
    }

    public function store()
    {

    }
}
