<?php $__env->startSection('tabTitle'); ?> Contact <?php $__env->stopSection(); ?>
<?php $__env->startSection('pageTitleFirstWord'); ?>  Contact <?php $__env->stopSection(); ?>
<?php $__env->startSection('pageTitleSecondWord'); ?>  Us <?php $__env->stopSection(); ?>
<?php $__env->startSection('slug'); ?> Contact Us <?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <!-- Page Contact Start -->
    <div class="page-contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact info</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Connecting</span> Near & Far </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">For emergency dental care or to schedule an appointment contact our office or visit our clinic.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact US Info Start -->
                        <div class="contact-us-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="<?php echo e(asset('images/icon-location.svg')); ?>" alt="location-icon">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>visit us on</h3>
                                            <p>24/11 Robert Road , New York , USA</p>
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.25s">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="<?php echo e(asset('images/icon-phone.svg')); ?>" alt="phone-icon">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>contact us</h3>
                                            <p>+(123) 698-5245</p>
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.5s">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="<?php echo e(asset('images/icon-clock.svg')); ?>" alt="clock-icon">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>working hours</h3>
                                            <p>Mon-Fri : 12:00AM To 8:00PM</p>
                                            <p>Sat-Sun : Closed</p>
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>

                                <div class="col-md-6">
                                    <!-- Contact US Item Start -->
                                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.75s">
                                        <!-- Icon Box Start -->
                                        <div class="icon-box">
                                            <img src="<?php echo e(asset('images/icon-mail.svg')); ?>" alt="mail-icon">
                                        </div>
                                        <!-- Icon Box End -->

                                        <!-- Contact Us Content Start -->
                                        <div class="contact-info-content">
                                            <h3>email us</h3>
                                            <p>reception@beodental.com</p>
                                        </div>
                                        <!-- Contact Us Content End -->
                                    </div>
                                    <!-- Contact Us Item End -->
                                </div>
                            </div>
                        </div>
                        <!-- Contact US Info End -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Google Map Start -->
                    <div class="google-map">
                        <!-- Google Map Iframe Start -->
                        <div class="google-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map Iframe End -->
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/front/pages/main/contact.blade.php ENDPATH**/ ?>