@extends('Masterpage_ControlPanel')

@section('title','الطلبات المُعلقة')
@section('CssFile')
<link href="{{ asset('css2//ControlPanel.css') }}" rel="stylesheet">
@stop

@section('Content')
<div class="header-txt">
    <p class="txt-lable"><span><img class="ico-img" src="img/report.png"></span> الطلبات المُعلقة</p>
</div>

<div class="container">
    
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<table class="wow fadeInDown">
  <thead>
    <tr>
    <th scope="col">رقم الطلب</th>
      <th scope="col">تاريخ الإنشاء</th>
      <th scope="col">كود العميل</th>
      <th scope="col">اسم العميل</th>
      
      <th scope="col">حالة الطلب</th>
      <th scope="col">تفاصيل الطلب</th>
      <th scope="col">ردود النظام</th>
    </tr>
  </thead>
  <tbody>
  @if(count($select) > 0)
    @foreach($select as $selected)
    <tr>
      <td scope="row" data-label="رقم الطلب">{{ $selected->id }}</td>
      <td data-label="تاريخ الإنشاء">{{ $selected->datee }}</td>
      <td data-label="كود العميل">{{ $selected->user_id }}</td>
      <td data-label="اسم العميل">{{ $selected->user_name }}</td>
      
      <td data-label="حالة الطلب">
        <span class="State-waiting">{{ $selected->state }}</span>
      </td>
      <td data-label="تفاصيل الطلب">
      <a class="box-linkkk" href="#ModalShowOrder" data-toggle="modal" data-target-services="{{ $selected->services }}" data-target-memo="{{ $selected->memo }}" data-target-name="{{ $selected->name }}" data-target-phone="{{ $selected->phone }}" data-target-address="{{ $selected->address }}" data-target="#ModalShowOrder"><i class="fas fa-eye"></i></a>
      </td>
      <td data-label="ردود النظام">
      <a class="box-linkk" href="#ModalShowSystem" data-toggle="modal" data-target-sendtext="{{ $selected->sendtext }}" data-target-sendfile="{{ $selected->sendfile }}" data-target="#ModalShowSystem"><i class="fas fa-book-open"></i></a>
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
<div class="info_user">
<h6>الاسم</h6>

<p id="name"></p>
<hr>
<h6>العنوان</h6>

<p id="address"></p>
<hr>
<h6>رقم التواصل</h6>

<p id="phone"></p>

</div>
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

<!---------------------------------- End ---------------------------------------------->

<!----------------------------- Modal Show Ditels Of The Order --------------------->

<!-- Modal: modalCart -->
<div class="modal fade" id="ModalShowSystem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title model-order-title" id="myModalLabel">ردود النظام المُرسلة للعميل</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

      <h5>التفاصيل :</h5>  
        <div class="box_box"><p id="sendtext"></p></div>
        <br>
        <h5>المرفقات :</h5>
        <form action="/DownloadPdf2" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="sendfile" id="fieldd1" class="form-control sendfile" value="">
        <input type="text" name="sendfile" class="form-control sendfile" value="" disabled>
        <span><button type="submit" id="bttn1" class="pdf-link">تحميل <i class="fas fa-download"></i></button></span>
        </form>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="box-linkkkk" data-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->

<!---------------------------------- End ---------------------------------------------->
@stop

@section('JavaFile')
<script>
            $(document).ready(function () {
                $("#ModalShowOrder").on("show.bs.modal", function (e) {
                  var services = $(e.relatedTarget).data('target-services');
                    var memo = $(e.relatedTarget).data('target-memo');
                    var name = $(e.relatedTarget).data('target-name');
                    var phone = $(e.relatedTarget).data('target-phone');
                    var address = $(e.relatedTarget).data('target-address');
                    $('#services').text(services);
                    $('#memo').text(memo);
                    $('#name').text(name);
                    $('#phone').text(phone);
                    $('#address').text(address);
                });
            });

</script>

<script>
            $(document).ready(function () {
                $("#ModalShowSystem").on("show.bs.modal", function (e) {
                    var sendtext = $(e.relatedTarget).data('target-sendtext');
                    var sendfile = $(e.relatedTarget).data('target-sendfile');
                    $('#sendtext').text(sendtext);
                    $('.sendfile').val(sendfile);

                    var input1 = $('#fieldd1').val();
                    if(input1 == ''){
                    $('#bttn1').hide();
                     }else{
                      $('#bttn1').show();
                     }

                });
            });

</script>
@stop