<?php if(Session::has('odannyc.alertify.logs')): ?>
    <script>
        <?php $__currentLoopData = Session::pull('odannyc.alertify.logs'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            alertify.parent(<?php echo e($log->parent); ?>);
            alertify.delay(<?php echo e($log->delay); ?>);
            alertify.logPosition('<?php echo e($log->position); ?>');
            alertify.closeLogOnClick(<?php echo e($log->clickToClose); ?>);

            alertify.<?php echo e($log->type); ?>('<?php echo e($log->message); ?>');
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php endif; ?>
