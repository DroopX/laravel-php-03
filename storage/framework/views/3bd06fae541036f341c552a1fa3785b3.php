<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
</head>
<body>
    <h1>Albums</h1>
   <table>
        <thead>
            <tr>
                <td>Titulo</td>
                <td>Ano</td>
                <td>Duracao</td>
        </tr>
        </thead>
        <tbody>
        <?php if(!empty($albums)): ?>
            <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($album['nome']); ?></td>
                    <td><?php echo e($album['ano']); ?></td>
                    <td><?php echo e($album['duracao']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </tbody>
   </table>
</body>
</html>
<?php /**PATH C:\Users\gabriel\codigos\laravel02\laravel-php\resources\views/album.blade.php ENDPATH**/ ?>