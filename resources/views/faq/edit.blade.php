@extends('layouts.adminBase')

@section('title', 'Edit-faq :'.$data->title)

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Edit {{$data->name}}</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="p-4 " style="background-color: #646b76 !important;">
                                <form action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <select class="btn dropdown select2 bg-gradient-secondary" name="status"
                                            style="color:black  ">
                                        <option value="0" selected="selected">Main status</option>
                                        <option value="true" selected="selected">true</option>
                                        <option value="false" selected="selected">false</option>
                                    </select>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-alternative"
                                                       id="exampleFormControlInput1" name="question"
                                                       value="{{$data->question}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-alternative"
                                                       id="exampleFormControlInput1" name="answer"
                                                       value="{{$data->answer}}">
                                            </div>
                                        </div>
                                    </div>
                                    {{--            removed_using_mothnNumber--}}
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


