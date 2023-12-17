<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorat - Facundo</title>
</head>
<body>
<h1>Añadir un Profesor</h1>
    <form action=" {{ route('p_store') }} ">
        <label for="name">Nombre: </label>
        <input type="text" name="name" value="{{ $profe['name'] }}"><br/>
        <label for="surname">Apellido: </label>
        <input type="text" name="surname" value="{{ $profe['surname'] }}"><br/>
        <label for="email">Email: </label>
        <input type="text" name="email" value="{{ $profe['email'] }}"><br/>
        <button type="submit">Aceptar</button>
    </form>
    <a href=" {{ route('admin') }} ">ADMIN VIEW</a>
    <a href="{{ route('professorat') }}">Volver al listado</a>
</body>
</html>