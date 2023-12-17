<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorat - Facundo</title>
</head>
<body>
    <?php
        if(null != $profe) {
    ?>
    <h2>Professor Nº {{ $profe['id'] }}</h2>
    <p><b>Nombre: </b>{{ $profe['name'] }}</p>
    <p><b>Apellido: </b>{{ $profe['surname'] }}</p>
    <p><b>Email: </b>{{ $profe['email'] }}</p>
    <?php
        } else {
    ?>
    <h2>Error</h2>
    <p>Profesor no encontrado</p>
    <?php
        }
    ?>
    <a href=" {{ route('admin') }} ">ADMIN VIEW</a>
    <a href="{{ route('professorat') }}">Volver al listado</a>
</body>
</html>