<div>
    <div x-data="{ open: <?php if ((object) ('showModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showModal'->value()); ?>')<?php echo e('showModal'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showModal'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal-lg','data' => []]); ?>
<?php $component->withName('modal-lg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <p class="py-4 text-xl font-bold border-b"><?php echo e(__('Options')); ?></p>
            
            <div class="p-4 max-h-65vh products-list-view">
                <?php $__currentLoopData = $optionGroups ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="my-2 text-lg font-semibold"><?php echo e($optionGroup->name ?? ""); ?></p>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                    <?php $__currentLoopData = $optionGroup->options ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="text-center border rounded shadow cursor-pointer hover:shadow-md <?php echo e(in_array($item->id, $selectedItemIds) ? 'bg-primary-200':''); ?>" wire:click="itemSelected('<?php echo e($item->id); ?>')">
                        <div class="p-2">
                            <img src="<?php echo e($item->photo); ?>" class="w-full h-12" />
                            <div class="py-2">
                                <p class="text-sm font-semibold break-words"><?php echo e($item->name); ?></p>
                                <p class="text-sm break-words"><?php echo e(setting('cusrrency','$')); ?> <?php echo e(number_format($item->price, 2)); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <hr class="my-2" />
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.primary','data' => ['wireClick' => 'doneWithSelection','title' => ''.e(__('Done')).'']]); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wireClick' => 'doneWithSelection','title' => ''.e(__('Done')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
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

</div>
<?php /**PATH /Users/ambrosetemidayobako/Dev/web/fuodz-admin/resources/views/livewire/extensions/pos/pos-option-selection-modal.blade.php ENDPATH**/ ?>