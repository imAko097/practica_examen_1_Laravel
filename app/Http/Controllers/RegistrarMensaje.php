<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class RegistrarMensaje extends Controller
{
    // Registra un mensaje en la base de datos (previa validación)
    public function registrarMensaje(Request $request) {
        $colores = ["red", "blue", "black", "green"];

         $datos_formulario = $request -> validate([
            'correo' => 'required|email|max:50',
            'mensaje' => 'required|string|max:300',
            'color' => 'required|in:' . implode(',', $colores),
            'imagen_url' => 'nullable|url'
        ], [
            'correo.required' => 'El correo es obligatorio',
            'email.email' => 'El correo es inválido',
            'email.max' => 'El correo es demasiado largo',
            'mensaje.required' => 'El mensaje es obligatorio',
            'mensaje.max' => 'El mensaje es demasiado largo',
            'color.in' => 'El color es inválido',
            'imagen_url.url' => 'El link a la imagen es inválido'
        ]);

        $datos_registrar = new Mensaje($datos_formulario);

        $datos_registrar -> save(); // guarda en la BASE DE DATOS

        return redirect() -> route('formulario') -> with ('success', 'Mensaje registrado con éxtio');
    }
}