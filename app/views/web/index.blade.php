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
    <div class="section" style="background-image: url(/web/index/01.jpg); background-size: cover;"></div>
    <div class="section2 section" style="background-image: url(/web/index/02.jpg); background-size: cover;"></div>
    <div class="section3 section" style="background-image: url(/web/index/03.jpg); background-size: cover;"></div>
    <div class="section4 section" style="background-image: url(/web/index/04.jpg); background-size: cover;"></div>

    <div class="section" style="position: relative">

    	

    	<div class="main m-banner">

			<a class="u-btn u-btn-solid" style="margin-bottom: 16px;" href="" hideFocus="true">立即了解</a>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 clo-xs-12">
						<div class="he_3DFlipY">
			                <div class="he_3DFlipY_inner">
			                    <div class="he_3DFlipY_img">
			                        <img src="/web/images/i_04.jpg" alt="img01">
			                    </div>
			                    <div class="he_3DFlipY_caption">
			                        <h3>创新工艺</h3>
			                        <p>精湛工艺彰显卓越品质始终如一</p>
			                    </div>
			                 </div>
			            </div>
					</div>
					<div class="col-lg-4 col-xs-12">
						<div class="he_3DFlipY">
			                <div class="he_3DFlipY_inner">
			                    <div class="he_3DFlipY_img">
			                        <img src="/web/images/i_06.jpg" alt="img01">
			                    </div>
			                    <div class="he_3DFlipY_caption">
			                        <h3>木材加工基地</h3>
			                        <p>基地拥有先进的木材加工设备和深厚的技术力量，根据生产所需木材的大小规格，负责前期的木材加工、防腐、烘干等工作。目前，每年可加工近20万立方米的实木供货量。</p>
			                    </div>
			                 </div>
			            </div>
					</div>
					<div class="col-lg-4 col-xs-12">
						<div class="he_3DFlipY">
			                <div class="he_3DFlipY_inner">
			                    <div class="he_3DFlipY_img">
			                        <img src="/web/images/i_05.jpg" alt="img01">
			                    </div>
			                    <div class="he_3DFlipY_caption">
			                        <h3>品质管控</h3>
			                        <p>精选、精制、精雕细琢</p>
			                    </div>
			                 </div>
			            </div>
					</div>
				</div>
			</div>
			<div class="container mt">
				<p>工厂概况</p>
				<div class="row company">
		    		<div class="col-lg-7 col-xs-12 text">
		    			<p>亿臣十余载在家具行业的发展历程，为酒店家具的生产和研发打下了坚实的基础。我们拥有18个先进的专业化生产车间，400余名生产员工，10条全自动油漆涂装智能流水生产线。上万立方米的原木储存、上万平方米的木皮备货。几百台专业的生产设备，引进了德国IMA、意大利SCM等配套生产流水线、全自动五底三面PU油漆涂装线、高频曲压机、微波烘干机、CNC加工中心等，实现打磨、喷涂、烘干等工序的集约化生产。整体配套加工能力实力雄厚，为高效率、高品质生产提供了可靠的保证。</p>
		    		</div>
		    		<div class="col-lg-5 clo-xs-12"><img src="images/yw.jpg"/></div>
		    	</div>
	    	</div>
		</div>

		<div id="index_foot" style="position: absoulte; width: 100%; text-align: center; padding: 10px;" >
	    	<p>Copyright © 2003-2016  广州澳新考拉信息技术有限公司  All Rights Reserved　浙ICP备15002503号　</p>
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
