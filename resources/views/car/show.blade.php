@extends('layouts/main')

@section('title')
    show
@endsection

@section('content')
    <a href="{{ route('car.index') }}" class="btn btn-outline-warning mb-3" >back</a>

    <p>mark: {{ $car->mark }}</p>
    <p>model: {{ $car->model }}</p>
    <p>description: {{ $car->description }}</p>
    <p>category: {{ $car->category->title }}</p>
    <p>year: {{ $car->year }}</p>

    <div><a href="{{ route('car.edit', $car->id) }}" class="btn btn-outline-warning mb-3" >change</a></div>

    <form method="post" action="{{ route('car.delete', $car->id) }}">
        @csrf
        @method('delete')
        <input class="btn btn-outline-warning mb-3" type="submit" value = "delete"/>
    </form>
@endsection
