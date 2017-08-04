<?php $__env->startComponent('mail::message'); ?>
# Hey <?php echo e($user->name); ?>


Thank you for signing up for Blog! .

<?php $__env->startComponent('mail::button', ['url' => 'http://localhost/pro.dev/']); ?>
Start Browsing
<?php echo $__env->renderComponent(); ?>

<hr>

Yours, <?php echo e(config('app.name')); ?> <br>
<?php echo e(config('mail.from.address')); ?>

<?php echo $__env->renderComponent(); ?>
