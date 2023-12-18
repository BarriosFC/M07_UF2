<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo centro</title>
</head>
<body>
    <h1>Añade un nuevo centro</h1>
    <form method="POST" action=" {{ route('storeCentro') }} ">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Address</label><br>
            <input type="text" name="address">
        </div>
        <div>
            <label>CP</label><br>
            <input type="text" name="cp">
        </div>
        <div>
            <label>City</label><br>
            <input type="text" name="city">
        </div>
        <input type="submit" name="send" value="Enviar">
    </form>
    <a href=" {{ route('admin') }} ">ADMIN VIEW</a>
    <a href=" {{ route('centres') }} ">Centros</a>
</body>
</html>