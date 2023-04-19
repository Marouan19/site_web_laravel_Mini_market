<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADMIN_SHOP</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('css/style.css')); ?>">

</head>

<body class="antialiased">
    <div>
        <nav>
          
            <a href="<?php echo e(route('informatic.index')); ?>">Informatique</a>
            <a href="<?php echo e(route('sport.index')); ?>">Sport&loisir</a>
            <a href="<?php echo e(route('marche.index')); ?>">Super marchee</a>
           
        </nav>
    </div>
    <?php echo $__env->yieldContent('content'); ?>

</body>

</html><?php /**PATH /Users/marouandgh/Documents/shoponline/shoponline/resources/views/layout.blade.php ENDPATH**/ ?>