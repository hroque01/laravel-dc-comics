@extends('layouts.main-layouts')

@section('main')
    <h1>People</h1>
    <ul>
        @foreach ($people as $person)
            <li>
                <a href="{{ route('person.show', $person) }}">
                    {{ $person -> firstName }} {{ $person -> lastName}}
                </a>
                &rarr;
                <a href="{{ route('person.delete', $person) }}">DELETE</a>
            </li>
            <br>
        @endforeach
    </ul>
@endsection