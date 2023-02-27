<?php $__env->startSection('main-section'); ?>

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <?php if(auth()->guard()->check()): ?>
            <div class="hs-item set-bg" data-setbg="landbootstrap/img/hero/hero-1.jpg"> 
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
                <?php else: ?>
                <div class="hs-item set-bg" data-setbg="landbootstrap/img/hero/hero-2.jpg">
            <?php endif; ?>
                <div class="container">
                    <?php if(auth()->guard()->check()): ?>
                    <div class="row">
                            <div class="col-lg-6 offset-lg-6">
                                <div class="hi-text">
                                    <span>BEST GYM CENTER</span>
                                    <h1>GROW YOUR <strong>STRENGTH WITH </strong>OUR TRAINERS</h1>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                        <?php else: ?>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-6">
                                <div class="hi-text">
                                    <span>Shape your body</span>
                                    <h1>Be <strong>strong</strong> traning hard</h1>
                                    <a href="<?php echo e(url('/login')); ?>" class="primary-btn">Sign In</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern equipment</h4>
                        <p>Our gym features the newest, cutting-edge equipment for a top-notch fitness experience.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>We offer customized nutrition plans to complement your workout and achieve your fitness goals.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Professional training plan</h4>
                        <p>Our gym offers expert training plans designed to meet your individual needs and help you reach your fitness goals.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p>We offer personalized fitness plans tailored specifically to your unique needs and goals..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- speciality Section Begin -->
    <section class="speciality-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our speciality</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="speciality-item">
                        <div class="ci-pic">
                            <img src="landbootstrap/img/classes/class-4.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Body Building</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speciality-item">
                        <div class="ci-pic">
                            <img src="landbootstrap/img/gallery/gallery-7.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speciality-item">
                        <div class="ci-pic">
                            <img src="landbootstrap/img/gallery/gallery-4.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>TRAINING</span>
                            <h5>Training with Experts</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="speciality-item">
                        <div class="ci-pic">
                            <img src="landbootstrap/img/gallery/Equipment.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <h4>High Quality Equipment</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="speciality-item">
                        <div class="ci-pic">
                            <img src="landbootstrap/img/blog/blog-5.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <h4>Proper Diet Plan</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- speciality Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <?php
                $plan=DB::table('plan')->get();
            ?>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3><?php echo e($plan->planname); ?></h3>
                        <div class="pi-price">
                            <h2>Rs <?php echo e($plan->price); ?></h2>
                            <span><?php if(
                                $plan->package==0): ?>
                                Monthly Packages
                                <?php elseif(
                                  $plan->package==1): ?>
                                  Annual Packages
                                <?php else: ?>
                                Life Time Membership
                            <?php endif; ?></span>
                        </div>
                        <ul>
                            <li>Unlimited equipments <?php if(
                                $plan->equipment==1): ?>
                                ✅
                                <?php else: ?> ❌
                            <?php endif; ?></li>
                            <li>Personal trainer <?php if(
                                $plan->trainer==1): ?>
                                ✅   
                            <?php else: ?> ❌ 
                            <?php endif; ?></li>
                            <li>Admission Fee <?php if(
                                $plan->admission==1): ?>
                                ✅
                            <?php else: ?> ❌
                            <?php endif; ?>

                            </li>
                        </ul>
                        <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(route('enrollform',$plan->id)); ?>" class="primary-btn pricing-btn" >Enroll now</a>
                        
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->


    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Gym Photos</span>
                    <h2>COLLECTIONS OF GYM PHOTOS</h2>
                </div>
            </div>
        </div>
        
        <div class="gallery">
            <?php
        $gallery=DB::table('gallery')->get();
    ?>
    <div class="gallery-section gallery-page">
        <div class="gallery">
            <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="<?php echo e(URL::to('/uploads/gallery/'.$photo->image)); ?>">
                <a href="<?php echo e(URL::to('/uploads/gallery/'.$photo->image)); ?>" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <?php
        $trainer=DB::table('trainer')->get();
    ?>
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>TRAIN WITH EXPERTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <?php $__currentLoopData = $trainer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="<?php echo e(URL::to('/uploads/trainers/'.$member->image)); ?>">
                            <div class="ts_text">
                                <h4><?php echo e($member->trainername); ?></h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/abishek/Desktop/Workspace/GymHub/resources/views/frontend/index.blade.php ENDPATH**/ ?>