@extends('web/template')
        
        
@section('content')
<style>
<!--
.qrimg{padding-left:20px;width:120px;height:120px;float:left}
.qrimg img{width:100px;height:100px;}
-->
</style>
    <div class="contactbg">
	    <div class="container animated bounceInUp">
	    	<h2>联系我们</h2>
	    	<p>拥有不一样的高端品牌微信网站，你还在等什么？可以从以下方式联系我们。</p>
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
