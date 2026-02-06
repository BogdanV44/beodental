<?php $__env->startSection('tabTitle'); ?>
    Booking
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pageTitleFirstWord'); ?>
    Make An
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pageTitleSecondWord'); ?>
    Appointment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('slug'); ?>
    Make An Appointment
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <!-- Page Appointment Start -->
    <div class="page-book-appointment">
        <div class="container">
            <div class="book-appointment-form">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">booking</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Book</span> Appointment</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        <?php if(!Auth::check()): ?>
                            <div class="text-center">
                                <p>To book an appointment please log in.</p>
                                <a href="<?php echo e(route('login', ['fromAppointment' => 1])); ?>">Login</a>
                            </div>
                        <?php else: ?>
                            <div class="appointment-form wow fadeInUp">
                                <!-- Form Start -->
                                <form id="appointmentBookingForm" action="<?php echo e(route('appointment.store')); ?>" method="POST"
                                      enctype="multipart/form-data" data-toggle="validator">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="form-group col-md-12 mb-4">
                                            <select name="services" class="form-control form-select" id="services"
                                                    required>
                                                <option value="" disabled selected>select service</option>
                                                <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($service->service_id); ?>"><?php echo e($service->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <select name="dentists" id="dentists" class="form-control form-select"
                                                    required>
                                                <option value="" disabled selected>choose dentist</option>
                                                <?php $__currentLoopData = $data['dentists']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dentist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($dentist->dentist_id); ?>"><?php echo e($dentist->first_name); ?> <?php echo e($dentist->last_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-12 mb-3">
                                            <select name="dates" id="dates" class="form-control form-select">
                                                
                                                
                                                
                                                
                                            </select>
                                            <p class="mt-1 mb-0 text-start" style="margin-left: 20px">Do you have a
                                                specific date in mind? You can <a href="<?php echo e(route('contact')); ?>">contact
                                                    us</a>.</p>
                                        </div>

                                        <div class="form-group col-md-12 mb-5">
                                            <select name="appointment_hours" id="appointment_hours"
                                                    class="form-control form-select">
                                                
                                                
                                                
                                                
                                            </select>

                                        </div>

                                        
                                        
                                        
                                        

                                        <?php if(Auth::user()->fk_role_id > 2): ?>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn-default">book appointment</button>
                                                <div id="msgSubmit" class="h3 hidden"></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="col-md-12">
                                                <p>Booking through client form isn't available for administrator
                                                    accounts. Please switch to <a href="<?php echo e(url('/admin')); ?>">Admin</a>
                                                    panel.</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </form>
                                <!-- Form End -->
                                <div class="row justify-content-center mb-5">
                                    <div class="col-xl-10 col-lg-10 col-sm-10 wow fadeInUp">
                                        <?php if($errors->any()): ?>
                                            <div class="alert alert-danger mt-3">
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <p class="mb-0"><?php echo e($error); ?></p>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php elseif(session('success')): ?>
                                            <div class="alert alert-success mt-3">
                                                <p class="mb-0"><?php echo e(session('success')); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Appointment End -->

    <!-- Section Why Choose Us  -->
    <?php echo $__env->make('front.partials.why-choose-us', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>;

    <!-- Section Testimonials  -->
    <?php echo $__env->make('front.partials.testimonials', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/pages/appointments.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front.layouts.layout", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/front/pages/main/appointment.blade.php ENDPATH**/ ?>