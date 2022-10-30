<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Location;
use App\Models\OwnerType;
use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'owner_type_id' => 'nullable|integer|min:1',
            'property_type_id' => 'nullable|integer|min:1',
            'customer_id' => 'nullable|integer|min:1',
            'location_id' => 'nullable|integer|min:1',
            'rent' => 'nullable|boolean',
            'repair' => 'nullable|boolean',
            'credit' => 'nullable|boolean',
            'documents' => 'nullable|boolean',
            'verified' => 'nullable|boolean',
        ]);

        $ownerTypeId = $request->has('owner_type_id') ? $request->owner_type_id : null;
        $propertyTypeId = $request->has('property_type_id') ? $request->property_type_id : null;
        $customerId = $request->has('customer_id') ? $request->customer_id : null;
        $locationId = $request->has('location_id') ? $request->location_id : null;
        $rent = $request->has('rent') ? $request->rent : null;
        $repair = $request->has('repair') ? $request->repair : null;
        $credit = $request->has('credit') ? $request->credit : null;
        $documents = $request->has('documents') ? $request->documents : null;
        $verified = $request->has('verified') ? $request->verified : null;




        $properties = Property::when($ownerTypeId, function ($query, $ownerTypeId) {
            $query->where('owner_type_id', $ownerTypeId);
        })
            ->when($propertyTypeId, function ($query, $PropertyTypeId) {
                $query->where('property_type_id', $PropertyTypeId);
            })
            ->when($customerId, function ($query, $customerId) {
                $query->where('customer_id', $customerId);
            })
            ->when($locationId, function ($query, $locationId) {
                $query->where('location_id', $locationId);
            })
            ->when($rent, function ($query) {
                $query->where('rent', 1);
            })
            ->when($repair, function ($query) {
                $query->where('repair', 1);
            })
            ->when($credit, function ($query) {
                $query->where('credit', 1);
            })
            ->when($documents, function ($query) {
                $query->where('documents', 1);
            })
            ->when($verified, function ($query) {
                $query->where('verified', 1);
            })



            ->with(['owner_type', 'property_type', 'customer', 'location'])
            ->orderBy('id', 'asc')
            ->simplePaginate(20);

        $properties = $properties->appends([
            'owner_type_id' => $ownerTypeId ,
            'property_type_id' => $propertyTypeId ,
            'customer_id' => $customerId ,
            'location_id' => $locationId ,
            'rent' => $rent,
            'repair' => $repair,
            'credit' => $credit,
            'documents' => $documents,
            'verified' => $verified,
        ]);

        $owner_types = OwnerType::orderBy('name')
            ->get();
        $property_types = PropertyType::orderBy('name')
            ->get();
        $customers = Customer::orderBy('name')
            ->get();
        $locations = Location::orderBy('name')
            ->get();

        return view('property.index')
            ->with([
                'owner_types' => $owner_types,
                'property_types' => $property_types,
                'customers' => $customers,
                'locations' => $locations,
                'owner_type_id' => $ownerTypeId ,
                'property_type_id' => $propertyTypeId ,
                'customer_id' => $customerId ,
                'location_id' => $locationId ,
                'properties' => $properties,
                'rent' => $rent,
                'repair' => $repair,
                'credit' => $credit,
                'documents' => $documents,
                'verified' => $verified,

            ]);
    }


    public function show($id)
    {

    }
}
