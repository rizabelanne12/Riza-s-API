
<?php $__env->startSection('title','Forget Password'); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <div class="ms-auto me-auto mt-5" style="width:500px;">
           <div class="mt-5">
            <?php if($errors->any()): ?>
                <div class="col-12">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <div class="alert alert-danger">
                          <?php echo e($error); ?>

                       </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <?php if(session()->has('sucess')): ?>
                <div class="alert alert-sucess">
                    <?php echo e(session('sucess')); ?>

                </div>
            <?php endif; ?> 
        </div>
           <p>We will send a link to your email to reset your password. Thank you!</p>
            <form action="<?php echo e(route('forgert-password.post')); ?>" method="POST" >
                <?php echo csrf_field(); ?> 
            <!-- email -->
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstLaravel\custom_login\resources\views/forget-password.blade.php ENDPATH**/ ?>