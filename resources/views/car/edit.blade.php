@extends('layouts.main')
@section('content')
    <form action="{{ route('car.update', $car->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="mark" class="form-label"> Mark</label>
            <input type="text" name="mark" class="form-control" id="mark" value="{{ $car->mark }}">
        </div>
        <div class="mb-3">
            <label for="model" class="form-label"> Model</label>
            <input type="text" name="model" class="form-control" id="model" value="{{$car->model}}">
        </div>
        <div class="mb-3">
            <label for="pryce" class="form-label"> Pryce</label>
            <input type="text" name="pryce" class="form-control" id="pryce" value="{{$car->pryce}}">
        </div>
        <div>
            <select class="form-select form-select-sm" name="category_id">
                @foreach($categories as $category)
                <option
                    {{$category->id === $car->category->id ? 'selected' : ''}}
                    value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select class="form-select" multiple aria-label="tags" name="tags[]">
                @foreach($tags as $tag)
                <option @foreach($car->tags as $carTag)
                            {{$tag->id === $carTag->id ? 'selected' :''}}
                        @endforeach
                    value="{{$tag->id}}">{{$tag->title}}</option>


                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
