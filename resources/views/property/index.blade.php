@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div class="container-lg py-3">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                @include('app.filter')
            </div>
            <div class="col">
                @forelse($properties as $property)
                    @include('app.property')
                @empty
                    <div class="bg-white rounded shadow p-3 mb-3">
                        <div class="h2 text-center mb-0">
                            <img src="images/minions.gif" alt="minions" class="img-fluid">
                        </div>
                    </div>
                @endforelse
                <div class="d-flex justify-content-end">
                    {{ $properties->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection