@extends('layouts.main')
@section('content')
    <div>
        @foreach($books as $book)
            <div><a href="{{ route('book.show', $book->id) }}"> {{ $book->id }}. {{ $book->author }}<a/> </div>
        @endforeach
    </div>
    <div>
        <a href="{{ route('book.create') }}"> Create</a>
    </div>
@endsection
