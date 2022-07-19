<style>

    body{
        background-color: #e6e6e6;
        width: 100%;
        height: 100%;
    }
    #success_tic .page-body{
        max-width:300px;
        background-color:#FFFFFF;
        margin:10% auto;
    }
    #success_tic .page-body .head{
        text-align:center;
    }
    /* #success_tic .tic{
      font-size:186px;
    } */
    #success_tic .close{
        opacity: 1;
        position: absolute;
        right: 0px;
        font-size: 30px;
        padding: 3px 15px;
        margin-bottom: 10px;
    }
    #success_tic .checkmark-circle {
        width: 150px;
        height: 150px;
        position: relative;
        display: inline-block;
        vertical-align: top;
    }
    .checkmark-circle .background {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: #1ab394;
        position: absolute;
    }
    #success_tic .checkmark-circle .checkmark {
        border-radius: 5px;
    }
    #success_tic .checkmark-circle .checkmark.draw:after {
        -webkit-animation-delay: 300ms;
        -moz-animation-delay: 300ms;
        animation-delay: 300ms;
        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-timing-function: ease;
        -moz-animation-timing-function: ease;
        animation-timing-function: ease;
        -webkit-animation-name: checkmark;
        -moz-animation-name: checkmark;
        animation-name: checkmark;
        -webkit-transform: scaleX(-1) rotate(135deg);
        -moz-transform: scaleX(-1) rotate(135deg);
        -ms-transform: scaleX(-1) rotate(135deg);
        -o-transform: scaleX(-1) rotate(135deg);
        transform: scaleX(-1) rotate(135deg);
        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    #success_tic .checkmark-circle .checkmark:after {
        opacity: 1;
        height: 75px;
        width: 37.5px;
        -webkit-transform-origin: left top;
        -moz-transform-origin: left top;
        -ms-transform-origin: left top;
        -o-transform-origin: left top;
        transform-origin: left top;
        border-right: 15px solid #fff;
        border-top: 15px solid #fff;
        border-radius: 2.5px !important;
        content: '';
        left: 35px;
        top: 80px;
        position: absolute;
    }

    @-webkit-keyframes checkmark {
        0% {
            height: 0;
            width: 0;
            opacity: 1;
        }
        20% {
            height: 0;
            width: 37.5px;
            opacity: 1;
        }
        40% {
            height: 75px;
            width: 37.5px;
            opacity: 1;
        }
        100% {
            height: 75px;
            width: 37.5px;
            opacity: 1;
        }
    }
    @-moz-keyframes checkmark {
        0% {
            height: 0;
            width: 0;
            opacity: 1;
        }
        20% {
            height: 0;
            width: 37.5px;
            opacity: 1;
        }
        40% {
            height: 75px;
            width: 37.5px;
            opacity: 1;
        }
        100% {
            height: 75px;
            width: 37.5px;
            opacity: 1;
        }
    }
    @keyframes checkmark {
        0% {
            height: 0;
            width: 0;
            opacity: 1;
        }
        20% {
            height: 0;
            width: 37.5px;
            opacity: 1;
        }
        40% {
            height: 75px;
            width: 37.5px;
            opacity: 1;
        }
        100% {
            height: 75px;
            width: 37.5px;
            opacity: 1;
        }
    }


</style>
@extends('layouts.app')

@section('content')
    @if (session('status'))
        <script>
            $(document).ready(function(){

                $("#success_tic").modal("show");;

            });
        </script>

        <!-- Modal -->
        <div id="success_tic" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <a class="close" href="#" data-dismiss="modal">&times;</a>
                    <div class="page-body">
                        <div class="head">
                            <h3 style="margin-top:5px;">{{ session('status') }}</h3>
                            <h4>  {{__('شكر لثقتكم سيتم التوصل معك في اقرب فرصة')}} </h4>
                        </div>

                        <h1 style="text-align:center;"><div class="checkmark-circle">
                                <div class="background"></div>
                                <div class="checkmark draw"></div>
                            </div><h1>

                    </div>
                </div>
            </div>

        </div>

    @endif



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <br>
                <br>
                <br>
                <h1 style="text-align:center ; color:#3b8af2">طلبات الخدمات </h1>
                <br> <br> <br>
                <table class="table table-bordered text-center" text-center>

                    <thead>
                    <tr style="background-color: #3b8af2 ; color: #ffffff">
                        <th scope="col">رقم الطلب</th>
                        <th scope="col">الخدمة</th>
                        <th scope="col">حالة الطلب</th>
                        <th scope="col">حذف الخدمة</th>
                    </tr>

                    </thead>
                    @isset($tackit)
                    @foreach ($tackit as $tackits)
                    <tbody style="color: #3b8af2">
                    <tr>
                        <th scope="row">{{$tackits->id}}</th>

                        <td>{{$tackits->servesses}}</td>
                        @if($tackits->tybe === 0)
                        <td>تم استلام الطلب</td>
                        @endif
                        @if($tackits->tybe === 1)
                            <td>يعمل الفريق علي الطلب</td>
                        @endif
                        @if($tackits->tybe === 2)
                            <td>تم الانتهاء من لطلب</td>
                        @endif
                        @if($tackits->tybe === 3)
                            <td>تم رفض الطلب</td>
                        @endif

                        <td>



                          <a class="btn btn-dark" style="width: 100% ; background-color: #3b8af2" href="delete/{{ $tackits->id }}">حذف </a>

                        </td>
                    </tr>


                    </tbody>
                    @endforeach
                    @endisset
                </table>

        </div>
    </div>
    </div>
@endsection
