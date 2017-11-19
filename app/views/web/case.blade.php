@extends('web.template')

@section('content')
	<style type="text/css">
		.img_modal{
			width:100%;
			height:100%;
			background: rgba(0,0,0,0.3);
			position: absolute;
			top:0px;
			z-index:1000;
		}
		.poster-list{
			margin:400px auto;
		}
		.modal_close{
			float: right;
			margin:300px 600px;
			font-size:20px;
			color:red;
			cursor:pointer;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/poster.css">
    <div class="casebg">
	    <div class="container animated bounceInUp">
	    	<h2>案例展示</h2>
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
			        	<img class="img-responsive" src="{{$item->img}}">
			        </div>
				</div>
			@endforeach
			</div>
		</div>
	<nav class="pages">
		 {{$cases->links()}}
	</nav>
	<div class="img_modal hidden">
		<span class="modal_close">X</span>
		<div class="poster-main">
		@foreach ($cases as $item)
			<img src="{{$item->img}}">
		@endforeach
		</div>
	</div>
@stop

@section("script")
<script src="js/poster.js"></script>
<script>
jQuery(document).ready(function($) {
    var setting = {
        "width":900,
        "height":234,
    };
    Poster.init($(".poster-main"),setting);

    $(".img-responsive").click(function(){
    	$(".img_modal").removeClass('hidden');
    });

    $(".modal_close").click(function(){
		$(".img_modal").addClass("hidden");
	});
});
</script>
@stop
