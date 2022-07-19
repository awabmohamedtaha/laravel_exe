@extends('Masterpage_ControlPanel')

@section('title','العملاء')
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
@if(session()->has('false'))

<div class="alert alert-warning">
    {{ session()->get('false') }}
</div>

                @endif
<div class="header-txt">
    <p class="txt-lable"><span><img class="ico-img" src="img/send.png"></span> قائمة العملاء</p>
</div>

<div class="container">
    
    <div class="row">
       
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <a class="box-link-adduser" href="/Signup"><i class="fas fa-user-plus"></i> إضافة عميل جديد</a>
       </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
<table class="wow fadeInDown">
  <thead>
    <tr>
      <th scope="col">كود العميل</th>
      <th scope="col">اسم العميل</th>
      <th scope="col">العنوان</th>
      <th scope="col">رقم الجوال</th>
      <th scope="col">رقم الحساب</th>
      <th scope="col">اسم البنك</th>
      <th scope="col">الحالة</th>
      <th scope="col">عمليات</th>
    </tr>
  </thead>
  <tbody>
  @if(count($select) > 0)
    @foreach($select as $selected)
    <tr>
      
      <td data-label="كود العميل">{{ $selected->Id }}</td>
      @if($selected->Marketed_name)
      <td data-label="اسم العميل">{{ $selected->Marketed_name }}</td>
      @else
      <td data-label="اسم العميل">لايوجد</td>
      @endif
      @if($selected->Marketed_address)
      <td data-label="العنوان">{{ $selected->Marketed_address }}</td>
      @else
      <td data-label="العنوان">لايوجد</td>
      @endif
      @if($selected->Marketed_phone)
      <td data-label="رقم الجوال">{{ $selected->Marketed_phone }}</td>
      @else
      <td data-label="رقم الجوال">لايوجد</td>
      @endif
      @if($selected->Marketed_bankNum)
      <td data-label="رقم الحساب">{{ $selected->Marketed_bankNum }}</td>
      @else
      <td data-label="رقم الحساب">لايوجد</td>
      @endif
      @if($selected->Marketed_bankName)
      <td data-label="اسم البنك">{{ $selected->Marketed_bankName }}</td>
      @else
      <td data-label="اسم البنك">لايوجد</td>
      @endif
      
      <td data-label="الحالة">
        @if($selected->Marketed_state=='نشط')
        <span class="State-Done">{{ $selected->Marketed_state }}</span>
        @elseif($selected->Marketed_state=='غير نشط')
        <span class="State-waiting">{{ $selected->Marketed_state }}</span>
        @endif
        </td>
        <td data-label="عمليات">
      <a class="box-linkking" href="/SignupEditPage/{{ $selected->Id }}"><i class="fas fa-edit"></i></a>
      <a class="box-linkking" href="#ModalEditPassword" data-toggle="modal" data-target-id="{{ $selected->Id }}" data-target-hwya="{{ $selected->Marketed_hwya }}" data-target="#ModalEditPassword"><i class="fa fa-unlock-alt" aria-hidden="true"></i></a>  
    </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
        </div>
        
    </div>
    
</div>

<!----------------------------- Modal Show Ditels Of The Order --------------------->

<!-- Modal: modalCart -->
<div class="modal fade" id="ModalEditPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title model-order-title" id="myModalLabel">معلومات الدخول</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">
      <div class="Type-Services">

      <form class="p-3 mt-0" action="/SignupPasswordEdit" method="post" onsubmit='disableButton()'>
      {{ csrf_field() }}
      <input type="hidden" name="id" id="id" class="form-control" value="">
      <div class="form-group">
      <div class="label pb-2">اسم الدخول</div>
      <input type="text" name="hwya" id="hwya" placeholder="اسم الدخول" class="form-control" value="" required="required" maxlength="10">
      </div>
      <div class="form-group">
      <div class="label pb-2">كلمة المرور</div>
      <input type="password" name="password" id="password" placeholder="*********" class="form-control text-right" value="" required="required" maxlength="10">
      </div>
      </div>
      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="submit" id="btn1" class="box-linkk">حفظ التغييرات</button>
        <button type="button" class="box-linkkkk" data-dismiss="modal">إغلاق</button>
      </div>
</form>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->

<!---------------------------------- End ---------------------------------------------->
@stop

@section('JavaFile')
<script>
            $(document).ready(function () {
                $("#ModalEditPassword").on("show.bs.modal", function (e) {
                    var id = $(e.relatedTarget).data('target-id');
                    var hwya = $(e.relatedTarget).data('target-hwya');
                    $('#id').val(id);
                    $('#hwya').val(hwya);
                });
            });

</script>

<script>
    function disableButton() {
        var btn = document.getElementById('btn1');
        btn.disabled = true;
        btn.innerText = 'جاري الحفظ ...'
    }
</script>
@stop