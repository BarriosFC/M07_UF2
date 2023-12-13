<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat - Facundo</title>
</head>
<body>
    <h1>LLISTA ALUMNAT</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>ROL</th>
            <th>EMAIL</th>
        </tr>

        @foreach ($alumnos as $chamaco)
        <tr>
            <td>{{ $chamaco['id'] }}</td>
            <td>{{ $chamaco['name'] }}</td>
            <td>{{ $chamaco['surname'] }}</td>
            <td>{{ $chamaco['rol'] }}</td>
            <td>{{ $chamaco['email'] }}</td>
        </tr>
        @endforeach
    </table>
    <a href=" {{ route('admin') }} ">ADMIN VIEW</a>
</body>
</html>