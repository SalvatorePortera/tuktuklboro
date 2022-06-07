<div class="flex items-center p-4 text-lg bg-white border rounded cursor-pointer hover:shadow-md" wire:click='<?php echo e($wireClick ?? ''); ?>' >
    <div class="<?php echo e(setting('localeCode') == 'ar' ? 'ml-4':'mr-4'); ?>"> <?php echo e($slot ?? ''); ?> </div>
    <?php echo e($title); ?>

</div>
<?php /**PATH /Users/ambrosetemidayobako/Dev/web/fuodz-admin/resources/views/components/settings-item.blade.php ENDPATH**/ ?>