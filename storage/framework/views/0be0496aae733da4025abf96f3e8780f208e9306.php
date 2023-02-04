<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GymHub</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/adminbootstrap/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/adminbootstrap/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/adminbootstrap/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="/adminbootstrap/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/adminbootstrap/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/adminbootstrap/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="<?php echo e(url('admindashboard')); ?>"><img src="/adminbootstrap/images/logo.png" alt="logo" /></a>
          </div>
          <ul class="nav">
            <li class="nav-item menu-items">
              <a class="nav-link" href="<?php echo e(url('admindashboard')); ?>">
                <span class="menu-icon">
                  <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" data-toggle="collapse" href="#members" aria-expanded="false" aria-controls="members">
                <span class="menu-icon">
                  <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Members</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="members">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Members</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Active members</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Inactive Members</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Enquiry</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="<?php echo e(url('planview')); ?>">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Plan</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Chat</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="<?php echo e(url('viewpayment')); ?>">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Payment</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="<?php echo e(url('viewproduct')); ?>">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Products</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="<?php echo e(url('viewexpenses')); ?>">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Expenses</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="<?php echo e(url('viewtrainers')); ?>">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Trainers</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="<?php echo e(url('viewupload')); ?>">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Gallery</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-lg-block">
                <li class="nav-item dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                      <img class="img-xs rounded-circle" src="/adminbootstrap/images/faces/face15.jpg" alt="">
                      <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                      <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('logout')); ?>" class="dropdown-item preview-item" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-logout text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Log out</p>
                      </div>
                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                        </form> 
                    </a>
                  </div>
                </li>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
              </button>
            </div>
          </nav>
  <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/adminbootstrap/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/adminbootstrap/vendors/chart.js/Chart.min.js"></script>
    <script src="/adminbootstrap/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/adminbootstrap/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/adminbootstrap/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/adminbootstrap/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/adminbootstrap/js/off-canvas.js"></script>
    <script src="/adminbootstrap/js/hoverable-collapse.js"></script>
    <script src="/adminbootstrap/js/misc.js"></script>
    <script src="/adminbootstrap/js/settings.js"></script>
    <script src="/adminbootstrap/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="adminbootstrap/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
 <?php echo $__env->yieldContent('content'); ?>
  </body>
</html><?php /**PATH /Users/abishek/Desktop/Workspace/GymHub/resources/views/admin/layout/main.blade.php ENDPATH**/ ?>