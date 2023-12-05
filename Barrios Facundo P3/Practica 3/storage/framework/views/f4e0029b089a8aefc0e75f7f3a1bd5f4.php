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

        <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chamaco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($chamaco['id']); ?></td>
            <td><?php echo e($chamaco['name']); ?></td>
            <td><?php echo e($chamaco['surname']); ?></td>
            <td><?php echo e($chamaco['rol']); ?></td>
            <td><?php echo e($chamaco['email']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <a href=" <?php echo e(route('admin')); ?> ">ADMIN VIEW</a>
</body>
</html><?php /**PATH /home/facundo/Documents/daw2/m07/M07_UF2/Barrios Facundo P2/Practica 2/resources/views/alumnat.blade.php ENDPATH**/ ?>