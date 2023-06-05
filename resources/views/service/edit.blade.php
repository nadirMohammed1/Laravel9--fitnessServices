@extends('layouts.adminBase')

@section('title', 'Edit-Service :'.$data->title)

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Edit {{$data->title}}</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="p-4 " style="background-color: #646b76 !important;">
                                <form action="{{route('admin.service.update',['id'=>$data->id])}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <select class="btn dropdown select2 bg-gradient-secondary" name="parent_id"
                                            style="color:black  ">
                                        <option value="0" selected="selected">Main Category</option>
                                        @foreach($dataList as $rs)
                                            <option
                                                value="{{ $rs->id }}"> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                        @endforeach
                                    </select>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-alternative"
                                                       id="exampleFormControlInput1" name="title"
                                                       value="{{$data->title}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-alternative"
                                                       id="exampleFormControlInput1" name="description"
                                                       value="{{$data->description}}">
                                            </div>
                                        </div>
                                    </div>
                                    {{--            removed_using_mothnNumber--}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <input type="file" name="image" value="{{$data->image}}"
                                                       class="form-control form-control-alternative is-valid"/>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-lg w-100"
                                            style="background:#4355b5">Update
                                    </button>
                                </form>
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


