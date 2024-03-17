<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Story</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <?php if(auth()->guard()->check()): ?>
        <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>
        <?php else: ?>
        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
        <a class="nav-link" href="<?php echo e(route('registration')); ?>">Registration</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav><?php /**PATH C:\xampp\htdocs\FirstLaravel\custom_login\resources\views/include/header.blade.php ENDPATH**/ ?>