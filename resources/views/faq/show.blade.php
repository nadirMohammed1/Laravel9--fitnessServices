@extends('layouts.adminBase')

@section('title', 'faq-single')

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Single faq Details</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <a href="{{route('admin.faq.edit',['id'=>$data->id])}}"
                                   style="text-decoration: none;color: white">
                                    <div class="btn btn-secondary btn-lg w-25" style="background:#4355b5"> edit
                                    </div>
                                </a>
                                <a href="{{route('admin.faq.destroy',['id'=>$data->id])}}"
                                   style="text-decoration: none;color: white">
                                    <div class="btn btn-primary btn-lg w-25" style="background:#f5365c"> Delete faq
                                    </div>
                                </a>
                                <table class="table align-items-center mb-0">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Id
                                        </th>
                                        <td class="align-middle ">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$data->id}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Question
                                        </th>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$data->question}}</span>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Answer INFO
                                        </th>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{!! $data->answer !!}</span>

                                        </td>
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


