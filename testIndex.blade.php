@extends('frontend.layouts.app')

@section('title','Bookheaven.com| index')

@section('content')

<!-- Main -->
<div id="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/slider-image-1-1920x700.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/slider-image-2-1920x700.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/slider-image-3-1920x700.jpg') }}" alt="Third slide">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
    <br>

    <div class="inner">
        <!-- About Us -->
        <header id="inner">
            <h1>Find your new book!</h1>
            <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
        </header>

        <br>

        <h2 class="h2">Featured Products</h2>

        <!-- Products -->
        <section class="tiles">
            
            @foreach ($allproducts  as $product )

            <article class="style1">
                <span class="image">
                    <img src="{{url($product->photo)}}" alt="{{$product->title}}" />
                </span>
                <div class="card-body">
                    <a href="{{route('product-detail',$product->id)}}" class="text-reset">
                        <h5 class="card-title mb-3">{{$product->title}}</h5>
                    </a>
                        <h6 class="mb-3">${{$product->price}}</h6>
                    <a href="{{route('product-detail',$product->id)}}"><button>By Now</button></a>
                    </div>
            </article>

            @endforeach
        </section>

        <p class="text-center"><a href="{{route('allProducts')}}">More Books &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
        
        <br>

        <h2 class="h2">Testimonials</h2>
        
        <div class="row">
            <div class="col-sm-6 text-center">
                <p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

                <p><strong> - John Doe</strong></p>
            </div>

            <div class="col-sm-6 text-center">
                <p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

                <p><strong>- John Doe</strong> </p>
            </div>
        </div>

        <p class="text-center"><a href="{{ route('testimonials') }}">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

        <br>

        <h2 class="h2">Blog</h2>
        
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="{{ asset('images/blog-1-720x480.jpg') }}" class="img-fluid" alt="" />

                <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
            </div>

            <div class="col-sm-4 text-center">
                <img src="{{ asset('images/blog-2-720x480.jpg') }}" class="img-fluid" alt="" />

                <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
            </div>

            <div class="col-sm-4 text-center">
                <img src="{{ asset('images/blog-3-720x480.jpg') }}" class="img-fluid" alt="" />

                <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
            </div>
        </div>

        <p class="text-center"><a href="{{ route('blog') }}">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
    </div>
</div>
@endsection
