
<?php $__env->startSection('content'); ?>

<body>
    <div class="container-show">
        <div class="imag-cont">
            <img src="/images/<?php echo e($product['photo']); ?>" alt="">
        </div>
        <div class="info-container">
            <div>
                <span>Nome de produit : </span> <?php echo e($product['product_name']); ?>

            </div>
            <div>
                <span>prix : </span> <?php echo e($product['price']); ?> <span> <strong>MAD </strong> </span>
            </div>

            <div>
                <span> description : </span> <?php echo e($product['product_description']); ?>

            </div>
            <div>
                <a class="btn-edit" href="<?php echo e(route('marche.edit',$product->id)); ?>">Modifier le poste</a>
                <form action="<?php echo e(route('marche.destroy',$product->id)); ?>" class="del-form" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input class="delete-btn" type="submit" value="Supprimer le poste">
                </form>


            </div>
        </div>

    </div>




</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zakariae chelle\shoponline\resources\views/marche/show.blade.php ENDPATH**/ ?>