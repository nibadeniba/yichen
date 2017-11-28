@extends('web.template')

@section('content')
    <div class="newbg" style="background: url(/web/images/bg5.jpg) 50% no-repeat">
        <div class="logo">
            <img src="/web/images/logo.png">
        </div>
	    <div class="container animated bounceInUp">
	    	<h2>新闻资讯</h2>
	    	<p></p>
	    </div>
    </div>
    <div class="detail mt">
    	<div class="container" style="min-height: 380px;">
    		<div class="row">
    			<div class="col-lg-12 col-xs-12">
	    			<h2>{{$news->news_title}}</h2>
                    <div style="text-align: center">日期：{{$news->created_at}}, 浏览量：{{$news->clicks}}</div>
	    			<div style="margin-top: 16px;">
                        {{$news->content->content}}
                    </div>
    			</div>
    			
    		</div>
    		<div class="row mt">
                <div class="col-lg-4 col-xs-4" ><a href="javascript:history.go(-1)">返回</a></div>
    		</div>
    	</div>
    </div>
@stop