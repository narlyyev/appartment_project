<?php

namespace App\Http\Controllers;

use App\Models\OwnerType;
use App\Models\Property;
use Illuminate\Http\Request;

class OwnerTypeController extends Controller
{
    public function show(Request $request, $slug)
    {
        $owner_type = OwnerType::where('slug', $slug)
            ->firstOrFail();
        $properties = Property::where('owner_type_id', $owner_type->id)
            ->with(['owner_type', 'property_type', 'location', 'customer'])
            ->orderBy('id', 'desc')
            ->paginate();

        return view('owner_type.show')
            ->with([
                'owner_type' => $owner_type,
                'properties' => $properties,
            ]);
    }
}
