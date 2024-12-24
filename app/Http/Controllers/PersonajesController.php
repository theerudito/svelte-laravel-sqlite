<?php

namespace App\Http\Controllers;

use App\Models\Personajes;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PersonajesController extends Controller
{
  
    public function index()
    {
        $personajes = Personajes::all();
        return Inertia::render('Personajes', ['personajes' => $personajes]);
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show(Personajes $personajes)
    {
        //
    }

    
    public function edit(Personajes $personajes)
    {
        //
    }

    public function update(Request $request, Personajes $personajes)
    {
        //
    }

    
    public function destroy(Personajes $personajes)
    {
        //
    }
}
