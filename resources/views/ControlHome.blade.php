@extends('Masterpage_ControlPanel')

@section('title', 'لوحة التحكم')

@section('CssFile')
<link href="{{ asset('css2//ControlPanel.css') }}" rel="stylesheet">
@stop

@section('Content')

<div class="container user-menu">
    
    <div class="row justify-content-center">

    <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3">
            <div class="menu wow fadeInDown">
            <img class="menu-img" src="img//group.png"/>
            <a class="box-link" href="/ControlClients"><i class="fas fa-users-cog"></i> إدارة العملاء</a> 
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3">
            <div class="menu wow fadeInDown">
            <img class="menu-img" src="img//settings.png"/>
            <a class="box-link" href="/ControlOrderMangement"><i class="fas fa-cogs"></i> إدارة الطلبات</a> 
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3">
            <div class="menu wow fadeInDown">
            <img class="menu-img" src="img//chat.png"/>
            <a class="box-link" href="/ControlAlertShow"><i class="fas fa-comment-dots"></i> إدارة الإشعارات</a>
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3">
            <div class="menu wow fadeInDown">
            <img class="menu-img" src="img//purse.png"/>
            <a class="box-link" href="/ControlBlanceShow" style="pointer-events:none"><i class="fas fa-wallet"></i> الإدارة المالية</a> 
            </div>
        </div>

    </div>
    
</div>
@stop

@section('JavaFile')
       
@stop
