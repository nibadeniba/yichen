@extends('admin.template')

@section('content')
<div class="page-head">
 	<h2>案例管理</h2>
 	<ol class="breadcrumb">
 
    	<li><a href="#">案例</a></li>
    	<li class="active">案例列表</li>
  	</ol>
</div>

<div class="row page-head">
<!--搜索条件-->
	<form class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputEmail">产品名</label>
			<div class="controls">
				<select name="product_id" style="width: 120px;">
					<option value="">请选择</option>
				@foreach ($products as $item)
					<option @if ($product_id == $item['id']) selected="selected" @endif value="{{$item['id']}}">{{$item['title']}}</option>
				@endforeach
				</select>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary">搜索</button>
			</div>
		</div>
	</form>

	<div class="fr">
		<a class="btn btn-primary" href="/admin/caseAdd">添加案例</a>
	</div>
</div>

<table class="table table-striped" >
	<tr>
		<th>#</th>
		<th>案例名称</th>
		<th>案例图片</th>
		<th>所属产品</th>
		<th>操作</th>
	</tr>
	@foreach ($cases as $item)
	<tr style="line-height: 80px;">
		<td>{{$item->id}}</td>
		<td>{{$item->name}}</td>
		<td>
			<img src="{{$item->img}}" width="100px">
		</td>
		<td>{{$item->title}}</td>
		<td>
			<a class="btn btn-primary btn-sm" href="/admin/caseEdit?id={{$item->id}}">编辑案例</a>
			<span class="btn btn-danger btn-sm del" data-id="{{$item->id}}">删除案例</span>
		</td>
	</tr>
	@endforeach


</table>
<div class="pagination fr">
{{$cases->links()}}
</div>

@stop

@section('script')
<script type="text/javascript">
	$(".del").click(function(){
		var id = $(this).data("id");
		var txt = "确定删除案例？";
		var option = {
			title: "确定删除案例?",
			btn: parseInt("0011",2),
			onOk: function(){
				LayerShow('');
				$.post('/admin/caseDel', {id: id}, function (data) {
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