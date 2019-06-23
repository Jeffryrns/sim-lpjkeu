<?php $__env->startSection('title', 'Page Expired'); ?>

<?php $__env->startSection('message'); ?>
    The page has expired due to inactivity.
    <br/><br/>
    Please refresh and try again.
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>