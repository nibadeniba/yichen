@extends('admin.template')

@section('content')
<link href="/js/umeditor1.2.3/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<div class="page-head">
 	<h2>岗位管理</h2>
 	<ol class="breadcrumb">
 
    	<li><a href="#">岗位</a></li>
    	<li class="active">岗位添加</li>
  	</ol>
</div>

<div class="row page-head">
	<div class="form-horizontal" id="talent">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">添加岗位</label>
			<div class="controls">
				
			</div>
		</div>


		<div class="control-group">
			<label class="control-label">岗位名称</label>
			<div class="controls">
				<input type="text" class="talent_name" value="" style="width: 640px;" placeholder="请填写岗位名称">
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">岗位要求</label>
			<div class="controls">
				<textarea class="requirement" value="" style="width: 640px;" placeholder="请填写岗位要求">
				
				</textarea>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">是否显示</label>
			<div class="controls">
				<select class="is_show">
					<option value="1">是</option>
					<option value="0">否</option>
				</select>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="talent_add btn btn-primary" value="添加岗位">
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


	// 添加岗位

	$('.talent_add').click(function () {

		var talent_name = $('.talent_name').val();
		var requirement = $('.requirement').val();
		var is_show = $('.is_show').find('option:selected').val();
	

		if (!talent_name) {
			return window.wxc.xcConfirm('岗位名称必填', window.wxc.xcConfirm.typeEnum.error);
		}

		var send_data = {
			talent_name : talent_name,
			requirement : requirement,
			is_show : is_show,
			act : 'update',
		};

		var txt= "确定添加岗位?";
		var option = {
			title: "确定添加岗位?",
			btn: parseInt("0011",2),
			onOk: function(){
				LayerShow('');
				$.post('/admin/talent/add/data', send_data, function (data) {
					LayerHide();
					if (data.status == 1) {
						window.wxc.xcConfirm(data.message, window.wxc.xcConfirm.typeEnum.success);
						setTimeout(function () {
							window.location.href = '/admin/talent';
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