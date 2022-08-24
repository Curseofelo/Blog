@extends('layouts.main')
@section('content')
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="author" class="form-label"> Author</label>
            <input type="text" name="author" class="form-control" id="author" placeholder="Author">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label"> Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
