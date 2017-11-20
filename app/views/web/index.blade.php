@extends('web/template')
		
        
@section('content')
<link rel="stylesheet" type="text/css" href="/web/css/fullpage.min.css">
<style type="text/css">
	/*让头部半透明*/
	.header-frontend {background-color: rgba(255,255,255, 0.3); position: fixed; width: 100%; z-index: 1000000; }
	#nav_div {background-color: rgba(255,255,255,0.3);};
	#section1 {background-size: cover; }
	.he_3DFlipY_img img {width: 360px; height: 280px;}
</style>

<div id="dowebok">
@foreach ($imgs as $img)
    <div class="section" style="background-image: url({{$img->url}}); background-size: cover;"></div>
@endforeach
    <div class="section" style="position: relative">
    	<div class="main m-banner">
			<a class="u-btn u-btn-solid" style="margin-bottom: 16px;" href="/about" hideFocus="true">立即了解</a>
			<div class="container">
				<div class="row">
				@foreach ($cards as $card)
					<div class="col-lg-4 clo-xs-12">
						<div class="he_3DFlipY">
			                <div class="he_3DFlipY_inner">
			                    <div class="he_3DFlipY_img">
			                        <img src="{{$card->url}}" alt="img01">
			                    </div>
			                    <div class="he_3DFlipY_caption">
			                        <h3>{{$card->title}}</h3>
			                        <p>{{$card->content}}</p>
			                    </div>
			                 </div>
			            </div>
					</div>
				@endforeach
				</div>
			</div>
			<div class="container mt">
				<p style="color: white;">{{$text->title}}</p>
				<div class="row company">
		    		<div class="col-lg-12 col-xs-12 text">
		    			<p>{{$text->content}}</p>
		    		</div>
		    		<!-- <div class="col-lg-5 clo-xs-12"><img src="web/images/yw.jpg"/></div> -->
		    	</div>
	    	</div>
		</div>

		<div id="index_foot" style="position: absoulte; width: 100%; text-align: center; padding: 10px;" >
	    	<p>{{$bottom_info->content}}</p>
	    </div>
    </div>

    
</div>


@stop

@section('script')
<script type="text/javascript" src="/web/js/fullpage.min.js"></script>
<script type="text/javascript">
$(function(){

	var _height = $(window).height();

	var opt = {
		navigation: true,
		afterLoad: function (a, index) {
			if (index == 5) {
				$('#index_foot').css('top', _height - 60).show();
			}
		}
	};

    $('#dowebok').fullpage(opt);
});
</script>
@stop
