<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar centre</title>
</head>
<body>
    <h1>Editar centre</h1>
    <form action="{{ route('updateCentre', $centro['id']) }}">
        <div>
            <label>Name</label><br>
            <input type="text" name="name" value="{{ $centro['name']}}">
        </div>
        <div>
            <label>Address</label><br>
            <input type="text" name="address" value="{{ $centro['address'] }}">
        </div>
        <div>
            <label>CP</label><br>
            <input type="text" name="cp" value="{{ $centro['cp']}}">
        </div>
        <div>
            <label>City</label><br>
            <input type="text" name="city" value="{{ $centro['city']}}">
        </div>
        <button type="submit" name="send">Actualitzar</button>
    </form>
    <a href=" {{ route('admin') }} ">ADMIN VIEW</a>
    <a href="{{ route('centres') }}">Volver atrás</a>
</body>
</html>
