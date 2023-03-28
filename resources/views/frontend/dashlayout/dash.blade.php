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
    {{-- <link rel="stylesheet" href="/adminsection/assets/vendor/libs/apex-charts/apex-charts.css" /> --}}
    {{-- <link rel="stylesheet" href="/adminsection/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css" /> --}}
    <link rel="stylesheet" href="/adminsection/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="/adminsection/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="/adminsection/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
    <link rel="stylesheet" href="/adminsection/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    {{-- <link rel="stylesheet" href="/adminsection/assets/vendor/libs/select2/select2.css" />
    --}}
    <link rel="stylesheet" href="/adminsection/assets/vendor/libs/flatpickr/flatpickr.css" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="/adminsection/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">

    <!-- Form Validation -->
    <link rel="stylesheet" href="/adminsection/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" /> 

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
    <a href="{{ route('userprofile') }}" class="app-brand-link">
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
      <a href="{{ route('enrollpage') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Enroll Details">Enroll details</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{ route('orderdetails') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Order Details">Order details</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{ route('userprofile') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="User Profile">User Profile</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
        <div data-i18n="Account Settings">Account Settings</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="{{ route('editprofile') }}" class="menu-link">
            <div data-i18n="Edit Profile"> Edit Profile</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="{{ route('changepass') }}" class="menu-link">
            <div data-i18n="Change password">Change Password</div>
          </a>
        </li>
      </ul>
      
  

</aside>
<!-- / Menu -->

    

    <!-- Layout container -->
    <div class="layout-page">
      
      



<!-- Navbar -->




<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  

      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        
 
        


        

        <ul class="navbar-nav flex-row align-items-center ms-auto">


          




          
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            @php
            $customer=DB::table('customers')->get();
        @endphp
        @foreach ($customer as $user )
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              
              <div class="avatar avatar-online">
                <img src="{{ URL::to('uploads/customers/'.$user->image) }}" alt class="w-px-35 rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="#">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="{{ URL::to('uploads/customers/'.$user->image) }}" alt class="w-px-35 rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                      <small class="text-muted">User</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="{{ url('/') }}">
                  <i class="bx bx-home me-2"></i>
                  <span class="align-middle">Back to Home</span>
                </a>
              </li>
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
            @endforeach
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

    <!-- Vendors JS -->
    <script src="/adminsection/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="/adminsection/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

  <!-- Main JS -->
  <script src="/adminsection/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="/adminsection/assets/js/dashboards-analytics.js"></script>
  <script src="/adminsection/assets/js/app-chat.js"></script>
  <script src="/adminsection/assets/js/app-user-list.js"></script>
  <script src="/adminsection/assets/js/tables-datatables-basic.js"></script>

  <!-- Flat Picker -->
  <script src="/adminsection/assets/vendor/libs/moment/moment.js"></script>
  <script src="/adminsection/assets/vendor/libs/flatpickr/flatpickr.js"></script>



<script src="/adminsection/assets/vendor/libs/select2/select2.js"></script>


<!-- Form Validation -->
<script src="/adminsection/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="/adminsection/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="/adminsection/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>


<script src="/adminsection/assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="/adminsection/assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  @yield('content')
</body>

</html>

<!-- beautify ignore:end -->






