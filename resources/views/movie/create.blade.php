@extends('layouts.main')
@section('content')
    <form action="{{route('movie.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input type="text" name="company" class="form-control" placeholder="Company" >
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
