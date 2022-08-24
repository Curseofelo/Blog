@extends('layouts.main')
@section('content')
    <form action = "{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="category"> Category </label>
            <select class="form-control" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ $category->id == $post->category->id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select class="form-select" multiple aria-label="tags" name="tags[]">
                @foreach($tags as $tag)
                <option
                    @foreach($post->tags as $postTag)
                        {{$tag->id === $postTag->id ? 'selected': ''}}
                    @endforeach
                    value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
