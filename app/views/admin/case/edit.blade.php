@extends('admin.template')

@section('content')
<style type="text/css" media="screen">
	.remove{position: absolute;}
</style>
<div class="page-head">
 	<h2>案例管理</h2>
 	<ol class="breadcrumb">
    	<li><a href="#">案例</a></li>
    	<li class="active">案例修改</li>
  	</ol>
</div>

<div class="row page-head">
	<div class="form-horizontal" id="news">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">修改案例</label>
		</div>

		<div class="control-group">
			<label class="control-label">案例名</label>
			<div class="controls">
				<input type="text" class="name" style="width: 640px;" placeholder="填写案例名" value="{{$case->name}}">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputEmail">所属产品</label>
			<div class="controls">
				<select name="product_id" class="product_id" style="width: 120px;">
					<option value="">请选择</option>
				@foreach ($products as $item)
					<option  @if ($case['product_id'] == $item['id']) selected="selected" @endif value="{{$item['id']}}">{{$item['title']}}</option>
				@endforeach
				</select>
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
			<div class="controls">
				<img src="{{$case['img']}}" width="160" height="16" class="img-polaroid">
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="add btn btn-primary" value="修改案例">
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


	// 添加新闻

	$('.add').click(function () {
		var data = {};
		data.id = {{$case->id}}
		data.name = $(".name").val();
		data.product_id = $(".product_id").val();
		data.img = $('.img-polaroid').attr('src');

		if (!data.name) {
			return window.wxc.xcConfirm('案例名称必填', window.wxc.xcConfirm.typeEnum.error);
		}
		LayerShow('');
		$.post('/admin/caseEdit', data, function (data) {
			LayerHide();
			if (data.code == 1) {
				return window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.error);
			} else {
				window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.success);
				setTimeout(function () {
					window.location.href = '/admin/cases';
				}, 800);
			}
		}, 'json')

	});

</script>
@stop