@extends('layouts.app')
@section('title')
    {{ $owner_type->name }}
@endsection
@section('content')
    <div class="container-lg py-3">
        <div class="h3 mb-3">
            <span class="text-secondary">OwnerType</span> {{ $owner_type->name }}
        </div>
            @foreach($properties as $property)
                <div class="col">
                    @include('app.property')
                </div>
            @endforeach
        {{ $properties->links() }}
    </div>
@endsection