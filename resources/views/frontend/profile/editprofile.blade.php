@extends('frontend.dashlayout.dash')

@section('content') 

<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">
            
            
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Account Settings /</span> Account
    </h4>
    
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a></li>
        </ul>
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <form id="formAccountSettings" method="POST" action="{{ route('user.updateprofile') }}" enctype="multipart/form-data">
            @csrf
            @method('put')
          <!-- Account -->
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img src="{{ URL::to('uploads/customers/'.$user->image) }}" alt="user-avatar" class="d-block rounded" height="150" width="150" id="uploadedAvatar" />
              <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                  <span class="d-none d-sm-block">Upload new photo</span>
                  <i class="bx bx-upload d-block d-sm-none"></i>
                  <input type="file" class="account-file-input" id="upload" name="image" hidden accept="image/png, image/jpeg" />
                </label>
    
                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
              </div>
            </div>
          </div>
          <hr class="my-0">
          <div class="card-body">
          
              <input type="hidden" value="{{ $user->userid }}" name="id">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Name</label>
                  <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" autofocus />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="DOB" class="form-label">Date Of Birth</label>
                  <input class="form-control" type="text"  value="{{ $user->DOB }}" disabled />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="gender" class="form-label">Gender</label>
                  <input type="text" class="form-control" value="@if ($user->gender == "on")Male
                  @else
                  Female
                  @endif" disabled>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="height" class="form-label">Height</label>
                  <input class="form-control" type="text" id="height" name="height" value="{{ $user->height }}" placeholder="170 cm" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="weight" class="form-label">Weight</label>
                  <input class="form-control" type="text" id="weight" name="weight" value="{{ $user->weight }}" placeholder="80 kg" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">E-mail</label>
                  <input class="form-control" type="text" id="email" name="email" value="{{ $user->email }}" placeholder="john.doe@example.com" />
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Phone Number</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text">Nepal (+977)</span>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $user->phone }}" />
                  </div>
                </div>
                
              </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
              </div>
          </div>
          <!-- /Account -->
        </form>

        </div>
      </div>
    </div>
    
    
                
              </div>
              <!-- / Content -->
@endsection