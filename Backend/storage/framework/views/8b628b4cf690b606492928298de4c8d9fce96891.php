<?php
    if( !empty($data) ){
        $model = $data["model"];
    }
?>

<?php if( $model->percentage ): ?>
    <?php echo e($model->discount_price ?? $model->discount ?? ''); ?>%
<?php else: ?>
    <?php echo e(currencyFormat($model->discount_price ?? $model->discount ?? '')); ?>

<?php endif; ?>

<?php /**PATH /Users/ambrosetemidayobako/Dev/web/fuodz-admin/resources/views/components/table/coupon_discount_price.blade.php ENDPATH**/ ?>