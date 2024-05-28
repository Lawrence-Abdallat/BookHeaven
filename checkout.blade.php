@extends('frontend.layouts.app')

@section('title','Bookheaven.com| checkout')

@section('content')

@php
    $total_amount=Helper::totalCartPrice();
@endphp
<style>
    .checkout-details {
        background: #585858;
        padding: 40px 40px 30px;
        border-radius: 25px;
        margin-bottom: 40px;
        color: #ffffff !important;
        width: 65%;
    }
    .checkout-details ul {
        margin: 0;
    padding: 0;
    list-style-type: none;
    }
</style>
<!-- Main -->
<div id="main">
    <div class="inner">
        <h1>Checkout</h1>
        <div class="checkout-details">
                <ul>
                <li>Order Total <span class="pull-right">$<span id="demo1">{{number_format($total_amount,2)}}</span></span></li>
                </ul>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
        <section>
            <form class="form" method="POST" action="{{route('cart.order')}}">
            @csrf
                <div class="fields">
                    <div class="field half">
                        <select name="country" required>
                            <option value="">-- Choose Country--</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="field half">
                    </div>

                    <div class="field half">
                        <input type="text" id="field-2" name="first_name"  required placeholder="First Name" value="{{old('first_name')}}">
                        @error('first_name')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field half">
                        <input type="text" id="field-111" placeholder="Last Name"  required name="last_name" value="{{old('lat_name')}}">
                        @error('last_name')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field half">
                        <input id="field-3" required placeholder="Email Address" type="email" name="email" value="{{old('email')}}">
                        @error('email')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field half">
                        <input id="field-4" placeholder="Phone" type="tel" name="phone" required value="{{old('phone')}}">
                        @error('phone')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field half">
                        <input id="field-5" required placeholder="Address 1" type="text" name="address1" value="{{old('address1')}}">
                        @error('address1')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field half">
                        <input id="field-6" required type="text" name="address2" value="{{old('address2')}}" placeholder="Address 2">
                        @error('address1')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field half">
                        <input type="text" name="city" value="{{old('city')}}" id="field-7" placeholder="City" required>
                        @error('city')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field half">
                        <input type="text" name="state" value="{{old('state')}}" id="field-8" placeholder="State" required>
                        @error('state')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field half">
                        <input type="number" name="post_code" id="field-7" placeholder="Zip" required>
                    </div>


                    <div class="field half">

                        <select name="payment_method" required>
                            <option value="">-- Choose Payment Method--</option>
                            <option value="cod">Cash On Delivery</option>
                            <option value="paypal">Paypal</option>
                        </select>
                    </div>


                    <div class="field">
                        <div>
                            <input type="checkbox" id="checkbox-4"> 
                            
                            <label for="checkbox-4">
                                I agree with the <a href="{{ route('terms') }}" target="_blank">Terms &amp; Conditions</a>
                            </label>
                        </div>
                    </div>


                    <div class="field half text-right">
                        <ul class="actions">
                            <li><input type="submit" value="Finish" class="primary"></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
        </div>
    </div>
</div>
@endsection