@extends('layouts.main-layouts')

@section('main')
    <h1>People</h1>
    <ul>
        @foreach ($people as $person)
            <li>
                {{ $person -> firstName }} {{ $person -> lastName}}
            </li>
        @endforeach
    </ul>
@endsection