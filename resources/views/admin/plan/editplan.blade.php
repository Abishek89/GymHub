@extends('admin.layout.main')

@section('content') 
<div class="container-xxl flex-grow-1 container-p-y">   
<div class="card">
  <h5 class="card-header">Update Plan Details</h5>
            <div class="card-body">
              <form class="form-sample" action="/planview/updateplan/{{$plan->id}}" method="POST" >
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Plan Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="planname" placeholder="Name" value="{{ $plan->planname }}"/>
                        <span class="text-danger">
                          @error('planname')
                            {{ $message }}
                          @enderror
                          </span>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-9">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Package</label>
                        <div class="col-sm-4">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="package" id="membershipRadios1" value="0" checked {{ $plan->package == "0" ? "checked" : "" }} /> Monthly Packages </label>
                          </div>
                <br>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="package" id="membershipRadios2" value="1" {{ $plan->package == "1" ? "checked" : "" }}/> Annual Packages </label>
                          </div>
                <br>

                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="package" id="membershipRadios2" value="2" {{ $plan->package == "2" ? "checked" : "" }}/> Life Time Membership </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  </div>
                <br>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Price</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="price" placeholder="Rs" value="{{ $plan->price }}" />
                        <span class="text-danger">
                          @error('price')
                            {{ $message }}
                          @enderror
                          </span>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Refundable</label>
                      <div class="col-sm-4">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="refundable" id="membershipRadios1" value="1" checked {{ $plan->refundable == "1" ? "checked" : "" }} /> Yes </label>
                        </div>
                      </div>
                <br>

                      <div class="col-sm-5">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="refundable" id="membershipRadios2" value="0" {{ $plan->refundable == "0" ? "checked" : "" }}/> No </label>
                        </div>
                      </div>
                    </div>
                </div>
                </div>
                <br>

                <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Admission Fee</label>
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="admission" id="membershipRadios1" value="1" checked {{ $plan->admission == "1" ? "checked" : "" }}/> Yes </label>
                      </div>
                    </div>
                <br>
                <br>

                    <div class="col-sm-5">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="admission" id="membershipRadios2" value="0"{{ $plan->admission == "0" ? "checked" : "" }} /> No </label>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                &nbsp;
                &nbsp;
                <a href="/planview" class="btn btn-primary mr-1">Cancel</a>
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