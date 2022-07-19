
<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>تسجيل الدخول</title>

        <!-- Bootstrap CSS -->
        <link href="css2//bootstrap.css" rel="stylesheet">
        <link href="css2//bootstrap-rtl.css" rel="stylesheet">
        <link href="css2//login.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jomhuria&family=Scheherazade+New:wght@700&display=swap" rel="stylesheet">
        <link href="css2//all.min.css" rel="stylesheet">
        <link href="css2//fontawesome.min.css" rel="stylesheet">
    </head>
    <body>
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
                <div class="logo"> <img src="img//techno.jpg" alt=""> </div>
                <div class="text-center mt-4 name">امــاس تكنولوجي</div>
                        <form class="p-3 mt-3" action="/LoginEnter" method="POST">
                            {{ csrf_field() }}
                            <div class="form-field d-flex align-items-right"><input type="text" name="hwya" required placeholder="رقم الهوية / الإقامة" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"> <span class="far fa-user icoo"></span> </div>
                            <div class="form-field d-flex align-items-right"><input type="password" name="password" required placeholder="كلمة المرور"> <span class="fas fa-key icoo"></span> </div>
                             <button type="submit" class="btn mt-3">دخول</button>
                            
                        </form>
                <div class="option-login text-center"><a href="/Forget" class="forget">نسيت كلمة المرور ؟</a> أو <a href="/Signup" class="signup">تسجيل جديد</a></div>
<hr>
<p class="text-center footer-txt">جميع الحقوق محفوظة © اماس البرمجيات للتصميم</p>
            </div>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="js2/bootstrap.min.js"></script>
        <script src="js2/all.min.js"></script>
    </body>
</html>
