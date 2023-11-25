<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View</title>
</head>
<body>
    <h1>BENVINGUT/DA ADMIN</h1>
    <a href=" {{ route('centres') }} ">Centros</a>
    <a href=" {{ route('alumnat') }} ">Alumnos</a>
    <a href=" {{ route('professorat') }} ">Profesores</a><br/>
    <a href=" {{ route('signin') }} ">Log Out</a>
</body>
</html>