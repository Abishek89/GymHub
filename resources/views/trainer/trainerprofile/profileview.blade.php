@extends('trainer.layout.main')

@section('content') 
<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">
            
            
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">User Profile /</span> Profile
    </h4>
    
    
    <!-- Header -->
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          
          @php
          $trainer=DB::table('trainer')->get();
          @endphp
          <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
            @foreach ($trainer as $trainer)
            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
              <img src="{{ URL::to('uploads/trainers/'.$trainer->image) }}" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" height="100px" width="150px">
            </div>
            <div class="flex-grow-1 mt-3 mt-sm-5">
              <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                <div class="user-profile-info">
                  <h4>{{ Auth::user()->name }}</h4>
                  <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                    <li class="list-inline-item fw-semibold">
                      <i class='bx bx-pen'></i>Trainer
                    </li>
                  </ul>
                </div>
                {{-- <a href="javascript:void(0)" class="btn btn-primary text-nowrap"> --}}
                  {{-- <i class='bx bx-user-check me-1'></i>Connected --}}
                {{-- </a> --}}
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!--/ Header -->
    
    <!-- Navbar pills -->
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-sm-row mb-4">
          <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='bx bx-user me-1'></i> Profile</a></li>
        </ul>
      </div>
    </div>
    <!--/ Navbar pills -->

    <div class="col-xl-8 col-lg-7 col-md-7">
      <!-- Activity Timeline -->
      <div class="card card-action mb-4">
        <div class="card-body">
          <small class="text-muted text-uppercase">About</small>
          <ul class="list-unstyled mb-4 mt-3">
            <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-semibold mx-2">Full Name:</span> <span>{{ $trainer->name }}</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-semibold mx-2">Status:</span> <span>Active</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-star"></i><span class="fw-semibold mx-2">Role:</span> <span>Trainer</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-flag"></i><span class="fw-semibold mx-2">Weight:</span> <span>{{ $trainer->weight }} Kg</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-detail"></i><span class="fw-semibold mx-2">Height:</span> <span>{{ $trainer->height }} cm</span></li>
          </ul>
          <small class="text-muted text-uppercase">Contacts</small>
          <ul class="list-unstyled mb-4 mt-3">
            <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span> <span>{{ $trainer->phone }}</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-detail"></i><span class="fw-semibold mx-2">DOB:</span> <span>{{ $trainer->DOB }}</span></li>
            <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span> <span>{{ $trainer->email }}</span></li>
          </ul>
        </div>
        
      </div>
    
                
              </div>
              <!-- / Content -->
              @endsection