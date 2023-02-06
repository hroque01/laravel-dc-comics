<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// --- HOME
Route::get('/', [MainController::class, 'home'])->name('home');

// --- SHOW
Route::get('/person/show/{person}', [MainController::class, 'personShow'])->name('person.show');

// --- DELETE
Route::get('/person/delete/{person}', [MainController::class, 'personDelete'])->name('person.delete');