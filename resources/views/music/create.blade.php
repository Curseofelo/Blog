@extends('layouts.main')
@section('content')

        <form class="mb-3" action="{{route('music.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" id="author" placeholder="Author">
            </div>
            <div class="mb-3">
                <label for="song" class="form-label">Song</label>
                <input type="text" class="form-control" name="song" id="author" placeholder="Song">
            </div>
            <select class="form-select" name="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
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
