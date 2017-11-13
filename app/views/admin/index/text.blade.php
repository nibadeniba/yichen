@extends('admin.template')

@section('content')
<link href="/js/umeditor1.2.3/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<div class="page-head">
 	<h2>底部简介管理</h2>
 	<ol class="breadcrumb">
    	<li><a href="#">首页</a></li>
    	<li class="active">简介编辑</li>
  	</ol>
</div>

<div class="row page-head">
	<div class="form-horizontal" id="news">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">编辑简介</label>
		</div>

		<div class="control-group">
			<label class="control-label">标题</label>
			<div class="controls">
				<input type="text" class="title" style="width: 640px;" placeholder="填写标题" value="{{$text->title}}">
			</div>
		</div>

		<!-- 富文本编辑 -->
		<div class="control-group">
			<label class="control-label">简介编辑</label>
			<div class="controls">
				<script type="text/plain" id="myEditor" style="width: 800px;height:480px;">{{$text->content}}</script>	
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="card_edit btn btn-primary" value="修改简介">
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

	var id = {{$text->id}};

	$('.card_edit').click(function () {
		var data = {};
		data.id = id;
		data.title = $(".title").val();
		data.content = $('#myEditor').html();

		$.post('/admin/indexText', data, function (msg) {
			if (msg.code) {
				return window.wxc.xcConfirm(msg.msg, window.wxc.xcConfirm.typeEnum.error);
			} else {
				window.wxc.xcConfirm(msg.msg, window.wxc.xcConfirm.typeEnum.success);
				setTimeout(function () {
					window.location.href = '/admin/indexText';
				}, 800);
			}
		}, 'json');
	});
</script>
@stop