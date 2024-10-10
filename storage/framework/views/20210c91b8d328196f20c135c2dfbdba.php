<div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <a href="<?php echo e(route('projects.show', $project)); ?>" >
            <?php echo e($project->id); ?>. <?php echo e($project->title); ?>

        </a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\Users\Pichau\Desktop\Codigos\freelance-hours\resources\views/livewire/projects/index.blade.php ENDPATH**/ ?>