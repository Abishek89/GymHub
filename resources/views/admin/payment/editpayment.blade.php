@extends('admin.layout.main')

@section('content') 
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Payment Details </h3>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">              
                <form class="form-sample" action="/viewpayment/updatepayment/{{$payment->id}}" method="POST" >
                    @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Payment Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="paymentname" placeholder="Name" value="{{ $payment->paymentname }}" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Amount</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="amount" placeholder="Rs" value="{{ $payment->amount }}"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-9">
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Payment Mode</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="paymenttype" id="membershipRadios1" value="0" checked  {{ $payment->paymenttype == "0" ? "checked" : "" }}/> Cash </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="paymenttype" id="membershipRadios2" value="1" {{ $payment->paymenttype == "1" ? "checked" : "" }}/> Online Money Transfer </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Payment By</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="paymentby" placeholder="Name" value="{{ $payment-> paymentby}}"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="row">
                  <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <a href="/viewpayment" class="btn btn-primary mr-1">Cancel</a>
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