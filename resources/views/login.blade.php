@extends('layouts.app')

@section('cssFile')
<!-- Bootstrap CSS -->

        <link href="{{ asset('css2//login.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jomhuria&family=Scheherazade+New:wght@700&display=swap" rel="stylesheet">
        <link href="{{ asset('css2//all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css2//fontawesome.min.css') }}" rel="stylesheet">
        @endsection
@section('content')
@if(session()->has('Save'))

<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   {{ session()->get('Save') }}
</div>
@endif


@if(session()->has('worng_password'))

<div class="alert alert-danger">
    {{ session()->get('worng_password') }}
</div>

                @endif
                @if(session()->has('worng_hwya'))

<div class="alert alert-danger">
    {{ session()->get('worng_hwya') }}
</div>

                @endif
<div class="wrapper">
                <div class="logoo"> <img src="img//techno.jpg" alt=""> </div>
                <div class="text-center mt-4 name">امــاس تكنولوجي</div>
                        <form class="p-3 mt-3" action="/LoginEnter" method="POST">
                            {{ csrf_field() }}
                            <div class="form-field d-flex align-items-right"><input type="text" name="username" required placeholder="اسم المستخدم" maxlength="10" > <span class="far fa-user icoo"></span> </div>
                            <div class="form-field d-flex align-items-right"><input type="password" maxlength="10" name="password" required placeholder="كلمة المرور"> <span class="fas fa-key icoo"></span> </div>
                             <button type="submit" class="btn mt-3">دخول</button>
                            
                        </form>
                
<hr>
<p class="text-center footer-txt">جميع الحقوق محفوظة © اماس البرمجيات للتصميم</p>
            </div>
@endsection
@section('jsScript')
 <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="js2/bootstrap.min.js"></script>
        <script src="js2/all.min.js"></script>
@endsection