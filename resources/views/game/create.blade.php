@extends('layouts.main')
@section('content')
    <form action="{{route('game.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="Type">
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input type="text" name="company" class="form-control" id="company" placeholder="Company">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="category"> Category </label>
            <select class="form-control" id="category" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="tags"> Tags</label>
            <select class="form-select" multiple aria-label="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
