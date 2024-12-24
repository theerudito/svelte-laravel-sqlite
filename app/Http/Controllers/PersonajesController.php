<?php

namespace App\Http\Controllers;

use App\Models\Personajes;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PersonajesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personajes = Personajes::all();
        return Inertia::render('Personajes', ['personajes' => $personajes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Personajes $personajes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personajes $personajes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personajes $personajes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personajes $personajes)
    {
        //
    }
}
