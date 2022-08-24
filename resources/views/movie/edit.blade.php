@extends('layouts.main')
@section('content')
    <form action="{{route('movie.update', $movie->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input type="text" name="company" class="form-control" value="{{$movie->company}}" >
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{$movie->title}}" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
