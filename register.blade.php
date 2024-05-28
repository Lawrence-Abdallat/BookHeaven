@extends('frontend.layouts.app')

@section('title','Bookheaven.com| Register')

@section('content')

<section class="h-100 gradient-form" style="background-color: #eee;">
		<div class="container py-5 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-xl-10">
			  <div class="card rounded-3 text-black">
				<div class="row g-0">
				  <div class="col-lg-6">
					<div class="card-body p-md-5 mx-md-4">
	  
					  <div class="text-center">
						<a href="/">
              <img src="{{url('images/logo.jpeg')}}"
						  style="width: 185px;" alt="logo"></a>
						<h4 class="mt-1 mb-5 pb-1">Book Heaven For Users</h4>
					  </div>
	  
					  <form class="form" method="post" action="{{route('register.submit')}}">
            @csrf
						<p>Please create your account</p>

            <div data-mdb-input-init class="form-outline mb-4">
                <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
						</div>
	  
						<div data-mdb-input-init class="form-outline mb-4">
                <input id="form2Example11" placeholder="Email address" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email">
  
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
						</div>
	  
						<div data-mdb-input-init class="form-outline mb-4">
              <input id="form2Example22" type="password" placeholder="Password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="new-password">
  
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
						</div>
	  
						<div data-mdb-input-init class="form-outline mb-4">
              <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password">
						</div>
	  
						<div class="text-center pt-1 mb-5 pb-1">
						  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg mb-3 btn-colors" type="submit">Sign Up</button>
						</div>

					  </form>
	  
					</div>
				  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
					<div class="text-white px-3 py-4 p-md-5 mx-md-4">
					  <h4 class="mb-4">We are more than just a company</h4>
					  <!-- <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
						<img src="{{ asset('images/blog-4-720x480.jpg') }}" class="cutom-img" alt="">
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</section>
@endsection