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
            <th>EMAIL</th>
            <th>Acciones</th>
        </tr>

        @foreach ($profes as $sensei)
        <tr>
            <td>{{ $sensei['id'] }}</td>
            <td>{{ $sensei['name'] }}</td>
            <td>{{ $sensei['surname'] }}</td>
            <td>{{ $sensei['email'] }}</td>
            <td>
                <a href="{{ route('p_edit', $sensei['id']) }}">Editar</a>
                <a href="{{ route('p_destroy', $sensei['id']) }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
    <a href=" {{ route('admin') }} ">Admin View</a>
    <a href=" {{ route('p_create') }} ">Añadir un Profesor</a><br/>
    <form action=" {{ route('p_show_by_id') }} ">
        <input type="text" name="id" placeholder="Buscar un profesor por ID...">
        <button type="submit">Buscar</button>
    </form>
    
</body>
</html>