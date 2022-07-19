
@extends('Masterpage_ControlPanel')

@section('title','الطلبات المُعلقة')
@section('CssFile')
<link href="{{ asset('css2//ControlPanel.css') }}" rel="stylesheet">
@stop

@section('Content')


<div class="container">
  <div class="row justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
   
      <div class="alert alert-info div_order_Proccess">
        <h5>#رقم الطلب [{{ $orderid }}]</h5>
      </div>
      
    </div>

    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
  
      <div class="alert alert-info div_order_Proccess_systemm">
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text_worng">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="/OrderProccessWiteSave" method="POST" enctype="multipart/form-data" onsubmit='disableButton()'>
  {{ csrf_field() }}

    @if($orderid)
    <input type="hidden" name="orderid" id="input" value="{{ $orderid }}" class="form-control">
    @endif
      <h5 style="color:white">ردود النظام</h5>
      <hr>
      <div class="form-group">
          <label style="color:white" for="">نوع المعالجة للطلب :</label>
          
          <select name="state" style="padding:5px" id="input" class="form-control" required="required">
            <option value="مُعلق">إستكمال معالجة</option>
            <option value="مكتمل">معالجة كلية</option>
          </select>
          
        </div>
        <div class="form-group">
          <label style="color:white" for="">التفاصيل</label>
          <textarea name="sendtext" id="input" class="form-control" rows="4" required="required"></textarea>
        </div>
        <div class="form-group">
          <label style="color:white" for="">مرفقات للتحميل</label>
          <input type="file" name="sendfile" id="input" class="form-control">
          <p class="pdf_placeholder">يجب ان يكون المرفق بصيغة PDF وان لايتجاوز حجم الملف 5 ميغابايت</p>
        </div>
      
        <button type="submit" id="btn1" class="box-linkk">تأكيد</button>
      </form>
        
      
        
      </div>
    </div>
    
  </div>
</div>

@stop

@section('JavaFile')
<script>
    function disableButton() {
        var btn = document.getElementById('btn1');
        btn.disabled = true;
        btn.innerText = 'جاري المعالجة ...'
    }
</script>   
@stop