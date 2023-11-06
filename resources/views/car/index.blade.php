@extends('layouts/main')

@section('title')
    cars
@endsection

@section('content')
    <a href="{{ route('car.create') }}" class="btn btn-outline-warning mb-3" >Add one</a>

    @foreach($cars as $car)
        <p><a href="{{ route('car.show', $car->id) }}">{{ $car->mark }}</a></p>
    @endforeach
@endsection
