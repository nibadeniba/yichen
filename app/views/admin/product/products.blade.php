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
				<input type="text" name="title">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-">搜索</button>
			</div>
		</div>
	</form>


	<div class="fr">
		<a class="btn btn-primary" href="/admin/news/add">添加新闻</a>
	</div>
</div>

<table class="table table-striped" >
	<tr>
		<th>#</th>
		<th>新闻标题</th>
		<th>新闻图</th>
		<th>副标题</th>
		<th>点击量</th>
		<th>是否显示</th>
		<th>操作</th>
	</tr>
	


</table>
<div class="pagination fr">
{{$products->links()}}
</div>

@stop