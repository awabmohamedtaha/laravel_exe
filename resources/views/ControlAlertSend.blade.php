
@extends('Masterpage_ControlPanel')

@section('title','إرسال إشعار')
@section('CssFile')
<link href="{{ asset('css2//ControlPanel.css') }}" rel="stylesheet">
@stop

@section('Content')




<div class="container pt-5">
  <div class="row justify-content-center">
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
      <form action="/AlertSend" method="POST" onsubmit='disableButton()'>
  {{ csrf_field() }}

   
      <h5 style="color:white">إرسال إشعار</h5>
      <hr>
      <div class="form-group">
          <label style="color:white" for="">الإرسال الى :</label>
          
          <select name="sendto" style="height:50px" id="input" class="form-control" required="required">
            <option value="الكل">الكل</option>
          </select>
          
        </div>
        <div class="form-group">
          <label style="color:white" for="">النص</label>
          <textarea name="memo" id="input" class="form-control" rows="4" required="required"></textarea>
        </div>
        
      
        <button type="submit" id="btn1" class="box-linkk">إرسال</button>
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
        btn.innerText = 'جاري الإرسال ...'
    }
</script>   
@stop