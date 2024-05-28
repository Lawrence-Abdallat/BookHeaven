@extends('frontend.layouts.app')

@section('title','Bookheaven.com| blog')

@section('content')

<!-- Main -->
<div id="main">
    <div class="inner">
        <h1>Blog</h1>

        <div class="image main">
            <img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <img src="images/blog-1-720x480.jpg" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="{{ route('blog.detail', 'slug') }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                            <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                        </div>

                        <div class="col-sm-6 text-center">
                            <img src="images/blog-2-720x480.jpg" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="{{ route('blog.detail', 'slug') }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                            <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                        </div>

                        <div class="col-sm-6 text-center">
                            <img src="images/blog-3-720x480.jpg" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="{{ route('blog.detail', 'slug') }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                            <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                        </div>

                        <div class="col-sm-6 text-center">
                            <img src="images/blog-4-720x480.jpg" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="{{ route('blog.detail', 'slug') }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                            <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                        </div>

                        <div class="col-sm-6 text-center">
                            <img src="images/blog-5-720x480.jpg" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="{{ route('blog.detail', 'slug') }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                            <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                        </div>

                        <div class="col-sm-6 text-center">
                            <img src="images/blog-6-720x480.jpg" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="{{ route('blog.detail', 'slug') }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                            <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <h4>Blog Search</h4>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">

                            <span class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></span>
                        </div>
                    </div>

                    <br>

                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>

                    <p><a href="#">Non, magni, sequi. Explicabo illum quas debitis ut.</a></p>

                    <p><a href="#">Vatae expedita deleniti optio ex adipisci . </a></p>

                    <p><a href="#">Soluta non modi dolorem voluptates dolor laborum.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection