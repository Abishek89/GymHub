<?php $__env->startSection('main-section'); ?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="landbootstrap/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Get Quality products</h2>
                        <div class="bt-option">
                            <a href="<?php echo e(url('/')); ?>">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <?php
        $products=DB::table('products')->get();
    ?>
    <section class="shop-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>OUR PRODUCTS</span>
                        <h2>QUALITY GYM SUPPLEMENTS FOR GYM RAT</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="<?php echo e(URL::to('/uploads/products/'.$products->image)); ?>">
                        <div class="ts_text">
                            <h4><a href="<?php echo e(route('shopsingle',$products->id)); ?>"><?php echo e($products->productname); ?></a></h4>
                            <h4>Rs <?php echo e($products->price); ?></h4>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
    </section>
    
    <!-- Shop Section End -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/abishek/Desktop/Workspace/GymHub/resources/views/frontend/shop.blade.php ENDPATH**/ ?>