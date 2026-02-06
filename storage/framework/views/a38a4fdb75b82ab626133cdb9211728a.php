<?php $__env->startSection('tabTitle'); ?> <?php echo e($dentist->full_name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('pageTitleSecondWord'); ?> <?php echo e($dentist->full_name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('slug'); ?> Our Team <li class="breadcrumb-item active" aria-current="page"><?php echo e($dentist->full_name); ?></li>  <?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <!-- Team Details Section Start -->
    <div class="page-team-single">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <!-- team member image start -->
                    <div class="team-member-image">
                        <figure class="image-anime">
                            <img src="<?php echo e(asset('storage/' . $dentist->image_route)); ?>" alt="">
                        </figure>
                    </div>
                    <!-- team member image end -->
                </div>
                <div class="col-lg-7">
                    <!-- team member details start -->
                    <div class="team-member-details">
                        <div class="member-detail-header">
                            <h2 class="text-anime-style-2"><?php echo e($dentist->full_name); ?></h2>
                            <p class="wow fadeInUp"><?php echo e($dentist->title); ?></p>
                        </div>
                        <div class="member-detail-content">
                            <p class="wow fadeInUp" data-wow-delay="0.25s"><?php echo e($dentist->short_description); ?></p>
                        </div>

                        <div class="member-detail-body wow fadeInUp" data-wow-delay="0.5s">
                            <?php if(strlen($dentist->email)): ?>
                                <ul>
                                    <li><span>Email</span><?php echo e($dentist->email); ?></li>
                                </ul>
                            <?php endif; ?>
                        </div>









                    </div>
                    <!-- team member details end -->
                </div>
            </div>
        </div>
    </div>
    <!--Team Details Section End -->

    <!-- About Member Details Start -->
    <div class="about-member-details">
        <div class="container">
            <div class="row justify-content-center">
                <?php if($dentist->biography != null): ?>
                    <div class="col-lg-6">
                        <!-- About Member Info Start -->
                        <div class="about-member-info">
                            <div class="member-info-title">
                                <h2 class="wow fadeInUp">personal info</h2>
                            </div>
                            <div class="member-info-content">
                                <p class="wow fadeInUp" data-wow-delay="0.25s"><?php echo e($dentist->biography); ?></p>
                            </div>
                        </div>
                        <!-- About Member Info End -->
                    </div>
                <?php endif; ?>

                <div class="col-lg-6">

                    <!-- Team Sidebar Cta Box Start -->
                    <div class="team-sidebar-cta wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Cta Content Start -->
                        <div class="cta-info-content">
                            <div class="icon-box">
                                <img src="<?php echo e(asset('images/icon-cta.svg')); ?>" alt="">
                            </div>

                            <div class="cta-content">
                                <h3>ready to start your journey to recovery?</h3>
                                <p>Schedule your initial consultation today and start your journey towards a pain-free healthier smile Contact us now!</p>

                                <!-- Cta Appointment Button Start -->
                                <div class="cta-appointment-btn">
                                    <a href="<?php echo e(route('appointment')); ?>" class="btn-default">book appointment</a>
                                </div>
                                <!-- Cta Appointment Button End -->
                            </div>
                        </div>
                        <!-- Cta Content End -->
                    </div>
                    <!-- Team Sidebar Cta Box End -->
                </div>

                <?php if(strlen($dentist->additional_description)): ?>
                    <div class="col-lg-8 mx-auto">
                        <!-- About Member Info Start -->
                        <div class="about-member-info">
                            <div class="member-info-title">
                                <h2 class="wow fadeInUp">Additional info</h2>
                            </div>
                            <div class="member-info-content">
                                <p class="wow fadeInUp" data-wow-delay="0.25s"><?php echo e($dentist->additional_description); ?></p>
                            </div>
                        </div>
                        <!-- About Member Info End -->
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- About Member Details End -->
<?php $__env->stopSection(); ?>



<?php echo $__env->make("front.layouts.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/front/pages/main/team-single.blade.php ENDPATH**/ ?>