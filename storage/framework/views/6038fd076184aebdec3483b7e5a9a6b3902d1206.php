

<?php $__env->startSection('content'); ?>
<h1>All Todos</h1>
<a href="/todos/create">Create New</a>
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
<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
<?php if($todo->completed): ?>
<span style="text-decoration:line-through;">
<?php else: ?>
<span>
<?php endif; ?>
    <?php echo e($todo->title); ?> 
</span>    

<span><a href="<?php echo e('/todos/'.$todo->id.'/edit'); ?>">Edit</a></span>
<?php echo $__env->make('todos.completeButton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<span><a onclick="document.getElementById('form-delete-<?php echo e($todo->id); ?>').submit()"> 
    <i class="fa fa-trash-o" aria-hidden="true"></i>

    <form id="form-delete-<?php echo e($todo->id); ?>" style="display:none;" 
        action="<?php echo e(route('todo.delete',$todo->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
    </form>
    </a></span> 
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('todos.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/todos/index.blade.php ENDPATH**/ ?>