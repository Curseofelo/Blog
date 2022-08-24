@extends('layouts.main')
@section('content')
    <form action="{{ route('car.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="mark" class="form-label"> Mark</label>
            <input type="text" name="mark" class="form-control" id="mark" placeholder="Mark">
        </div>
        <div class="mb-3">
            <label for="model" class="form-label"> Model</label>
            <input type="text" name="model" class="form-control" id="model" placeholder="Model">
        </div>
        <div class="mb-3">
            <label for="pryce" class="form-label"> Pryce</label>
            <input type="text" name="pryce" class="form-control" id="pryce" placeholder="Pryce">
        </div>
        <div>
            <label for="category">Category</label>
            <select class="form-select" aria-label="category_id" name="category_id" >
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <lable for="Tags">Tags</lable>
            <select class="form-select" multiple aria-label="tags" name="tags[]">
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
