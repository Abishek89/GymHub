<!DOCTYPE html>
<!-- beautify ignore:start -->

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="/adminsection/assets/" data-template="vertical-menu-template">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>GymHub</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-aspnet-core-admin-template/">

    <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="/adminsection/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/adminsection/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/adminsection/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/adminsection/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/adminsection/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/adminsection/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/adminsection/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/adminsection/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/adminsection/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="/adminsection/assets/vendor/css/pages/app-chat.css">
    <!-- Helpers -->
    <script src="/adminsection/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/adminsection/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/adminsection/assets/js/config.js"></script>
</head>

<body>

  
  <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo ">
    <a href="{{ url('admindashboard') }}" class="app-brand-link">
      <span class="app-brand-logo demo">

</span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">GymHub</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">
    <li class="menu-item">
      <a href="{{ url('admindashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>

    <!-- Layouts -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Members">Members</div>
      </a>

      <ul class="menu-sub">

        <li class="menu-item">
          <a href="{{ route('members') }}" class="menu-link">
            <div data-i18n="All Members">All Members</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="{{ route('activemembers') }}" class="menu-link">
            <div data-i18n="Active Members">Active Members</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="{{ route('inactivemembers') }}" class="menu-link">
            <div data-i18n="Inactive Members">Inactive Members</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="{{ url('enquiry') }}" class="menu-link" target="_blank">
            <div data-i18n="Enquiry">Enquiry</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="{{ url('planview') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Plan">Plan</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ route('chat') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-chat"></i>
        <div data-i18n="Chat">Chat</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ url('viewproduct') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Products">Products</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ url('viewexpenses') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Expenses">Expenses</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ url('viewtrainers') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Trainers">Trainers</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{ url('viewupload') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Gallery">Gallery</div>
      </a>
    </li>
    <!-- Profile Settings -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Profile &amp; Settings</span>
    </li>
    <li class="menu-item">
      <a href="app-chat.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="User Profile">Use Profile</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
        <div data-i18n="Account Settings">Account Settings</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="pages-account-settings-account.html" class="menu-link">
            <div data-i18n="Edit Profile"> Edit Profile</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="pages-account-settings-security.html" class="menu-link">
            <div data-i18n="Change password">Change Password</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="pages-account-settings-notifications.html" class="menu-link">
            <div data-i18n="Notifications">Notifications</div>
          </a>
        </li>
      </ul>
    </li>
      </ul>
      
  

</aside>
<!-- / Menu -->

    

    <!-- Layout container -->
    <div class="layout-page">
      
      



<!-- Navbar -->




<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  

      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        
        <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
              <span class="d-none d-md-inline-block text-muted">Welcome to GymHub </span>
          </div>
        </div>
        <!-- /Search -->
        


        

        <ul class="navbar-nav flex-row align-items-center ms-auto">


          

          <!-- Style Switcher -->
          <li class="nav-item me-2 me-xl-0">
            <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
              <i class='bx bx-sm'></i>
            </a>
          </li>
          <!--/ Style Switcher -->


          <!-- Notification -->
          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class="bx bx-bell bx-sm"></i>
              <span class="badge bg-danger rounded-pill badge-notifications">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end py-0">
              <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h5 class="text-body mb-0 me-auto">Notification</h5>
                  <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                </div>
              </li>
              <li class="dropdown-notifications-list scrollable-container">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="/adminsection/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                        <p class="mb-0">Won the monthly best seller gold badge</p>
                        <small class="text-muted">1h ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Charles Franklin</h6>
                        <p class="mb-0">Accepted your connection</p>
                        <small class="text-muted">12hr ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="/adminsection/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">New Message ✉️</h6>
                        <p class="mb-0">You have new message from Natalie</p>
                        <small class="text-muted">1h ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                        <p class="mb-0">ACME Inc. made new order $1,154</p>
                        <small class="text-muted">1 day ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="/adminsection/assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Application has been approved 🚀 </h6>
                        <p class="mb-0">Your ABC project application has been approved.</p>
                        <small class="text-muted">2 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Monthly report is generated</h6>
                        <p class="mb-0">July monthly financial report is generated </p>
                        <small class="text-muted">3 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="/adminsection/assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Send connection request</h6>
                        <p class="mb-0">Peter sent you connection request</p>
                        <small class="text-muted">4 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <img src="/adminsection/assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">New message from Jane</h6>
                        <p class="mb-0">Your have new message from Jane</p>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">CPU is running high</h6>
                        <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                        <small class="text-muted">5 days ago</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown-menu-footer border-top">
                <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                  View all notifications
                </a>
              </li>
            </ul>
          </li>
          <!--/ Notification -->
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="/adminsection/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="#">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="/adminsection/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-semibold d-block">John Doe</span>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="pages-profile-user.html">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="pages-account-settings-account.html">
                  <i class="bx bx-cog me-2"></i>
                  <span class="align-middle">Settings</span>
                </a>
              </li>
              <li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">Log Out</span>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </a>

              </li>
            </ul>
          </li>
          <!--/ User -->
          

        </ul>
      </div>

      
      <!-- Search Small Screens -->
      {{-- <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
      </div> --}}
      
      
  </nav>
  

  
<!-- / Navbar -->

 
  

  

  <!-- Core JS -->
  <!-- buijs/adminsection assets/vendor/js/core.js -->
  <script src="/adminsection/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="/adminsection/assets/vendor/libs/popper/popper.js"></script>
  <script src="/adminsection/assets/vendor/js/bootstrap.js"></script>
  <script src="/adminsection/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
  <script src="/adminsection/assets/vendor/libs/hammer/hammer.js"></script>
  <script src="/adminsection/assets/vendor/libs/i18n/i18n.js"></script>
  <script src="/adminsection/assets/vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="/adminsection/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="/adminsection/assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="/adminsection/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="/adminsection/assets/js/dashboards-analytics.js"></script>
  <script src="/adminsection/assets/js/app-chat.js"></script>
  @yield('content')
</body>

</html>

<!-- beautify ignore:end -->
















{{-- <!DOCTYPE html>
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
            <a class="sidebar-brand brand-logo" href="{{ url('admindashboard') }}"><img src="/adminbootstrap/images/logo.png" alt="logo" /></a>
          </div>
          <ul class="nav">
            <li class="nav-item profile">
              <div class="profile-desc">
                <div class="profile-pic">
                  <div class="count-indicator">
                    <img class="img-xs rounded-circle " src="/adminbootstrap/images/faces/face15.jpg" alt="">
                    <span class="count bg-success"></span>
                  </div>
                  <div class="profile-name">
                    <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                    <span>Admin</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item nav-category">
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('admindashboard') }}">
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
                  <li class="nav-item"> <a class="nav-link" href="{{ route('members') }}">All Members</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('activemembers') }}">Active members</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('inactivemembers') }}">Inactive Members</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('enquiry') }}">Enquiry</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('planview') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Plan</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ route('chat') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Chat</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('viewpayment') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Payment</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('viewproduct') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Products</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('viewexpenses') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Expenses</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('viewtrainers') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Trainers</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('viewupload') }}">
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
          <!-- partial:partials/_navbar.html-->
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
                    <h6 class="p-3 mb-0">Profile</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-settings text-success"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Account Settings</p>
                      </div>
                    </a>
                    <a href="{{ route('logout') }}" class="dropdown-item preview-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-logout text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Log out</p>
                      </div>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
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
 @yield('content')
  </body>
</html> --}}