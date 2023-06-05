@extends('layouts.adminBase')

{{--text editor plugin--}}
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@section('content')

@section('title', 'MyDashBoard')
@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <form action="/admin/setting/update" method="post"
              enctype="multipart/form-data">
            @csrf
            <nav>
                <div class="nav bg-light nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-general-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-general" type="button" role="tab" aria-controls="nav-general"
                            aria-selected="true">general
                    </button>
                    <button class="nav-link" id="nav-smtp-tab" data-bs-toggle="tab" data-bs-target="#nav-smtp"
                            type="button" role="tab" aria-controls="nav-smtp" aria-selected="false">smtp
                    </button>
                    <button class="nav-link" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                            type="button" role="tab" aria-controls="nav-about" aria-selected="false">about
                    </button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                            type="button" role="tab" aria-controls="nav-contact" aria-selected="false">contact
                    </button>
                    <button class="nav-link" id="nav-social-tab" data-bs-toggle="tab" data-bs-target="#nav-social"
                            type="button" role="tab" aria-controls="nav-social" aria-selected="false">social
                    </button>
                    <button class="nav-link" id="nav-references-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-references" type="button" role="tab" aria-controls="nav-references"
                            aria-selected="false" references>references
                    </button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-general" role="tabpanel"
                     aria-labelledby="nav-general-tab" tabindex="0">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="p-4 " style="background-color: #646b76 !important;">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="id" id="id" value="{{$data->id}}" class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="title" value="{{$data->title}}"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="keywords"
                                               placeholder="key-words">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="description"
                                               placeholder="description">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="company"
                                               placeholder="company">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="adress"
                                               placeholder="adress">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="phone"
                                               placeholder="phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="email"
                                               placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="status"
                                               placeholder="status">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: white;font-size: medium">icon</label>
                                        <input type="file" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="icon"
                                               placeholder="icon">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-smtp" role="tabpanel" aria-labelledby="nav-smtp-tab" tabindex="0">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="p-4 " style="background-color: #646b76 !important;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>smtp server</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="smtpserver"
                                               placeholder="enter smtp">
                                    </div>
                                    <div class="form-group">
                                        <label>smtp mail</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="smtpmail"
                                               placeholder="enter smtp mail">
                                    </div>
                                    <div class="form-group">
                                        <label>smtp mail</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="smtpmail"
                                               placeholder="enter smtp mail">
                                    </div>
                                    <div class="form-group">
                                        <label>smtp password</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="smtppassowrd"
                                               placeholder="enter smtp password">
                                    </div>
                                    <div class="form-group">
                                        <label>smtp port</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="smtpport"
                                               placeholder="enter smtp port">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab" tabindex="0">
                    <div class="p-4 " style="background-color: #646b76 !important;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Enter about us info</label>
                                    <textarea name="aboutus" class="form-control" id="aboutus"
                                              rows="3"></textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#aboutus'))
                                            .then(editor => {
                                                console.log(editor);
                                            })
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                     tabindex="0">
                    <div class="p-4 " style="background-color: #646b76 !important;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Enter contact us info</label>
                                    <textarea name="contact" class="form-control" id="contact"
                                              rows="3"></textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#contact'))
                                            .then(editor => {
                                                console.log(editor);
                                            })
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab"
                     tabindex="0">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="p-4 " style="background-color: #646b76 !important;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="fax"
                                               placeholder="enter fax">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="facebook"
                                               placeholder="enter facebook account">
                                    </div>
                                    <div class="form-group">
                                        <label>twitter</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="twitter"
                                               placeholder="enter twitter account">
                                    </div>
                                    <div class="form-group">
                                        <label>instagram</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="instagram"
                                               placeholder="enter instagram account">
                                    </div>
                                    <div class="form-group">
                                        <label>youtube</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               id="exampleFormControlInput1" name="youtube"
                                               placeholder="enter youtube account">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab"
                     tabindex="0">
                    <div class="p-4 " style="background-color: #646b76 !important;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Enter Reference info</label>
                                    <textarea name="references" class="form-control" id="references"
                                              rows="3"></textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#references'))
                                            .then(editor => {
                                                console.log(editor);
                                            })
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-secondary btn-lg w-100"
                    style="background:#4355b5">Updaate settings
            </button>
        </form>
        @include('AdminPanel.footer')
        </div>
    </main>
@endsection


