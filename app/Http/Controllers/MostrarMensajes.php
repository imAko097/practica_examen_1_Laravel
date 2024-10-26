<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class MostrarMensajes extends Controller
{
    //
    public function mostrar() {
        $registro_mensajes = Mensaje::all();
        return view('/mensajes', ['registro_mensajes' => $registro_mensajes]); // pasa la variable a la vista
    }
}
