@extends('layouts.app')
@section('title')
    {{ $property_type->name }}
@endsection
@section('content')
    <div class="container-lg py-3">
        <div class="h3 mb-3">
            <span class="text-secondary">PropertyType</span> {{ $property_type->name }}
        </div>
            @foreach($properties as $property)
                <div>
                    @include('app.property')
                </div>
            @endforeach
        {{ $properties->links() }}
    </div>
@endsection