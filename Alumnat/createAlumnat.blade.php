<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <!--formualrio apra crear alumno  -->
    <h1>Añadir Alumno</h1>
    <form method="POST" action="{{ route('storeAlumnat') }}">
        @csrf
        <div>
            <label>Nombre:</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Apellido:</label><br>
            <input type="text" name="surname">
        </div>
        <div>
            <label>Contraseña:</label><br>
            <input type="password" name="password">
        </div>
        <div>
            <label>Email:</label><br>
            <input type="email" name="email">
        </div>
        <div>
            <label>Activo:</label><br>
            <select name="active">
                <option value="1">Si</option>
                <option value="0">No</option>
            </select>
        </div>
        <input type="submit" name="send" value="Enviar">
    </form>
    <a href="{{ route('indexAlumnat') }}">Volver</a>
</body>
</html>
