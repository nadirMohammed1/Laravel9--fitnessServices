@extends('layouts.front-base')

@section('title', 'User Panel')

@section('content')
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
             style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">User Panel</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">My info</p>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-black text-uppercase font-weight-bold">My Dashboard</h4>
                <hr style="color: black">
                @include('Front-page.user.usermenu')

            </div>
            <div class="col-md-6">
                <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-black-50 text-uppercase font-weight-bold">My info</h4>
                <hr>
                @include('profile.show')

            </div>
        </div>
    </div>
    <!-- About End -->




@endsection

