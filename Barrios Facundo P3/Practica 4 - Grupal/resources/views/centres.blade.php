<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres - Facundo</title>
</head>
<body>
    <h1>LLISTA CENTRES</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>CP</th>
            <th>CITY</th>
        </tr>

        @foreach ($centros as $centro)
        <tr>
            <td>{{ $centro['id'] }}</td>
            <td>{{ $centro['name'] }}</td>
            <td>{{ $centro['address'] }}</td>
            <td>{{ $centro['cp'] }}</td>
            <td>{{ $centro['city'] }}</td>
            <td><a href=" {{ route('admin') }} ">Delete</a></td>
            <td><a href=" {{ route('admin') }} ">Edit</a></td>

        </tr>
        @endforeach
    </table>

    <a href=" {{ route('admin') }} ">ADMIN VIEW</a>
    <a href=" {{ route('admin') }} ">Añadir centro</a>

</body>
</html>