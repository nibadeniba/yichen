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
    <!--
     <div class="newnav">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-1 col-xs-3"><a href="about.html" >关于我们</a></div>
    			<div class="col-lg-1 col-xs-3"><a href="">功能介绍</a></div>
    			<div class="col-lg-1 col-xs-3"><a href="">合作流程</a></div>
    			<div class="col-lg-1 col-xs-3"><a href="contact.html" class="current">联系我们  </a></div>
    		</div>
    	</div>
    </div>
    -->
    <div class="contact">
    	{{$text->content}}
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 col-xs-12 map">
    				<img src="{{$imgs->url}}" />
    			</div>
    		</div>
    		<div class="row wenben">
    		   <div class="col-lg-12 col-xs-12">
	    		   	{{$share->content}}
    		   </div>
    	    </div>
    	    <div class="row constyle mt">
    	    	<div class="col-lg-2 col-xs-12 share">
    	    		<img src="{{$share->url}}" />
    	    	</div>
    	    	<div class="col-lg-5 col-xs-12 text">
    	    		{{$companyinfo->content}}
    	    	</div>
    	    	<div class="qrimg">
    	    		<img src="{{$wechatimg->url}}" />
    	    	</div>
    	    	<div class="qrimg">
    	    		<img src="{{$offwebimg->url}}" />
    	    	</div>
    	    	<div class="qrimg">
    	    		<img src="{{$publicimg->url}}" />
    	    	</div>
    	    </div>
    	</div>
    	
    </div>
@stop
