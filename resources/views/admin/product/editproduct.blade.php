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
                <form class="form-sample" action="/viewproduct/updateproduct/{{$products->id}}" method="POST" enctype="multipart/form-data" >
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="productname" placeholder="Name" value="{{ $products->productname }}"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="price" placeholder="RS" value="{{ $products->price }}" />
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
                        <label class="col-sm-3 col-form-label">Quantity</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="quantity" placeholder="quantity" value="{{ $products->Quantity }}"  />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                          <textarea type="text" class="form-control" name="description" placeholder="Description"  rows="5" >{{ $products->description }}</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <a href="/viewproduct" class="btn btn-primary mr-1">Cancel</a>
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