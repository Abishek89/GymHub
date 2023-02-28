@extends('admin.layout.main')

@section('content') 
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Available Trainer</h3>
        <a href="{{ url('/viewtrainers/addtrainers') }}" class="btn btn-primary">Add New Trainers</a>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> Trainer Id </th>
                              <th> Trainer Name </th>
                              <th> Update </th>
                              <th> Delete </th>
                            </tr>
                          </thead>
                          @php
                            $users=DB::table('users')->where('role',2)->get();
                        @endphp
                          <tbody>
                            @foreach ($users as $users ) 
                            <tr>
                              <td>{{ $users->id }}</td>
                              <td>{{ $users->name }}</td>
                            <td>
                                <a href="{{ route('edittrainer', ['id' => $users->id])}}" class="btn btn-primary">Update</a>
                            </td>
                            <td> 
                              <a href="{{ route('deletetrainer', ['id' => $users->id])}}" class="btn btn-primary">Delete</a> 
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