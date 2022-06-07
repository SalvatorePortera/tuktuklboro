<?php $__env->startSection('title', __('Wallet Topup Payment')); ?>
    <div class="">
        <div class="w-11/12 p-12 mx-auto mt-20 text-center border rounded shadow md:w-6/12 lg:w-4/12">
            <?php if($error): ?>
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-emoji-sad'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mx-auto text-red-500 md:h-24 md:w-24']); ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <p class="text-xl font-medium text-center"><?php echo e(__('Payment Failed')); ?></p>
                <p><?php echo e($errorMessage); ?></p>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-emoji-happy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mx-auto text-green-500 md:h-24 md:w-24']); ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <p class="text-xl font-medium text-center"><?php echo e(__('Payment Successful')); ?></p>
                <p><?php echo e(__('Wallet Topup Payment was successful')); ?></p>
            <?php endif; ?>

        </div>

        
        <p class="w-full p-4 text-sm text-center text-gray-500"><?php echo e(__('You may close this window')); ?></p>
    </div>
<?php /**PATH /Users/ambrosetemidayobako/Dev/web/fuodz-admin/resources/views/livewire/payment/wallet_callback.blade.php ENDPATH**/ ?>