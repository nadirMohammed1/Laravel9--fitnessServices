@extends('layouts.adminBase')

@section('title', 'MyDashBoard')

{{--text editor plugin--}}
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

{{--main content start's from here--}}
@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Create Service</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="p-4 " style="background-color: #646b76 !important;">
                                <form action="{{route('admin.faq.store')}}" method="post"
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
                                                       placeholder="enter_question" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Enter Answer:</label>
                                            <textarea name="answer" class="form-control" id="answer"
                                                      rows="3"></textarea>
                                            <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#answer'))
                                                    .then(editor => {
                                                        console.log(editor);
                                                    })
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                            </script>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-lg w-100"
                                            style="background:#4355b5">Create
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


