@extends('web.template')

@section('content')
    <div class="aboutbg">
	    <div class="container animated bounceInUp">
	    	<h2>关于我们</h2>
	    </div>
    </div>
    <!-- 
    <div class="newnav">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-1 col-xs-3"><a href="about" class="current">关于我们</a></div>
    			<div class="col-lg-1 col-xs-3"><a href="">功能介绍</a></div>
    			<div class="col-lg-1 col-xs-3"><a href="">合作流程</a></div>
    			<div class="col-lg-1 col-xs-3"><a href="contact">联系我们  </a></div>
    		</div>
    	</div>
    </div>
     -->
    <div class="container">
    	<div class="row about">
    		<div class="col-lg-12 clo-xs-12"><img src="{{$info->url}}"/></div>
    		<div class="col-lg-12 col-xs-12 text">
    		<h2>{{$info->title}}</h2>
    		<p>{{$info->content}}</p>
    		</div>
            <div class="col-lg-12 col-xs-12 text">
            <h2>{{$middle->title}}</h2>
            @foreach(explode(',', $middle['url']) as $img)
            <div class="col-lg-2 col-xs-12">
                <img src="{{$img}}" />
            </div>
            @endforeach
            </div>
    	</div>
    	<!-- 
    	<div class="row wenben">
    		<div class="col-lg-12 col-xs-12">深度挖掘潜力，洞察受众群体取向，制定一体化的策划从发现到创新。</div>
    	</div>
    	 -->
    	<div class="row brand">
    	   @foreach($feature as $item)
    		<div class="col-lg-4 col-xs-12">
    			<img src="{{$item->url}}" />
    			<h2>{{$item->title}}</h2>
    			<p>{{$item->content}}</p>
    		</div>
    		@endforeach
    	</div>
    </div>
@stop
