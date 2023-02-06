<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class MainController extends Controller
{

    // --- HOME
    public function home()
    {
        $people = Person::all();

        return view('pages.home', compact('people'));
    }

    // --- SHOW
    public function personShow(Person $person)
    {
        return view('pages.personShow', compact('person'));
    }

    // --- DELETE
    public function personDelete(Person $person)
    {
        $person->delete();

        return redirect()->route('home');
    }

    // --- CREATE

    public function personCreate()
    {

        return view('pages.personCreate');
    }

    // --- STORE

    public function personStore(Request $request)
    {

        $data = $request->validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'nullable|date',
            'height' => 'required|integer|min:140|max:200',
        ]);

        $person = new Person();

        $person->firstName = $data['firstName'];
        $person->lastName = $data['lastName'];
        $person->dateOfBirth = $data['dateOfBirth'];
        $person->height = $data['height'];

        $person->save();

        return redirect()->route('home');
    }

}