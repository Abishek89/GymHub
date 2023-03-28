@extends('admin.layout.main')

@section('content') 
<div class="container-xxl flex-grow-1 container-p-y">          
  
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <nav class="navbar navbar-expand-lg bg-navbar-theme">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/viewupload') }}">Gallery</a>
        {{-- <a href="{{ url('/viewexpenses/addexpenses') }}" class="btn btn-primary">Add Expenses</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-5">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbar-ex-5">
          <div class="navbar-nav me-auto">
          </div>
          <a href="{{ url('/viewupload/uploadphoto') }}" class="btn btn-danger">Add Gym Photo</a>
        </div>
      </div>
    </nav>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th> Photo Id </th>
            <th> Image </th>
            <th> Delete </th>
          </tr>
        </thead>
        @php
         $gallery=DB::table('gallery')->get();
         @endphp
        <tbody class="table-border-bottom-0">
          @foreach ($gallery as $gallery ) 
             <tr>
                <td>{{ $gallery->id }}</td>
              <td>
               <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
              <img src="{{ URL::to('/uploads/gallery/'.$gallery->image) }}" alt="Avatar" class="rounded-circle">
             </li>
           </ul>
           </td>
           <td> 
          <a href="{{ route('deletephoto', ['id' => $gallery->id])}}" class="btn btn-primary">Delete</a> 
          </td>
         </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>
{{-- <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Available Photos</h3>
        <a href="{{ url('/viewupload/uploadphoto') }}" class="btn btn-primary">Add New Photo</a>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card"> --}}
              {{-- <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> Photo Id </th>
                              <th> Image </th>
                              <th> Delete </th>
                            </tr>
                          </thead>
                          @php
                            $gallery=DB::table('gallery')->get();
                        @endphp
                          <tbody>
                            @foreach ($gallery as $gallery ) 
                            <tr>
                              <td>{{ $gallery->id }}</td>
                              <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                    <img src="{{ URL::to('/uploads/gallery/'.$gallery->image) }}" alt="Avatar" class="rounded-circle">
                                  </li>
                                </ul>
                              </td>
                            <td> 
                              <a href="{{ route('deletephoto', ['id' => $gallery->id])}}" class="btn btn-primary">Delete</a> 
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
</div> --}}
@endsection