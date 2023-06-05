@extends('layouts.adminBase')

@section('title', 'MyDashBoard')

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Faqs Table</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            id
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Question
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Answer
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            status
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
                                              class="text-secondary text-xs font-weight-bold">{{$rs->question}}</span>

                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{!! $rs->answer !!}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->status}}</span>
                                            </td>

                                            <td class="align-middle">
                                                <a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"
                                                   class="font-weight-bold text-xs btn btn-danger" data-toggle="tooltip"
                                                   data-original-title="Edit user">
                                                    Delete
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"
                                                   class="font-weight-bold text-xs btn btn-warning"
                                                   data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{route('admin.faq.show',['id'=>$rs->id])}}"
                                                   class="font-weight-bold text-xs btn btn-info" data-toggle="tooltip"
                                                   data-original-title="Edit user">
                                                    show
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('admin.faq.create')}}" style="text-decoration: none;color: white">
                                    <div class="btn btn-secondary btn-lg w-100" style="background:#4355b5"> Add
                                        Faq
                                    </div>
                                </a>
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


