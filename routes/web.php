<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// --- HOME
Route::get('/', [MainController::class, 'home'])->name('home');

// --- SHOW
Route::get('/person/show/{person}', [MainController::class, 'personShow'])->name('person.show');

// --- DELETE
Route::get('/person/delete/{person}', [MainController::class, 'personDelete'])->name('person.delete');

// --- CREATE GET
Route::get('/person/create', [MainController::class, 'personCreate'])->name('person.create');

// --- CREATE POST
Route::post('/person/store', [MainController::class, 'personStore'])->name('person.store');

// --- EDIT GET
Route::get('/person/edit/{person}', [MainController::class, 'personEdit'])->name('person.edit');

// --- EDIT POST
Route::post('/person/update/{person}', [MainController::class, 'personUpdate'])->name('person.update');