<nav class="navbar navbar-expand-lg navbar-dark bg-warning" aria-label="navbar">
    <div class="container-lg">
        <a class="navbar-brand" href="{{ route('home') }}">Property</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-expanded="false">PropertyType</a>
                    <ul class="dropdown-menu">
                        @foreach($property_types as $property_type)
                            <li>
                                <a class="dropdown-item" href="{{ route('property_type.show', $property_type->slug) }}">
                                    {{ $property_type->name }} <span class="badge text-bg-warning">{{ $property_type->properties_count }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-expanded="false">OwnerType</a>
                    <ul class="dropdown-menu">
                        @foreach($owner_types as $owner_type)
                            <li>
                                <a class="dropdown-item" href="{{ route('owner_type.show', $owner_type->slug) }}">
                                    {{ $owner_type->name }} <span class="badge text-bg-warning">{{ $owner_type->properties_count }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-expanded="false">Customer</a>
                    <ul class="dropdown-menu">
                        @foreach($customers as $customer)
                            <li>
                                <a class="dropdown-item" href="{{ route('customer.show', $customer->slug) }}">
                                    {{ $customer->name }} <span class="badge text-bg-warning">{{ $customer->properties_count }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-expanded="false">Location</a>
                    <ul class="dropdown-menu">
                        @foreach($locations as $location)
                            <li>
                                <a class="dropdown-item" href="{{ route('location.show', $location->slug) }}">
                                    {{ $location->name }} <span class="badge text-bg-warning">{{ $location->properties_count }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>