<div x-data="{ open: <?php if ((object) ('showAssign') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showAssign'->value()); ?>')<?php echo e('showAssign'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showAssign'); ?>')<?php endif; ?> }">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal-lg','data' => ['clickAway' => false]]); ?>
<?php $component->withName('modal-lg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['clickAway' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
        <p class="text-xl font-semibold"><?php echo e(__('Payment')); ?></p>
        <hr />
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Customer')).'','column' => 'name','model' => 'User','emitFunction' => 'autocompleteCustomerSelected','initialEmit' => 'clearSelectedCustomer','showClear' => true])->html();
} elseif ($_instance->childHasBeenRendered('GPVcDe1')) {
    $componentId = $_instance->getRenderedChildComponentId('GPVcDe1');
    $componentTag = $_instance->getRenderedChildComponentTagName('GPVcDe1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GPVcDe1');
} else {
    $response = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Customer')).'','column' => 'name','model' => 'User','emitFunction' => 'autocompleteCustomerSelected','initialEmit' => 'clearSelectedCustomer','showClear' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('GPVcDe1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-error','data' => ['message' => ''.e($errors->first('customerId')).'']]); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['message' => ''.e($errors->first('customerId')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Delivery Address')).'','column' => 'name','model' => 'DeliveryAddress','emitFunction' => 'autocompleteDeliveryAddressSelected','updateQueryClauseName' => 'addressQueryClasueUpdate','initialEmit' => 'clearSelectedDeliveryAddress','queryClause' => $addressSearchClause,'onclearCalled' => 'clearAutocompleteFieldsEvent','showClear' => true])->html();
} elseif ($_instance->childHasBeenRendered('Eqda1hL')) {
    $componentId = $_instance->getRenderedChildComponentId('Eqda1hL');
    $componentTag = $_instance->getRenderedChildComponentTagName('Eqda1hL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Eqda1hL');
} else {
    $response = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Delivery Address')).'','column' => 'name','model' => 'DeliveryAddress','emitFunction' => 'autocompleteDeliveryAddressSelected','updateQueryClauseName' => 'addressQueryClasueUpdate','initialEmit' => 'clearSelectedDeliveryAddress','queryClause' => $addressSearchClause,'onclearCalled' => 'clearAutocompleteFieldsEvent','showClear' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('Eqda1hL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-error','data' => ['message' => ''.e($errors->first('deliveryAddressId')).'']]); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['message' => ''.e($errors->first('deliveryAddressId')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <p class="text-xs">
                    <span class="text-sm text-red-500 font-semibold"><?php echo e(__("Note")); ?>: </span>
                    <?php echo e(__("When delivery address is not selected, order is set as pickup order automatically")); ?>

                </p>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.textarea','data' => ['title' => ''.e(__('Note')).'','name' => 'note','h' => 'h-16']]); ?>
<?php $component->withName('textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Note')).'','name' => 'note','h' => 'h-16']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            </div>
            <div>
                
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['title' => ''.e(__('Apply coupon code')).'','name' => 'couponCode','placeholder' => ''.e(__('Coupon Code')).'','defer' => false]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Apply coupon code')).'','name' => 'couponCode','placeholder' => ''.e(__('Coupon Code')).'','defer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if(empty($errors->first('couponCode'))): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.primary','data' => ['type' => 'button','title' => ''.e(__('APPLY')).'','wireClick' => 'applyDiscount']]); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'button','title' => ''.e(__('APPLY')).'','wireClick' => 'applyDiscount']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php endif; ?>

                
                <div class="p-4 mt-4 border rounded-sm">
                    <p class="flex"><span class="flex-auto"><?php echo e(__('Subtotal')); ?>:</span> <span class="flex-none"><?php echo e(setting('currency','$')); ?> <?php echo e(number_format($subtotal,2)); ?></span></p>
                    <p class="flex"><span class="flex-auto"><?php echo e(__('Tax')); ?>:</span> <span class="flex-none"><?php echo e(setting('currency','$')); ?> <?php echo e(number_format($tax_amount,2)); ?></span></p>
                    <p class="flex"><span class="flex-auto">
                            <?php echo e(__('Discount')); ?>:</span>
                        <span class="flex-none"><?php echo e(setting('currency','$')); ?> <?php echo e(number_format($discount,2)); ?></span>
                    </p>
                    <p class="flex"><span class="flex-auto"><?php echo e(__('Delivery Fee')); ?>:</span> <span class="flex-none"><?php echo e(setting('currency','$')); ?> <?php echo e(number_format($deliveryFee,2)); ?></span></p>
                    <hr class="my-2" />
                    <p class="flex"><span class="flex-auto"><?php echo e(__('Total')); ?>:</span> <span class="flex-none font-semibold"><?php echo e(setting('currency','$')); ?> <?php echo e(number_format($total,2)); ?></span></p>
                </div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['title' => ''.e(__('Payment Method')).'','options' => $paymentMethods,'name' => 'paymentMethodId','defer' => false]]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Method')).'','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($paymentMethods),'name' => 'paymentMethodId','defer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-error','data' => ['message' => ''.e($errors->first('paymentMethodId')).'']]); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['message' => ''.e($errors->first('paymentMethodId')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                <?php if( !empty($selectedPaymentMethod) && $selectedPaymentMethod->is_cash ): ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['title' => ''.e(__('Received Amount')).'','name' => 'received_amount','defer' => false]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Received Amount')).'','name' => 'received_amount','defer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => ['title' => ''.e(__('Change')).'']]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Change')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <p class="text-xl font-bold"><?php echo e($change ?? 0.00); ?></p>
                <?php endif; ?>

            </div>
        </div>
        <hr class="my-2" />
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.plain','data' => ['w' => 'w-full','h' => 'h-12','title' => '','wireClick' => 'processNewOrder','bgColor' => 'bg-primary-500']]); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['w' => 'w-full','h' => 'h-12','title' => '','wireClick' => 'processNewOrder','bgColor' => 'bg-primary-500']); ?>
            <p class="flex items-center justify-center mx-auto space-x-2 text-center">
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-shopping-cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <span><?php echo e(__("Process Order")); ?></span>
                <span><?php echo e(setting('currency')); ?> <?php echo e($total ?? '0.00'); ?></span>
            </p>
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
<?php /**PATH /Users/ambrosetemidayobako/Dev/web/fuodz-admin/resources/views/livewire/extensions/pos/payment-modal.blade.php ENDPATH**/ ?>