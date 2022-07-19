
<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>إستعادة الحساب</title>

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

<div class="wrapper">
                
                <div class="text-center mt-4 name">إستعادة كلمة المرور</div>
                        <form class="p-3 mt-3">
                            
                            
                            <label for="phone" class="pb-2">الرجاء إدخال رقم جوالك المسجل لدينا</label>
                            
                            <div class="form-field d-flex align-items-right"><input type="text" name="marketed-phone" placeholder="رقم الجوال" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"> <span class="fas fa-phone-volume icoo"></span> </div>
                            <div class="alert alert-info">
                                <p class="alert-txt">سيتم إرسال رسالة نصية تحتوي على رمز التحقق للتأكيد أضغط إرسال</p>
                             </div> 
                            <button class="btn mt-3">إرسال</button>
                            <div class="signup-backk text-right"><a href="/Marketer" class="signup-back"><- رجوع</a></div>
                             
                             
                             
                        </form>
                
</div>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="js2/bootstrap.min.js"></script>
        <script src="js2/all.min.js"></script>
    </body>
</html>
