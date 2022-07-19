<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>شركة اماس تكنولوجي للبرمجيات</title>

@yield('cssFile')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="img/1.png" rel="icon">
    <link href="assets/img/1.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap" rel="stylesheet">
{{--ajax--}}
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
          rel="stylesheet">
          
          <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Ads: 10827705957 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10827705957"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10827705957');
</script>

<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-10827705957/qBFkCJ_LjosDEOXchqso'});
</script>

<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script> 
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-215632667-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-215632667-1');
</script>
 
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    
  
   
    
</head>
<body>
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i  class="bi bi-envelope d-flex align-items-center"><a href="AmasTechnology@hotmail.com">AmasTechnology@hotmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+966557017003</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://twitter.com/amastechno" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/%D8%A7%D9%85%D8%A7%D8%B3-%D8%AA%D9%83%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A-%D9%84%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D9%8A%D8%A7%D8%AA-%D9%88%D8%A7%D9%84%D8%AA%D8%B3%D9%88%D9%8A%D9%82-%D8%A7%D9%84%D8%B4%D8%A8%D9%83%D9%8A-100272459254122" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/amastechno/?utm_medium=copy_link" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/feed/?trk=onboarding-landing" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</section>

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
<img style = "width: 110px" src="img/roya.jpg" alt="Italian Trulli">
        <h1 class="logo"><a href="/">Amas <span>technology</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar ">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('welcome') }}">الصفحة الرئيسية</a></li>

                <li><a class="nav-link scrollto" href="{{route('about')}}">من نحن</a></li>
                <li><a class="nav-link scrollto" href="{{route('tackit')}}">فتح تزكرة </a></li>
                <li><a class="nav-link scrollto" href="{{ route('tackit_view') }}">التذاكر السابقة</a></li>






                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                        <li style="padding-right: 5%" ><a class="nav-link scrollto" href="{{ route('login') }}">دخول الاعضاء </a></li>

                        @endif
<li style="padding-right: 0%" ><a class="nav-link scrollto" href="{{ route('Marketer') }}">دخول الموظفين </a></li>
                        @if (Route::has('register'))
                                <li><a class="nav-link scrollto" href="{{ route('register') }}">تسجيل عضوية </a></li>

                        @endif
                    @else
                    <li style="padding-right: 25%"><a class="nav-link scrollto" href="{{ route('logout') }}"  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"> تسجيل خروج   </a></li>
                        <li class="nav-item dropdown">

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   تسجيل خروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                    <li><a class="nav-link scrollto" href="{{ route('register') }}">انشاء حساب  </a></li>
                            </form>
                        </li>

                    @endguest




            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>




            @yield('content')


<footer id="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">

            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>أماس كابتال<span></span></h3>
                    <p>
                        شارع الملك سعود <br> خميس مشيط - حي الزهور<br> المملكة العربية السعودية <br><br>
                        <strong>Phone:</strong> +966557017003<br>
                        <strong>Email:</strong> info@amastechnology.com/<br>
                    </p>
                </div>





                <div class="col-lg-3 col-md-6 footer-links">
                    <h4> مواقع التواصل الاجتماعي</h4>
                    <p>هنالك فريق عمل متخصص للرد علي كل الاستفسارات واستقبال الطلبات</p>
                    <div class="social-links mt-3">
                        <a href="https://twitter.com/amastechno" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/%D8%A7%D9%85%D8%A7%D8%B3-%D8%AA%D9%83%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A-%D9%84%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D9%8A%D8%A7%D8%AA-%D9%88%D8%A7%D9%84%D8%AA%D8%B3%D9%88%D9%8A%D9%82-%D8%A7%D9%84%D8%B4%D8%A8%D9%83%D9%8A-100272459254122" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/amastechno/?utm_medium=copy_link" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="https://www.linkedin.com/feed/?trk=onboarding-landing" class="linkedin"><i class="bx bxl-linkedin"></i></a>




                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>AmasTicnolgi</span></strong>. All Rights Reserved
        </div>
        {{-- <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
            Designed by <a href="https://www.facebook.com/awab.mohamedtaha">Awab Mohamed Taha</a>
        </div> --}}
    </div>
</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a href="https://api.whatsapp.com/send?phone=+966557017003&text=&source=&data" style = "background-color: #25d366" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>


<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

@yield('jsScript')
</body>
</html>
