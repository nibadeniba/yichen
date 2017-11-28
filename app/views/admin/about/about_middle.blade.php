@extends('admin.template')

@section('content')
<style type="text/css" media="screen">
	.remove{position: absolute;}
</style>
<div class="page-head">
 	<h2>荣誉墙管理</h2>
 	<ol class="breadcrumb">
    	<li><a href="#">荣誉墙</a></li>
    	<li class="active">荣誉墙添加</li>
  	</ol>
</div>

<div class="row page-head">
	<div class="form-horizontal" id="news">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">添加荣誉墙</label>
		</div>

		<div class="control-group">
			<label class="control-label">荣誉墙名</label>
			<div class="controls">
				<input type="text" class="title" style="width: 640px;" placeholder="填写荣誉墙名" value="{{$middle['title']}}">
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">图片上传</label>
			<div class="controls">
				<form class="upload_from" enctype="multipart/form-data">
					<input type="file" name="img" class="file_upload">
					<input type="button" value="上传" class="btn btn-info u_btn">
					<span style="color: red">160 * 160 效果最佳 不传图片为一张蓝底背景图</span>
				</form>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">图片</label>
			<div class="controls img_box">
			@foreach (explode(',', $middle['url']) as $img)
				<div class="fl">
					<span class="btn btn-danger btn-mini remove">移除</span>
					<img src="{{$img}}" width="160" class="img-polaroid">
				</div>
			@endforeach
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="add btn btn-primary" value="添加荣誉墙">
			</div>
		</div>


	</div>
</div>
@stop

@section('script')
<script type="text/javascript">

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
		data.id = {{$middle['id']}};
		data.title = $(".title").val();
		data.url = '';
		for (var i=0; i < $(".img-polaroid").length; i++) {
			data.url += $(".img-polaroid:eq(" + i + ")").attr("src") + ',';
		}

		if (!data.title) {
			return window.wxc.xcConfirm('荣誉墙名称必填', window.wxc.xcConfirm.typeEnum.error);
		}
		LayerShow('');
		$.post('/admin/aboutMiddle', data, function (data) {
			LayerHide();
			if (data.code == 1) {
				return window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.error);
			} else {
				window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.success);
				setTimeout(function () {
					window.location.href = '/admin/aboutMiddle';
				}, 800);
			}
		}, 'json')

	});

</script>
@stop