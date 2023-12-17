<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat</title>
</head>
<body>
    <h1>LLISTA ALUMNAT</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
        </tr>

        @foreach ($alumnos as $chamaco)
        <tr><!--muestra tabla de datos -->
            <td>{{ $chamaco['id'] }}</td>
            <td>{{ $chamaco['name'] }}</td>
            <td>{{ $chamaco['surname'] }}</td>
            <td>{{ $chamaco['email'] }}</td>

            <td><a href=" {{ route('editAlumnat', $chamaco['id']) }} "><button style="background-color: yellow;">Edit</button>
</a></td>
            <td>
                <form action="{{ route('deleteAlumnat', $chamaco['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <!--borra y pregunta confirmacion-->
                    <button style="background-color:#A63A2A;" type="submit" onclick="return confirm('¿Estás seguro de eliminar este alumno?')" >Delete</button>
                    

                </form>
            </td>
        </tr>
        @endforeach
    </table><br>
   
    <a href=" {{ route('createAlumnat') }} "><button style="background-color: #49F760;"> Añadir Alumno</button></a><br><!--redirige a vista del formualrio para crear alumno -->

    <br><form action="{{ route('showAlumnat')}}">
        <input type="text" name="id" ></input>
        <button type="submit" style="background-color: #6283EF;">Buscar</button><!--se ingresan la id del alumno a buscar  -->
    </form>
    <br><br><a href=" {{ route('admin') }} ">ADMIN VIEW</a><!--redirige ala vista del adminsitrador -->
</body>
</html>