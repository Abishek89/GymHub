<!DOCTYPE html> 
<html lang="en">

<head>
		<meta charset="utf-8">
		<title>GymHub</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('dietplan/assets/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('dietplan/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('dietplan/assets/plugins/fontawesome/css/all.min.css') }}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('dietplan/assets/css/style.css') }}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<!-- Profile Widget -->
							<div class="card widget-profile pat-widget-profile">
								<div class="card-body">
									<div class="pro-widget-content">
										<div class="profile-info-widget">
											<a href="#" class="booking-doc-img">
												<img src="{{ URL::to(''.$customer->image) }}" alt="User Image">
											</a>
											<div class="profile-det-info">
												<h3><a href="patient-profile.html">{{ $customer->name }}</a></h3>
												<div class="patient-details">
													<h5><b>Customer ID :</b> {{ $customer->id }}</h5>
													<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i></h5>
												</div>
											</div>
										</div>
									</div>
									<div class="patient-info">
										<ul>
											<li>Phone <span>{{ $customer->phone }}</span></li>
											<li>Age <span>38 Years, {{ $customer->gender }}</span></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Profile Widget -->
							
						</div>

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Add Meals</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="biller-info">
												<h4 class="d-block">{{ $trainer->name }}</h4>
												<span class="d-block text-sm text-muted">{{ $trainer->phone }}</span>
											</div>
										</div>
										<div class="col-sm-6 text-sm-right">
											<div class="billing-info">
												<h4 class="d-block">1 November 2019</h4>
											</div>
										</div>
									</div>
									
									<!-- Prescription Item -->
									
									<div class="card card-table">
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-hover table-center" id="myTable">
													<thead>
														<tr>
															<th style="min-width: 200px">Meal 1</th>
															<th style="min-width: 300px">Meal 2</th>
															<th style="min-width: 300px">Meal 3</th>
															<th style="min-width: 300px;">Meal 4</th>
															<th style="min-width: 300px;">Meal 5</th>
															<th style="min-width: 300px;">Meal 6</th>
														</tr>
													</thead>
													<tbody>
														<form action="{{ route('add.dietplan') }}" method="post">
															@csrf
															<input type="hidden" value="{{ $customer->userid }}" name="user_id">
														<tr>
															<td>
																<input class="form-control" type="text" name="meal1">
															</td>
															<td>
																<input class="form-control" type="text" name="meal2">
															</td>
															<td>
																<input class="form-control" type="text" name="meal3">
															</td>
															<td>
																<input class="form-control" type="text" name="meal4">
															</td>
															<td>
																<input class="form-control" type="text" name="meal5">
															</td>
															<td>
																<input class="form-control" type="text" name="meal6">
															</td>
														</tr>
												<tr>
													<td>
														<div class="row">
															<div class="col-md-12">
																<div class="submit-section">
																	<button type="submit" class="btn btn-primary submit-btn">Save</button>
																	<button type="reset" class="btn btn-secondary submit-btn">Clear</button>
																</div>
															</div>
														</div>
													</td>
														
													</tr>
													
														
													</tbody>
												</form>


												</table>

											</div>
										</div>
									</div>
									<!-- /Prescription Item -->
									
							
									
									<!-- Submit Section -->
								
									<!-- /Submit Section -->
									
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
		   
		</div>
		<!-- /Main Wrapper -->
		
	  
		<!-- jQuery -->
		<script src="{{ asset('dietplan/assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('dietplan/assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('dietplan/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{ asset('dietplan/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{ asset('dietplan/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('dietplan/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/appointments.html  30 Nov 2019 04:12:09 GMT -->
</html>