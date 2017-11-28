@extends('web/template')
        
        
@section('content')
    <div class="talentbg" style="background: url(/web/images/bg7.jpg) 50% no-repeat">
        <div class="logo">
            <img src="/web/images/logo.png">
        </div>
	    <div class="container animated bounceInUp">
	    	<h2>招贤纳士</h2>
	    </div>
    </div>
    <div class="container mt">
    	<div class="row">
    	     @foreach ($talents as $item)
    	     <div class="col-lg-4 col-xs-12 talent" style="height:200px">
    	     	<h2>{{$item->talent_name}}</h2>
    	     	<h3>职位要求：</h3>
    	     	<p>{{$item->requirement}}</p>
    	     </div>
    	     @endforeach
    	</div>
    </div>
@stop