@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dissmiss="alert">x</button>
    </div>
@endif


{{--code for error message--}}
@if($message = Session::get('error'))

    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dissmiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif


{{--code for warning message--}}
@if($message = Session::get('warning'))

    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dissmiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif


{{--code for warning message--}}
@if($message = Session::get('info'))

    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dissmiss="alert">x</button>
        <strong>{{$message}}
    </div>

@endif


@if ($errors->any())

    <div class="alert alert-danger">

        <button type="button" class="close" data-dismiss="alert"></button>

        Check the following errors :(

    </div>

@endif
