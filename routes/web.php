<?php

use App\Http\Controllers\RegistrarMensaje;
use App\Http\Controllers\MostrarMensajes;
use App\Http\Controllers\EliminarMensajes;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('formulario');
}) -> name('formulario');

// Controlador que registra dudas
Route::post('/registro-mensaje', [RegistrarMensaje::class, 'registrarMensaje']) -> name('registrar.mensaje');

// Mostrar dudas
Route::get('/lista-mensajes', [MostrarMensajes::class, 'mostrar']) -> name('mostrar.mensajes');

// Eliminar dudas
Route::get('/eliminar-mensajes', [EliminarMensajes::class, 'mostrarEliminar']) -> name('eliminar.mensajes');

Route::post('/eliminar-mensajes', [EliminarMensajes::class, 'eliminarMensajes']) -> name('prosesar.eliminar.mensajes');