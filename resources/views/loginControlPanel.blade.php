
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

                @if(session()->has('worng'))

<div class="alert alert-danger">
    {{ session()->get('worng') }}
</div>

                @endif
<div class="wrapper">
                <div class="logo"> <img src="img//techno.jpg" alt=""> </div>
                <div class="text-center mt-4 name">امــاس تكنولوجي</div>
                        <form class="p-3 mt-3" action="/loginControlPanelEnter" method="POST">
                            {{ csrf_field() }}
                            <div class="form-field d-flex align-items-right"><input type="text" name="username" required placeholder="اسم المستخدم" maxlength="21"> <span class="far fa-user icoo"></span> </div>
                            <div class="form-field d-flex align-items-right"><input type="password" name="password" required placeholder="كلمة المرور"> <span class="fas fa-key icoo"></span> </div>
                             <button type="submit" class="btn mt-3">دخول</button>
                            
                        </form>
                
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
