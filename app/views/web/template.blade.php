<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>九圣家具</title>
		<meta name="keywords" content="九圣家具" />
		<meta name="description" content="九圣家具" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/web/css/animate.min.css" type="text/css" />
		<link rel="stylesheet" href="/web/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="/web/css/style.css" type="text/css" />
		<script src="/web/js/jquery-1.10.2.min.js"></script>
		<script src="/web/js/bootstrap.min.js"></script>
		<script src="/web/js/core.js"></script>
		<script src="/web/js/home_index.js"></script>
		<script src="/web/js/pt_macro_home.js"></script>
		<style type="text/css">
			.footbottom {
			    width: 100%;
			    height: 310px;
			    margin: 0 auto;
			    background: url(images/footbottom.jpg) repeat-x left top;
			    position: relative;
			}
			.footbtbox {
			    width: 1004px;
			    margin: 0 auto;
			}
			.footbt {
			    width: 154px;
			    height: 280px;
			    float: left;
			    background: url(images/footbt.jpg) no-repeat right 16px;
			    padding-top: 16px;
			    padding-right: 28px;
			}
			.footabout, .footjob {
			    width: 151px;
			    overflow: hidden;
			    padding-top: 15px;
			}
			.footabout p, .footjob p {
			    color: #ffffff;
			    font-size: 12px;
			    font-family: "宋体";
			    font-weight: bold;
			    height: 28px;
			    line-height: 28px;
			    padding-left: 3px;
			}
			.footabout ul, .footjob ul {
			    width: 151px;
			    padding-top: 6px;
			}
			.footabout li, .footjob li {
			    width: 151px;
			    float: left;
			    height: 24px;
			    line-height: 24px;
			}
			.footabout li a, .footjob li a {
			    color: #cbad93;
			    font-size: 12px;
			    font-family: "宋体";
			    padding-left: 16px;
			    display: block;
			    overflow: hidden;
			    white-space: nowrap;
			    text-overflow: ellipsis;
			}
			.footjob {
			    padding-top: 12px;
			}
			.footabout li, .footjob li {
			    width: 151px;
			    float: left;
			    height: 24px;
			    line-height: 24px;
			}
			.footnt {
			    width: 151px;
			    height: 280px;
			    float: left;
			    background: url(images/footbt.jpg) no-repeat right 16px;
			    padding: 16px 30px 0 19px;
			}
			.links {
			    width: 200px;
			    height: 280px;
			    float: left;
			    background: url(images/footbt.jpg) no-repeat right 16px;
			    padding: 16px 0px 0 20px;
			}
			.rxfw {
			    width: 192px;
			    float: right;
			    padding-left: 10px;
			}
			.links p {
			    color: #ffffff;
			    font-size: 12px;
			    font-family: "宋体";
			    font-weight: bold;
			    height: 28px;
			    line-height: 28px;
			    padding-left: 3px;
			    padding-top: 15px;
			    margin-bottom: 10px;
			}
			.links a {
			    display: block;
			    float: left;
			    color: #cbad93;
			    font-size: 12px;
			    font-family: "宋体";
			    width: 69px;
			    height: 23px;
			    line-height: 23px;
			    margin: 0 13px 5px 0;
			    padding-left: 9px;
			    overflow: hidden;
			    white-space: nowrap;
			    text-overflow: ellipsis;
			}
			.rxfw {
			    width: 192px;
			    float: right;
			    padding-left: 10px;
			}
			.rxfw p.s1 {
			    color: #ffffff;
			    font-family: "宋体";
			    line-height: 24px;
			    font-weight: bold;
			    margin-top: 33px;
			}
			.rxfw p.s2 {
			    width: 132px;
			    height: 132px;
			    margin: 22px 0 0 25px;
			}
			.rxfw p.s2 {
			    width: 132px;
			    height: 132px;
			    margin: 22px 0 0 25px;
			}
			.rxfw p.s3 {
			    color: #ffffff;
			    font-family: "宋体";
			    font-size: 12px;
			    line-height: 24px;
			    padding-left: 32px;
			    font-weight: bold;
			    margin-top: 20px;
			}
			.logo {
			    width: 97px;
			    height: 112px;
			    position: absolute;
			    left: 1800px;
			    top: 300px;
			}
		</style>
	</head>
	<body>

		@include('web/nav')

		@yield('content')
		<?php $bottom = CMS::where("cate", "bottom")->first();?>
		<?php $products = CMS::where("cate", 'product')->get();?>
		<!-- <div class="main5 mt">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-6 col-xs-12 text">
	    				<p>{{$bottom->title}}</p>
	    			</div>
	    			<div class="col-lg-6 col-xs-12 photo">
	    				<p class="att">关注我们</p>
	    				<img src="{{$bottom->url}}" />
	    			</div>
	    		</div>
	    	</div>
	    </div>
		<div class="copyright1">
			
	    	<p>{{$bottom->content}}</p>
	    </div> -->
	    <div class="footbottom">
			<div class="footbtbox clearfix">
				<div class="footbt clearfix">
					<div class="footabout">
						<p>关于九圣</p>
						<ul class="clearfix">
							<li><a >企业介绍</a></li>
							<li><a >荣誉墙</a></li>
							<li><a >企业特色</a></li>
						</ul>
					</div>
					<div class="footjob">
						<p>服务体系</p>
						<ul class="clearfix">
							<li><a >服务团队</a></li>  
							<li><a >服务流程</a></li>  
						</ul>
					</div>
				</div>
				<div class="footnt clearfix">
					<div class="footabout">
						<p>案例展示</p>
						<ul class="clearfix">
						@foreach ($products as $p)
							<li><a >{{$p->title}}</a></li>
						@endforeach
						</ul>
					</div>
					<div class="footjob">
						<p>产品领域</p>
						<ul>
						@foreach ($products as $p)
							<li><a >{{$p->title}}</a></li>
						@endforeach
						</ul>
					</div>
				</div>
				<div class="footnt clearfix">
					<div class="footabout">
						<p>新闻动态</p>
						<ul class="clearfix">
							<li><a >新闻动态</a></li>  
						</ul>
					</div>
					<div class="footjob">
						<p>合作客户</p>
						<ul class="clearfix">
							<li><a >合作客户</a></li>
						</ul>
					</div>
				</div>
				<div class="links clearfix">
					<p>招贤纳士</p>
					<a >职位需求</a>
				</div>
				<div class="rxfw">
					<p class="s1">{{$bottom->title}}</p>
					<p class="s2"><img src="{{$bottom->url}}"></p>
				</div>
			</div>
		</div>
		<div class="copyright1">
			
	    	<p>{{$bottom->content}}</p>
	    </div>
	    @include('web/QQ')

	</body>

	@yield('script')
</html>