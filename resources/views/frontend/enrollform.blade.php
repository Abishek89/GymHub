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

    <!-- Body of The Form Page -->
        <div class="main-panel">
            <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Enter Your Personal details </h3>
        </div>
            <div class="col-12 grid-margin">
                <div class="card">
                <div class="card-body">
                <h4 class="card-title"></h4>
                <form class="form-sample">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                        <select class="form-control">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                        <input class="form-control" placeholder="dd/mm/yyyy" />
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                        <select class="form-control">
                            <option>Category1</option>
                            <option>Category2</option>
                            <option>Category3</option>
                            <option>Category4</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Membership</label>
                        <div class="col-sm-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>
                        </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <p class="card-description"> Address </p>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 1</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">State</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 2</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Postcode</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" />
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Country</label>
                        <div class="col-sm-9">
                        <select class="form-control">
                            <option>America</option>
                            <option>Italy</option>
                            <option>Russia</option>
                            <option>Britain</option>
                        </select>
                        </div>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                <a href="{{ url('home') }}" class="btn btn-primary mr-1">Cancel</a>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    
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
    </body>
    </html>