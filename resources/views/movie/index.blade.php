@extends('layouts.main')
@section('content')
    <div>
        @foreach($movies as $movie)
            <div><a href="{{ route('movie.show', $movie->id) }}">{{$movie->company}}</a> </div>
        @endforeach
    </div>
    <div>
        <a href="{{route('movie.create')}}">Create </a>
    </div>
@endsection
