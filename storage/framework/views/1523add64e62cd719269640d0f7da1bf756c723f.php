<div>
<?php if(session()->has('message')): ?>
<div class="alert alert-success"><?php echo e(session()->get('message')); ?></div>
<?php elseif(session()->has('errormessage')): ?>
<div class="alert alert-danger"><?php echo e(session()->get('errormessage')); ?></div>
<?php endif; ?>



<?php if($errors->any()): ?>
    <div class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($error); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\laravel\resources\views/components/alert.blade.php ENDPATH**/ ?>