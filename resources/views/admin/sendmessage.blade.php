@extends('admin.layout.main')

@section('content') 
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Form elements </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Add Plan</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Enter Details of Message</h4>
                <form class="form-sample" action="" method="" >
                    @csrf
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <label for="sendto">Send To</label>
                        <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"> Active Members </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked> Inactive Members </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Product Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Description"></textarea>
                      </div> 
                  </form>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>    
      </div>
            </div>
        </div>
      </div>
    
  @endsection