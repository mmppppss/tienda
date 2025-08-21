<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    function index(){
        $personas = \App\Models\Persona::all();
        return view('persona.index', compact('personas'));
    }
}
