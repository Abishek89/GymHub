<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GymHub</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('/landbootstrap/css/bootstrap.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/landbootstrap/css/font-awesome.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/landbootstrap/css/flaticon.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/landbootstrap/css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/landbootstrap/css/barfiller.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/landbootstrap/css/magnific-popup.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/landbootstrap/css/slicknav.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('/landbootstrap/css/style.css')); ?>" type="text/css">
</head>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="<?php echo e(url('/')); ?>">
                                <img src="/landbootstrap/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <nav class="nav-menu">
                            <ul>
                                <?php if(auth()->guard()->check()): ?>
                                <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(url('aboutus')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(url('services')); ?>">Services</a></li>
                                <li><a href="<?php echo e(url('shop')); ?>">Shop</a></li>
                                <li><a href="<?php echo e(route('enrollpage')); ?>">Enroll</a></li>
                                <li><a href="<?php echo e(url('team')); ?>">Our Team</a></li>
                                
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('bmi-calculator')); ?>">Bmi calculate</a></li>
                                        <li><a href="<?php echo e(url('gallery')); ?>">Gallery</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="logout" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                    </form> 
                                </li>  
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                         <div class="col-lg-2">
                            <div class="top-option">
                                <div class="to-social">
                                   
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(route('cart')); ?>"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-user"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        
    </nav>
</header> 
    <?php /**PATH /Users/abishek/Desktop/Workspace/GymHub/resources/views/frontend/layout/header.blade.php ENDPATH**/ ?>