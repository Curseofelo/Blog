@extends('layouts.main')
@section('content')
    <form class="mb-3" action="{{route('music.update', $music->id)}}" method="post">
        @csrf
        @method('patch')
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
                <option
                    {{$category->id == $music->category->id ? 'selected' : ''}}
                    value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
        <div>
            <select class="form-select" multiple aria-label="tags" name="tags[]">
                @foreach($tags as $tag)
                <option @foreach($music->tags as $musicTag)
                            {{$tag->id === $musicTag->id ? 'selected' : ''}}
                        @endforeach
                    value="{{$tag->id}}">{{$tag->title}}</option>
            @endforeach
        </div>
        <input type="submit" value="submit">

    </form>
@endsection
