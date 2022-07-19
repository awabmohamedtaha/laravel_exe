@extends('Masterpage')

@section('title','الطلبات المُعلقة')
@section('CssFile')
     
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
      <th scope="col">العميل</th>
      <th scope="col">العنوان</th>
      <th scope="col">الجوال</th>
      <th scope="col">حالة الطلب</th>
      <th scope="col">تفاصيل الطلب</th>
      <th scope="col">عمليات</th>
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
        <span class="State-waiting">{{ $selected->state }}</span>
      </td>
      <td data-label="تفاصيل الطلب">
      <a class="box-linkk" href="#ModalShowOrder" data-toggle="modal" data-target-services="{{ $selected->services }}" data-target-memo="{{ $selected->memo }}" data-target="#ModalShowOrder"><i class="fas fa-eye"></i></a>
      </td>
      <td data-label="عمليات">
      <a class="box-linkk" href="#ModalShowSystem" data-toggle="modal" data-target-orderid="{{ $selected->orderid }}" data-target-sendtext="{{ $selected->sendtext }}" data-target-sendfile="{{ $selected->sendfile }}" data-target="#ModalShowSystem">استكمال <i class="fas fa-arrow-circle-left"></i></a>
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
        <div class="row d-flex justify-content-center align-items-center">
          <p class="pt-1 pr-0 CallSystemTitle">نرجو إستكمال بيانات الطلب ومن ثم إعادة الإرسال</p>
        </div>
        <hr>
        <div class="Call-System">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text_worng">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h5>ردود النظام :</h5>  
        <div class="box_box"><p id="sendtext"></p></div>
        <br>
        <h5>مرفقات للتحميل من قِبل النظام :</h5>
        <form action="/DownloadPdf2" method="POST">
          {{ csrf_field() }}
        <input type="text" name="sendfile" id="fieldd1" class="form-control sendfile" value="" disabled>
        <input type="hidden" name="sendfile" class="form-control sendfile" value="" >
        <span><button type="submit" id="bttn1" class="pdf-link">تحميل <i class="fas fa-download"></i></button></span>
        </form>
<hr>
        
   <div class="Call-Marketed">
   <form action="/OrderProccessNewSave2" method="POST" enctype="multipart/form-data" onsubmit='disableButton()'>
  {{ csrf_field() }}

  
    <input type="hidden" name="orderid" id="orderid" value="" class="form-control">
    
        <div class="form-group">
            <h5>ردود المستخدم</h5>
            <textarea name="recivetext" id="input" class="form-control" rows="4" required></textarea>
          </div>
        <h5>مرفقات المستخدم : <span class="Pdf-info">يجب أن يكون المرفق بصيغة PDF وأن لا يتجاوز حجم الملف 5Mb</span></h5> 
          <div class="form-group">
            <input type="file" name="recivefile" class="form-control" id="" placeholder="Input field">
          </div>
        
        <hr>
        <div class="text-left"><button type="submit" id="btn1" class="box-linkk">إرسال الطلب</button>
        <button type="button" class="box-linkkkk" data-dismiss="modal">إغلاق</button>
      </div>
          
      </form>
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
                    var orderid = $(e.relatedTarget).data('target-orderid');
                    var sendtext = $(e.relatedTarget).data('target-sendtext');
                    var sendfile = $(e.relatedTarget).data('target-sendfile');
                    $('#orderid').val(orderid);
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

<script>
    function disableButton() {
        var btn = document.getElementById('btn1');
        btn.disabled = true;
        btn.innerText = 'جاري الإرسال ...'
    }
</script>
@stop
