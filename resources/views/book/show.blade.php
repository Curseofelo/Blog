@extends('layouts.main')
@section('content')
    <div>{{$book->author}} . {{ $book->title }}</div>
    <div><a href="{{ route('book.edit', $book->id) }}">Edit</a></div>
    <div>
        <form action="{{route('book.destroy', $book->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">

        </form>
    </div>
    <div>
        <a href="{{ route('book.index') }}"> Back</a>
    </div>
@endsection
