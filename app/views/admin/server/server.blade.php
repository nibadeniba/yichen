@extends('admin.template')

@section('content')
<style type="text/css" media="screen">
	.remove{position: absolute;}
</style>
<div class="page-head">
 	<h2>团队管理</h2>
 	<ol class="breadcrumb">
    	<li><a href="#">团队</a></li>
    	<li class="active">团队编辑</li>
  	</ol>
</div>

@foreach ($servers as $item)
<div class="row page-head">
	<div class="form-horizontal" id="news">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">编辑团队1</label>
		</div>

		<div class="control-group">
			<label class="control-label">团队名</label>
			<div class="controls">
				<input type="text" class="title" style="width: 640px;" placeholder="填写团队名" value="{{$item->title}}">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">团队简介</label>
			<div class="controls">
				<input type="text" class="content" style="width: 640px;" placeholder="填写团队简介" value="{{$item->content}}">
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
				<img src="{{$item->url}}" width="160" height="16" class="img-polaroid">
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="add btn btn-primary" value="编辑团队" data-id="{{$item->id}}">
			</div>
		</div>
	</div>
</div>
@endforeach

<div class="row page-head">
	<div class="form-horizontal" id="news">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">服务流程</label>
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
				<img src="{{$pool->url}}" class="img-polaroid">
			</div>
		</div>
		<input class="title" type="hidden">
		<input class="content" type="hidden">
		
		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="add btn btn-primary" value="编辑团队" data-id="{{$pool->id}}">
			</div>
		</div>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript">

	$('.u_btn').click(function () {

		var file = $(this).parents(".page-head").find('.file_upload');
		var img = $(this).parents(".page-head").find('.img-polaroid');

		if (file[0].files.length == 0) {
			return window.wxc.xcConfirm('请选择文件', window.wxc.xcConfirm.typeEnum.error);
		}

		uploadImage(file[0].files[0], 'cases', function (status, data) {
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


	// 编辑新闻

	$('.add').click(function () {
		var data = {};
		data.title = $(this).parents(".page-head").find('.title').val();
		data.content = $(this).parents(".page-head").find('.content').val();
		data.id = $(this).data("id");
		data.url = $(this).parents(".page-head").find('.img-polaroid').attr('src');

		LayerShow('');
		$.post('/admin/server', data, function (data) {
			LayerHide();
			if (data.code == 1) {
				return window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.error);
			} else {
				window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.success);
				setTimeout(function () {
					window.location.href = '/admin/server';
				}, 800);
			}
		}, 'json')

	});

</script>
@stop