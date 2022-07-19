@extends('layouts.app')

@section('content')
    <!-- Section: Features v.2 -->
    <section class="my-5">

        <!-- Section heading -->
        <h1 style="color:  #106eea" class="h1-responsive font-weight-bold text-center my-5">من نحن</h1>
        <!-- Section description -->
        <div class="container">
        <p class="lead grey-text text-center w-responsive mx-auto mb-5">
            شركة اماس تكنلوجي هي عبارة عن شركة تختص في مجال البرمجيات لجميع الشركات والمؤسسات تعمل علي ايجاد الحلول التقنية المبتكره
             والمميزه لجميع المشاكل التقنية ومن اهم الاقسام المتوفرة هم قسم المواقع والمتاجر الإلكترونية وانظمة الشركات والمؤسسات اضافة الي تطبيقات الموبايل </p>
        </div>
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mb-md-0 mb-5">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-2 col-md-3 col-2">
                        <i class="fas fa-bullhorn blue-text fa-2x"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-10 col-md-9 col-10">
                        <h4 class="font-weight-bold">المواقع والمتاجر الإلكترونية</h4>
                        <p class="grey-text">نمتلك فريق مميز ومختص في مجال المواقع الإلكترونية والمتاجر وهويات الشركات والافراد بافضل اللغات العالمية والتي تسيطر علي السوق العالمي </p>
                        <a href="{{route('tackit')}}" class="btn btn-primary btn-sm">اطلبها من هنا</a>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 mb-md-0 mb-5">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-2 col-md-3 col-2">
                        <i class="fas fa-cogs pink-text fa-2x"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-10 col-md-9 col-10">
                        <h4 class="font-weight-bold">انظمة سطح المكتب</h4>
                        <p class="grey-text">هي عبارة عن انظمة الشركات والمؤسسات التي تلبي احتياجات كل مؤسسة ومنها الانظمة الادارية والمحاسبية وانظمة المخزون وانظمة الارشفة والموارد البشرية التي تصمم وتبرمج بافضل اللغات العالمية التي تمكن من ربط النظام باكتر من منطقه تعمل كلها في وقت واحد مرتبطه مع بعضها اضافة الي ربطها بالجوال لاطلاع الادارة بالتقارير اللحظية من الايرادات والمنصرفات والتحكم بالصلاحيات وغيرها من الامتيازات علي حسب احتياج كل مؤسسة </p>
                        <a href="{{route('tackit')}}" class="btn btn-primary btn-sm">اطلبها من هنا</a>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-2 col-md-3 col-2">
                        <i class="fas fa-tachometer-alt purple-text fa-2x"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-10 col-md-9 col-10">
                        <h4 class="font-weight-bold">تطبيقات الجوال</h4>
                        <p class="grey-text">قسم الموبايل يحتوي علي مصممين ومبرمجين بكفائة عاليه يمكنهم تنفيز كل الاعمال بصورة احترافية </p>
                        <a href="{{route('tackit')}}" class="btn btn-primary btn-sm">اطلبها من هنا</a>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Features v.2 -->

@endsection
