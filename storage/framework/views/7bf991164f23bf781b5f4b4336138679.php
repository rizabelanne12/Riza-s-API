<?php $__env->startSection('title', 'Home Page'); ?>
<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-center fs-2 fw-bold">
        <?php if(auth()->guard()->check()): ?>
        <?php echo e(auth()->user()->name); ?>

        <?php endif; ?>
    </div>

    <div class="d-flex justify-content-center  .justify-content-sm-between">
        <img class="w-25 p-3" src="../../images/1.png" >
        <img class="w-25 p-3" src="../../images/3.png">
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstLaravel\custom_login\resources\views/welcome.blade.php ENDPATH**/ ?>