
@extends('layouts.main')

@section('tittle', 'HDC Events')

@section('content')

@foreach($events as $event)

    <p>{{ $event ->tittle }} -- {{ $event->description }}</p>
    
@endforeach

@endsetion