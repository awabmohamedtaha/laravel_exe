
@extends('Masterpage_ControlPanel')

@section('title','المالية')
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
      <th scope="col">رقم العملية</th>
      <th scope="col">تاريخها</th>
      <th scope="col">كود العميل</th>
      <th scope="col">اسم العميل</th>
      <th scope="col">المبلغ</th>
      <th scope="col">البيان</th>
      <th scope="col">المرفقات</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row" data-label="رقم العملية">Visa - 3412</td>
      <td data-label="تاريخها">23323</td>
      <td data-label="كود العميل">451</td>
      <td data-label="اسم العميل">محمد</td>
      <td data-label="المبلغ">$1,190</td>
      <td data-label="البيان">2323</td>
      <td data-label="المرفقات"><a class="box-linkkk"><i class="fas fa-download"></i></a></td>
    </tr>
  </tbody>
</table>
        </div>
        
    </div>
    
</div>

@stop

@section('JavaFile')
        
@stop