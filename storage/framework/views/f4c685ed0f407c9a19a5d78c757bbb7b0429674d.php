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
    <section class="shop-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>OUR PRODUCTS</span>
                        <h2>QUALITY GYM SUPPLEMENTS FOR GYM RAT</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                      <figure class="block-4-image">
                        <a href="shop-single.html"><img src="landbootstrap/img/hero/hero-2.jpg" alt="Image placeholder" class="img-fluid"></a>
                      </figure>
                      <div class="block-4-text p-2">
                        <h3><a href="shop-single.html">Tank Top</a></h3>
                        <p class="mb-0">$50</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                      <figure class="block-4-image">
                        <a href="shop-single.html"><img src="landbootstrap/img/hero/hero-2.jpg" alt="Image placeholder" class="img-fluid"></a>
                      </figure>
                      <div class="block-4-text p-2">
                        <h3><a href="shop-single.html">Corater</a></h3>
                        <p class="mb-0">$50</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                      <figure class="block-4-image">
                        <a href="shop-single.html"><img src="landbootstrap/img/hero/hero-2.jpg" alt="Image placeholder" class="img-fluid"></a>
                      </figure>
                      <div class="block-4-text p-2">
                        <h3><a href="shop-single.html">Polo Shirt</a></h3>
                        <p class="mb-0">$50</p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    
    <!-- Shop Section End -->

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/abishek/Desktop/Workspace/GymHub/resources/views/frontend/shop.blade.php ENDPATH**/ ?>