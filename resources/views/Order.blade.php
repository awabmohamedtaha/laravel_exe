@extends('Masterpage')

@section('title','طلب جديد')
@section('CssFile')
     
@stop

@section('Content')
<div class="header-txt">
    <p class="txt-lable"><i class="far fa-plus-square icox"></i> إضافة طلب جديد</p>
</div>


<div class="container">
    
    <div class="row justify-content-center">

    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="order-form">

<form action="/OrderSave" method="POST" onsubmit='disableButton()'>
  {{ csrf_field() }}
  <div class="row">
    <div class="col-sm-6">
      <input type="text" name="name" required class="form-control form-con" placeholder="اسم العميل" onselectstart="return false" ondragstart="return false" onkeypress="return(KeyPressOrder(this,event))" onkeydown="(KeyPressOrder(this,event))">
    </div>
    <div class="col-sm-6">
      <input type="text" name="address" required class="form-control form-con" placeholder="العنوان">
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <input type="text" name="phone" required class="form-control form-con" placeholder="رقم الجوال" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
    </div>
    <div class="col-sm-6">
    <input type="text" name="email" class="form-control form-con" placeholder="البريد الالكتروني">
    </div>
  </div>

  
  <div class="row">
      
      <div class="col-sm-12">
      <div class="form-group">
        <label class="combobox">نوع الخدمة</label>
        
        <select name="services" required id="combobox" class="form-control" style="height:50px;" required="required">
            <option value="تطبيقات الويب">تطبيقات الويب</option>
            <option value="تطبيقات الموبايل">تطبيقات الموبايل</option>
            <option value="تطبيقات سطح المكتب">تطبيقات سطح المكتب</option>
            <option value="الإستضافة والدومين">الإستضافة والدومين</option>
            <option value="تركيب الشبكات">تركيب الشبكات</option>
            <option value="الدعم الفني">الدعم الفني</option>
            <option value="خدمات الصيانة">خدمات الصيانة</option>
            <option value="خدمات التسويق">خدمات التسويق</option>
        </select>
        
    </div>
      </div>
      
  </div>

  <div class="row">
      
      <div class="col-sm-12">
      <div class="form-group">
        <label class="combobox">وصف متطلبات العميل</label>
        
        
        <textarea name="memo" id="input" class="form-control" rows="5" required="required"></textarea>
        
        
    </div>
      </div>
      
  </div>
  <div class="text-center"><button type="submit" id="btn1" class="btn btn-save btn-primary">إرسال الطلب</button></div>

  </form>

            </div>
        </div>

    </div>
    
</div>

@stop

@section('JavaFile')
      
        <script>
        function KeyPressOrder(fld, e) {

var strCheck = "ذ ض ص ث ق ف غ ع ه خ ح ج د ش س ي ب ل ا ت ن م ك ط ئءؤ رلا ى ةوزظ acbdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
var whichCode = e.which ? e.which : e.keyCode;

    if (whichCode == 13 || whichCode == 8 || whichCode == 9) return true;
    key = String.fromCharCode(whichCode);
    if (strCheck.indexOf(key) == -1)
        return false;

return true;
}
        </script>

<script type="text/javascript">
      function disableButton() {
        var btn = document.getElementById('btn1');
        btn.disabled = true;
        btn.innerText = 'جاري الإرسال ...'
    }
        </script>

@stop
