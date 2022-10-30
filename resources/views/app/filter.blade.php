<form action="{{ url()->current() }}" method="get">
    <div class="mb-3">
        <label for="property_type" class="form-label">Property type</label>
        <select class="form-select" name="property_type_id" id="property_type">
            <option value selected>-</option>
            @foreach($property_types as $property_type)
                <option value="{{ $property_type->id }}" {{ $property_type->id == $property_type_id ? 'selected':'' }}>
                    {{ $property_type->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="owner_type" class="form-label">Owner type</label>
        <select class="form-select" name="owner_type_id" id="owner_type">
            <option value selected>-</option>
            @foreach($owner_types as $owner_type)
                <option value="{{ $owner_type->id }}" {{ $owner_type->id == $owner_type_id ? 'selected':'' }}>
                    {{ $owner_type->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="customer" class="form-label">Customer</label>
        <select class="form-select" name="customer_id" id="customer">
            <option value selected>-</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}" {{ $customer->id == $customer_id ? 'selected':'' }}>
                    {{ $customer->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <select class="form-select" name="location_id" id="location">
            <option value selected>-</option>
            @foreach($locations as $location)
                <option value="{{ $location->id }}" {{ $location->id == $location_id ? 'selected':'' }}>
                    {{ $location->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="verified" id="verified" value="1"
                        {{ isset($verified) ? 'checked': '' }}>
                <label class="form-check-label fw-bold" for="verified">Verified</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="rent" id="rent" value="1"
                        {{ isset($rent) ? 'checked': '' }}>
                <label class="form-check-label fw-bold" for="rent">Rent</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="documents" id="documents" value="1"
                        {{ isset($documents) ? 'checked': '' }}>
                <label class="form-check-label fw-bold" for="documents">Documents</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="repair" id="repair" value="1"
                        {{ isset($repair) ? 'checked': '' }}>
                <label class="form-check-label fw-bold" for="repair">Repair</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="credit" id="credit" value="1"
                        {{ isset($credit) ? 'checked': '' }}>
                <label class="form-check-label fw-bold" for="credit">Credit</label>
            </div>
        </div>

    </div>
    <div class="row g-2">
        <div class="col">
            <button type="submit" class="btn btn-warning w-100">Filter</button>
        </div>
        <div class="col-auto">
            <a href="{{ url()->current() }}" class="btn btn-outline-secondary w-100">Clear</a>
        </div>
    </div>
</form>