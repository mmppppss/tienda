<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/registrar', function () {
    return view('welcome');
});

Route::get('/persona2', function () {
    return view('persona/index');
});

Route::get('/persona', [PersonaController::class, 'index'])->name('persona.index');
Route::get('/persona/create', [PersonaController::class, 'create'])->name('persona.create');