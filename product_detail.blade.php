@extends('frontend.layouts.app')

@section('title','Bookheaven.com| product details')

@section('content')

<!-- Main -->
<div id="main">
<div class="inner">
  <h1>{{$product_details->title}} <span class="pull-right"> ${{$product_details->price}}</span></h1>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <img src="{{asset('storage/'.$product_details->photo)}}" class="img-fluid" alt="proDetImg">
      </div>

    <div class="col-md-7">
      {!!$product_details->summary!!}

        <div class="row">
        <form action="{{route('single-add-to-cart')}}" method="POST">
         @csrf
            <div class="col-sm-8">
                <label class="control-label">Quantity</label>

                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <input type="hidden" name="slug" value="{{$product_details->slug}}">
                        <input type="number" name="quant[1]" min="1" max="200" value="1">
                      </div>
                  </div>

                  <div class="col-sm-6">
                      <input type="submit" class="primary" value="Add to Cart">
                  </div>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>

  <div class="container-fluid">
    <h2 class="h2">Similar Products</h2>

    <!-- Products -->
    <section class="tiles">

    
    @foreach ($products as $product)
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
  </div>
</div>
</div>
@endsection