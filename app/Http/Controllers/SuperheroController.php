<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class CrudSuperheroController extends Controller
{
    public function index()
    {
        $superheroes = CrudSuperhero::all();  // Obtenemos todos los superhéroes
        return view('crud_superheroes', compact('superheroes'));
    }

    public function store(Request $request)
    {
        $superhero = new CrudSuperhero();
        $superhero->name = $request->name;
        $superhero->power = $request->power;
        $superhero->save();

        return redirect()->route('superheroes.index');
    }

    // Métodos para edit, update, destroy, etc.
}

