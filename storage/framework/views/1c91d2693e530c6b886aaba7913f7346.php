<div class="our-team">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our team</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our Friendly</span> Dentists Team
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to sustainability. eco-friendly
                        initiatives.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

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
    <!-- Icon Start Image Start -->
    <div class="icon-star-image">
        <img src="images/icon-star.svg" alt="">
    </div>
    <!-- Icon Start Image End -->
</div>
<?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/front/components/our-team.blade.php ENDPATH**/ ?>