@extends('admin.template')

@section('content')
<link href="/js/umeditor1.2.3/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">

<style type="text/css" media="screen">
	.remove{position: absolute;}
</style>
<div class="page-head">
 	<h2>网页底部管理</h2>
 	<ol class="breadcrumb">
    	<li><a href="#">网页底部</a></li>
    	<li class="active">网页底部修改</li>
  	</ol>
</div>

<div class="row page-head">
	<div class="form-horizontal" id="news">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">修改网页底部</label>
		</div>

		<!-- 富文本编辑 -->
		<div class="control-group">
			<label class="control-label">底部编辑</label>
			<div class="controls">
				<script type="text/plain" id="myEditor" style="width: 800px;height:480px;">
				{{$bottom['content']}}
				</script>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="add btn btn-primary" value="修改底部">
			</div>
		</div>


	</div>
</div>
@stop

@section('script')
<script type="text/javascript" src="/js/umeditor1.2.3/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/js/umeditor1.2.3/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/js/umeditor1.2.3/umeditor.min.js"></script>
<script type="text/javascript" src="/js/umeditor1.2.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
	var um = UM.getEditor('myEditor');

	// 添加新闻

	$('.add').click(function () {
		var data = {};
		data.id = {{$bottom->id}}
		data.content = $('#myEditor').html();

		if (!data.content) {
			return window.wxc.xcConfirm('底部内容必填', window.wxc.xcConfirm.typeEnum.error);
		}
		LayerShow('');
		$.post('/admin/bottom', data, function (data) {
			LayerHide();
			if (data.code == 1) {
				return window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.error);
			} else {
				window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.success);
				setTimeout(function () {
					window.location.href = '/admin/bottom';
				}, 800);
			}
		}, 'json')

	});

</script>
@stop