
<div class="col-lg-3 col-md-6">
    <!-- Team Member Item Start -->
    <div class="team-member-item wow fadeInUp">
        <!-- Team Image Start -->
        <div class="team-image">
            <figure class="image-anime">
                <img src="<?php echo e(asset('storage/' . $imageName)); ?>" alt="team-member-image">
            </figure>

            <!-- Team Social Icon Start -->
            <div class="team-social-icon">

            </div>
            <!-- Team Social Icon End -->
        </div>
        <!-- Team Image End -->

        <!-- Team Content Start -->
        <div class="team-content">
            <a href="<?php echo e(route('our-team.show', ['id' => $id])); ?>"><h3><?php echo e($dentistName); ?></h3></a>
            <p><?php echo e($title); ?></p>
        </div>
        <!-- Team Content End -->
    </div>
    <!-- Team Member Item End -->
</div>
<?php /**PATH C:\Users\bogda\Herd\beodental\resources\views/components/single-team-member.blade.php ENDPATH**/ ?>