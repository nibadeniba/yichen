@extends('web/template')
		
        
@section('content')
<link rel="stylesheet" type="text/css" href="/web/css/fullpage.min.css">
<style type="text/css">
	/*让头部半透明*/
	.header-frontend {background-color: rgba(255,255,255, 0.3); position: fixed; width: 100%; z-index: 1000000; }
	#nav_div {background-color: rgba(255,255,255,0.3);};
	#section1 {background-size: cover; }
	.he_3DFlipY_img img {width: 360px; height: 280px;}

	@keyframes anm0 {
		from {
			left: -900px;
		}
		to {
			left: 800px;
		}
	}
	
	@keyframes anm1 {
		from {
			left: 2300px;
			display: block;
		}
		to {
			left: 200px;
		}
	}

	@keyframes anm2 {
		from {
			left: -540px;
		}
		to {
			left: 800px;
		}
	}

	@keyframes anm3 {
		from {
			top: 400px;
		}
		to {
			top: 500px;
		}
	}

	.anm_0 {
		animation-name: anm0;
		animation-duration: 2s;
		animation-fill-mode: forwards;
	}

	.anm_1 {
		animation-name: anm1;
		animation-duration: 2s;
		animation-fill-mode: forwards;
	}

	.anm_2 {
		animation-name: anm2;
		animation-duration: 2s;
		animation-fill-mode: forwards;
	}

	.anm_3 {
		animation-name: anm3;
		animation-duration: 2s;
		animation-fill-mode: forwards;
	}
</style>

<div id="dowebok">
@foreach ($imgs as $key => $img)
    <div class="section adc_{{$key}} " style="background-image: url({{$img->url}}); background-size: cover;">
	
		@if ($key == 0) 
		<div class="anm" style="color: white; font-size: 60px; font-weight: 500; text-decoration: none ; position: absolute; top: 300px;">诠释家具企业领军行业的专注之道</div>
		@elseif ($key == 1)
		<div class="anm" style="width: 500px; color: white; font-size: 60px; font-weight: 500; text-decoration: none ; position: absolute; top: 300px;">卓越品质的缔造者</div>
		@elseif ($key == 2)
		<div class="anm" style="color: white; font-size: 60px; font-weight: 500; text-decoration: none ; position: absolute; top: 300px;">诚信为本，尽善尽类</div>
		@elseif ($key == 3)
		<div class="anm" style="color: white; font-size: 60px; font-weight: 500; text-decoration: none ; position: absolute; left: 1000px;">智能化、信息化管理</div>
		@endif

    </div>
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

	$('.anm_0').removeClass('anm_0');
				
	setTimeout(function () {
		$('.anm').show();
		$('.adc_0').find('div').addClass('anm_0');
	}, 200);

	var _height = $(window).height();

	var opt = {
		continuousVertical: true,
		navigation: true,
		onLeave: function () {
			$('.anm').hide();
		},
		afterLoad: function (a, index) {

			if (index == 1) {

				$('.anm_0').removeClass('anm_0');
				
				setTimeout(function () {
					$('.anm').show();
					$('.adc_0').find('div').addClass('anm_0');
				}, 200);
				
			}

			if (index == 2) {

				$('.anm_1').removeClass('anm_1');
				
				setTimeout(function () {
					$('.anm').show();
					$('.adc_1').find('div').addClass('anm_1');
				}, 100);
				
			}

			if (index == 3) {

				$('.anm_2').removeClass('anm_2');
				
				setTimeout(function () {
					$('.anm').show();
					$('.adc_2').find('div').addClass('anm_2');
				}, 100);
				
			}

			if (index == 4) {

				$('.anm_3').removeClass('anm_3');
				
				setTimeout(function () {
					$('.anm').show();
					$('.adc_3').find('div').addClass('anm_3');
				}, 100);
				
			}

			if (index == 5) {
				$('#index_foot').css('top', _height - 60).show();
			}
		}
	};

    $('#dowebok').fullpage(opt);
    setInterval(function(){
        $.fn.fullpage.moveSectionDown();
    }, 4000);
});
</script>
@stop
