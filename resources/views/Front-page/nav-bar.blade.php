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
