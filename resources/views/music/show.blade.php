@extends('layouts.main')
@section('content')
    <div>
        {{$music->author}}.{{$music->song}}
    </div>
    <div>
        <a href="{{route('music.edit',$music->id)}}"> Edit</a>
    </div>
    <div>
        <a href="{{route('music.index')}}">Back</a>
    </div>
@endsection
