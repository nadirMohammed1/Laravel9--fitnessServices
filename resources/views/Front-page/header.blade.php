<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="{{route('home')}}" class="navbar-brand">
            <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Gymnast</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4 bg-secondary">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About Us</a>
                @auth
                    {{--                    : {{Auth::user()->name}}--}}
                    <a href="/logoutuser" class="nav-item nav-link">log-out</a>

                @endauth

                @guest()
                    <a href="/register" class="nav-item nav-link">register</a>
                @endguest

                <a href="{{route('faq')}}" class="nav-item nav-link">faq</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dashboard</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="{{route('userpanel.index')}}" class="dropdown-item">User-panel</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
<!-- Carousel Start -->
<div class="container-fluid p-0">
    {{--    <div id="blog-carousel" class="carousel slide" data-ride="carousel">--}}
    {{--        <div class="carousel-inner">--}}
    {{--            <div class="carousel-item active">--}}
    {{--                <img class="w-100" src="{{asset('assets')}}/img/carousel-1.jpg" alt="Image">--}}
    {{--                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">--}}
    {{--                    <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>--}}
    {{--                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Best Gym In--}}
    {{--                        Town</h2>--}}
    {{--                    <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">--}}
    {{--            <span class="carousel-control-prev-icon"></span>--}}
    {{--        </a>--}}
    {{--        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">--}}
    {{--            <span class="carousel-control-next-icon"></span>--}}
    {{--        </a>--}}
    {{--    </div>--}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($sliderData as $key => $slider)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img src="{{Storage::url($slider->image)}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>
                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Best Gym In
                        Town</h2>
                    <a href="/registeruser" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us
                        Now</a>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Carousel End -->
