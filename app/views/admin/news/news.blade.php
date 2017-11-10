@extends('admin.template')

@section('content')
<div class="page-head">
 	<h2>新闻管理</h2>
 	<ol class="breadcrumb">
 
    	<li><a href="#">新闻</a></li>
    	<li class="active">新闻列表</li>
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
		<a class="btn btn-primary" href="/admin/news/add">添加新闻</a>
	</div>

	</form>
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
	
	@foreach ($news as $item)
	<tr style="line-height: 80px;">
		<td>{{$item->id}}</td>
		<td>{{$item->news_title}}</td>
		<td><img src="{{$item->news_image}}" width="50" height="50"></td>
		<td>{{$item->news_upper_title}}</td>
		<td>{{$item->clicks}}</td>
		<td>
			@if ($item->is_show)
			显示
			@else
			不显示
			@endif
		</td>
	
		<td>
			<a class="btn btn-primary btn-sm" href="/admin/news/detail?id={{$item->id}}">编辑新闻</a>
		</td>
	</tr>
	@endforeach


</table>
<div class="pagination fr">
{{$news->links()}}
</div>

@stop