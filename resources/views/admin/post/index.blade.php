@extends('layouts.admin')

@section('content')
    <div>
        <div>
            @foreach($posts as $post)
                <div>
                    <a href="{{ route('post.show', $post->id) }}">{{$post->id}}.{{$post->title}}<a/>
                </div>
            @endforeach
        </div>
        <div>
            {{$posts->withQueryString()->links()}}
        </div>
        <div>
            <a href="{{ route('post.create') }}">Create</a>
        </div>
        <div>
            <a href="{{route('post.index')}}">Back</a>
        </div>
    </div>
@endsection
