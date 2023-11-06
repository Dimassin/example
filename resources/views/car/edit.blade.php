@extends('layouts/main')

@section('title')
    update car
@endsection

@section('content')
    <a href="{{ route('car.show', $car->id) }}" class="btn btn-outline-warning mb-3" >back</a>

    <form method="post" action="{{ route('car.update', $car->id) }}">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="mark">Mark</label>
            <input class="form-control" id="mark" name="mark" placeholder="Mark" value="{{ $car->mark }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" id="description" name="description" placeholder="Description" value="{{ $car->description }}">
        </div>
        <div class="form-group col-md-4">
            <label for="category">Category</label>
            <select id="category" name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option
                        {{ $category->id === $car->category_id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="wheel">Wheels</label>
            <select multiple class="form-control" id="wheel" name="wheels[]">
                @foreach($wheels as $wheel)
                    <option
                        @foreach($car->wheels as $carWheel)
                            {{ $wheel->id === $carWheel->id ? 'selected' : '' }}
                        @endforeach
                        value="{{ $wheel->id }}">{{ $wheel->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input class="form-control mb-3" id="year" name="year" placeholder="Year" value="{{ $car->year }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
