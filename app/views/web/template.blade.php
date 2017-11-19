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
	</head>
	<body>

		@include('web/nav')

		@yield('content')
		<?php $bottom = CMS::where("cate", "bottom")->first();?>
		<div class="main5 mt">
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
	    </div>

	    @include('web/QQ')

	</body>

	@yield('script')
</html>