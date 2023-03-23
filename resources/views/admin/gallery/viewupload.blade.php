@extends('admin.layout.main')

@section('content') 
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Available Photos</h3>
        <a href="{{ url('/viewupload/uploadphoto') }}" class="btn btn-primary">Add New Photo</a>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
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
</div>
@endsection