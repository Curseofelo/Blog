@extends('layouts.main')
@section('content')
    <div>{{ $game->company }} - {{ $game->title }}</div>
    <div>
        <a href="{{ route('game.edit',$game->id) }}"> Edit</a>
    </div>
    <div>
        <form action="{{route('game.destroy', $game->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </div>
    <div>
        <a href="{{route('game.index')}}"> Back</a>
    </div>

@endsection
