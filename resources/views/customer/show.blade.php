@extends('layouts.app')
@section('title')
    {{ $customer->name }}
@endsection
@section('content')
    <div class="container-lg py-3">
        <div class="h3 mb-3">
            <span class="text-secondary">Customer</span> {{ $customer->name }}
        </div>
            @foreach($properties as $property)
                <div>
                    @include('app.property')
                </div>
            @endforeach
        {{ $properties->links() }}
    </div>
@endsection