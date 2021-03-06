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

		<div class="control-group">
			<label class="control-label">底部左侧显示文字</label>
			<div class="controls">
				<input type="text" id="bottom_title" style="width: 640px;" value="{{$bottom['title']}}">
			</div>
		</div>

		<!-- 富文本编辑 -->
		<div class="control-group">
			<label class="control-label">底部编辑</label>
			<div class="controls">
				<input type="text" id="bottom_content" style="width: 640px;" value="{{$bottom['content']}}">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">底部联系图片</label>
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
				<img src="{{$bottom['url']}}" id="url"  class="img-polaroid">
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
		data.id = {{$bottom->id}}
		data.content = $('#bottom_content').val();
		data.title = $('#bottom_title').val();
		data.url = $('#url').attr('src');

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