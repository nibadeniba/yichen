@extends('web.template')

@section('content')
    <div class="newbg">
	    <div class="container animated bounceInUp">
	    	<h2>新闻资讯</h2>
	    </div>
    </div>

    <div class="newlist" style="min-height: 350px;">
    	<div class="container">
    		@foreach ($news as $item)
    		<div class="new">
    			<a href="/news/detail?id={{$item->id}}">
	    			<div class="col-lg-2 col-xs-3 shijian" style="width: 190px; height: 150px; @if ($item->news_image) background: url({{$item->news_image}}); background-size: cover; @endif"  >
	    				
	    			</div>
	    			<div class="col-lg-10 col-xs-9">
	    				<h2 class="title">{{$item->news_title}}</h2>
	    				<p class="text">{{$item->news_upper_title}}</p>
	    			    <p class="num">浏览次数：{{$item->clicks}}</p>
	    			</div>
    			</a>
    		</div>
    		@endforeach
    	</div>
    </div>
    <nav class="pages">
		{{$news->links()}}
	</nav>
@stop