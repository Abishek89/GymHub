@extends('layouts.app')

@section('content')
	<section class="ftco-section">
		<div class="container">
			<div class="column justify-content-center">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(loginbootstrap/images/gym.jpeg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
			      	</div>
							<form action="#" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
                            <div class="form-group mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>
						  </div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
                        <div class="form-group mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" required>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0" for="remember">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
									  <span class="checkmark"></span>
                                        {{ __('Remember Me') }}
                                    </label>
									</div>
									<div class="w-50 text-md-right">
										<a href="{{ route('password.request') }}">Forgot Password</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a data-toggle="tab" href="{{ url('/register') }}">Sign Up</a></p>
		        </div>
		      </div>
				</div>
				</div>
			</div>
		</div>
		</div>
	</section>

        @endsection

