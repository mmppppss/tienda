<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;


class PersonaController extends Controller
{
    function index(){
        $personas = \App\Models\Persona::all();
        return view('persona.index', compact('personas'));
    }
    function create(){
        $personas = \App\Models\Persona::all();
        return view('persona.create', compact('personas'));
    }

    function store(Request $request){
        // Validación
        $validated = $request->validate([
            'nombre'   => 'required|string|max:255',
            'ci'       => 'required|string|max:20|unique:personas,ci',
            'celular'  => 'required|string|max:20',
            'genero'   => 'required|string|in:masculino,femenino,otro',
            'email'    => 'required|email|unique:personas,email',
        ]);

        // Guardar en la base de datos
        Persona::create($validated);
        return redirect()->route('persona.index');
    }
}
