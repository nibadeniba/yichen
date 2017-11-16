@extends('web.template')

@section('content')
	<script src="./js/postbird-img-glass.js"></script>
    <div class="casebg">
	    <div class="container animated bounceInUp">
	    	<h2>案例展示</h2>
	    	<p>力求视觉与交互的完美契合，以规范的流程和专注的态度，为您提供全方位的设计服务。</p>
	    </div>
    </div>
    <div class="newnav">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-1 col-xs-3"><a href="case" @if(!$product_id) class="current" @endif >全部</a></div>
    		@foreach ($products as $item)
    			<div class="col-lg-1 col-xs-3"><a href="case?product_id={{$item->id}}" @if($product_id == $item->id) class="current" @endif>{{$item->title}}</a></div>
    		@endforeach
    		</div>
    	</div>
    </div>
    <div class="container case mt">
			<div class="row">
			@foreach ($cases as $item)
				<div class="col-lg-3 col-xs-12 casepic">
					<div class="recent-work-wrap">
			          <img class="img-responsive" src="{{$item->img}}" alt="">
			          <div class="overlay">
				            <div class="recent-work-inner">
				              <h3>{{$item->name}}</h3>
				            </div>
			          </div>
			        </div>
				</div>
			@endforeach
			</div>
		</div>
	<nav class="pages">
		 {{$cases->links()}}
	</nav>
@stop

@section("script")
<script>
$(function(){
    PostbirdImgGlass.init({
        domSelector:".img-responsive",
        animation:true
    });

    $(".overlay").click(function(){
    	$(".img-responsive").click();
    })
});
</script>
@stop
