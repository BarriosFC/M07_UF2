<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
</head>
<body>
    <h1>{{ $v1 }} {{ $v2 }} {{ $v3 }} {{ $v4 }}</h1>
    <form action="" method="post">
        <label for="email">Email: </label>
        <input type="text" name="email"><br>

        <label for="password">Contraseña: </label>
        <input type="text" name="password"><br>

        <label for="rememberme">Recuerdame</label>
        <input type="checkbox" name="rememberme"><br>

        <input type="submit" name="send" value="Enviar">
    </form>
    <a href="/facundo/signup">Crear Usuario Nuevo</a>
</body>
</html>