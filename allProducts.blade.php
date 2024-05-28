@extends('frontend.layouts.app')

@section('title','Bookheaven.com| Products')

@section('content')

<!-- Main -->
<div id="main">
		<div class="inner">
        <h1>Products</h1>

        <div class="image main">
          <img src="{{ asset('images/banner-image-6-1920x500.jpg') }}" class="img-fluid" alt="" />
        </div>

        <!-- Products -->
        <section class="tiles">

        @foreach ($allproducts as $product)
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
      </div>
		</div>
@endsection