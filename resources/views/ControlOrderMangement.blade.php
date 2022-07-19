@extends('Masterpage_ControlPanel')

@section('title','إدارة الطلبات')
@section('CssFile')
<link href="{{ asset('css2//ControlPanel.css') }}" rel="stylesheet">
@stop

@section('Content')

@if(session()->has('Save'))

<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   {{ session()->get('Save') }}
</div>

@endif

<div class="container box-contener">
    
    <div class="row">
        
        
        <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3">
               <div class="boxOrder box-a">
                 <p class="box-header">الطلبات الجديدة ({{ $Count_New_Order }})</p>
               </div>
               <div class="boxContent wow fadeInDown">
                   <img class="box-img" src="img/send.png"/>
                   <a class="box-link" href="/ControlOrderNew"><i class="fas fa-eye"></i> استعراض</a>
               </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3">
           <div class="boxOrder box-c">
             <p class="box-header">تحت الدراسة ({{ $Count_Proccess_Order }})</p>
           </div> 
           <div class="boxContent wow fadeInDown">
           <img class="box-img" src="img/sand-clock.png"/>
           <a class="box-link" href="/ControlOrderProccessShow"><i class="fas fa-eye"></i> استعراض</a>
           </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3">
           <div class="boxOrder box-b">
             <p class="box-header">الطلبات المُعلقة ({{ $Count_Wite_Order }})</p>
           </div>
           <div class="boxContent wow fadeInDown">
           <img class="box-img" src="img/report.png"/>
           <a class="box-link" href="/ControlOrderWaiting"><i class="fas fa-eye"></i> استعراض</a>
           </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3">
           <div class="boxOrder box-d">
             <p class="box-header">الطلبات المكتملة ({{ $Count_Done_Order }})</p>
           </div>
           <div class="boxContent wow fadeInDown">
           <img class="box-img" src="img/check.png"/>
           <a class="box-link" href="/ControlOrderDone"><i class="fas fa-eye"></i> استعراض</a>
           </div>
        </div>
        
        
    </div>
    
</div>

<hr class="hr-text" data-content="تعليمات">


<div class="container info-contener">
    
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="info-text">
            <ul class="info-ul">
              <li class="info-a wow fadeInDown">الطلبات الجديدة : هي قائمة بجميع الطلبات الواردة حديثاً والتي لم تتم معالجتها بعد وهي في هذه المرحلة قابلة للتعديل أو الحذف من قِبل العميل</li>
              <li class="info-c wow fadeInDown">تحت الدراسة : هي حالة الطلبات بعد إستقبالها وهي بإنتظار الدراسة والمعالجة من قِبل الجهة المختصة </li>
              <li class="info-b wow fadeInDown">الطلبات المُعلقة : هي الطلبات التي تمت معالجتها مبدئياً و حالتها الحالية في انتظار ردود العميل لإستكمال المعالجة</li>
              <li class="info-d wow fadeInDown">الطلبات المكتملة : هي الطلبات التي تمت معالجتها بالكامل وتشير الى حالة الطلب النهائية</li>
            </ul>
            </div>
        </div>
        
    </div>
    
</div>


@stop

@section('JavaFile')
      
@stop
