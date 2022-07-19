@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
                <h1 style="text-align:center ; color:#3b8af2">تسجيل عضوية جديدة</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="exampleInputEmail1" class="form-label">الاسم الكامل</label>
                            <input name="name" type="text" class="form-control" @error('name') is-invalid @enderror value="{{ old('name') }}" required autocomplete="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">



                            <label for="exampleInputEmail1" class="form-label">الايميل</label>

                            <div class="col-md-12">
                                <input id="email" name="email" type="email" class="form-control" @error('email') is-invalid @enderror value="{{ old('email') }}" required autocomplete="email" id="exampleInputEmail1" aria-describedby="emailHelp">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>


                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="exampleInputPassword1" class="form-label"> اعد كلمة المرور</label>


                            <div class="col-md-12">
                                <input id="password-confirm" name="password_confirmation" type="password" class="form-control" required autocomplete="new-password"  id="psw"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                            </div>
                        </div>
                        <br> <br>
                        <div class="form-group row mb-0">
                            <div style="text-align: center">

                                <button type="submit" class="btn btn-primary">انشاء حساب جديد </button>
                                <a href="{{ route('login') }}"> <button type="button" class="btn btn-success">تسجيل الدخول</button></a>
                            </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>
@endsection
