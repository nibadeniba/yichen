@extends('admin.template')

@section('content')
<link href="/js/umeditor1.2.3/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<div class="page-head">
 	<h2>新闻管理</h2>
 	<ol class="breadcrumb">
 
    	<li><a href="#">新闻</a></li>
    	<li class="active">新闻编辑</li>
  	</ol>
</div>

<div class="row page-head">
	<div class="form-horizontal" id="news">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">编辑新闻</label>
			<div class="controls">
				
			</div>
		</div>


		<div class="control-group">
			<label class="control-label">标题</label>
			<div class="controls">
				<input type="text" class="news_title" value="{{$news->news_title}}" style="width: 640px;" placeholder="填写标题">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">标题</label>
			<div class="controls">
				<input type="text" class="news_upper_title" value="{{$news->news_upper_title}}" style="width: 640px;" placeholder="填写副标题， 不填则于标题相同">
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
				<img src="{{$news->news_image}}" width="160" height="16" class="img-polaroid">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">浏览量</label>
			<div class="controls">
				<input type="number" value="{{$news->clicks}}" class="clicks" placeholder="" value="0">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">是否显示</label>
			<div class="controls">
				<select class="is_show">
					<option @if ($news->is_show == 1) selected @endif value="1">是</option>
					<option @if ($news->is_show === '0') selected @endif value="0">否</option>
				</select>
			</div>
		</div>


		<!-- 富文本编辑 -->
		<div class="control-group">
			<label class="control-label">详情编辑</label>
			<div class="controls">
				<script type="text/plain" id="myEditor" style="width: 800px;height:480px;">
					{{$news->content->content}}
				</script>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="news_add btn btn-primary" value="保存新闻">
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

		uploadImage(file[0].files[0], 'news', function (status, data) {
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

	$('.news_add').click(function () {

		var news_title = $('.news_title').val();
		var news_upper_title = $('.news_upper_title').val();
		var news_image = $('.img-polaroid').attr('src');
		var clicks = $('.clicks').val();
		var is_show = $('.is_show').find('option:selected').val();
		var content = $('#myEditor').html();
	
		if (isNaN(clicks) || Number(clicks) < 0) {
			return window.wxc.xcConfirm('点击量必须为非负数字', window.wxc.xcConfirm.typeEnum.error);
		}

		if (!news_title) {
			return window.wxc.xcConfirm('标题必填', window.wxc.xcConfirm.typeEnum.error);
		}

		var send_data = {
			news_title : news_title,
			news_upper_title : news_upper_title,
			news_image : news_image,
			clicks : clicks,
			is_show : is_show,
			content : content,
			act : 'update',
			id : '{{$news->id}}',
		};

		var txt= "确定保存新闻?";
		var option = {
			title: "确定保存新闻?",
			btn: parseInt("0011",2),
			onOk: function(){
				LayerShow('');
				$.post('/admin/news/add/data', send_data, function (data) {
					LayerHide();
					if (data.status == 1) {
						window.wxc.xcConfirm(data.message, window.wxc.xcConfirm.typeEnum.success);
						setTimeout(function () {
							window.location.href = '/admin/news';
						}, 800);
					} else {
						return window.wxc.xcConfirm(data.message, window.wxc.xcConfirm.typeEnum.error);
					}

				})
			}
		}

		window.wxc.xcConfirm(txt, "custom", option);

	});

</script>
@stop