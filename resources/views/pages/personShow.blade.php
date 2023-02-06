@extends('layouts.main-layouts')

@section('main')
    <h1>Person details</h1>
    <ul>
        <li>
            <div>
                Name: {{ $person -> firstName }} {{ $person -> lastName}}
            </div>
            <div>
                Date of birth: {{ $person -> dateOfBirth}}
            </div>
            <div>
                Height: {{ $person -> height}}
            </div>
        </li>
    </ul>
@endsection