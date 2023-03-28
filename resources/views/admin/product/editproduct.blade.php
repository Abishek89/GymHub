@extends('admin.layout.main')

@section('content') 
<div class="container-xxl flex-grow-1 container-p-y">   
            <div class="card">
              <h5 class="card-header">Update Product Details</h5>
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
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="price" placeholder="RS " value="{{ $products->price }}" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                             <input type="file" id="myFile" name="image"> 
                             <img src="{{ URL::to('/uploads/products/'.$products->image) }}" width="50px" height="50px">
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
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
                  <br>
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
                  <br>
                  <div class="row">
                  <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  &nbsp;
                  &nbsp;
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