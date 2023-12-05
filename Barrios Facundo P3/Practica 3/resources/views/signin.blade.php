<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
</head>
<body>
    <h1>Inicie Sesión</h1>
    <form action=" {{ route('login') }} " method="post">
        <label for="email">Email: </label>
        <input type="text" name="email"><br>

        <label for="password">Contraseña: </label>
        <input type="text" name="password"><br>

        <input type="submit" name="send" value="Sign In">
        <small style="color: red;">{{ $error }}</small>
    </form>
    <a href=" {{ route('signup') }} ">Crear Usuario Nuevo</a>
</body>
</html>