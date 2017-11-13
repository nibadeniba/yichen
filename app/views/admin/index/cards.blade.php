@extends('admin.template')

@section('content')
<div class="page-head">
 	<h2>底部卡片管理</h2>
 	<ol class="breadcrumb">
    	<li><a href="#">首页</a></li>
    	<li class="active">卡片列表</li>
  	</ol>
</div>

<!-- <div class="row page-head">
	<div class="fr">
		<a class="btn btn-primary" href="/admin/indexCardAdd">添加卡片</a>
	</div>
</div> -->

<table class="table table-striped" >
	<tr>
		<th>#</th>
		<th>卡片标题</th>
		<th>卡片图片</th>
		<th>卡片内容</th>
		<th>操作</th>
	</tr>
	
	@foreach ($cards as $card)
	<tr style="line-height: 80px;">
		<td>{{$card->id}}</td>
		<td>{{$card->title}}</td>
		<td><img src="{{$card->url}}" width="150"></td>
		<td>{{$card->content}}</td>
		<td>
			<a class="btn btn-primary btn-sm" href="/admin/indexCardEdit?id={{$card->id}}">编辑卡片</a>
			<!-- <br/>
			<br/>
			<a class="btn btn-danger btn-sm" href="/admin/news/detail?id={{$card->id}}">删除卡片</a> -->
		</td>
	</tr>
	@endforeach


</table>

@stop