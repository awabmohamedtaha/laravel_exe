@extends('Masterpage_ControlPanel')

@section('title','تعديل عميل')
@section('CssFile')
<link href="{{ asset('css2//ControlPanel.css') }}" rel="stylesheet">
<link href="{{ asset('css2//login.css') }}" rel="stylesheet">
@stop

@section('Content')

@if(session()->has('repassword'))
<div class="alert alert-warning">
    {{ session()->get('repassword') }}
</div>
@endif

               
@if(session()->has('false'))
<div class="alert alert-warning">
    {{ session()->get('false') }}
</div>
@endif

                
<div class="wrapper">
             
                <div class="text-center mt-4 name">تعديل بيانات العميل</div>
                        <form class="p-3 mt-3" action="/SignupEdit" method="post" onsubmit='disableButton()'>
                           {{ csrf_field() }}
    @if(count($select) > 0)
    @foreach($select as $selected)
    
    <input type="hidden" name="id" id="input" class="form-control" value="{{ $selected->Id }}">
    
                           <div class="form-field d-flex align-items-right"><input type="text" name="name" value="{{ $selected->Marketed_name }}" placeholder="الاسم الفعلي" autofocus required maxlength="25" onselectstart="return false" ondragstart="return false" onkeypress="return(KeyPressOrder(this,event))" onkeydown="(KeyPressOrder(this,event))"><span class="far fa-user icoo"></span></div>
                            
                            <div class="form-field d-flex align-items-right"><input type="text" name="phone" value="{{ $selected->Marketed_phone }}" placeholder="رقم الجوال" required maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"> <span class="fas fa-phone-volume icoo"></span> </div>
                            <div class="form-field d-flex align-items-right"><input type="text" name="Marketedaddress" value="{{ $selected->Marketed_address }}" placeholder="العنوان" maxlength="25"><span class="fas fa-map-marked-alt icoo"></span></div>
                            <div class="form-field d-flex align-items-right"><input type="text" name="MarketedbankNum" value="{{ $selected->Marketed_bankNum }}" placeholder="رقم الحساب البنكي" maxlength="25"><span class="fas fa-money-check-alt icoo"></span></div>
                            <div class="form-field d-flex align-items-right"><input type="text" name="MarketedbankName" value="{{ $selected->Marketed_bankName }}" placeholder="اسم البنك" maxlength="25"><span class="fas fa-university icoo"></span></div>
                            <div class="form-group">
        <label class="combobox">الحالة</label>
        
        <select name="state" required id="combobox" class="form-control" style="height:50px;" required="required">
        @if($selected->Marketed_state == 'نشط')
        <option selected="selected" value="نشط">نشط</option>
        @else
        <option value="نشط">نشط</option>
        @endif

        @if($selected->Marketed_state == 'غير نشط')
        <option selected="selected" value="غير نشط">غير نشط</option>
        @else
        <option value="غير نشط">غير نشط</option>
        @endif
        </select>
        
    </div>
    @endforeach
    @endif
                            <button type="submit" id="btn1" class="btn mt-3">حفظ التغييرات</button>
                        </form>
                
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
        <script>
    function disableButton() {
        var btn = document.getElementById('btn1');
        btn.disabled = true;
        btn.innerText = 'جاري الحفظ ...'
    }
</script>
@stop