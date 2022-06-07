
<div wire:loading wire:target="<?php echo e($targets ?? ''); ?>" class="fixed top-0 bottom-0 left-0 z-50 w-full h-full ">
    <div class="fixed top-0 bottom-0 left-0 w-full h-full bg-black opacity-75"></div>
    <div class="fixed top-0 bottom-0 left-0 flex items-center justify-center w-full h-full">
        <img src="<?php echo e(asset('images/loading.svg')); ?>" class="" />
    </div>
</div>

<div wire:loading>
    <div class="gooey">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<?php /**PATH /Users/ambrosetemidayobako/Dev/web/fuodz-admin/resources/views/livewire/extensions/pos/loading.blade.php ENDPATH**/ ?>