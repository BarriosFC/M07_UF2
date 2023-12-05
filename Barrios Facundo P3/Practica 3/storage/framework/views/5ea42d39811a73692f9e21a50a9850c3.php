<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View</title>
</head>
<body>
    <h1>BENVINGUT/DA ADMIN</h1>
    <a href=" <?php echo e(route('centres')); ?> ">Centros</a>
    <a href=" <?php echo e(route('alumnat')); ?> ">Alumnos</a>
    <a href=" <?php echo e(route('professorat')); ?> ">Profesores</a><br/>
    <a href=" <?php echo e(route('signin')); ?> ">Log Out</a>
</body>
</html><?php /**PATH /home/facundo/Documents/daw2/m07/M07_UF2/Barrios Facundo P2/Practica 2/resources/views/admin.blade.php ENDPATH**/ ?>