@extends('layouts.adminWindow')

@section('title', 'service-package-image')

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>{{$service->title}}</h6>
                        </div>
                        <form action="{{route('admin.image.store',['pid'=>$service->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="title"
                                               placeholder="enter_title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="file" name="image" class="form-control" id="inputGroupFile04"
                                               aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                               style="margin-top: 0px!important;">
                                        <button class="btn btn-outline-secondary" type="submit"
                                                id="inputGroupFileAddon04">Upload
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--                            <button class="btn btn-secondary btn-lg w-100"--}}
                            {{--                                    style="background:#4355b5">Create--}}
                            {{--                            </button>--}}
                        </form>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Id
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            title
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Image
                                        </th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $rs)
                                        <tr>

                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->id}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->title}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}"
                                                         class="avatar avatar-sm me-3" alt="didnt load">
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{route('admin.image.destroy',['pid'=>$service->id,'id'=>$rs->id])}}"
                                                   class="font-weight-bold text-xs btn btn-danger" data-toggle="tooltip"
                                                   data-original-title="Edit user">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--            footer must be included here!--}}
            @include('AdminPanel.footer')
        </div>
    </main>
@endsection


