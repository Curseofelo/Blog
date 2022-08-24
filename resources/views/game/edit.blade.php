@extends('layouts.main')
@section('content')
    <form action="{{route('game.update', $game->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="type" value="{{$game->type}}">
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input type="text" name="company" class="form-control" id="company" value="{{$game->company}}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{$game->title}}">
        </div>
        <div>
            <select class="form-select form-select-sm" name="category_id">
                @foreach($categories as $category)
                <option
                    {{$category->id === $game->category->id ? 'selected' : ''}}
                    value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
                @foreach($tags as $tag)
                <option
                    @foreach($game->tags as $gameTag)
                        {{$tag->id === $gameTag->id ? 'selected': ''}}
                    @endforeach
                    value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
