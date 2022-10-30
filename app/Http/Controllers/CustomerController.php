<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Property;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show(Request $request, $slug)
    {
        $customer = Customer::where('slug', $slug)
            ->firstOrFail();
        $properties = Property::where('customer_id', $customer->id)
            ->with(['customer', 'owner_type', 'property_type', 'customer'])
            ->orderBy('id', 'desc')
            ->paginate();

        return view('customer.show')
            ->with([
                'customer' => $customer,
                'properties' => $properties,
            ]);
    }
}
