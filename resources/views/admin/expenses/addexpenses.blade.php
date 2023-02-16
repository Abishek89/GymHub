@extends('admin.layout.main')

@section('content') 
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Expenses Details </h3>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <form class="form-sample" action="{{ route('addexpenses') }}" method="POST"  >
                  @csrf
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
                          <input class="form-control" name="date"   placeholder="dd/mm/yyyy" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-9">
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Expenses Type</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="expensestype" id="membershipRadios1" value="0" checked  /> Equipment </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="expensestype" id="membershipRadios2" value="1" /> Maintainence </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="expensestype" id="membershipRadios2" value="2" /> Others </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    </div>
                  <div class="row">
                  <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <a href="/viewexpenses" class="btn btn-primary mr-1">Cancel</a>
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