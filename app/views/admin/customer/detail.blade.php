@extends('admin.template')

@section('content')
<link href="/js/umeditor1.2.3/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<div class="page-head">
 	<h2>客户管理</h2>
 	<ol class="breadcrumb">
 
    	<li><a href="#">客户</a></li>
    	<li class="active">客户编辑</li>
  	</ol>
</div>

<div class="row page-head">
	<div class="form-horizontal" id="customer">
		<div class="control-group">
			<label class="control-label order_num" style="font-size: 20px;">编辑客户</label>
			<div class="controls">
				
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">客户名称</label>
			<div class="controls">
				<input type="text" class="customer_name" value="{{$customer->customer_name}}" style="width: 640px;" placeholder="请填写客户名称">
			</div>
		</div>
		

		<div class="control-group">
			<label class="control-label">客户类型</label>
			<div class="controls">
				<select class="customer_type">
					<option @if ($customer->customer_type == '1') selected @endif value="1">地产企业</option>
					<option @if ($customer->customer_type == '2') selected @endif value="2">酒店管理公司</option>
					<option @if ($customer->customer_type == '3') selected @endif value="3">设计公司</option>
				</select>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for=""></label>
			<div class="controls">
				<input type="button" class="customer_add btn btn-primary" value="保存客户  ">
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

	// 添加客户

	$('.customer_add').click(function () {

		var customer_name = $('.customer_name').val();
		var customer_type = $('.customer_type').find('option:selected').val();
	

		if (!customer_name) {
			return window.wxc.xcConfirm('客户名称必填', window.wxc.xcConfirm.typeEnum.error);
		}

		var send_data = {
			customer_name : customer_name,
			customer_type : customer_type,
			act : 'update',
			id : '{{$customer->id}}',
		};

		var txt= "确定保存客户?";
		var option = {
			title: "确定保存客户?",
			btn: parseInt("0011",2),
			onOk: function(){
				LayerShow('');
				$.post('/admin/customer/add/data', send_data, function (data) {
					LayerHide();
					if (data.status == 1) {
						window.wxc.xcConfirm(data.message, window.wxc.xcConfirm.typeEnum.success);
						setTimeout(function () {
							window.location.href = '/admin/customer';
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