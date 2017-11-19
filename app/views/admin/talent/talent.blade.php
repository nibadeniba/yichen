@extends('admin.template')

@section('content')
<div class="page-head">
 	<h2>招聘管理</h2>
 	<ol class="breadcrumb">
 
    	<li><a href="#">岗位</a></li>
    	<li class="active">岗位列表</li>
  	</ol>
</div>

<div class="row page-head">
<!--搜索条件-->
	<form class="form-inline" method="get">
	<div class="control-group fl">

		<select name="is_show" style="width: 120px;">
			<option value="">是否显示</option>
			<option @if ($is_show == 1) selected="selected" @endif value="1">显示</option>
			<option @if ($is_show === '0') selected="selected" @endif value="0">不显示</option>
		</select>
	

		<input type="submit" class="btn btn-primary" value="搜索">
	</div>

	<div class="fr">
		<a class="btn btn-primary" href="/admin/talent/add">添加岗位</a>
	</div>

	</form>
</div>

<table class="table table-striped" >
	<tr>
		<th style="width:50px">#</th>
		<th style="width:100px">岗位名称</th>
		<th style="width:60%">岗位要求</th>
		<th>是否显示</th>
		<th>操作</th>
	</tr>
	
	@foreach ($talent as $item)
	<tr style="line-height: 80px;">
		<td>{{$item->id}}</td>
		<td>{{$item->talent_name}}</td>
		<td>{{$item->requirement}}</td>
		<td>
			@if ($item->is_show)
			显示
			@else
			不显示
			@endif
		</td>
	
		<td>
			<a class="btn btn-primary btn-sm" href="/admin/talent/detail?id={{$item->id}}">编辑岗位</a>
			<span class="btn btn-danger btn-sm del" data-id="{{$item->id}}">删除岗位</span>
		</td>
	</tr>
	@endforeach


</table>
<div class="pagination fr">
{{$talent->links()}}
</div>

@stop

@section('script')
<script type="text/javascript">
	$(".del").click(function(){
		var id = $(this).data("id");
		var txt = "确定删除岗位？";
		var option = {
			title: "确定删除岗位?",
			btn: parseInt("0011",2),
			onOk: function(){
				LayerShow('');
				$.post('/admin/talentDel', {id: id}, function (data) {
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