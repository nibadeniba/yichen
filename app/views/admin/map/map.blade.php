@extends('admin.template')

@section('content')
<style type="text/css" media="screen">
	.remove{position: absolute;}
</style>
<div class="page-head">
 	<h2>联系我们管理</h2>
 	<ol class="breadcrumb">
    	<li><a href="#">联系我们</a></li>
    	<li class="active">联系我们修改</li>
  	</ol>
</div>

<div class="row page-head">
	<div class="form-horizontal" id="news">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">修改联系我们</label>
		</div>

		<div class="control-group">
			<label class="control-label">介绍文字</label>
			<div class="controls">
				<input type="text" class="title" style="width: 640px;" placeholder="填写介绍文字" value="{{$map['title']}}">
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
			<label class="control-label">地图</label>
			<div class="controls img_box">
				<img src="{{$map->url}}" width="160" class="img-polaroid">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="add btn btn-primary" value="修改地图联系">
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

		uploadImage(file[0].files[0], 'map', function (status, data) {
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
	// 添加新闻

	$('.add').click(function () {
		var data = {};
		data.id = {{$map->id}}
		data.title = $(".title").val();
		data.url = $('.img-polaroid').attr("src");

		if (!data.url) {
			return window.wxc.xcConfirm('地图必填', window.wxc.xcConfirm.typeEnum.error);
		}
		LayerShow('');
		$.post('/admin/map', data, function (data) {
			LayerHide();
			if (data.code == 1) {
				return window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.error);
			} else {
				window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.success);
				setTimeout(function () {
					window.location.href = '/admin/map';
				}, 800);
			}
		}, 'json')

	});

</script>
@stop