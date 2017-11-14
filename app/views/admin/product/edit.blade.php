@extends('admin.template')

@section('content')
<link href="/js/umeditor1.2.3/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<style type="text/css" media="screen">
	.remove{position: absolute;}
	.edit{position: absolute;margin-left:70px;}
</style>
<div class="page-head">
 	<h2>产品管理</h2>
 	<ol class="breadcrumb">
    	<li><a href="#">产品</a></li>
    	<li class="active">产品添加</li>
  	</ol>
</div>

<div class="row page-head">
	<div class="form-horizontal" id="news">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">添加产品</label>
		</div>

		<div class="control-group">
			<label class="control-label">产品名</label>
			<div class="controls">
				<input type="text" class="title" style="width: 640px;" placeholder="填写产品名" value="{{$product['title']}}">
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
			<div class="controls img_box">
			@foreach (explode(',', $product['url']) as $img)
				<div class="fl">
					<span class="btn btn-danger btn-mini remove">移除</span>
					<img src="{{$img}}" width="160" class="img-polaroid">
				</div>
			@endforeach
			</div>
		</div>
		<!-- 富文本编辑 -->
		<div class="control-group">
			<label class="control-label">详情编辑</label>
			<div class="controls">
				<script type="text/plain" id="myEditor" style="width: 800px;height:480px;">
				{{$product['content']}}
				</script>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="add btn btn-primary" value="修改产品">
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

		uploadImage(file[0].files[0], 'products', function (status, data) {
			if (status == 200) {
				var data = JSON.parse(data);
				if (data.status == 1) {
					//修改图片
					$(".img-none").remove();
					$(".img_box").append('<div class="fl">' +
						'<span class="btn btn-danger btn-mini remove">移除</span>' +
						'<img src="' + data.url + '" width="160" class="img-polaroid">' +
						'</div>')
					file.val('');
					// 图片移除
					$(".remove").unbind("click");
					$(".remove").click(function(){
						$(this).parent().remove();
						if (!$(".remove").length) {
							$(".img_box").append('<img src="/web/wu.jpg" width="160" class="img-none">');
						}
						return window.wxc.xcConfirm('所有图片操作将在点击修改之后真正生效', window.wxc.xcConfirm.typeEnum.success);
					});
					return window.wxc.xcConfirm('所有图片操作将在点击修改之后真正生效', window.wxc.xcConfirm.typeEnum.success);
				} else {
					return window.wxc.xcConfirm('上传失败' + data.message, window.wxc.xcConfirm.typeEnum.error);
				}
			} else {
				return window.wxc.xcConfirm('请求失败'+ status, window.wxc.xcConfirm.typeEnum.error);
			}
		});
	});

	$(".remove").click(function(){
		$(this).parent().remove();
		if (!$(".remove").length) {
			$(".img_box").append('<img src="/web/wu.jpg" width="160" class="img-none">');
		}
		return window.wxc.xcConfirm('所有图片操作将在点击修改之后真正生效', window.wxc.xcConfirm.typeEnum.success);
	});


	// 添加新闻

	$('.add').click(function () {
		var data = {};
		data.id = parseInt({{$product['id']}});
		data.title = $(".title").val();
		data.content = $('#myEditor').html();
		data.url = '';
		for (var i=0; i < $(".img-polaroid").length; i++) {
			data.url += $(".img-polaroid:eq(" + i + ")").attr("src") + ',';
		}

		if (!data.title) {
			return window.wxc.xcConfirm('产品名称必填', window.wxc.xcConfirm.typeEnum.error);
		}
		LayerShow('');
		$.post('/admin/productEdit', data, function (data) {
			LayerHide();
			if (data.code == 1) {
				return window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.error);
			} else {
				window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.success);
				setTimeout(function () {
					window.location.href = '/admin/products';
				}, 800);
			}
		}, 'json')

	});

</script>
@stop