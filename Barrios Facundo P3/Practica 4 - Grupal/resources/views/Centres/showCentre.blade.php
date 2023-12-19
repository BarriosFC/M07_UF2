<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo centro añadido</title>
</head>
<body>
    <h1>Información del nuevo centro</h1>
    <h2>Centro número {{ $centro['id'] }}</h2>
    <p><b>Nombre: </b>{{ $centro['name'] }}</p>
    <p><b>Dirección: </b>{{ $centro['address'] }}</p>
    <p><b>CP: </b>{{ $centro['cp'] }}</p>
    <p><b>Ciudad: </b>{{ $centro['city'] }}</p>

    <a href=" {{ route('admin') }} ">ADMIN VIEW</a>
    <a href="{{ route('centres') }}">CENTROS</a>
</body>
</html>