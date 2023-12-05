<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professorat - Facundo</title>
</head>
<body>
<h1>LLISTA PROFESSORAT</h1>
    <table align="left">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>ROL</th>
            <th>EMAIL</th>
        </tr>

        <?php $__currentLoopData = $profes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sensei): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($sensei['id']); ?></td>
            <td><?php echo e($sensei['name']); ?></td>
            <td><?php echo e($sensei['surname']); ?></td>
            <td><?php echo e($sensei['rol']); ?></td>
            <td><?php echo e($sensei['email']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <a href=" <?php echo e(route('admin')); ?> ">ADMIN VIEW</a>
</body>
</html><?php /**PATH /home/facundo/Documents/daw2/m07/M07_UF2/Barrios Facundo P2/Practica 2/resources/views/professorat.blade.php ENDPATH**/ ?>