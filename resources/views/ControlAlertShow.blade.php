
@extends('Masterpage_ControlPanel')

@section('title','الإشعارات')
@section('CssFile')
<link href="{{ asset('css//ControlPanel.css') }}" rel="stylesheet">
@stop

@section('Content')

<div class="header-txt">
<a class="box-linkk" href="#"><i class="fas fa-plus-square"></i> إضافة جديد </a>
</div>


<div class="container">
    
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<table class="wow fadeInDown">
  <thead>
    <tr>
      <th scope="col">تسلسل</th>
      <th scope="col">تاريخ الإرسال</th>
      <th scope="col">كود العميل</th>
      <th scope="col">اسم العميل</th>
      <th scope="col">النص المُرسل</th>

    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td data-label="تسلسل">23323</td>
      <td data-label="تاريخ الإرسال">451</td>
      <td data-label="كود العميل">محمد</td>
      <td data-label="اسم العميل">$1,190</td>
      <td data-label="النص المُرسل">2323</td>
     
    </tr>
  </tbody>
</table>
        </div>
        
    </div>
    
</div>

@stop

@section('JavaFile')
        
@stop