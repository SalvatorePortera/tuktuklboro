<?php $__env->startSection('body'); ?>
<img src="https://sketchvalley.com/wp-content/uploads/2021/07/cs-details.jpg" />
<div class="my-8">
    <p class="mb-8 text-3xl font-semibold tracking-wider text-center"><?php echo e(__('You just created a new account. Congrats!')); ?></p>
    <p class="mt-1 text-lg font-light"><?php echo e(__('Welcome')); ?> <span class="font-bold"><?php echo e($vendor->name); ?></span></p>
    <p class="my-4 text-lg font-light">
        <?php echo e(__('Starting a business is no easy task, but there is no better place to start than')); ?> <?php echo e(env('APP_NAME','')); ?>. <?php echo e(__("We'll handle everything from marketing and payments to secure checkout and shipping so you can focus on what you love.")); ?>

    </p>
    <div class="my-2">
        <p>
            <?php echo e(__("Here's where you can login to")); ?> <?php echo e(env('APP_NAME','')); ?> <?php echo e(__("(be sure to bookmark this page).")); ?>

        </p>
        <p>
            <a href="<?php echo e(route('login')); ?>" class="text-blue-900 underline"><?php echo e(route('login')); ?></a>
        </p>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('view.emails.plain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ambrosetemidayobako/Dev/web/fuodz-admin/resources/views/view/emails/new_vendor.blade.php ENDPATH**/ ?>