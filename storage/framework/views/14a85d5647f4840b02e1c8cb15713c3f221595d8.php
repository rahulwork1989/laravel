<?php if($todo->completed): ?>
<span><a onclick="document.getElementById('form-incomplete-<?php echo e($todo->id); ?>').submit()"> 
    <i style="color:#000;" class="fa fa-check" aria-hidden="true"></i>
<form id="form-incomplete-<?php echo e($todo->id); ?>" style="display:none;" 
    action="<?php echo e(route('todo.incomplete',$todo->id)); ?>" method="POST"> 
<?php echo csrf_field(); ?>
<?php echo method_field('delete'); ?>
</form>
</a></span>
<span class="fa fa-trash"><i class="fa fa-trash" aria-hidden="true"></i>
</span>
<?php else: ?>
<span><a onclick="document.getElementById('form-complete-<?php echo e($todo->id); ?>').submit()"> 
    <i style="color:#ccc;" class="fa fa-check" aria-hidden="true"></i>
<form id="form-complete-<?php echo e($todo->id); ?>" style="display:none;" 
    action="<?php echo e(route('todo.complete',$todo->id)); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('put'); ?>
</form>
</a></span> 
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/todos/completeButton.blade.php ENDPATH**/ ?>