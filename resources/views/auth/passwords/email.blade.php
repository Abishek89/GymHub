@extends('layouts.app')

@section('content')
<div class="container">
    <div class="height-100v d-flex align-items-center justify-content-center">
       <div class="column justify-content-center">
           <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                    <div class="w-100">
                        <h3 class="mb-4">Reset Your Password</h3>
                    </div>
                </div>
               <p class="pb-2">Please enter your email address. You will receive a link to create a new password via email.</p>
               <form>
                 <div class="signin-form">
                    <div class="form-group mb-3">
                        <label class="label" for="name">Email</label>
                      <div class="form-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>
                 </div>
                
                 <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Reset Password</button>
                </div>
                </form>
              </div>
             </div>
              <div class="card-footer text-center py-3">
               <p class="text-center">Already a member? <a data-toggle="tab" href="{{ url('/login') }}">Sign In</a></p>
             </div>
            </div>
            </div>

@endsection