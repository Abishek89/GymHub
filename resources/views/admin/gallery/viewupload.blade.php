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
                              <td> <img src="{{ URL::to('/uploads/gallery/'.$gallery->image) }}" class="img-fluid"/> </td>
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