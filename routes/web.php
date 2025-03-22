<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Superhero;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;

Route::get('/', function () {
    echo 'Hello guys! This is my first Laravel application';
    dump(Universe::all());
});

Route::resource('/universes', UniverseController::class);
Route::resource('/superheroes', SuperheroController::class);
Route::resource('/genders', GenderController::class);

//Route::get('/universes', [UniverseController::class, 'index']);


