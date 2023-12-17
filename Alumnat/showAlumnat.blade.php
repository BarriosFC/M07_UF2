<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Alumno</title>
</head>
<body><!-- muestar los datos del alumno sque cncide con la id que se ha ingresado -->
    <h1>Detalles del Alumno</h1>

    <p><strong>Nombre:</strong> {{ $alumnat->name }}</p>
    <p><strong>Apellido:</strong> {{ $alumnat->surname }}</p>
    <p><strong>Email:</strong> {{ $alumnat->email }}</p>

    <a href="{{ route('indexAlumnat') }}">Volver al listado</a>
</body>
</html>
