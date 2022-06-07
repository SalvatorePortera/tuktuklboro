<?php $__env->startSection('title', __('Settings')); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.baseview','data' => ['title' => ''.e(__('Settings')).'']]); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Settings')).'']); ?>


        
        <?php if($this->showNotification): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.notification', [])->html();
} elseif ($_instance->childHasBeenRendered('w68I5l0')) {
    $componentId = $_instance->getRenderedChildComponentId('w68I5l0');
    $componentTag = $_instance->getRenderedChildComponentTagName('w68I5l0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('w68I5l0');
} else {
    $response = \Livewire\Livewire::mount('settings.notification', []);
    $html = $response->html();
    $_instance->logRenderedChild('w68I5l0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php elseif($this->showApp): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.web-app-settings', [])->html();
} elseif ($_instance->childHasBeenRendered('N5jf1XY')) {
    $componentId = $_instance->getRenderedChildComponentId('N5jf1XY');
    $componentTag = $_instance->getRenderedChildComponentTagName('N5jf1XY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('N5jf1XY');
} else {
    $response = \Livewire\Livewire::mount('settings.web-app-settings', []);
    $html = $response->html();
    $_instance->logRenderedChild('N5jf1XY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php elseif($this->showPrivacy): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.privacy-policy', [])->html();
} elseif ($_instance->childHasBeenRendered('P6zOOUL')) {
    $componentId = $_instance->getRenderedChildComponentId('P6zOOUL');
    $componentTag = $_instance->getRenderedChildComponentTagName('P6zOOUL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('P6zOOUL');
} else {
    $response = \Livewire\Livewire::mount('settings.privacy-policy', []);
    $html = $response->html();
    $_instance->logRenderedChild('P6zOOUL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php elseif($this->showContact): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.contact', [])->html();
} elseif ($_instance->childHasBeenRendered('IPaxAxs')) {
    $componentId = $_instance->getRenderedChildComponentId('IPaxAxs');
    $componentTag = $_instance->getRenderedChildComponentTagName('IPaxAxs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IPaxAxs');
} else {
    $response = \Livewire\Livewire::mount('settings.contact', []);
    $html = $response->html();
    $_instance->logRenderedChild('IPaxAxs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php elseif($this->showTerms): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.terms', [])->html();
} elseif ($_instance->childHasBeenRendered('bYagK4u')) {
    $componentId = $_instance->getRenderedChildComponentId('bYagK4u');
    $componentTag = $_instance->getRenderedChildComponentTagName('bYagK4u');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bYagK4u');
} else {
    $response = \Livewire\Livewire::mount('settings.terms', []);
    $html = $response->html();
    $_instance->logRenderedChild('bYagK4u', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php elseif($this->showPageSetting): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.page', [])->html();
} elseif ($_instance->childHasBeenRendered('yInBTE9')) {
    $componentId = $_instance->getRenderedChildComponentId('yInBTE9');
    $componentTag = $_instance->getRenderedChildComponentTagName('yInBTE9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yInBTE9');
} else {
    $response = \Livewire\Livewire::mount('settings.page', []);
    $html = $response->html();
    $_instance->logRenderedChild('yInBTE9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php elseif($this->showCustomNotificationMessage): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.custom-notification-message', [])->html();
} elseif ($_instance->childHasBeenRendered('Vnjq7Vu')) {
    $componentId = $_instance->getRenderedChildComponentId('Vnjq7Vu');
    $componentTag = $_instance->getRenderedChildComponentTagName('Vnjq7Vu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Vnjq7Vu');
} else {
    $response = \Livewire\Livewire::mount('settings.custom-notification-message', []);
    $html = $response->html();
    $_instance->logRenderedChild('Vnjq7Vu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php else: ?>
        <?php echo $__env->make('livewire.settings.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

</div>
<?php /**PATH /Users/ambrosetemidayobako/Dev/web/fuodz-admin/resources/views/livewire/settings/index.blade.php ENDPATH**/ ?>