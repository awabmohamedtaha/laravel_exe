@extends('layouts.app')

@section('content')

    <!-- ======= Header ======= -->

    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>WellCome to <span>Amas technology</span></h1>
            <h2>مرحبا بك الزائر الكريم  في اماس تكنولوجي للبرمجيات والتسويق الشبكي</h2>
            <div class="d-flex">



                <a style="margin-left: 20px" href="{{ route('tackit') }}" class="btn btn-primary">فتح تزكرة جديدة</a>
                <a  href="https://api.whatsapp.com/send?phone=+966557017003&text=&source=&data=" class="btn btn-success">راسلنا عن طريق الواتساب</a>


            </div>
        </div>
    </section>
    <!-- End Hero -->


    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">تصميم المواقع</a></h4>
                            {{-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> --}}
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">انظمة سطح المكتب</a></h4>
                            {{-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p> --}}
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">تطبيقات الجوال</a></h4>
                            {{-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> --}}
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">التسويق الشبكي</a></h4>
                            {{-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p> --}}
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->


        <!-- ======= Skills Section ======= -->
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>يشعر بالرضي عن الخدمة</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>المشاريع المكتملة</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>ساعات تواجد الدعم الفني</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Clients Section ======= -->

        <!-- End Clients Section -->


        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">

                    <h3>تعرف اكثر علي خدمات <span>اماس تكنولوجي</span></h3>
                    <p> نقدم مجموعه من الخدمات البرمجية المميزة التي تلبي كل احتياجات العملاء من داخل المملكة العربية والسعودية وخارجها </p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">

                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">تصميم المواقع الإلكترونية <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                    تصميم مواقع الكترونية بواسطة مجموعة مميزة من مصميمي المواقع اللكترونية
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">انظمة سطح المكتب<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        لدينا مجموعة من أنظمة سطح المكتب يمكنك أختيار النظام الذي يناسب نشاطك التجاري او طلب نظام جديد حسب طلبك
                                    </p>
                                </div>
                            </li>

                            <li>

                                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">تطبيقات الجوال <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                      تصميم برامج الجوال للأندرويد و الأيفون باحدث التقنيات بواسطة مبرمجين متخصصين
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">تصميم المتاجر الالكترونية <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                      تصميم متجرك الالكتروني حسب مواصفاتك و ربطه مع جميع بوابات الدفع الكتروني
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">تصميم الهويات الالكترونية <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                تصميم الهويات البصرية للشركات و المحلات التجارية بواسطة مجموعة من المصممين المحترفين
                                </p>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->



        <!-- ======= Services Section ======= -->

        <!-- ======= Testimonials Section ======= -->
 <!-- The video -->

      


        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                
                                <h3>Amas Technology</h3>
                                <h4>Full-stack Developers</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Specializes in designing and programming all computerized systems desktop systems, web systems and mobile applications
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                       <!-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure
                                    amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                 -->

                      <!--   <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                     -->

                  <!--   <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                      -->

                     <!--     <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse
                                    veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                  -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->

        <!-- ======= Team Section ======= -->

        <!-- ======= Pricing Section ======= -->

        <!-- ======= Frequently Asked Questions Section ======= -->

        <!-- ======= Contact Section ======= -->

@endsection
