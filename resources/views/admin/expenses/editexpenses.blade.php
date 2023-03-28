@extends('admin.layout.main')

@section('content') 
<div class="container-xxl flex-grow-1 container-p-y">   
            <div class="card">
              <h5 class="card-header">Update Expenses Details</h5>
              <div class="card-body">
                <form class="form-sample" action="/viewexpenses/updateexpenses/{{$expenses->id}}" method="POST"  >
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Expenses Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="expensesname" placeholder="Name" value="{{ $expenses-> expensesname}}"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Amount</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="amount" placeholder="Rs" value="{{ $expenses->amount }}"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                          <input class="form-control" name="date"   placeholder="dd/mm/yyyy" value="{{ $expenses->date }}" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-9">
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Expenses Type</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="expensestype" id="membershipRadios1" value="0" checked  {{ $expenses->expensestype == "0" ? "checked" : "" }}/> Equipment </label>
                            </div>
                  <br>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="expensestype" id="membershipRadios2" value="1" {{ $expenses->expensestype == "1" ? "checked" : "" }}/> Maintainence </label>
                            </div>
                  <br>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="expensestype" id="membershipRadios2" value="2" {{ $expenses->expensestype == "2" ? "checked" : "" }}/> Others </label>
                            </div>
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
                  <a href="/viewexpenses" class="btn btn-primary mr-1">Cancel</a>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
  @endsection