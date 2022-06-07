<table class="w-full border rounded">
    <thead>
        <tr class="font-medium bg-gray-200 ">
            <th class="p-2"><?php echo e(__('Service')); ?></th>
            <th class="p-2"><?php echo e(__('Price')); ?></th>
            <th class="p-2"><?php echo e(__($order->order_service->service->duration ?? 'Fixed')); ?></th>
        </tr>
    </thead>
    <tbody>

        <?php if(!empty($order)): ?>
            <tr class="font-light border-b ">
                <td class="p-2"><?php echo e($order->order_service->service->name ?? ''); ?></td>
                <td class="p-2"><?php echo e(currencyFormat($order->order_service->price ?? '')); ?></td>
                <td class="p-2"><?php echo e($order->order_service->hours ?? ''); ?></td>
            </tr>
        <?php endif; ?>

    </tbody>
</table>
<?php /**PATH /Users/ambrosetemidayobako/Dev/web/fuodz-admin/resources/views/components/order/service.blade.php ENDPATH**/ ?>