<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocationRequest;
use App\Models\Country;
use App\Models\Location;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::with('country')->get();

        return response()->json($locations);
    }

    public function create()
    {
        $location = new Location();
        $countries = Country::all();

        return view('location.create', [
            'location' => $location,
            'countries' => $countries,
        ]);
    }

    public function store(StoreLocationRequest $request)
    {
        $location = new Location([
            'name' => $request->input('name'),
            'country_id' => $request->input('country_id'),
        ]);
        $location->save();

        return response()->json('Location created!');
    }

    public function show($id)
    {
        $location = Location::find($id);
        $activities = $location->activities()->get();
        $country = $location->country()->get();
        $prices = [];
        foreach($activities as $activity) {
            $prices[$activity->id] = $activity->calculatePrices();
        }

        return view('location.show', [
            'location' => $location,
            'activities' => $activities,
            'prices' => $prices,
            'country' => $country,
        ]);
    }

    public function edit(Location $location)
    {
        //
    }

    public function update($id, Request $request): JsonResponse
    {
        $location = Location::find($id);
        $location->update($request->all());

        return response()->json('Location updated!');
    }

    public function destroy($id)
    {
        $location = Location::find($id);
        $location->delete();

        return response()->json('Location deleted!');
    }

    public function activities($id)
    {
        $location = Location::find($id);
        $activities = $location->activities()->get();

        return response()->json($activities);
    }
}
