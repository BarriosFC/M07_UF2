<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <h1>Regístrese</h1>
    <form method="POST" action="">
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
            <input type="text" name="password">
        </div>
        <div>
            <label>Email:</label><br>
            <input type="text" name="email">
        </div>
        <div>
            <label>Rol:</label><br>
            <select name="rol">
                <option value="alumnat">alumnat</option>
                <option value="professorat">professorat</option>
            </select>
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
    <a href=" {{ route('signin') }} ">Log In</a>
</body>
</html>