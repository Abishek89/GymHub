@extends('admin.layout.main')

@section('content') 
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Enter Details of Products</h3>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <form class="form-sample" action="{{ route('uploadphoto') }}" method="POST" enctype="multipart/form-data" >
                @csrf
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
                <br>
                <div class="row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                &nbsp;
                &nbsp;
                <a href="/viewupload" class="btn btn-primary mr-1">Cancel</a>
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