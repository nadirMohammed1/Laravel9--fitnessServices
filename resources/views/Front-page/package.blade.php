@extends('layouts.front-base')

@section('title',)

@section('content')
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Gymnast</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <a href="feature.html" class="nav-item nav-link">Our Features</a>
                    <a href="class.html" class="nav-item nav-link">Classes</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5"
         style="background:linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.8)),url({{Storage::url($data->image)}});background-position:top;background-repeat:no-repeat;background-size:cover}">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
             style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">{{$data->title}}</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Detail Start -->
    <div class="container">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-black text-uppercase font-weight-bold">Details About package</h4>
        <div class="row">
            <div class="col-12">
                {{--                <img class="img-fluid mb-4" src="{{Storage::url($data->image)}}" alt="Image">--}}
                {!! $data->detail !!}}
            </div>


            <div class="col-12">
                <h3 class="mb-4 font-weight-bold">Leave a comment</h3>
                <h2>@include('Front-page.messages')</h2>
                <form action="{{route('storecomment')}}" method="post">
                    @csrf
                    <input type="hidden" class="form-control" name="product_id" id="name" value="{{$data->id}}">
                    <div class="form-group">
                        <label for="name">subject *</label>
                        <input type="text" class="form-control" name="subject" id="name">
                    </div>

                    <div class="form-group">
                        <label for="name">rating *</label>
                        <input type="text" class="form-control" name="rate" id="name">
                    </div>
                    {{--                    <div class="form-group">--}}
                    {{--                        <label for="email">rating *</label>--}}
                    {{--                        <input type="email" class="form-control" id="email">--}}
                    {{--                    </div>--}}

                    <div class="form-group">
                        <label for="message">review *</label>
                        <textarea name="review" id="message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        @auth()
                            <input type="submit" value="submit" class="btn btn-outline-primary px-3">
                        @else
                            <a href="/login" class="primary-btn" role="button">To submit Your Review,Please login</a>
                        @endauth
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Blog Detail End -->
    {{--i will have to add a review page here--}}

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
@endsection

