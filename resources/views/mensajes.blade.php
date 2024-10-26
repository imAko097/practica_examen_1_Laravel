<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de mensajes</title>
</head>
<body>
    <h1>Registro de mensajes</h1>
    <table>
        <tr>
            <th>Correo</th>
            <th>Mensaje</th>
            <th>Imagen</th>
        </tr>
        @foreach ($registro_mensajes as $mensaje)
            <tr>
                <td>{{ $mensaje->correo }}</td>
                <td style='color: {{ $mensaje->color }};'>{{ $mensaje->mensaje }}</td>
                <td>
                    @if ($mensaje->imagen_url)
                        <img src="{{ $mensaje->imagen_url }}" alt="Imagen" width="100">
                    @endif
                </td>
            </tr>
        @endforeach 
    </table>
    <a href="{{ route('formulario') }}">Volver</a>
    <a href="{{ route('eliminar.mensajes') }}">¿Desea eliminar algun mensaje?</a>
</body>
</html>