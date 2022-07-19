@extends('layouts.app')

@section('content')

    <div class="container">
        <div id="login" class="login">
            <div class="row g-0">
                <div class="col-6 col-md-4"></div>
                <div class="col-sm-12 col-md-6">
                    <br>
                    <br>
                    <h1 style="text-align:center ; color:#3b8af2">تسجيل الدخول</h1>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">الايميل</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div style="text-align: center">
                            <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                            <a href="{{ route('register') }}"> <button  type="button" class="btn btn-success">انشاء حساب جديد</button></a>
                        </div>
                    </form>

                </div>
                <div class="col-6 col-md-4"></div>
            </div>
            <br>


        </div>
    </div>



@endsection
