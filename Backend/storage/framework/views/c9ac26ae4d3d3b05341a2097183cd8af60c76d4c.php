<?php $__env->startSection('title', __('POS') ); ?>
<div wire:init="loadData">

    
    <?php echo $__env->make('livewire.extensions.pos.lg-pos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('livewire.extensions.pos.sm-pos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <div x-data="{ open: <?php if ((object) ('showCreate') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showCreate'->value()); ?>')<?php echo e('showCreate'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showCreate'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => []]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <p class="py-2 mb-2 text-xl font-semibold border-b"><?php echo e(__('Held Orders')); ?></p>
            <?php $__currentLoopData = $heldTransactions ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $heldTransaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex items-center p-2 mb-2 border rounded shadow-sm cursor-pointer hover:shadow">
                <div class="w-full" wire:click="loadHeldTransaction('<?php echo e($key); ?>')">
                    <div class="text-lg font-semibold">
                        <?php echo e(\Carbon\Carbon::parse($heldTransaction["date"] ?? now() )->format("y-m-d h:i a")); ?>

                    </div>
                    <div class="text-sm"><?php echo e(__('Products')); ?>: <?php echo e(count($heldTransaction["items"] ?? [])); ?></div>
                </div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.plain','data' => ['wireClick' => 'deleteHeldTransaction(\''.e($key).'\')','bgColor' => 'bg-red-500']]); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wireClick' => 'deleteHeldTransaction(\''.e($key).'\')','bgColor' => 'bg-red-500']); ?>
                    <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>
    
    <?php echo $__env->make('livewire.extensions.pos.payment-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('livewire.extensions.pos.setting-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('livewire.extensions.pos.loading',[
    "targets" => "savePOSSettings,processNewOrder,applyDiscount"
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('extensions.pos.pos-vendor-selection-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('N1oUqHZ')) {
    $componentId = $_instance->getRenderedChildComponentId('N1oUqHZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('N1oUqHZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('N1oUqHZ');
} else {
    $response = \Livewire\Livewire::mount('extensions.pos.pos-vendor-selection-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('N1oUqHZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('extensions.pos.pos-category-selection-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('cnAjK2a')) {
    $componentId = $_instance->getRenderedChildComponentId('cnAjK2a');
    $componentTag = $_instance->getRenderedChildComponentTagName('cnAjK2a');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cnAjK2a');
} else {
    $response = \Livewire\Livewire::mount('extensions.pos.pos-category-selection-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('cnAjK2a', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('extensions.pos.pos-menu-selection-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('N0FHrlz')) {
    $componentId = $_instance->getRenderedChildComponentId('N0FHrlz');
    $componentTag = $_instance->getRenderedChildComponentTagName('N0FHrlz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('N0FHrlz');
} else {
    $response = \Livewire\Livewire::mount('extensions.pos.pos-menu-selection-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('N0FHrlz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('extensions.pos.pos-option-selection-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('BzBrfcl')) {
    $componentId = $_instance->getRenderedChildComponentId('BzBrfcl');
    $componentTag = $_instance->getRenderedChildComponentTagName('BzBrfcl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BzBrfcl');
} else {
    $response = \Livewire\Livewire::mount('extensions.pos.pos-option-selection-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('BzBrfcl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
    <?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/extensions/pos/pos-extension.js')); ?>"></script>
    <script src="<?php echo e(asset('js/extensions/pos/pos-print.js')); ?>"></script>
    <?php $__env->stopPush(); ?>

</div>
<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('css/extensions/pos-extension.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php /**PATH /Users/ambrosetemidayobako/Dev/web/fuodz-admin/resources/views/livewire/extensions/pos/index.blade.php ENDPATH**/ ?>