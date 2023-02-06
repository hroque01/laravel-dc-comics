@extends('layouts.main-layouts')

@section('main')
    <h1>CREATE A PERSON</h1>
    <form method="POST" action="{{ route('person.store') }}">
        @csrf
        <label for="firstname">Name</label>
        <input type="text" name="firstName">
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName">
        <br>
        <label for="dateOfBirth">Date Of Birth</label>
        <input type="date" name="dateOfBirth">
        <br>
        <label for="height">Height</label>
        <input type="number" name="height">
        <br>
        <input type="submit" value="CREATE NEW PERSON">
    </form>
@endsection