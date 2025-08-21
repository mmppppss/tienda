<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/registrar', function () {
    return view('welcome');
});

Route::get('/persona', function () {
    return view('persona/index');
});
