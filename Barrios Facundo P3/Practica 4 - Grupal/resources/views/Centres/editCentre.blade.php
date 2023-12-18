<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar centre</title>
</head>
<body>
    <h1>Editar centre</h1>
    <form action="{{ route('updateCentre', $centre['id']) }}">
        <div>
            <label>Name</label><br>
            <input type="text" name="name" value="{{ $centre['name']}}">
        </div>
        <div>
            <label>Address</label><br>
            <input type="text" name="address" value="{{ $centre['address'] }}">
        </div>
        <div>
            <label>CP</label><br>
            <input type="text" name="cp" value="{{ $centre['cp']}}">
        </div>
        <div>
            <label>City</label><br>
            <input type="text" name="city" value="{{ $centre['city']}}">
        </div>
        <button type="submit" name="send">Actualitzar</button>
    </form>
    <a href=" {{ route('admin') }} ">ADMIN VIEW</a>
    <a href="{{ route('indexCentres') }}">Volver atrás</a>
</body>
</html>
