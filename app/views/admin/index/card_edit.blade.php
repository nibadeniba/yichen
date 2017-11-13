@extends('admin.template')

@section('content')
<link href="/js/umeditor1.2.3/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<div class="page-head">
 	<h2>底部卡片管理</h2>
 	<ol class="breadcrumb">
    	<li><a href="#">首页</a></li>
    	<li class="active">卡片编辑</li>
  	</ol>
</div>

<div class="row page-head">
	<div class="form-horizontal" id="news">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">编辑卡片</label>
		</div>

		<div class="control-group">
			<label class="control-label">标题</label>
			<div class="controls">
				<input type="text" class="title" style="width: 640px;" placeholder="填写标题" value="{{$card->title}}">
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">图片上传</label>
			<div class="controls">
				<form class="upload_from" enctype="multipart/form-data">
					<input type="file" name="img" class="file_upload">
					<input type="button" value="上传" class="btn btn-info u_btn">
				</form>
				
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">图片</label>
			<div class="controls">
				<img src="{{$card->url}}" width="160" height="16" class="img-polaroid">
			</div>
		</div>
		<!-- 富文本编辑 -->
		<div class="control-group">
			<label class="control-label">详情编辑</label>
			<div class="controls">
				<script type="text/plain" id="myEditor" style="width: 800px;height:480px;">{{$card->content}}</script>	
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="card_edit btn btn-primary" value="修改卡片">
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

	$('.u_btn').click(function () {

		var file = $('.file_upload')
		var img = $('.img-polaroid');

		if (file[0].files.length == 0) {
			return window.wxc.xcConfirm('请选择文件', window.wxc.xcConfirm.typeEnum.error);
		}

		uploadImage(file[0].files[0], 'index', function (status, data) {
			if (status == 200) {
				var data = JSON.parse(data);
				if (data.status == 1) {
					//修改图片
					img.attr('src', data.url);
					file.val('');

				} else {
					return window.wxc.xcConfirm('上传失败' + data.message, window.wxc.xcConfirm.typeEnum.error);
				}
			} else {
				return window.wxc.xcConfirm('请求失败'+ status, window.wxc.xcConfirm.typeEnum.error);
			}
		});
	});

	var id = {{$card->id}};

	$('.card_edit').click(function () {
		var data = {};
		data.id = id;
		data.title = $('.title').val();
		data.url = $('.img-polaroid').attr('src');
		data.content = $('#myEditor').html();

		if (!data.title) {
			return window.wxc.xcConfirm('标题必填', window.wxc.xcConfirm.typeEnum.error);
		}

		if (!data.url) {
			return window.wxc.xcConfirm('请上传图片', window.wxc.xcConfirm.typeEnum.error);
		}

		$.post('/admin/indexCardEdit', data, function (msg) {
			if (msg.code) {
				return window.wxc.xcConfirm(msg.msg, window.wxc.xcConfirm.typeEnum.error);
			} else {
				window.wxc.xcConfirm(msg.msg, window.wxc.xcConfirm.typeEnum.success);
				setTimeout(function () {
					window.location.href = '/admin/indexCard';
				}, 800);
			}
		}, 'json');
	});
</script>
@stop