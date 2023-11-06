@extends('layouts/main')

@section('title')
    create
@endsection

@section('content')
    <a href="{{ route('car.index') }}" class="btn btn-outline-warning mb-3" >back</a>

    <form method="post" action="{{ route('car.store') }}">
        @csrf
        <div class="form-group">
            <label for="mark">Mark</label>
            <input class="form-control" id="mark" name="mark" placeholder="Mark" value="{{ old('mark') }}">

            @error('mark')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" id="description" name="description" placeholder="Description" value="{{ old('description') }}">
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="category">Category</label>
            <select id="category" name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option
                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="wheel">Wheels</label>
            <select multiple class="form-control" id="wheel" name="wheels[]">
                @foreach($wheels as $wheel)
                    <option value="{{ $wheel->id }}">{{ $wheel->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input class="form-control mb-3" id="year" name="year" placeholder="Year" value="{{ old('year') }}">
            @error('year')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
