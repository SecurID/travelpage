<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class TypeaheadController extends Controller
{
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('q');
        $filterResult = Location::search($query)
            ->with('country')
            ->get();

        return response()->json($filterResult);
    }
}
