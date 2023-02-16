@extends('admin.layout.main')

@section('content') 
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Available plan</h3>
        <a href="{{ url('/planview/createplan') }}" class="btn btn-primary">Add Plan</a>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> Plan Id </th>
                              <th> Plan Name </th>
                              <th> Package </th>
                              <th> Price </th>
                              <th> Equiment </th>
                              <th> Trainer </th>
                              <th> Admission </th>
                              <th> Update </th>
                              <th> Delete </th>
                            </tr>
                          </thead>
                          @php
                            $plan=DB::table('plan')->get();
                        @endphp
                          <tbody>
                            @foreach ($plan as $plan ) 
                            <tr>
                              <td>{{ $plan->id }}</td>
                              <td>{{ $plan->planname }}</td>
                              <td>@if (
                                $plan->package==0)
                                Monthly Packages
                                @elseif(
                                  $plan->package==1)
                                  Annual Packages
                                @else
                                Life Time Membership
                            @endif </td>
                              <td> Rs {{ $plan->price }} </td>
                              <td>@if (
                                $plan->equipment==1)
                                ✅
                                @else ❌
                            @endif </td>
                              <td>@if (
                                $plan->trainer==1)
                                ✅   
                            @else ❌ 
                            @endif</td>
                              <td> @if (
                                $plan->admission==1)
                                ✅
                            @else ❌
                            @endif</td>
                            <td>
                                <a href="{{ route('editplan', ['id' => $plan->id])}}" class="btn btn-primary">Update</a>
                            </td>
                            <td> 
                              <a href="{{ route('deleteplan', ['id' => $plan->id])}}" class="btn btn-primary">Delete</a> 
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