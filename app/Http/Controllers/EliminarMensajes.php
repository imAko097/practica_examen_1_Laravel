<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class EliminarMensajes extends Controller
{
    //
    public function mostrarEliminar() {
        $registro_mensajes = Mensaje::all();
        return view('/eliminar', ['registro_mensajes' => $registro_mensajes]);
    }

    public function eliminarMensajes(Request $request) {
        $ids = $request -> input('mensajes');
        if ($ids) {
            Mensaje::destroy($ids);
            return redirect() -> route('eliminar.mensajes') -> with('success', 'Mensaje/s eliminado/s con éxtio');
        }

        return redirect() -> route('eliminar.mensajes') -> with('error', 'No se pudo eliminar los mensajes');
    }
}
