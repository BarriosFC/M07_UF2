<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
</head>
<body>
    <h1>Inicie Sesión</h1>
    <form action=" <?php echo e(route('login')); ?> " method="post">
        <label for="email">Email: </label>
        <input type="text" name="email"><br>

        <label for="password">Contraseña: </label>
        <input type="text" name="password"><br>

        <input type="submit" name="send" value="Sign In">
        <small style="color: red;"><?php echo e($error); ?></small>
    </form>
    <a href=" <?php echo e(route('signup')); ?> ">Crear Usuario Nuevo</a>
</body>
</html><?php /**PATH /home/facundo/Documents/daw2/m07/M07_UF2/Barrios Facundo P2/Practica 2/resources/views/signin.blade.php ENDPATH**/ ?>