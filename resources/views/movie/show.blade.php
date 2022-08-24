@extends('layouts.main')
@section('content')
    <div>
        {{$movie->company}}.{{$movie->title}}
    </div>
    <a href="{{route('movie.edit', $movie->id)}}">Edit</a>
    <form action="{{ route('movie.destroy',$movie->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete">
    </form>
    <div>
        <a href="{{route('movie.index')}}">Back</a>
    </div>
@endsection
