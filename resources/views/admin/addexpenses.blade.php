@extends('admin.layout.main')

@section('content') 
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Payment </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Add Payment</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Expenses Details</h4>
                <form class="form-sample" action="" method="" >
                    @csrf
                  <p class="card-description"> Payment Details </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Expenses Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="expensesname" placeholder="Name" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Amount</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="amount" placeholder="Rs" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                          <input class="form-control" placeholder="dd/mm/yyyy" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Expenses Type</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="mode">
                            <option>Equipment</option>
                            <option>Maintainence</option>
                            <option>Others</option>
                          </select>
                        </div>
                      </div>
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