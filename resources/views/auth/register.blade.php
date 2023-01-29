@extends('layouts.app')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="column justify-content-center">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url(loginbootstrap/images/gym.jpeg);">
              </div>
                    <div class="login-wrap p-4 p-md-5">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-1">Register</h3>
                      </div>
                  </div>
                        <form action="#" class="signin-form">
                      <div class="form-group mb-3">
                          <label class="label" for="name">UserName</label>
                        <div class="form-group mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                <div class="form-group mb-3">
                    <label class="label" for="Email">Email</label>
                    <div class="form-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="label" for="Password">Password</label>
                    <div class="form-group mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="label" for="Confirm Password">Confirm Password</label>
                    <div class="form-group mb-3">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
                </div>
              </form>
              <p class="text-center">Already a member? <a data-toggle="tab" href="{{ url('/login') }}">Sign In</a></p>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>
@endsection
