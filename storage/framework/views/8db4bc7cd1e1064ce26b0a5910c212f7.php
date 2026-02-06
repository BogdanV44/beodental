<?php $__env->startSection('tabTitle'); ?> Our Team <?php $__env->stopSection(); ?>
<?php $__env->startSection('pageTitleFirstWord'); ?>  Our <?php $__env->stopSection(); ?>
<?php $__env->startSection('pageTitleSecondWord'); ?>  Team <?php $__env->stopSection(); ?>
<?php $__env->startSection('slug'); ?> Our Team <?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <!-- Page Team Start -->
    <div class="page-team">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $dentists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dentist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal044bed0acbeff88db7e27790ae302fa2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal044bed0acbeff88db7e27790ae302fa2 = $attributes; } ?>
<?php $component = App\View\Components\SingleTeamMember::resolve(['id' => $dentist->dentist_id,'imageName' => $dentist->image_route,'dentistName' => $dentist->full_name,'title' => $dentist->title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('single-team-member'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SingleTeamMember::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal044bed0acbeff88db7e27790ae302fa2)): ?>
<?php $attributes = $__attributesOriginal044bed0acbeff88db7e27790ae302fa2; ?>
<?php unset($__attributesOriginal044bed0acbeff88db7e27790ae302fa2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal044bed0acbeff88db7e27790ae302fa2)): ?>
<?php $component = $__componentOriginal044bed0acbeff88db7e27790ae302fa2; ?>
<?php unset($__componentOriginal044bed0acbeff88db7e27790ae302fa2); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Page Team End -->
<?php $__env->stopSection(); ?>




<?php echo $__env->make("front.layouts.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/front/pages/main/team.blade.php ENDPATH**/ ?>