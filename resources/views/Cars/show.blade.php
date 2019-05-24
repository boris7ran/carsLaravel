@extends('layouts.master')

@section('title', 'Car')

@section('content')
    <h1>
        Car name: {{ $car->title }}
    <h1>
    <h2>
        Car producer: {{ $car->producer}}
    </h2>
    <h3>
        Number of doors: {{ $car->number_of_doors}}
    </h3>
@endsection