<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo centro añadido</title>
</head>
<body>
    <h1>Información del nuevo centro</h1>
    <table>
    @foreach ($centro as $centro)
        <tr>
            <td>{{ $centro['id'] }}</td>
            <td>{{ $centro['name'] }}</td>
            <td>{{ $centro['address'] }}</td>
            <td>{{ $centro['cp'] }}</td>
            <td>{{ $centro['city'] }}</td>
        </tr>
        @endforeach
    </table> 

    <a href=" {{ route('admin') }} ">ADMIN VIEW</a>
    <a href="{{ route('centres') }}">CENTROS</a>
</body>
</html>