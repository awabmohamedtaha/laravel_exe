@extends('Masterpage')

@section('title','الطلبات المٌرسلة')
@section('CssFile')
     
@stop

@section('Content')

@if(session()->has('Save'))

<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   {{ session()->get('Save') }}
</div>

@endif

@if(session()->has('delete'))

<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   {{ session()->get('delete') }}
</div>

@endif

<div class="header-txt">
    <p class="txt-lable"><span><img class="ico-img" src="img/send.png"></span> الطلبات المٌرسلة</p>
</div>

<div class="container">
    
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<table class="wow fadeInDown">
  <thead>
    <tr>
      <th scope="col">رقم الطلب</th>
      <th scope="col">تاريخ الإنشاء</th>
      <th scope="col">العميل</th>
      <th scope="col">العنوان</th>
      <th scope="col">الجوال</th>
      <th scope="col">حالة الطلب</th>
      <th scope="col">تفاصيل الطلب</th>
      <th scope="col">عمليات</th>
    </tr>
  </thead>
  <tbody>
    @if(count($select) >0)
    @foreach($select as $selected)
    <tr>
      <td scope="row" data-label="رقم الطلب">{{ $selected->id }}</td>
      <td data-label="تاريخ الإنشاء">{{ $selected->datee }}</td>
      <td data-label="العميل">{{ $selected->name }}</td>
      <td data-label="العنوان">{{ $selected->address }}</td>
      <td data-label="الجوال">{{ $selected->phone }}</td>
      <td data-label="حالة الطلب">
        @if($selected->state=='جديد')
        <span class="State-New">{{ $selected->state }}</span>
        @elseif($selected->state=='مُعلق')
        <span class="State-waiting">{{ $selected->state }}</span>
        @elseif($selected->state=='تحت الدراسة')
        <span class="State-proccess">{{ $selected->state }}</span>
        @elseif($selected->state=='مكتمل')
        <span class="State-Done">{{ $selected->state }}</span>
        @endif
      </td>
      <td data-label="تفاصيل الطلب">
      <a class="box-linkk" href="#ModalShowOrder" data-toggle="modal" data-target-services="{{ $selected->services }}" data-target-memo="{{ $selected->memo }}" data-target="#ModalShowOrder"><i class="fas fa-eye"></i></a>
      </td>
      @if($selected->state=='جديد')
      <td data-label="عمليات">
      <a class="box-linkk" href="/OrderEditPage/{{ $selected->id }}"><i class="fas fa-edit"></i></a>
      <a class="box-linkk delete" href="#ModalDeleteOrder" data-toggle="modal" data-target-id="{{ $selected->id }}" data-target="#ModalDeleteOrder"><i class="fas fa-trash-alt"></i></a>  
    </td>
    @endif
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
<div class="modal fade" id="ModalShowOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title model-order-title" id="myModalLabel">تفاصيل الطلب</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">
      <div class="Type-Services">
<h4>نوع الخدمة</h4>

<div class="box_box"><p id="services"></p></div>


</div>
<hr>
<div class="Detials-Order">
<h4>وصف متطلبات العميل</h4>

<div class="box_box"><p id="memo"></p></div>

</div>
      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="box-linkkkk" data-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->


<!-------------------------------- End --------------------------------------------->

<!------------------------------------- Show Model Delete Order -------------------->

<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="ModalDeleteOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header header-delete d-flex justify-content-center">
        <p class="heading header-delete-txt">هل انت متأكد من عملية حذف الطلب بشكل نهائي ؟</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-times fa-4x animated rotateIn delete-modal-icon"></i>
<form action="/OrderDelete" method="POST">
{{ csrf_field() }}
<input type="hidden" name="id" id="id" class="form-control" value="" >

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <button type="submit" class="btn  btn-outline-danger">نعم</button>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">لا</a>
      </div>
    </div>
</form>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->
<!---------------------------------- End ---------------------------------------------->
@stop

@section('JavaFile')

        <script>
            $(document).ready(function () {
                $("#ModalShowOrder").on("show.bs.modal", function (e) {
                    var services = $(e.relatedTarget).data('target-services');
                    var memo = $(e.relatedTarget).data('target-memo');
                    $('#services').text(services);
                    $('#memo').text(memo);
                });
            });

</script>

<script>
            $(document).ready(function () {
                $("#ModalDeleteOrder").on("show.bs.modal", function (e) {
                    var id = $(e.relatedTarget).data('target-id');
                    $('#id').val(id);
                });
            });

</script>

@stop
