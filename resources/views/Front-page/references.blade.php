@extends('layouts.front-base')

@section('title', $setting->title )
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', 'Fitness-icon')

@section('content')
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
             style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">references Us</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">references</p>
            </div>
        </div>
    </div>

    <!-- references Start -->
    <div class="container py-5">
        <div class="row align-items-center">
            {!! $setting->references !!}
        </div>
    </div>
    <!-- references End -->




@endsection

