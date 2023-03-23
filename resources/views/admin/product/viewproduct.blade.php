@extends('admin.layout.main')

@section('content') 
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Available Product</h3>
        <a href="{{ url('/viewproduct/addproduct') }}" class="btn btn-primary">Add New Product</a>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> Product Id </th>
                              <th> Product Name </th>
                              <th> Price </th>
                              <th> Image </th>
                              <th> Descripton </th>
                              <th> Update </th>
                              <th> Delete </th>
                            </tr>
                          </thead>
                          @php
                            $products=DB::table('products')->get();
                        @endphp
                          <tbody>
                            @foreach ($products as $products ) 
                            <tr>
                              <td>{{ $products->id }}</td>
                              <td>{{ $products->productname }}</td>
                              <td> Rs{{ $products->price }} </td>
                              <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                    <img src="{{ URL::to('/uploads/products/'.$products->image) }}" alt="Avatar" class="rounded-circle">
                                  </li>
                                </ul>
                              </td>
                              <td> {{ $products->description }} </td>
                            <td>
                                <a href="{{ route('editproduct', ['id' => $products->id])}}" class="btn btn-primary">Update</a>
                            </td>
                            <td> 
                              <a href="{{ route('deleteproduct', ['id' => $products->id])}}" class="btn btn-primary">Delete</a> 
                            </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                </form>
              </div>
            </div>
          </div>
      </div>
      </div>
</div>
@endsection