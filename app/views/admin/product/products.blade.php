@extends('admin.template')

@section('content')
<div class="page-head">
 	<h2>产品管理</h2>
 	<ol class="breadcrumb">
 
    	<li><a href="#">产品</a></li>
    	<li class="active">产品列表</li>
  	</ol>
</div>

<div class="row page-head">
<!--搜索条件-->
	<form class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputEmail">产品名</label>
			<div class="controls">
				<input type="text" name="title" value="{{$title}}">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary">搜索</button>
			</div>
		</div>
	</form>


	<div class="fr">
		<a class="btn btn-primary" href="/admin/productAdd">添加产品</a>
	</div>
</div>

<table class="table table-striped" >
	<tr>
		<th>#</th>
		<th>产品名</th>
		<th>产品图片</th>
		<th>产品介绍</th>
		<th>操作</th>
	</tr>
	@foreach ($products as $item)
	<tr style="line-height: 80px;">
		<td>{{$item->id}}</td>
		<td width="100">{{$item->title}}</td>
		<td width="350">
		@foreach (explode(',', $item['url']) as $img)
			<img src="{{$img}}" width="100px">
		@endforeach
		</td>
		<td>{{$item->content}}</td>
		<td width="200">
			<a class="btn btn-primary btn-sm" href="/admin/productEdit?id={{$item->id}}">编辑产品</a>
			<span class="btn btn-danger btn-sm del" data-id="{{$item->id}}">删除产品</span>
		</td>
	</tr>
	@endforeach


</table>
<div class="pagination fr">
{{$products->links()}}
</div>

@stop

@section('script')
<script type="text/javascript">
	$(".del").click(function(){
		var id = $(this).data("id");
		var txt = "确定删除产品？";
		var option = {
			title: "确定删除产品?",
			btn: parseInt("0011",2),
			onOk: function(){
				LayerShow('');
				$.post('/admin/productDel', {id: id}, function (data) {
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