<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function show(Request $request, $slug)
    {
        $property_type = PropertyType::where('slug', $slug)
            ->firstOrFail();
        $properties = Property::where('property_type_id', $property_type->id)
            ->with(['property_type', 'owner_type', 'location', 'customer'])
            ->orderBy('id', 'desc')
            ->paginate();

        return view('property_type.show')
            ->with([
                'property_type' => $property_type,
                'properties' => $properties,
            ]);
    }
}
