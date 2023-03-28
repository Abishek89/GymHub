@extends('admin.layout.main')

@section('content') 
<div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
              <h5 class="card-header">Add Trainer Details</h5>
              <div class="card-body">
                <form class="form-sample" action="{{ route('addtrainers') }}" method="POST" enctype="multipart/form-data" >
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Trainer Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="trainername" placeholder="Name" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" placeholder="Email" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  {{-- <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                          <input type="file" id="myFile" name="image">
                        </div>
                      </div>
                    </div>
                  </div> --}}
                  {{-- password --}}
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="password" placeholder="password" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="confirm-password" placeholder="confirm-password" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                  <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  &nbsp;
                  &nbsp;
                  <a href="/viewtrainers" class="btn btn-primary mr-1">Cancel</a>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
      </div>
</div>
  @endsection