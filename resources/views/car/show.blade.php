@extends('layouts.main')
@section('content')
    <div>{{$car->mark}}.{{$car->model}} - {{$car->pryce}}</div>
    <div><a href="{{ route('car.edit', $car->id) }}"> Edit</a></div>
    <div>
        <form action="{{ route('car.delete', $car->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
        </form>
    </div>
    <div><a href="{{ route('car.index') }}">Back</a></div>
@endsection
