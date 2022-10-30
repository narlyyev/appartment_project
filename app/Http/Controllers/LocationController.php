<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function show(Request $request, $slug)
    {
        $location = Location::where('slug', $slug)
            ->firstOrFail();
        $properties = Property::where('location_id', $location->id)
            ->with(['location', 'owner_type', 'property_type', 'customer'])
            ->orderBy('id', 'desc')
            ->paginate();

        return view('location.show')
            ->with([
                'location' => $location,
                'properties' => $properties,
            ]);
    }
}
