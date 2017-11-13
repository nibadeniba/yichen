@extends('admin.template')

@section('content')
<style>
	.del{position:absolute;margin-top:10px;margin-left:190px;cursor:pointer;}
	.edit{position:absolute;margin-top:13px;margin-left:150px;cursor:pointer;}
	.box{border:1px solid #999;}
	.img_box{width:220px;height:220px;line-height:220px;}
</style>
<div class="page-head">
 	<h2>首页图片管理</h2>
 	<ol class="breadcrumb">
    	<li><a href="#">首页</a></li>
    	<li class="active">图片列表</li>
  	</ol>
</div>
<div class="row">
@foreach ($imgs as $img)
	<div class="span3 box">
		<div class="del" data-id="{{$img->id}}"><img src="/images/trash.png" width="20px"/></div>
		<div class="edit" data-id="{{$img->id}}" data-toggle="modal" href="#myModal"><img src="/images/edit.png" width="20px"/></div>
		<div class="img_box"><img src="{{$img->url}}" width="100%"/></div>
	</div>
@endforeach
	<div class="span3">
		<a class="add" data-toggle="modal" href="#myModal"><img src="/web/images/timg.jpg" width="100%" title="点击添加图片"/></a>
	</div>
</div>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">图片上传</h3>
	</div>
	<div class="modal-body">
		<p>
			<form class="upload_from" enctype="multipart/form-data">
				<input type="file" name="img" class="file_upload">
				<input type="button" value="上传" class="btn btn-info u_btn">
			</form>
			<div class="controls">
				<input id="edit_id" hidden="hidden">
				<img src="/web/wu.jpg" width="160" height="16" class="img-polaroid">
			</div>
		</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
		<button class="btn btn-primary" id="save">确定上传</button>
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

		uploadImage(file[0].files[0], 'index', function (status, data) {
			if (status == 200) {
				var data = JSON.parse(data);
				if (data.status == 1) {
					//修改图片
					img.attr('src', data.url);
					file.val('');
					var id = $("#edit_id").val();
					if(id){
						var url = "/admin/indexImgEdit"
					}else{
						var url = "/admin/indexImgAdd";
					}
					$("#save").click(function(){
						$.post(url, {url: data.url, id: id}, function(msg){
							if(msg.code){
								return window.wxc.xcConfirm('上传失败', window.wxc.xcConfirm.typeEnum.error);
							}else{
								location.reload();
							}
						}, 'json');
					});
				} else {
					return window.wxc.xcConfirm('上传失败' + data.message, window.wxc.xcConfirm.typeEnum.error);
				}
			} else {
				return window.wxc.xcConfirm('请求失败'+ status, window.wxc.xcConfirm.typeEnum.error);
			}
		});
	});
	$(".del").click(function(){
		var id = $(this).data("id");
		var txt= "确定删除图片?";
		var option = {
			title: "确定删除图片?",
			btn: parseInt("0011",2),
			onOk: function(){
				LayerShow('');
				$.post('/admin/indexImgDel',{id: id}, function (msg) {
					if(msg.code){
						return window.wxc.xcConfirm('删除失败', window.wxc.xcConfirm.typeEnum.error);
					}else{
						location.reload();
					}
				}, 'json');
			}
		}
		window.wxc.xcConfirm(txt, "custom", option);
	});

	var id = 0;
	$(".edit").click(function(){
		$("#edit_id").val($(this).data("id"));
	});

	$(".add").click(function(){
		$("#edit_id").val("");
	})
</script>
@stop