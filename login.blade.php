@extends('frontend.layouts.app')

@section('title','Bookheaven.com| login')

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
	  
					  <form method="post" action="{{route('login.submit')}}">
            {{ csrf_field() }}
						<p>Please login to your account</p>
	  
						<div data-mdb-input-init class="form-outline mb-4">
						  <input type="email" name="email" value="{{old('email')}}" id="form2Example11" class="form-control"
							placeholder="Email address" />
              @error('email')
                <span class="text-danger">{{$message}}</span>
              @enderror
						</div>
	  
						<div data-mdb-input-init class="form-outline mb-4">
						  <input placeholder="password" type="password" name="password" required="required"
                  value="{{old('password')}}" id="form2Example22" class="form-control" />
              @error('password')
              <span class="text-danger">{{$message}}</span>
              @enderror
						</div>
	  
						<div class="text-center pt-1 mb-5 pb-1">
						  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg mb-3 btn-colors" type="submit">Login</button>
						  <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
						</div>
	  
						<div class="d-flex align-items-center justify-content-center pb-4">
						  <p class="mb-0 me-2">Don't have an account?</p>
						  <a class="btn btn-outline-danger custom-mrgn" href="{{route('register.form')}}">Create new</a>
						</div>
	  
					  </form>
	  
					</div>
				  </div>
				  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
					<div class="text-white px-3 py-4 p-md-5 mx-md-4">
					  <h4 class="mb-4">We are more than just a company</h4>
						<img src="{{url('images/blog-4-720x480.jpg')}}" class="cutom-img" alt="">
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
@endsection