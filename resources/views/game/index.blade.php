@extends('layouts.main')
@section('content')
    <div>
        @foreach($games as $game)
            <div><a href="{{ route('game.show', $game->id) }}"> {{ $game->type }}. {{$game->company}}<a/><div/>
        @endforeach
    </div>
        <div>{{ $games->withQueryString()->links() }}</div>
    <div>
        <a href="{{ route('game.create') }}"> Create </a>
    </div>
@endsection
