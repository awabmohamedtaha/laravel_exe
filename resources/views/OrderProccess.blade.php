@extends('Masterpage')

@section('title','طلبات تحت الدراسة')
@section('CssFile')
     
@stop

@section('Content')
<div class="header-txt">
    <p class="txt-lable"><span><img class="ico-img" src="img/sand-clock.png"></span> طلبات تحت الدراسة</p>
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
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @if(count($select) > 0)
    @foreach($select as $selected)
    <tr>
      <td data-label="رقم الطلب">{{ $selected->id }}</td>
      <td data-label="تاريخ الإنشاء">{{ $selected->datee }}</td>
      <td data-label="العميل">{{ $selected->name }}</td>
      <td data-label="العنوان">{{ $selected->address }}</td>
      <td data-label="الجوال">{{ $selected->phone }}</td>
      <td data-label="حالة الطلب">
        <span class="State-proccess">{{ $selected->state }}</span>
      </td>
      <td data-label="">
      <a class="box-linkk" href="#ModalShowOrder" data-toggle="modal" data-target-services="{{ $selected->services }}" data-target-memo="{{ $selected->memo }}" data-target="#ModalShowOrder"><i class="fas fa-eye"></i></a>
      </td>
      <td data-label="المزيد">
      <a class="box-linkk" href="#ModalShowSystem" data-toggle="modal" data-target-sendtext="{{ $selected->sendtext }}" data-target-sendfile="{{ $selected->sendfile }}" data-target-recivetext="{{ $selected->recivetext }}" data-target-recivefile="{{ $selected->recivefile }}" data-target="#ModalShowSystem">المزيد... <i class="fas fa-arrow-circle-left"></i></a>
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



<!------------------------------------- Show Model Call System Order -------------------->
<!--Modal: modalCookie-->
<div class="modal fade top" id="ModalShowSystem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="true">
  <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Body-->
      <div class="modal-body">
        
        
        <h5>ردود النظام :</h5>  
        <div class="box_box"><p id="sendtext"></p></div>
        <br>
        <h5>مرفقات للتحميل من قِبل النظام :</h5>
        <form action="/DownloadPdf2" method="POST">
          {{ csrf_field() }}
        <input type="text" name="sendfile" id="fieldd1" class="form-control sendfile" value="" disabled>
        <input type="hidden" name="sendfile" class="form-control sendfile" value="">
        <span><button type="submit" id="bttn1" class="pdf-link">تحميل <i class="fas fa-download"></i></button></span>
        </form>
<hr>
        <h5>ردود المستخدم :</h5>
        <div class="box_box"><p id="recivetext"></p></div>
        
        <br>
        <h5>مرفقات المستخدم :</h5>

        <form action="/DownloadPdf1" method="POST">
          {{ csrf_field() }}
        <input type="text" name="recivefile" id="fieldd2" class="form-control recivefile" value="" disabled>
        <input type="hidden" name="recivefile" class="form-control recivefile" value="">
        <span><button type="submit" id="bttn2" class="pdf-link">تحميل <i class="fas fa-download"></i></button></span>
        </form>

        <div class="modal-footer">
        <button type="button" class="box-linkkkk" data-dismiss="modal">إغلاق</button>
      </div>

      </div>
       
        
  
       
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalCookie-->
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
                $("#ModalShowSystem").on("show.bs.modal", function (e) {
                    var sendtext = $(e.relatedTarget).data('target-sendtext');
                    var sendfile = $(e.relatedTarget).data('target-sendfile');
                    var recivetext = $(e.relatedTarget).data('target-recivetext');
                    var recivefile = $(e.relatedTarget).data('target-recivefile');
                    $('#sendtext').text(sendtext);
                    $('.sendfile').val(sendfile);
                    $('#recivetext').text(recivetext);
                    $('.recivefile').val(recivefile);

                    var input1 = $('#fieldd1').val();
                    if(input1 == ''){
                    $('#bttn1').hide();
                     }else{
                      $('#bttn1').show();
                     }

                    var input2 = $('#fieldd2').val();
                    if(input2 == ''){
                    $('#bttn2').hide();
                     }else{
                      $('#bttn2').show();
                     }

                });
            });

</script>


@stop