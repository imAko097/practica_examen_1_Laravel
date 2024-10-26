<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="{{ route('registrar.mensaje') }}" method="POST">
        @csrf
        <label for="correo">
            Correo:
            <input type="text" name="correo">
        </label>
        @if ($errors -> has('correo'))
            <span style="color: red;">{{ $errors -> first('correo') }}</span>
        @endif
        <label for="mensaje">
            Mensaje:
            <textarea name="mensaje" id="mensaje" name="mensaje"></textarea>
        </label>
        @if ($errors -> has('mensaje'))
            <span style="color: red;">{{ $errors -> first('mensaje') }}</span>
        @endif
        <label for="color">Selecciona el color del mensaje:
            <select name="color" id="msg_color">
                <option value="red">Rojo</option>
                <option value="blue">Azul</option>
                <option value="black">Negro</option>
                <option value="green">Verde</option>
            </select>
        </label>
        @if ($errors -> has('color'))
            <span style="color: red;">{{ $errors -> first('color') }}</span>
        @endif
        <label for="imagen_url">URL Imagen:
            <input type="text" name="imagen_url">
        </label>
        @if ($errors -> has('imagen'))
            <span style="color: red;">{{ $errors -> first('imagen') }}</span>
        @endif
        <input type="submit" value="Registrar mensaje">
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
    </form>
    <!-- Link para ver lista de mensajes -->
    <a href="{{ route('mostrar.mensajes') }}">Ver mensajes</a>
</body>
</html>