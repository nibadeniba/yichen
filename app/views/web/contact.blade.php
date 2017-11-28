@extends('web/template')
        
        
@section('content')
<style>
<!--
.qrimg{padding-left:20px;width:120px;height:120px;float:left}
.qrimg img{width:100px;height:100px;}
-->
</style>
    <div class="contactbg" style="background: url(/web/images/bg8.jpg) 50% no-repeat">
        <div class="logo">
            <img src="/web/images/logo.png">
        </div>
	    <div class="container animated bounceInUp">
	    	<h2>联系我们</h2>
	    </div>
    </div>
    <div class="contact">
    	<h2>{{$imgs->title}}</h2>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 col-xs-12 map">
    				<img src="{{$imgs->url}}" />
    			</div>
    		</div>
    		
    	</div>
    	
    </div>
@stop
