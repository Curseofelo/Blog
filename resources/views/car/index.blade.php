@extends('layouts.main')
@section('content')
    <div>
        @foreach($cars as $car)
            <div><a href="{{ route('car.show', $car->id) }}">{{ $car->mark }} . {{ $car->model }}</a></div>
        @endforeach
    </div>
    <div>
        {{ $cars->withQueryString()->links() }}
    </div>
    <div><a href="{{ route('car.create') }}">Create</a></div>
@endsection
