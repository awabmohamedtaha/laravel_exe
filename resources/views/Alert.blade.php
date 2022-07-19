@extends('Masterpage')

@section('title','الإشعارات الواردة')
@section('CssFile')
<link href="css2//Alert.css" rel="stylesheet">
@stop

@section('Content')
<div class="header-txt">
    <p class="txt-lable"><i class="fas fa-comment-dots"></i> الإشعارات الواردة</p>
</div>

<div class="container">
    
    <div class="row justify-content-center">
        
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        @if(count($select) > 0)
    @foreach($select as $selected)
        <div class="Alert-div wow bounceIn"><i class="fas fa-laptop"></i>
                <p>{{ $selected->memo }}</p>
                <p class="date-alert">{{ $selected->date_created }}</p>
            </div>
            @endforeach
    @endif
        </div>
        
    </div>
    
</div>


@stop

@section('JavaFile')
      
@stop
