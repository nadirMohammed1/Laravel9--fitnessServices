@extends('layouts.adminWindow')

@section('title', 'message-single')

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Single message Details</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <a href="{{route('admin.message.destroy',['id'=>$data->id])}}"
                                   style="text-decoration: none;color: white">
                                    <div class="btn btn-primary btn-lg w-25" style="background:#f5365c"> Delete message
                                    </div>
                                </a>
                                <table class="table align-items-center mb-0">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            name and surname
                                        </th>
                                        <td class="align-middle ">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$data->name}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Id
                                        </th>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">{{$data->id}}</span>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Phone number
                                        </th>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$data->phone}}</span>

                                        </td>
                                    </tr>


                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            message
                                        </th>
                                        <td class="align-middle ">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$data->message}}</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            message-subject
                                        </th>
                                        <td class="align-middle ">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$data->subject}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            message-ip
                                        </th>
                                        <td class="align-middle ">

                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{$data->ip}}
                                            </span>

                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            message-status
                                        </th>
                                        <td class="align-middle ">

                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{$data->status}}
                                            </span>

                                        </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            message-additional notes
                                        </th>
                                    </tr>

                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <form action="{{route('admin.message.update',['id'=>$data->id])}}"
                                                  method="post"
                                                  enctype="multipart/form-data">

                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control form-control-alternative"
                                                                   id="exampleFormControlInput1" name="note"
                                                                   value="{{$data->note}}" required>
                                                            <button role="button" type="submit">add note</button>
                                                        </div>

                                                    </div>
                                                </div>


                                            </form>
                                        </th>
                                    </tr>


                                </table>

                            </div>
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


