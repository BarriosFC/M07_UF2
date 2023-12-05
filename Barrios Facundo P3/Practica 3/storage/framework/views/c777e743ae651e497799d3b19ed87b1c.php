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

        <?php $__currentLoopData = $centros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $centro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($centro['id']); ?></td>
            <td><?php echo e($centro['name']); ?></td>
            <td><?php echo e($centro['address']); ?></td>
            <td><?php echo e($centro['cp']); ?></td>
            <td><?php echo e($centro['city']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <a href=" <?php echo e(route('admin')); ?> ">ADMIN VIEW</a>
</body>
</html><?php /**PATH /home/facundo/Documents/daw2/m07/M07_UF2/Barrios Facundo P2/Practica 2/resources/views/centres.blade.php ENDPATH**/ ?>