

<?php $__env->startSection('content'); ?>
<h1>UPDATE TODOS</h1>
 <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, []); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<form action="<?php echo e(route('todo.update', $todo->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>
    <input type="text" value="<?php echo e($todo->title); ?>" name="title" />
    <input type="submit" value="update" />
</form> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('todos.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/todos/edit.blade.php ENDPATH**/ ?>