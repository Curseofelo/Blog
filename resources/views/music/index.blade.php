@extends('layouts.main')
@section('content')
    <div>
        @foreach($musics as $music)
            <div><a href="{{route('music.show', $music->id)}}"> {{$music->author}}<a/> </div>
        @endforeach
    </div>
    <div>
        <a href="{{route('music.create')}}"> Create</a>
    </div>
@endsection
