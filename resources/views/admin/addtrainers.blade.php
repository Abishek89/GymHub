@extends('admin.layout.main')

@section('content') 
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Form elements </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Add Trainer</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Enter Details of Trainer</h4>
                <form class="form-sample" action="{{ route('addtrainers') }}" method="POST" enctype="multipart/form-data" >
                  @csrf
                  <p class="card-description"> Trainer Details </p>
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
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                          <input type="file" id="myFile" name="image">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Weight</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="weight" placeholder="Kg" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Height</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="height" placeholder="feet" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Age</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="age" placeholder="Age" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea type="text" class="form-control" name="description" placeholder="Description"  rows="5"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
      </div>
    
  @endsection