<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return '¡Hola desde Docker!';
});

Route::get('/productos', [
    \App\Http\Controllers\ProductoController::class,
    'index'
]);