<div class="bg-white rounded shadow p-3 mb-3">
    <div class="row">
        <div class="col">
            <div class="h6">
                <span class="text-secondary">PropertyType</span>
                <a href="{{ route('home', ['property_type_id' => $property->property_type_id]) }}">
                    {{ $property->property_type->name}}
                </a>
            </div>
            <div class="h6">
                <span class="text-secondary">OwnerType</span>
                <a href="{{ route('home', ['owner_type_id' => $property->owner_type_id]) }}">
                    {{ $property->owner_type->name }}
                </a>
            </div>
            <div class="h6">
                <span class="text-secondary">Customer</span>
                <a href="{{ route('home', ['customer_id' =>$property->customer_id]) }}">
                    {{$property->customer->name }}
                </a>
            </div>
            <div class="h6">
                <span class="text-secondary">Location</span>
                <a href="{{ route('home', ['location_id' => $property->location_id]) }}">
                    {{ $property->location->name }}
                </a>
            </div>
            <div class="h6">
                <span class="text-secondary">Phone</span>
                <a href="{{ route('home', ['customer_id' =>$property->customer_id]) }}">
                    {{$property->customer->phone }}
                </a>
            </div>
            <div class="h6">
                <span class="text-secondary">Phone-2</span>
                <a href="{{ route('home', ['location_id' => $property->location_id]) }}">
                    {{ $property->customer->phone_2 }}
                </a>
            </div>
            <div class="h6">
                <span class="text-secondary">Price</span>
                {{ number_format($property->price, 3, '.', '.') }}
            </div>
        </div>
        <div class="col">
            <div class="h6">
                @if($property->customer->verified)
                    <i class="bi-check-circle-fill text-success"></i>
                @else
                    <i class="bi-x-circle-fill text-danger"></i>
                @endif
                <span class="text-secondary">Verified</span>
            </div>
            <div class="h6">
                @if($property->rent)
                    <i class="bi-check-circle-fill text-success"></i>
                @else
                    <i class="bi-x-circle-fill text-danger"></i>
                @endif
                <span class="text-secondary">Rent</span>
            </div>
            <div class="h6">
                @if($property->repair)
                    <i class="bi-check-circle-fill text-success"></i>
                @else
                    <i class="bi-x-circle-fill text-danger"></i>
                @endif
                <span class="text-secondary">Repair</span>
            </div>
            <div class="h6">
                @if($property->credit)
                    <i class="bi-check-circle-fill text-success"></i>
                @else
                    <i class="bi-x-circle-fill text-danger"></i>
                @endif
                <span class="text-secondary">Credit</span>
            </div>
            <div class="h6">
                @if($property->documents)
                    <i class="bi-check-circle-fill text-success"></i>
                @else
                    <i class="bi-x-circle-fill text-danger"></i>
                @endif
                <span class="text-secondary">Documents</span>
            </div>
            <div class="h6">
                <div class="h6">
                    <span class="text-secondary">
                        <i class="bi-eye-fill"></i>
                        {{ $property->viewed }}
                    </span>
                </div>
                <div class="h6">
                    <span class="text-secondary">Area</span>
                    {{ $property->area }}
                </div>
            </div>
        </div>
    </div>
</div>