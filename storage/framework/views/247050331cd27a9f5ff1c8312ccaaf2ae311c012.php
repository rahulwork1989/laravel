<?php if(session()->has('message')): ?>
<div class="alert alert-success"><?php echo e(session()->get('message')); ?></div>
<?php elseif(session()->has('errormessage')): ?>
<div class="alert alert-danger"><?php echo e(session()->get('errormessage')); ?></div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/layouts/flash.blade.php ENDPATH**/ ?>