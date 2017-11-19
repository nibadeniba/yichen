<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>微享，不只是朋友圈中的分享</title>
		<meta name="keywords" content="微信商城，网站制作" />
		<meta name="description" content="微享，不只是朋友圈中的分享" />
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

		<div class="copyright1">
			<?php $bottom = CMS::where("cate", "bottom")->first();?>
	    	<p>{{$bottom->content}}</p>
	    </div>

	    @include('web/QQ')

	</body>

	@yield('script')
</html>