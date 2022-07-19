
<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        
        <!-- Bootstrap CSS -->
      <link href="{{ asset('css2//bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css2//bootstrap-rtl.css') }}" rel="stylesheet">
        <link href="{{ asset('css2//Order.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jomhuria&family=Scheherazade+New:wght@700&display=swap" rel="stylesheet">
        <link href="{{ asset('css2//all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css2//fontawesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css2//navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css2//animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css2//Table.css') }}" rel="stylesheet">
        @yield('CssFile')
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <div class="text-right ul-items">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link aa" href="/Home"><i class="fas fa-home"></i> الرئيسية</a>
      </li>
      <li class="nav-item">
        <a class="nav-link aa" href="/Order"><i class="fas fa-plus-square"></i> طلب جديد</a>
      </li>
      <li class="nav-item">
        <a class="nav-link aa" href="/OrderMangement"><i class="fas fa-cogs"></i> إدارة الطلبات</a>
      </li>
      <li class="nav-item">
        <a class="nav-link aa" href="/Blance" style="pointer-events:none"><i class="fas fa-wallet"></i> المحفظة</a>
      </li>
      @if($Count_New_Alert > 0)
      <li class="nav-item">
        <a class="nav-link aa" href="/Alert"><i class="fas fa-comment-dots"></i> الإشعارات الواردة <span style="color:white">[{{ $Count_New_Alert }}]</span> </a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link aa" href="/Alert"><i class="fas fa-comment-dots"></i> الإشعارات الواردة <span style="color:white">[0]</span> </a>
      </li>
      @endif
      
      <li class="nav-item exit">
        <a class="nav-link" href="/Marketer"><i class="fas fa-sign-out-alt fas-white"></i> تسجيل خروج</a>
      </li>
    </ul>
    
</div>
<i class="fas fa-user-circle"></i><span class="user"> {{ session()->get('username') }}</span>
<div class="logout">
    <a class="logout-txt" href="/Marketer"><i class="fas fa-sign-out-alt"></i> تسجيل خروج</a>
</div>
  </div>
</nav>

@yield('Content')


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="{{ asset('js2/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js2/all.min.js') }}"></script>
@yield('JavaFile')
<script src="{{ asset('js2/wow.min.js') }}"></script>
<script>
   wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
</script>

    </body>
</html>
