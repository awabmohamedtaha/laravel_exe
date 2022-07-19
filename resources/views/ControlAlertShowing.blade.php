@extends('Masterpage_ControlPanel')

@section('title','الإشعارات')
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
@if(session()->has('delete'))

<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   {{ session()->get('delete') }}
</div>

@endif
@if(session()->has('false'))

<div class="alert alert-warning">
    {{ session()->get('false') }}
</div>

                @endif
<div class="header-txt">
    <p class="txt-lable"><span><img class="ico-img" src="img/send.png"></span> قائمة الإشعارات</p>
</div>

<div class="container">
    
    <div class="row">
       
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <a class="box-link-adduser" href="/ControlAlertSend"><i class="fa fa-paper-plane" aria-hidden="true"></i> إرسال إشعار جديد</a>
       </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
<table class="wow fadeInDown">
  <thead>
    <tr>
      <th scope="col">تسلسل</th>
      <th scope="col">تاريخ الإرسال</th>
      <th scope="col">نص الإشعار</th>
      <th scope="col">المُستلم</th>
      <th scope="col">عمليات</th>
    </tr>
  </thead>
  <tbody>
  @if(count($select) > 0)
    @foreach($select as $selected)
    <tr>
      
      <td data-label="تسلسل">{{ $selected->id }}</td>
      <td data-label="تاريخ الإرسال">{{ $selected->date_created }}</td>
      <td data-label="نص الإشعار">{{ $selected->memo }}</td>
      <td data-label="المُستلم">{{ $selected->name_amel }}</td>
     
    <td data-label="عمليات">
    <a class="box-linkk deleteing" href="#ModalDeleteOrder" data-toggle="modal" data-target-id="{{ $selected->id }}" data-target="#ModalDeleteOrder"><i class="fas fa-trash-alt"></i></a>  
    </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
        </div>
        
    </div>
    
</div>

<!------------------------------------- Show Model Delete Order -------------------->

<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="ModalDeleteOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header header-delete d-flex justify-content-center">
        <p class="heading header-delete-txt">هل انت متأكد من عملية حذف الإشعار بشكل نهائي ؟</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-times fa-4x animated rotateIn delete-modal-icon"></i>
<form action="/AlertDelete" method="POST">
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
                $("#ModalDeleteOrder").on("show.bs.modal", function (e) {
                    var id = $(e.relatedTarget).data('target-id');
                    $('#id').val(id);
                });
            });

</script>
@stop