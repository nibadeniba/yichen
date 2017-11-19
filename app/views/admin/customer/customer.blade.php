@extends('admin.template')

@section('content')
<div class="page-head">
 	<h2>招聘管理</h2>
 	<ol class="breadcrumb">
 
    	<li><a href="#">客户</a></li>
    	<li class="active">客户列表</li>
  	</ol>
</div>

<div class="row page-head">
<!--搜索条件-->
	<form class="form-inline" method="get">
	<div class="control-group fl">

		<select name="customer_type" style="width: 120px;">
			<option value="">请选择客户类型</option>
			<option @if ($customer_type == 1) selected="selected" @endif value="1">地产企业</option>
			<option @if ($customer_type == 2) selected="selected" @endif value="2">酒店管理公司</option>
			<option @if ($customer_type == 3) selected="selected" @endif value="3">设计公司</option>
		</select>
	

		<input type="submit" class="btn btn-primary" value="搜索">
	</div>

	<div class="fr">
		<a class="btn btn-primary" href="/admin/customer/add">添加客户</a>
	</div>

	</form>
</div>

<table class="table table-striped" >
	<tr>
		<th style="width:200px">#</th>
		<th style="width:200px">客户名称</th>
		<th style="">类型</th>
		<th>操作</th>
	</tr>
	
	@foreach ($customer as $item)
	<tr style="line-height: 80px;">
		<td>{{$item->id}}</td>
		<td>{{$item->customer_name}}</td>
		<td>
			@if ($item->customer_type == 1)
			地产企业
			@elseif($item->customer_type == 2)
			酒店管理公司
			@else ($item->customer_type == 3)
			设计公司
			@endif
		</td>
		<td>
			<a class="btn btn-primary btn-sm" href="/admin/customer/detail?id={{$item->id}}">编辑客户</a>
			<span class="btn btn-danger btn-sm del" data-id="{{$item->id}}">删除客户</span>
		</td>
	</tr>
	@endforeach


</table>
<div class="pagination fr">
{{$customer->links()}}
</div>

@stop

@section('script')
<script type="text/javascript">
	$(".del").click(function(){
		var id = $(this).data("id");
		var txt = "确定删除客户？";
		var option = {
			title: "确定删除客户?",
			btn: parseInt("0011",2),
			onOk: function(){
				LayerShow('');
				$.post('/admin/customerDel', {id: id}, function (data) {
					LayerHide();
					if (data.code) {
						return window.wxc.xcConfirm(data.msg, window.wxc.xcConfirm.typeEnum.error);
					} else {
						window.wxc.xcConfirm("删除成功", window.wxc.xcConfirm.typeEnum.success);
						setTimeout(function () {
							location.reload();
						}, 800);
						
					}

				}, 'json')
			}
		}

		window.wxc.xcConfirm(txt, "custom", option);
	});
</script>

@stop