<?php

namespace App\Http\Controllers;

use App\Models\Personajes;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class PersonajesController extends Controller
{
  
    public function index()
    {
        $personajes = Personajes::all();
        return Inertia::render('Personajes', ['personajes' => $personajes]);
    }

    public function create()
    {
        return Inertia::render('Personajes');
    }

  
    public function store(Request $request)
    {
        try {

            DB::beginTransaction();

            $personaje = [
                'nombre' => $request->nombre,
                'clan' => $request->clan,
                'edad' => $request->edad,
            ];

            Personajes::create($personaje);

            DB::commit();

            return redirect()->route('personajes.index')->with('success', 'Datos guardados correctamente');
        } catch (\Exception $e) {

            dd($e);

            return back()->withErrors(['error' => 'Error al guardar los datos'])->withInput();

        }
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

    
    public function destroy($id)
    {
        
        try {

            DB::beginTransaction();

            $personaje = Personajes::find($id);
            
            $personaje->delete();

            DB::commit();

            return redirect()->route('Personajes.index')->with('success', 'Datos eliminados correctamente');

        } catch (\Exception $e) {

            dd($e);

            return back()->withErrors(['error' => 'Error al eliminar los datos'])->withInput();

        }
    }
}
