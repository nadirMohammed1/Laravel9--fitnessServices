@extends('layouts.adminWindow')

@section('title', 'user-single')

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Single user Details</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <a href=""
                                   style="text-decoration: none;color: white">
                                    <div class="btn btn-primary btn-lg w-25" style="background:#f5365c"> Delete user
                                    </div>
                                </a>
                                <table class="table align-items-center mb-0">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            name
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
                                            role
                                        </th>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">
                                                @foreach($data->roles as $role)
                                                    {{$role->name}}
                                                @endforeach
                                            </span>

                                        </td>
                                    </tr>


                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            status
                                        </th>
                                        <td class="align-middle ">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$data->status}}</span>
                                        </td>
                                    </tr>

                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            user-status
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
                                            add-User-role
                                        </th>
                                    </tr>

                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            <form action="{{route('admin.user.addrole',['id'=>$data->id])}}"
                                                  method="post"
                                                  enctype="multipart/form-data">

                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select name="role_id">
                                                                @foreach($roles as $role)
                                                                    <option
                                                                        value="{{$role->id}}">{{$role->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <button role="button" type="submit">add Role</button>
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


