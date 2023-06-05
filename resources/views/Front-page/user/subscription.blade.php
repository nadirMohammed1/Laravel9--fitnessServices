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
                <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-black-50 text-uppercase font-weight-bold">My
                    subscription</h4>
                <hr>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>

                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    id
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    price
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    name
                                </th>

                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$rs->id}}</span>
                                    </td>

                                    <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$data->service->id}}</span>
                                    </td>

                                    <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->quantity}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->quantity}}</span>
                                    </td>

                                    <td class="align-middle">
                                        {{--                                                <a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}"--}}
                                        {{--                                                   class="font-weight-bold text-xs btn btn-danger" data-toggle="tooltip"--}}
                                        {{--                                                   data-original-title="Edit user">--}}
                                        {{--                                                    Delete--}}
                                        {{--                                                </a>--}}
                                    </td>
                                    {{--                                            <td class="align-middle">--}}
                                    {{--                                                <a href="{{route('service.show',['id'=>$rs->id])}}"--}}
                                    {{--                                                   class="font-weight-bold text-xs btn btn-info" data-toggle="tooltip"--}}
                                    {{--                                                   data-original-title="Edit user">--}}
                                    {{--                                                    show--}}
                                    {{--                                                </a>--}}
                                    {{--                                            </td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->




@endsection

