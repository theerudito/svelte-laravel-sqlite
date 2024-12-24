<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonajesController;
use Inertia\Inertia;


// Route::get('/', function(){
//     return Inertia::render('Home');
// });


// Route::resource( '/personajes', PersonajesController::class);


Route::resource( '/', PersonajesController::class);