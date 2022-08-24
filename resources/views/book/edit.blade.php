@extends('layouts.main')
@section('content')
    <form action="{{ route('book.update', $book->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="author" class="form-label"> Author</label>
            <input type="text" name="author" class="form-control" id="author" value="{{ $book->author }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label"> Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $book->title }}">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
