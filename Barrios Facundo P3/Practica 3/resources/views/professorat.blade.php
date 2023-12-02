<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorat - Facundo</title>
</head>
<body>
<h1>LLISTA PROFESSORAT</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>ROL</th>
            <th>EMAIL</th>
        </tr>

        @foreach ($profes as $sensei)
        <tr>
            <td>{{ $sensei['id'] }}</td>
            <td>{{ $sensei['name'] }}</td>
            <td>{{ $sensei['surname'] }}</td>
            <td>{{ $sensei['rol'] }}</td>
            <td>{{ $sensei['email'] }}</td>
        </tr>
        @endforeach
    </table>
    <a href=" {{ route('admin') }} ">ADMIN VIEW</a>
</body>
</html>