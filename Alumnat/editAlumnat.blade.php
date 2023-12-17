<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
</head>
<body>
    <h1>Editar Alumno</h1>
    <form  action="{{ route('updateAlumnat', $alumnat['id']) }}">
        @csrf
        <div>
            <label>Nombre:</label><br>
            <input type="text" name="name" value="{{ $alumnat['name']}}">
        </div>
        <div>
            <label>Apellido:</label><br>
            <input type="text" name="surname" value="{{ $alumnat['surname'] }}">
        </div>
        <div>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ $alumnat['email']}}">
        </div>
        <button type="submit" name="send">Actualizar</button>
    </form>
    <a href="{{ route('indexAlumnat') }}">Volver</a><!-- redirige ala vista principal de lista de alumnos -->
</body>
</html>
