@extends('layouts.main-layouts')

@section('main')
    <h1>CREATE A PERSON</h1>
    <form method="POST" action="{{ route('person.update', $person) }}">
        @csrf
        <label for="firstname">Name</label>
        <input type="text" name="firstName" value="{{ $person -> firstName}}">
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" value="{{ $person -> lastName}}">
        <br>
        <label for="dateOfBirth">Date Of Birth</label>
        <input type="date" name="dateOfBirth" value="{{ $person -> dateOfBirth}}">
        <br>
        <label for="height">Height</label>
        <input type="number" name="height" value="{{ $person -> height}}">
        <br>
        <input type="submit" value="UPDATE PERSON">
    </form>
@endsection